@extends('layouts/app')

@section('title' , 'Tambah Daftar Wisma Atlet')
@section('container')
<div class="container">
<h1 class="mt-1"> Form Tambah Data Wisma Atlet  </h1>
<form action="wisma-atlet" method="POST">
    
        @csrf
    <div class="form-group">
      <label for="name" class="form-label">Name </label>
      <input type="text" class="form-control @error('name') is-invalid 
      @enderror" id="name" placeholder="Masukan Nama Wisma Atlet" name="name" value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label for="alamat" class="form-label">Alamat </label>
        <input type="text" class="form-control @error('alamat') is-invalid 
        @enderror" id="alamat" placeholder="Masukan Alamat Wisma Atlet" name="alamat" value="{{ old('alamat') }}">
      @error('alamat')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="no_telepon" class="form-label">No Telepon </label>
        <input type="text" class="form-control" id="no_telepon" placeholder="Masukan No Telepon Wisma Atlet" 
        name="no_telepon" value="{{ old('no_telepon') }}">
        
      </div>
    <div class="form-group">
        <label for="email" class="form-label">Email </label>
        <input type="text" class="form-control" id="email" placeholder="Masukan Email Wisma Atlet" name="email" value="{{ old('email') }}">
    </div>
      <button class="btn btn-primary" type="submit"> Tambah Data </button>
        
  </form>
  <div>
  @endsection