@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Berita') }}
                    </div>
                </div>

                <div class="card-body">
                <img src="{{ asset('storage/beritas/' . $berita->image) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $berita->judul}}</h4>
                    <p class="tmt-3">
                        Deskripsi : {!! $berita->deskripsi !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
