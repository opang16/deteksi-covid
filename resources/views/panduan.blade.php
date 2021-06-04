@extends('layouts/app')

@section('title' , 'Panduan')

@section('container')
<div class="site-section">
  <div class="container">
    <div class="row">
      <h1 class="text-center">Panduan</h1>
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/apd.png" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-7 ml-auto">
        <h2 class="mb-4 section-heading">1. Kasus Suspek</h2>
        <p class="text-justify"> Kasus suspek merupakan Seseorang yang memiliki salah satu dari kriteria berikut:
          <br>1 Orang dengan Infeksi Saluran Pernapasan Akut DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah Indonesia yang melaporkan transmisi lokal**.
          <br>2. Orang dengan salah satu gejala/tanda ISPA* DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi/probable COVID-19.
           <br>3 Orang dengan ISPA berat/pneumonia berat*** yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.
          <p class="tex-justify">
            berikut ini merupakan pedoman jika anda termasuk kedalam kasus suspek :
          </p>
        <p class="text-justify">
          1. Kegiatan ISOLASI dilakukan sesuai kriteria perawatan pasien (terlampir).
Isolasi dilakukan sejak seseorang dinyatakan sebagai kasus suspek.
Isolasi dapat dihentikan apabila kasus memenuhi kriteria discarded

          </p>
        <p class="text-justify">
          2. Dilakukan PENGAMBILAN SPESIMEN pada hari KE-ı dan KE-2 untuk pemeriksaan RT-PCR. Pengambilan spesimen dilakukan oleh petugas laboratorium setempat yang berkompeten dan berpengalaman di fasyankes atau lokasi pemantauan
           </p>
           <p class="text-justify">
            3. PEMANTAUAN: <br>
            •	dilakukan berkala selama menunggu hasil pemeriksaan lab. <br>
            •	Pada suspek yang melakukan isolasi mandiri di rumah, pemantauan dilakukan oleh petugas FKTP dan berkoordinasi dengan dinas kesehatan setempat.
            <br>•	Pemantauan dapat dihentikan apabila hasil pemeriksaan RT-PCR selama 2 hari berturut-turut dengan selang waktu »24 jam menunjukkan hasil negatif.
            <br>•	Kasus suspek yang sudah selesai isolasi dan pemantauan, dapat diberikan surat pernyataan selesai masa pemantauan.
            
           </p>
             <p class="text-justify">
              4.	KOMUNIKASI RISIKO <br>
              •	Pada kasus termasuk kontak eratnya <br>
              •	Suspek yang melakukan isolasi mandiri harus melakukan kegiatan sesuai dengan protokol isolasi mandiri.
              
              </p>
               <p class="text-justify">
                5.	PENYELIDIKAN EPİDEMIOLOGI <br>
                •	dilakukan sejak seseorang dinyatakan sebagai suspek, termasuk dalam mengidentifikasi kontak erat.
                
                </p>
      </div>
    </div>
  </div>
</div>
@endsection