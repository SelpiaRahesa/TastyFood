@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Slider') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('slider.create')}}" class="btn btn-sm btn-primary">
                            Add
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($slider as $data)
                                <tr>
                                <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/sliders/' . $data->image) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>
                                        <form action="{{route('slider.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('slider.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            {{-- <a href="{{ route('slider.destroy', $data->id) }}" class="btn  btn-sm btn-danger" data-confirm-delete="true">Delete</a> --}}
                                            <a href="{{route('slider.destroy', $data->id)}}" class="btn btn-sm btn-danger" data-confirm-delete="true">
                                                delete
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {!! $slider->withQueryString()->links('pagination::bootstrap-4') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
