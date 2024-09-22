@extends('layout')

@section('content')
    <h1>Edit Resep</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reseps.update', $resep->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_roti">Nama Roti:</label>
            <input type="text" name="nama_roti" value="{{ $resep->nama_roti }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control">{{ $resep->deskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="bahan">Bahan:</label>
            <textarea name="bahan" class="form-control">{{ $resep->bahan }}</textarea>
        </div>

        <div class="form-group">
            <label for="langkah">Langkah:</label>
            <textarea name="langkah" class="form-control">{{ $resep->langkah }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
