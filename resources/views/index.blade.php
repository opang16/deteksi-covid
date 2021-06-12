@extends('layouts/app')

@section('title' , 'Home')

@section('container')

<div class="hero-v1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mr-auto text-center text-lg-left">
        <h1 class="heading mb-3">Apa itu COVID-19 ?</h1>
        <p class="mb-5">COVID-19 (coronavirus disease 2019) adalah jenis penyakit baru yang disebabkan oleh virus dari golongan corona virus, yaitu SARS-CoV-2 yang juga sering disebut virus Corona.
          
        </p>
        <p class="mb-4"><a href="{{ url('/about') }}" class="btn btn-primary">Selengkapnya...</a></p>



      </div>
      <div class="col-lg-3">
        <figure class="illustration">
          <img src="images/cvd.png" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-8"></div>
    </div>
  </div>
</div>


@foreach ($penyebaran as $p)
  <div class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Statistik COVID-19 Di DKI Jakarta</h2>
          <p>Sumber: corona.jakarta.go.id per tanggal {{ $p->tanggal }} </p>
        </div>
      </div>
      @if (session('status'))
          <div class="alert alert-success">
             {{ session('status') }}
            </div>
      @endif
      <div class="row"> 
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            
            @csrf
                
            <strong class="d-block number">{{ $p->positif }}</strong>
            <span class="label">Positif</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $p->meninggal }}</strong>
            <span class="label">Meninggal</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $p->sembuh }}</strong>
            <span class="label">Sembuh</span>
          </div>
        </div>
        @role('admin')
                <tr>
                  <td>
                  <a href="{{ $p->id }}/editpenyebaran" class="btn btn-success"> Edit </a> 
                  </td>
                </tr>
        @endrole
        @endforeach
      </div>
    </div>
  </div>


    
    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="row">
              <div class="col-6 col-lg-6 mt-lg-5">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-stay-at-home"></span>
                  </div>
                  <div class="body">
                    <h3>Tetap Di Rumah</h3>
                    <p>Kurangin aktivitas di luar rumah </p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-patient"></span>
                  </div>
                  <div class="body">
                    <h3>Gunakan Masker</h3>
                    <p>Menggunakan Masker jika beraktivitas di luar rumah </p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-social-distancing"></span>
                  </div>
                  <div class="body">
                    <h3>Tetap Menjaga Jarak</h3>
                    <p>Jika beraktivitas di luar rumah tetap jaga jarak terhadap orang lain minimal 2 meter dari orang lain</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-hand-washing"></span>
                  </div>
                  <div class="body">
                    <h3>Mencuci Tangan</h3>
                    <p>Sering melakukan cuci tangan terutama sehabis dari tempat umum </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">Cara Mencegah COVID-19</h2>
            <p>Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga berat, Untuk itu dilakukan pencegahan dimana untuk mengurangi tingkat penyebaran COVID-19 tersebut</p>
            <p class="mb-4">Misalnya Lakukan Hal Hal seperti ini : </p>

            <ul class="list-check list-unstyled mb-5">
              <li>Tetap Di Rumah</li>
              <li>Gunakan Masker</li>
              <li>Tetap Menjaga Jarak</li>
              <li>Mencuci Tangan</li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  @endsection