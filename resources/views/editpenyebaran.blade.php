@extends('layouts/app')

@section('title' , 'Ubah Data Penyebaran')
@section('container')
<br><br><br>
<div class="container">
<h1 class="mt-1"> Form Ubah Data Penyebaran  </h1>
<form action="/{{ $id->id }}" method="POST">
    @method('patch')
        @csrf
        <div class="form-group">
          <label for="tanggal" class="form-label">tanggal </label>
          <input type="text" class="form-control @error('tanggal') is-invalid 
          @enderror" id="tanggal" placeholder="Masukan Tanggal" name="tanggal" value="{{ $id->tanggal }}">
          @error('tanggal')
          <div class="invalid-feedback"> {{ $message }}</div>
          @enderror
        </div>
       
    <div class="form-group">
      <label for="positif" class="form-label">positif </label>
      <input type="text" class="form-control @error('positif') is-invalid 
      @enderror" id="positif" placeholder="Masukan Kasus Positif" name="positif" value="{{ $id->positif }}">
      @error('positif')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label for="sembuh" class="form-label">sembuh </label>
        <input type="text" class="form-control @error('sembuh') is-invalid 
        @enderror" id="sembuh" placeholder="Masukan Kasus Sembuh" name="sembuh" value="{{ $id->sembuh  }}">
      @error('sembuh')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="meninggal" class="form-label">meninggal </label>
        <input type="text" class="form-control @error('meninggal') is-invalid 
        @enderror" id="meninggal" placeholder="Masukan Kasus Meninggal" name="meninggal" value="{{ $id->meninggal  }}">
      @error('meninggal')
      <div class="invalid-feedback"> {{ $message }}</div>
      @enderror
      </div>
    
      <button class="btn btn-primary" type="submit"> Ubah Data </button>
        
  </form>
  <div>
  @endsection