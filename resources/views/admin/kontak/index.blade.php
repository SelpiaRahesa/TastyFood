    @extends('layouts.admin')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Kontak') }}
                        </div>
                        <div class="float-end">
                            @php
                                $kontakCount = App\Models\Kontak::count(); // Hitung jumlah record
                            @endphp

                            @if ($kontakCount < 1)
                                <a href="{{ route('kontak.create') }}" class="btn btn-sm btn-primary">Add</a>
                            @else
                                <button class="btn btn-sm btn-secondary" disabled>Maksimal Data Hanya Satu</button>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($kontak as $data)
                                    <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->no_telepon}}</td>
                                    <td>{{ $data->email}}</td>
                                    <td>{{ $data->alamat}}</td>
                                        <td>
                                            <form action="{{route('kontak.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('kontak.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>
                                                {{-- <a href="{{ route('kontak.destroy', $data->id) }}" class="btn  btn-sm btn-danger" data-confirm-delete="true">Delete</a> --}}
                                                <a href="{{route('kontak.destroy', $data->id)}}" class="btn btn-sm btn-danger" data-confirm-delete="true">
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
                            {!! $kontak->withQueryString()->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Kontak') }}
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">No Telepon</label>
                            <input type="number" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                value="{{ old('kontak', $kontak->no_telepon) }}" required>
                            @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('kontak', $kontak->email) }}" placeholder="email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror"
                                id="inputUserstatus" placeholder="Alamat">{{ old('alamat', $kontak->alamat) }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
