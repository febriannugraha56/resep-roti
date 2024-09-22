<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="D'roti-in - Resep Roti Khas Italia" />
    <meta name="author" content="Your Name" />
    <title>D'roti-in - Resep Roti Khas Italia</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Custom styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Georgia:wght@700&display=swap" rel="stylesheet">
    
    <style>

        
       body {
            background-color: #121212;
            color: #f8f9fa;
        }
        .header {
            background: url('{{ asset('img/66.jpg') }}') center center no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }

        .recipe-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .recipe-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .footer {
            background-color: #EADDCA;
        }

        .card {
            width: 100%;
            aspect-ratio: 9 / 16;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: none;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 60%;
            object-fit: cover;
            width: 100%;
        }

        .card-body {
            flex-grow: 1;
        }

        .card-title {
            font-weight: bold;
        }

        /* Styling untuk tombol */
        .btn-custom {
            background-color: #f8c300;
            color: #333;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #e0a800;
            color: white;
        }

        .dirotiin{
            background-color: #EADDCA;
        }

    </style>
</head>

<body id="page-top">
    <!-- Navigation Bar (Optional) -->
    <nav class="navbar navbar-expand-lg dirotiin shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand " href="#">D'roti-in</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#reseps">Resep Roti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header text-center text-white d-flex justify-content-center align-items-center" style="height: 100vh; background: url('{{ asset('img/66.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container">
            <h1 class="display-4 fw-bold" style="font-family: 'Georgia', serif;">Selamat Datang di D'roti-in</h1>
            <p class="lead">Resep roti khas Italia yang autentik dan lezat</p>
            <a href="{{ route('reseps.index') }}" class="btn btn-warning btn-lg shadow-lg">Tambah Resep Roti</a>
        </div>
    </header>

    <!-- Resep Section -->
    <section id="reseps" class="container my-5">
    <h2 class="text-center mb-4">Resep Kami</h2>
    <div class="row">
        @foreach($reseps as $resep)
        <div class="col-lg-4 col-md-6 mb-4">
            <a href="{{ route('reseps.show', $resep->id) }}" class="card-link">
                <div class="card shadow">
                    <img src="{{ asset('storage/'.$resep->image) }}" class="card-img" alt="{{ $resep->nama_roti }}"
                        style="object-fit: cover; width: 100%; height: 100%; max-height: 1000px;">
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>


<!-- Header Tentang Kami -->
<header class="about-header">
    <div class="container text-center">
        <h1 class="mb-4">Tentang Kami</h1>
        <p class="lead">Perjalanan kami dalam menyajikan roti terbaik dan berkualitas untuk Anda,Dirotiin hadir untuk memberikan inspirasi bagi pecinta roti di seluruh nusantara. Kami berbagi resep roti yang mudah diikuti, dengan bahan-bahan sederhana namun menghasilkan cita rasa yang istimewa. Mulai dari roti klasik hingga kreasi terbaru, Dirotiin memastikan setiap resep memberikan hasil yang lembut, lezat, dan selalu sukses di dapur Anda. Selamat mencoba berbagai resep roti favorit dan rasakan kebahagiaan dalam setiap gigitan!</p>
    </div>
</header>

    <!-- Contact Section -->
    <section id="contact" class="bg-dark text-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Kontak Kami</h2>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-light btn-social text-dark"><i class="fab fa-instagram"></i> Instagram</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-light btn-social text-dark"><i class="fab fa-facebook"></i> Facebook</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-light btn-social text-dark"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center text-dark py-4">
        <div class="container">
            <p class="mb-0">&copy; 2024 D'roti-in. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>


</html>
