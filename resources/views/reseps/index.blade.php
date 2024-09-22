@extends('layout')

@section('content')
    <h1>Daftar Resep Roti</h1>
    <a href="{{ route('reseps.create') }}" class="btn btn-success">Tambah Resep</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Roti</th>
            <th>Deskripsi</th>
            <th>Bahan</th>
            <th>Langkah</th>
            <th>Aksi</th>
        </tr>
        @foreach ($reseps as $resep)
            <tr>
                <td>{{ $resep->nama_roti }}</td>
                <td>{{ $resep->deskripsi }}</td>
                <td>{{ $resep->bahan }}</td>
                <td>{{ $resep->langkah }}</td>
                <td>
                    <a href="{{ route('reseps.show', $resep->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('reseps.edit', $resep->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('reseps.destroy', $resep->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
