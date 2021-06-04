@extends('layouts/app')

@section('title' , 'History ')


@section('container')
@role('user')
<div class="container">

    <div class="row">
        <div class="col">
                <h1 class="mt-3"> History </h1>
                <table class="table table-borderless table-striped">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Hasil</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $h )
                        <tr>
                            <th scope="row"> {{ $loop->index+1 }} </th>
                            <td> {{ $h->waktu_tes }} </td>
                            <td> {{ $h->jawaban }} </td>
                            <td> <a href="/hasil/{{ $h->id }}" class="btn btn-success"> Detail </a>   </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</div>

@endrole

@role('admin')
<div>
    anda adalah admin
</div>
@endrole
@endsection