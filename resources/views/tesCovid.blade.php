@extends('layouts/app')

@section('title' , 'Tes Covid')

@section('container')

    
@role('user')
    

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/pertanyaan" method="post">
              @csrf
                <h1 class="mt-3"> Tes </h1>
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
                                    <input value="1" class="form-check-input" type="radio" name="{{ $tanya->kode }}" id="pert1">
                                    <label class="form-check-label" for="pert1">
                                        Ya
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input value="0" class="form-check-input" type="radio" name="{{ $tanya->kode }}" id="pert1">
                                    <label class="form-check-label" for="pert1">
                                        Tidak
                                    </label>
                                </div>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
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