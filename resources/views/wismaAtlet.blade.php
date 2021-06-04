@extends('layouts/app')

@section('title' , 'Wisma Atlet')

@section('container')
<div class="container">
    <div class="row">
      <div class="col">
          <h1 class="mt-3 text-center"> Daftar Wisma Atlet </h1>
          <div class="text-left">
            @role('admin')
            <a href="tambahwismaatlet" class="btn btn-primary" type="submit">tambah</a>
            <br><br>
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
                @foreach ($wisma_atlet as $wisma )  
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $wisma->name }}</td>
                <td>{{ $wisma->alamat }}</td>
                <td>{{ $wisma->no_telepon }}</td>
                <td>{{ $wisma->email }}</td>
                @role('admin')
                <td>
                  <a href="wisma-atlet/{{ $wisma->id }}/editwismaatlet" class="btn btn-success"> Edit </a> 
                  <form action="/wisma-atlet/{{ $wisma->id }}" method="POST" class="d-inline" >
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