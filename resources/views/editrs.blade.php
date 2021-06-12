@extends('layouts/app')

@section('title' , 'Ubah Data Rumah Sakit')

@section('container')
<br><br><br>
<div class="container">
<h1 class="mt-1"> Form Ubah Data Rumah Sakit  </h1>
<form action="/rumah-sakit/{{ $id->id }}" method="POST">
    @method('patch')
        @csrf
    <div class="form-group">
      <label for="name" class="form-label">Name </label>
      <input type="text" class="form-control @error('name') is-invalid 
      @enderror" id="name" placeholder="Masukan Nama Rumah Sakit" name="name" value="{{ $id->name }}">
      @error('name')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label for="alamat" class="form-label">Alamat </label>
        <input type="text" class="form-control @error('alamat') is-invalid 
        @enderror" id="alamat" placeholder="Masukan Alamat Rumah Sakit" name="alamat" value="{{ $id->alamat  }}">
      @error('alamat')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="no_telepon" class="form-label">No Telepon </label>
        <input type="text" class="form-control" id="no_telepon" placeholder="Masukan No Telepon Rumah Sakit" 
        name="no_telepon" value="{{ $id->no_telepon  }}">
        
      </div>
    <div class="form-group">
        <label for="email" class="form-label">Email </label>
        <input type="text" class="form-control" id="email" placeholder="Masukan Email Rumah Sakit" name="email" value="{{ $id->email  }}">
    </div>
      <button class="btn btn-primary" type="submit"> Ubah Data </button>
        
  </form>
  <div>
  @endsection