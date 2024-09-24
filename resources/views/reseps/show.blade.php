@extends('layout')

@section('content')
    <div class="container my-5" style="background-color: #1a1a1a; color: #f8f9fa; padding: 40px; border-radius: 20px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.7);">
        <h1 class="text-center mb-4">{{ $resep->nama_roti }}</h1>

        @if ($resep->image)
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $resep->image) }}" alt="{{ $resep->nama_roti }}" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover; border: 5px solid #FFC107;">
            </div>
        @endif

        <div class="card bg-dark shadow border-0 mb-4">
            <div class="card-body">
                <h5 class="card-title text-warning">Deskripsi</h5>
                <p class="card-text">{{ $resep->deskripsi }}</p>
            </div>
        </div>

        <div class="card bg-dark shadow border-0 mb-4">
            <div class="card-body">
                <h5 class="card-title text-warning">Bahan</h5>
                <p class="card-text">{{ $resep->bahan }}</p>
            </div>
        </div>

        <div class="card bg-dark shadow border-0 mb-4">
            <div class="card-body">
                <h5 class="card-title text-warning">Langkah</h5>
                <p class="card-text">{{ $resep->langkah }}</p>
            </div>
        </div>



        <!-- Tombol Instagram -->
    <a href="https://www.instagram.com/" class="btn btn-instagram btn-warning" target="_blank">
        <i class="fab fa-instagram"></i> Follow on Instagram
    </a>
    <!-- Tombol Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" class="btn btn-facebook " target="_blank">
        <i class="fab fa-facebook-f"></i> Follow on Facebook
    </a>
    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" class="btn btn-whatsapp " target="_blank">
        <i class="fab fa-whatsapp "></i> Follow on WhatsApp
    </a>
    </div>

    <style>
        body {
            background-color: #121212;
            color: #f8f9fa;
        }
        h1, h4 {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .btn {
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .btn-facebook {
    display: inline-flex;
    align-items: center;
    background-color: #3b5998; /* Biru Facebook */
    color: white; /* Ubah warna teks menjadi putih */
    padding: 10px 20px; /* Padding tombol */
    border-radius: 30px; /* Sudut melengkung */
    text-decoration: none; /* Menghilangkan garis bawah */
    font-weight: bold; /* Menebalkan teks */
    transition: all 0.3s ease; /* Transisi halus */
    margin-right: 10px; /* Jarak antar tombol */
}

.btn-facebook:hover {
    background-color: #2d4373; /* Warna biru lebih gelap saat hover */
}

.btn-facebook i {
    margin-right: 8px; /* Jarak antara ikon dan teks */
}
.btn-instagram {
    display: inline-flex;
    align-items: center;
    background-color: #E1306C; /* Warna khas Instagram */
    color: white; /* Ubah warna teks menjadi putih */
    padding: 10px 20px; /* Padding tombol */
    border-radius: 30px; /* Sudut melengkung */
    text-decoration: none; /* Menghilangkan garis bawah */
    font-weight: bold; /* Menebalkan teks */
    transition: all 0.3s ease; /* Transisi halus */
    margin-right: 10px; /* Jarak antar tombol */
}

.btn-instagram:hover {
    background-color: #c13584; /* Warna lebih gelap saat hover */
}

.btn-instagram i {
    margin-right: 8px; /* Jarak antara ikon dan teks */
}

.btn-whatsapp {
    display: inline-flex;
    align-items: center;
    background-color: #25D366; /* Warna hijau WhatsApp */
    color: white; /* Ubah warna teks menjadi putih */
    padding: 10px 20px; /* Padding tombol */
    border-radius: 30px; /* Sudut melengkung */
    text-decoration: none; /* Menghilangkan garis bawah */
    font-weight: bold; /* Menebalkan teks */
    transition: all 0.3s ease; /* Transisi halus */
    margin-right: 10px; /* Jarak antar tombol */
}

.btn-whatsapp:hover {
    background-color: #128C7E; /* Warna lebih gelap saat hover */
}

.btn-whatsapp i {
    margin-right: 8px; /* Jarak antara ikon dan teks */
}

    </style>
@endsection
