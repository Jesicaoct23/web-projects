<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - Lake Toba Tourism</title>
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS khusus untuk submenu dropdown */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
            margin-right: 0.1rem;
        }

        /* Mengatur dropdown agar muncul di hover */
        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        .video-section {
            margin-bottom: 3rem;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 0.5rem; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="index.php">Lake Toba Tourism</a>
            <div class="logo-group ms-3 d-flex align-items-center">
                <img src="gambar/logo wisata.png" alt="Bangga Berwisata di Indonesia" class="mx-2" style="height: 40px;">
                <img src="gambar/pesonaindonesia.png" alt="Wonderful Indonesia" class="mx-2" style="height: 40px;">
                <img src="gambar/sumut logo.jpeg" alt="Logo Pemerintah Bali" class="mx-2" style="height: 40px;">
                <img src="gambar/pesonadanautoba.png" alt="Bali - The Island of Gods" class="mx-2" style="height: 40px;">
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="paketWisataDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Paket Wisata
                    </a>
                    
                    <ul class="dropdown-menu" aria-labelledby="paketWisataDropdown">
                        <li class="dropdown-submenu dropend">
                            <a class="dropdown-item dropdown-toggle" href="#">Transportasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="filterPackages('2d1n')">Paket Tour 2 Hari 1 Malam</a></li>
                                <li><a class="dropdown-item" href="#" onclick="filterPackages('3d2n')">Paket Tour 3 Hari 2 Malam</a></li>
                                <li><a class="dropdown-item" href="#" onclick="filterPackages('4d3n')">Paket Tour 4 Hari 3 Malam</a></li>
                                <li><a class="dropdown-item" href="#" onclick="filterPackages('5d4n')">Paket Tour 5 Hari 4 Malam</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#" onclick="filterPackages('kuliner')">Kuliner</a></li>
                        <li><a class="dropdown-item" href="#" onclick="filterPackages('olahraga')">Olahraga</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="modifikasi_pesanan.php">Modifikasi Pesanan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

   
    <section id="video-section" class="container my-5">
        <div class="row">
            <div class="col-md-6 ">
                <div id="video-bukit-lawang" class="video-container">
                    <iframe src="https://www.youtube.com/embed/G19qfk_Q_5Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div id="video-taman-simalem" class="video-container">
                    <iframe src="https://www.youtube.com/embed/BTO2ly9hXDk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Wisata Section -->
    <section id="paket-wisata" class="container my-5">
        <h2 class="text-center mb-4">Paket Wisata</h2>
        <div class="row">
            <!-- Paket Wisata Cards -->
            <div class="col-md-4 package-card" data-package="4d3n">
                <div class="card mb-4">
                    <img src="gambar/4d3n.jpg" class="card-img-top" alt="Paket Wisata Medan Taman Simalem Resort 4D3N">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Medan Taman Simalem Resort 4D3N Paling Laris</h5>
                        <p class="card-text">Selain menawarkan penginapan di Parapat, Danau Toba dan Medan, penawaran Paket Wisata Medan Taman Simalem Resort 4D3N ini sangat populer.</p>
                        <p class="text-muted">January 28, 2018 by <a href="#">Author</a></p>
                        <a href="form_pemesanan.php?package=4d3n" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 package-card" data-package="3d2n">
                <div class="card mb-4">
                    <img src="gambar/3d2n.jpg" class="card-img-top" alt="Paket Tour Medan Berastagi Taman Simalem Resort 3D2N">
                    <div class="card-body">
                        <h5 class="card-title">Paket Tour Medan Berastagi Taman Simalem Resort 3D2N</h5>
                        <p class="card-text">Paket Tour Medan Berastagi Taman Simalem Resort 3D2N ini merupakan pilihan lain dari paket wisata favorit yang kami tawarkan untuk Anda.</p>
                        <p class="text-muted">December 31, 2017 by <a href="#">Author</a></p>
                        <a href="form_pemesanan.php?package=3d2n" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 package-card" data-package="5d4n">
                <div class="card mb-4">
                    <img src="gambar/toba5d4n.jpeg" class="card-img-top" alt="Paket Tour Medan Danau Toba Samosir 5D4N">
                    <div class="card-body">
                        <h5 class="card-title">Paket Tour Medan Danau Toba Samosir 5D4N</h5>
                        <p class="card-text">Paket Tour Medan Danau Toba Samosir 5D4N ini menawarkan pengalaman wisata ke Danau Toba dan Samosir dengan harga yang terjangkau.</p>
                        <p class="text-muted">December 25, 2017 by <a href="#">Author</a></p>
                        <a href="form_pemesanan.php?package=5d4n" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 package-card" data-package="2d1n">
                <div class="card mb-4">
                    <img src="gambar/2d1n.jpeg" class="card-img-top" alt="Paket Wisata Medan Danau Toba 2D1N">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Medan Danau Toba 2D1N</h5>
                        <p class="card-text">Paket Wisata Medan Danau Toba 2D1N ini sangat cocok bagi Anda yang ingin menikmati keindahan Danau Toba dengan waktu yang singkat.</p>
                        <p class="text-muted">February 10, 2018 by <a href="#">Author</a></p>
                        <a href="form_pemesanan.php?package=2d1n" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kuliner Package Card (Initially Hidden) -->
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/soto_medan.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Medan</h5>
                        <p class="card-text">Gak cuma di Jawa Tengah saja kamu bisa menemukan soto super enak, di Medan juga ada lho. Kamu bisa merasakan Soto Medan yang paling enak dan selalu laris manis.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/sate_memeng.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Medan</h5>
                        <p class="card-text">Bumbunya yang khas dan sedap di lidah menjadikan Sate Memeng sebagai salah satu destinasi kuliner yang terkenal. Kamu juga bisa milih jenis dagingnya. Ada daging sapi, kambing, dan ayam yang pasti enak semua.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/mie_balap.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Medan</h5>
                        <p class="card-text">Kuliner Medan ini dinamakan demikian karena cara memasaknya yang cepat, persis seperti orang yang sedang balapan.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/mie_gomak.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Siantar</h5>
                        <p class="card-text">Bahan dasarnya mie lidi dengan racikan rempah-rempah dan bumbu andaliman khas Batak. Gomak berasal dari bahasa Batak yang artinya genggam. Tapi, penyajian mie ini tidak digenggam langsung. Warga menjuluki mie gomak sebagai spaghettinya Batak.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/roti_ketawa.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Siantar</h5>
                        <p class="card-text">Jika Anda hendak mencari camilan ringan dan bisa dibawa untuk bekal di perjalanan, maka roti ketawa Siantar layak dicoba. Roti ketawa ini bisa didapatkan dengan ukuran berbeda-beda.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/roti_ganda.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Khas Siantar</h5>
                        <p class="card-text"> Namun, orang-orang yang membeli roti ini akrab menyebutnya sebagai roti ganda. Tokoh roti ini berdiri sejak 1979. Roti ganda sudah jadi oleh-oleh khas Siantar.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/ombus_ombus.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Danau Toba</h5>
                        <p class="card-text">Sobat Pesona. Bentuknya menyerupai kerucut dan paling nikmat disantap selagi hangat sambil ditiup perlahan, dari sini pula nama ombus-ombus berasal yang dalam bahasa Batak berarti ditiup-tiup.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="kuliner">
                <div class="card mb-4">
                    <img src="gambar/ikan_arsik.jpeg" class="card-img-top" alt="Paket Wisata Kuliner Danau Toba">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Kuliner Danau Toba</h5>
                        <p class="card-text">Buat Sobat Pesona pencinta kuliner pedas, pokoknya wajib banget mencicipi kenikmatan arsik, nih! Nggak sembarangan, arsik dianggap sebagai simbol doa dan berkat pada proses pernikahan adat Batak, lho. Kuliner nusantara yang terbuat dari ikan mas atau ikan nila ini, diberi bumbu kuning dengan cita rasa pedas dan asam yang khas. Sekali mencoba, siap-siap auto ketagihan, nih!.</p>
                        <a href="form_pemesanan.php?package=kuliner" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-card d-none" data-package="olahraga">
    <div class="card mb-4">
        <img src="gambar/banana.jpeg" class="card-img-top" alt="Paket Wisata Olahraga 1">
        <div class="card-body">
            <h5 class="card-title">Paket Wisata Olahraga Bananaboat</h5>
            <p class="card-text">Tempat pertama saat mendengar "Banana Boat" pasti pantai. Padahal, banana boat juga bisa di Danau Toba. Setiap banana boat dapat dinaiki oleh delapan orang dengan harga sewa terjangkau, Rp250.000,- saja. Biasanya tarif itu untuk tiga kali jatuh ke air.Bedanya banana boat di Danau Toba, airnya datar atau tidak bergelombang sehingga tentunya membuat wahana ini jauh lebih aman..</p>
            <a href="form_pemesanan.php?package=olahraga1" class="btn btn-primary">Pesan Sekarang</a>
        </div>
    </div>
</div>
<!-- Speedboat Card -->
<div class="col-md-4 package-card d-none" data-package="olahraga">
    <div class="card mb-4">
        <img src="gambar/speedboad.jpeg" class="card-img-top small-image" alt="Paket Wisata Olahraga Speedboat">
        <div class="card-body">
            <h5 class="card-title">Paket Wisata Olahraga Speedboat</h5>
            <p class="card-text">Deskripsi tentang paket wisata olahraga dengan speedboat.</p>
            <a href="form_pemesanan.php?package=olahraga2" class="btn btn-primary">Pesan Sekarang</a>
        </div>
    </div>
</div>

<!-- Jetski Card -->
<div class="col-md-4 package-card d-none" data-package="olahraga">
    <div class="card mb-4">
        <img src="gambar/jetski.jpeg" class="card-img-top small-image" alt="Paket Wisata Olahraga Jetski">
        <div class="card-body">
            <h5 class="card-title">Paket Wisata Olahraga Jetski</h5>
            <p class="card-text">Deskripsi tentang paket wisata olahraga dengan jetski.</p>
            <a href="form_pemesanan.php?package=olahraga3" class="btn btn-primary">Pesan Sekarang</a>
        </div>
    </div>
</div>

<style>
    .small-image {
    width: 410px; /* Sesuaikan dengan ukuran yang diinginkan */
    height: 210px; /* Untuk menjaga rasio gambar */
    object-fit: cover; /* Agar gambar tetap terlihat bagus */
}

</style>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function filterPackages(category) {
    // Sembunyikan semua card
    const cards = document.querySelectorAll('.package-card');
    cards.forEach(card => {
        card.classList.add('d-none');
    });

    // Tampilkan card sesuai kategori yang dipilih
    const selectedCards = document.querySelectorAll(`.package-card[data-package="${category}"]`);
    selectedCards.forEach(card => {
        card.classList.remove('d-none');
    });

    // Update the title in the 'Paket Wisata' section
    const sectionTitle = document.querySelector('#paket-wisata h2');
    sectionTitle.textContent = category === 'kuliner' ? 'Kuliner Terbaik' : 
                               category === 'olahraga' ? 'Olahraga Seru' : 
                               'Paket Wisata';

    // Scroll to the 'Paket Wisata' section after filtering
    document.getElementById('paket-wisata').scrollIntoView({ behavior: 'smooth' });
}
function filterPackages(category) {
    let cards = document.querySelectorAll('.package-card');
    cards.forEach(card => {
        if (card.dataset.package === category) {
            card.classList.remove('d-none');
        } else {
            card.classList.add('d-none');
        }
    });
    document.getElementById('paket-wisata-title').innerText = 'Paket Wisata';
}


// Display promotional videos by default
filterPackages('promosi');

        // Tampilkan video promosi secara default
        filterPackages('promosi');
    </script>
</body>
</html>
