@extends('layouts/app')

@section('title' , 'Hasil ')

@section('container')
<div class="container" style="margin-top: 80px">
    <br>
    <button onclick="printHasil()" class="btn btn-success" id="btnprint"> Print </button>
    <div class="row">
        <div class="col">
                <h1 class="mt-3"> Hasil Tes </h1>
                <table class="table table-borderless table-striped">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Ya</th>
                            <th scope="col">Tidak </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pertanyaan as $tanya )
                        <tr>
                            <th scope="row"> {{ $loop->index+1 }} </th>
                            <td>{{ $tanya->soaltes  }} </td>
                            <td>
                                <div class="form-check">
                                    <input value="1" {{ 1 == $hasil['s'.($loop->index+1)] ? 'checked' : 'disabled' }} class="form-check-input" type="radio" name="{{ $tanya->kode }}" id="pert1">
                                    <label class="form-check-label" for="pert1">
                                        Ya
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input value="0" {{ 0 == $hasil['s'.($loop->index+1)] ? 'checked' : 'disabled' }} class="form-check-input" type="radio" name="{{ $tanya->kode }}" id="pert1">
                                    <label class="form-check-label" for="pert1">
                                        Tidak
                                    </label>
                                </div>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <p> Berdasarkan hasil dari tes yang dilakukan maka didapatkan hasil sebagai berikut :</p>
               <h2 class="fw-bold text-danger"> {{ $hasil->text->jawaban }}</h2>
                
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>

    function printHasil() {
        window.print();
        
    }
</script>
@endpush