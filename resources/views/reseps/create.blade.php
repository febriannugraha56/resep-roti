@extends('layout')

@section('content')
    <h1>Tambah Resep Baru</h1>

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

    <form action="{{ route('reseps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_roti">Nama Roti:</label>
            <input type="text" name="nama_roti" class="form-control" placeholder="Nama Roti">
        </div>

        <div class="form-group">
    <label for="image">Unggah Gambar Roti (JPEG, PNG, JPG, GIF, SVG)</label>
    <input type="file" class="form-control" name="image" accept="image/*" required>
</div>


        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
        </div>

        <div class="form-group">
            <label for="bahan">Bahan:</label>
            <textarea name="bahan" class="form-control" placeholder="Bahan"></textarea>
        </div>

        <div class="form-group">
            <label for="langkah">Langkah:</label>
            <textarea name="langkah" class="form-control" placeholder="Langkah"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
