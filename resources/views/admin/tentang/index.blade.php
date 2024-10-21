@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Tentang') }}
                    </div>
                    <div class="float-end">
                        @php
                            $tentangCount = App\Models\Tentang::count(); // Hitung jumlah record
                        @endphp

                        @if ($tentangCount < 3)
                            <a href="{{ route('tentang.create') }}" class="btn btn-sm btn-primary">Add</a>
                        @else
                            <button class="btn btn-sm btn-secondary" disabled>Maksimal Data Hanya Tiga</button>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Subjudul</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($tentang as $data)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->subjudul }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/tentangs/' . $data->image1) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>
                                        <img src="{{ asset('/storage/tentangs/' . $data->image2) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>
                                        <form action="{{route('tentang.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('tentang.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            {{-- <a href="{{ route('tentang.destroy', $data->id) }}" class="btn  btn-sm btn-danger" data-confirm-delete="true">Delete</a> --}}
                                            <a href="{{route('tentang.destroy', $data->id)}}" class="btn btn-sm btn-danger" data-confirm-delete="true">
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
                        {{-- {!! $tentang->withQueryString()->links('pagination::bootstrap-4') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
