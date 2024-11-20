@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Message From User') }}
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Subject</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($message as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->subject }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <span class="message-preview" onclick="toggleMessage(this)"
                                              data-full-message="{{ $data->message }}">
                                            {{ \Illuminate\Support\Str::limit($data->message, 50, '...') }}
                                        </span>
                                    </td>
                                    <td>{{ $data->created_at->format('d F Y') }}</td>
                                    <td>
                                        <form action="{{ route('message.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('message.destroy', $data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">
                                                delete
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {!! $kontak->withQueryString()->links('pagination::bootstrap-4') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleMessage(element) {
    const fullMessage = element.getAttribute('data-full-message');
    if (element.innerText.endsWith('...')) {
        element.innerText = fullMessage;
    } else {
        element.innerText = fullMessage.substring(0, 50) + '...';
    }
}
</script>

@endsection
