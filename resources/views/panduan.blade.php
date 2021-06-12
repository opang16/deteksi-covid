@extends('layouts/app')

@section('title' , 'Panduan')

@section('container')
<div class="site-section">
  <div class="container">
    <div class="row">
      <h1 class="text-center">Panduan</h1>
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/suspek.png" alt="Image" class="img-fluid">
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

<div class="site-section bg-primary-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-lg-left">
        <h2 class="mb-4 section-heading">2. Kasus Konfirmasi</h2>
        <p class="text-justify">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR.
          Kasus konfirmasi dibagi menjadi 2: <br>
          1. Kasus konfirmasi dengan gejala (simptomatik)<br>
          2. Kasus konfirmasi tanpa gejala (asimptomatik)
          </p>
          <p class="tex-justify">
            berikut ini merupakan pedoman jika anda termasuk kedalam kasus konfirmasi :
          </p>
        <p class="text-justify" >
          1. Kegiatan ISOLASI dilakukan sesuai kriteria perawatan pasien (terlampir). Isolasi pada kasus konfirmasi dilakukan selama belum dinyatakan selesai isolasi sesuai dengan pembahasan di manajemen klinis BAB V.
        </P>
        <p class="text-justify">
          2.	PENGAMBILAN SPESIMEN Ix pada kasus berat/ kritis untuk follow up pemeriksaan RT-PCR dilakukan di rumah sakit. Pada kasus tanpa gejala, ringan dan sedang tidak perlu dilakukan follow up pemeriksaan RT-PCR.
<br>•	Pengambilan spesimen dilakukan oleh petugas laboratorium setempat yang berkompeten dan berpengalaman di fasyankes atau Iokasi pemantauan

        </p>
        <p class="text-justify">
          3.	PEMANTAUAN: <br>
          dilakukan berkala selama belum dinyatakan selesai isolasi sesuai dengan definisi operasional selesai isolasi.
          dilakukan berkala selama menunggu hasil pemeriksaan lab.
        <br>  •	Pada kasus yang melakukan isolasi mandiri di rumah, pemantauan dilakukan oleh petugas FKTP/FKRTL dan berkoordinasi dengan dinas kesehatan setempat.
          Kasus suspek yang sudah selesai isolasi dan pemantauan, dapat diberikan surat pernyataan selesai masa pemantauan.
          </p>

          <p class="text-justify">
            4.	KOMUNIKASI RISIKO <br>
•	Pada kasus termasuk kontak eratnya.
Kasus yang melakukan isolasi mandiri harus melakukan kegiatan sesuai dengan protokol isolasi mandiri.

          </p>
          <p class="text-justify">
            5.	PENYELIDIKAN EPIDEMIOLOGI <br>
•	pada kasus konfirmasi juga termasuk dalam mengidentifikasi kontak erat.

          </p>
      </div>
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/orangkonfirmasi.png" alt="Image" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/orangprobable.png" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-7 ml-auto">
        <h2 class="mb-4 section-heading">3. Kasus Probable</h2>
        <p class="text-justify"> 
          Kasus suspek dengan ISPA Berat/ARDS***/meninggal dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR.
<br>Ket termasuk yang tidak ada hasil pemeriksaan lab RT-PCR dengan alasan apapun.

        </p>
          <p class="tex-justify">
            berikut ini merupakan pedoman jika anda termasuk kedalam kasus probable :
          </p>
        <p class="text-justify">1.	Kegiatan ISOLASI dilakukan sesuai kriteria perawatan pasien (terlampir).
          Isolasi pada kasus probable dilakukan selama belum dinyatakan selesai isolasi sesuai dengan pembahasan di manajemen klinis BAB V.
          

          </p>
        <p class="text-justify">
          2.	PEMANTAUAN:<br>
•	dilakukan berkala selama belum dinyatakan selesai isolasi sesuai dengan definisi operasional selesai isolasi. Pemantauan dilakukan deh petugas FKRTL. Jika sudah selesai isolasi/pemantauan maka dapatdiberikan surat pernyataan selesai masa pemantauan
</p>
           <p class="text-justify">
            3.	Apabila kasus probable meninggal, tatalaksana pemulasaran jenazah sesuai protokol pemulasaran jenazah kasus konfirmasi COVlD-19.
           </p>
             <p class="text-justify">
              4.	KOMUNIKASI RISIKO <br>
•	kepada kontak erat kasus berupa informasi mengenai COVlD-19, pencegahan penularan, pemantauan perkembangan gejala, dan lain-lain.

              </p>
               <p class="text-justify">
                5.	PENYELIDIKAN EPİDEMIOLOGI <br>
•	Tetap dilakukan untuk mengidentifikasi kontak erat

                </p>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-primary-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-lg-left">
        <h2 class="mb-4 section-heading">4. Pelaku Perjalanan</h2>
        <p class="text-justify">Seseorang yang melakukan perjalanan dari dalam (domestik) maupun luar negeri pada 14 hari terakhir.
          </p>
          <p class="tex-justify">
            berikut ini merupakan pedoman jika anda termasuk kedalam kasus pelaku perjalanan :
          </p>
        <p class="text-justify" >
         1. Pelaku perjalanan harus mengikuti ketentuan sesuai protokol kesehatan ataupun ketentuan perundangan yang berlaku.
        </P>
        <p class="text-justify">
         2. Bagi pelaku perjalanan yang akan berangkat ke luar negeri harus mengikuti protokol yang sudah ditetapkan negara tujuan. 
        </p>
        <p class="text-justify">
         3. Seluruh penumpang dan awak alat angkut dalam melakukan perjalanan harus dalam keadaan sehat dan menerapkan prinsip-prinsip pencegahan dan pengendalian penyakit COVID-19 dan harus memiliki persyaratan sesuai dengan peraturan kekarantinaan yang berlaku.  
        </p>

          <p class="text-justify">
            4. Petugas Kantor Kesehatan Pelabuhan (KKP) di bandar udara atau pelabuhan keberangkatan/kedatangan melakukan kegiatan pemeriksaan suhu tubuh terhadap penumpang dan awak alat angkut, pemeriksaan Iain yang dibutuhkan serta melakukan verifikasi kartu kewaspadaan kesehatan atau Health Alert Card (HAC) secara elektronik maupun non elektronik.</p>
          <p class="text-justify">
            5. Untuk, peningkatan kewaspadaan, Dinas kesehatan daerah Provinsi/Kabupaten/Kota dapat mengakses informasi kedatangan pelaku perjalanan yang melalui bandara atau pelabuhan ke wilayahnya melalui aplikasi electronic Health Alert Card (eHAC). </p>
      </div>
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/perjalanan.png" alt="Image" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <figure class="illustration">
          <img src="images/kontak.png" alt="Image" class="img-fluid" width="720px" height="80px">
        </figure>
      </div>
      <div class="col-lg-7 ml-auto">
        <h2 class="mb-4 section-heading">5. Kontak Erat</h2>
        <p class="text-justify"> 
          Orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi COVID-19. Riwayat kontak yang dimaksud antara Iain:
         <br> a. Kontak tatap muka/berdekatan dengan kasus probable atau kasus konfirmasi dalam radius I meter dan dalam jangka waktu 15 menit atau lebih.
          <br>b. Sentuhan fisik langsung dengan pasien kasus probable atau konfirmasi (seperti bersalaman, berpegangan tangan, dll).
          <br>c. Orang yang memberikan perawatan langsung terhadap kasus probable atau konfirmasi tanpa menggunakan APD yang sesuai standar.
          <br>d. Situasi Iainnya yang mengindikasikan adanya kontak berdasarkan penilaian risiko lokal yang ditetapkan oleh tim penyelidikan epidemiologi setempat 
        </p>
          <p class="tex-justify">
            berikut ini merupakan pedoman jika anda termasuk kedalam kasus kontak erat :
          </p>
        <p class="text-justify">
          I. Kegiatan KARANTİNA dilakukan sesuai kriteria perawatan pasien (terlampir).
<br>Karantina dilakukan sejak seseorang dinyatakan sebagai kontak erat selama 14 hari sejak kontak terakhir dengan dengan kasus probable atau konfirmasi COVlD-19. Karantina dapat dihentikan apabila selama masa karantina tidak menunjukkan gejala (discarded).

        </p>
        <p class="text-justify">
          2.	PEMANTAUAN:
         <br> •	dilakukan berkala untuk memantau perkembangan gejala.
         <br>•	Apabila selama masa pemantauan muncul gejala yang memenuhi kriteria suspek maka dilakukan tatalaksana sesuai kriteria.
         <br>•	Pemantauan dapat melalui telepon atau melalui kunjungan secara berkala (harian) dan dicatat pada formulir pemantauan harian.
         <br>•	Pemantauan dilakukan dalam bentuk pemeriksaan suhu tubuh dan skrining gejala harian. Pemantauan dilakukan oleh petugas FKTP dan berkoordinasi dengan dinas kesehatan setempat.
         <br>•	Kontak erat yang sudah selesai karantina/pemantauan, dapatdiberikan surat pernyataan selesai pemantauan.
          </p>
           <p class="text-justify">
            3.	Bagi petugas kesehatan yang memenuhi kriteria kontak erat yang tidak menggunakan APD sesuai standar, direkomendasikan untuk segera dilakukan PEMERIKSAAN RT PCR sejak kasus dinyatakan sebagai kasus probable atau konfirmasi.
            <br>•	Hasil (+) : melakukan isolasi mandiri selama 10 hari. Apabila selama masa isolasi, muncul gejala dilakukan tata laksana sesuai kriteria kasus konfirmasi simptomatik.
            <br>•	Hasil (-) : tetap melakukan karantina mandiri selama 14 hari. Apabila selama masa karantina, muncul gejala dilakukan tata laksana sesuai kriteria kasus suspek.
            
            </p>
             <p class="text-justify">
              4.	KOMUNIKASI RISIKO
              <br>Petugas kesehatan memberikan komunikasi risiko pada kontak erat berupa informasi mengenai COVID-19, pencegahan penularan, tatalaksana lanjut jika muncul gejala, dan lain-lain.
              
              </p>
               <p class="text-justify">5.	PENYELIDIKAN EPİDEMIOLOGI
                <br>Penyelidikan epidemiologi dilakukan ketika kontak erat mengalami perkembangan gejala sesuai kriteria kasus suspek/konfirmasi
                

                </p>
      </div>
    </div>
  </div>
</div>

@endsection