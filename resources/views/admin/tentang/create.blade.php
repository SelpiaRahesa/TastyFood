@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Add Tentang Kami') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('tentang.index')}}" class="btn btn-sm btn-primary">
                            Back
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                    <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                value="{{ old('judul') }}" placeholder="Judul" required>
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subjudul</label>
                            <input type="text" class="form-control @error('subjudul') is-invalid @enderror" name="subjudul"
                                value="{{ old('subjudul') }}" placeholder="Subjudul" required>
                            @error('subjudul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" cols="20" rows="5" class="form-control @error('deskripsi') is-invalid @enderror"
                                id="inputUserstatus" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image 1</label>
                            <input type="file" class="form-control @error('image1') is-invalid @enderror" name="image1"
                                value="{{ old('image1') }}" required></input>
                            @error('image1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image 2</label>
                            <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2"
                                value="{{ old('image2') }}" required></input>
                            @error('image2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                        <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
