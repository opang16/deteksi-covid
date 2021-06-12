@extends('layouts/app')

@section('title' , 'Hotel')

@section('container')
<div class="container">
    <div class="row">
      <div class="col">
          <h1 class="text-center" style="margin-top: 80px"> Daftar Hotel  </h1>
          <div class="text-left">
            @role('admin')
            <a href="tambahhotel" class="btn btn-primary" type="submit">tambah</a>
            <br> <br>
            @endrole
            @if (session('status'))
          <div class="alert alert-success">
             {{ session('status') }}
            </div>
            @endif
            @if (session('delete'))
          <div class="alert alert-danger">
             {{ session('delete') }}
            </div>
            @endif
        </div>
          <table class="table table-borderless table-striped">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Email</th>
                @role('admin')
                <th scope="col">Aksi</th>
                @endrole
              </tr>
            </thead>
            <tbody>
                @foreach ($hotel as $htl )  
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $htl->name }}</td>
                <td>{{ $htl->alamat }}</td>
                <td>{{ $htl->no_telepon }}</td>
                <td>{{ $htl->email }}</td>
                @role('admin')
                <td>
                  <a href="hotel/{{ $htl->id }}/edithotel" class="btn btn-success"> Edit </a> 
                  <form action="/hotel/{{ $htl->id }}" method="POST" class="d-inline" >
                    @method('delete')
                    @csrf
                  <button type="submit" class="btn btn-danger"> delete </button>
                  </form>
                 </td>
                @endrole
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
</div>
  @endsection