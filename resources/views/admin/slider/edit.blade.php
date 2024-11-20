@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Update Image') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('slider.index')}}" class="btn btn-sm btn-primary">
                            Back
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label"> Image</label>
                            @if ($slider->image)
                                <!-- Display current image at the top -->
                                <div class="mb-2">
                                    <img src="{{ asset('storage/sliders/' . $slider->image) }}" alt="Current Image" class="img-fluid" width="150">
                                </div>
                            @endif

                            <label class="form-label">Update Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>

                        <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
