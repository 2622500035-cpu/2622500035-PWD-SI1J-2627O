<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <h1>Profil Mahasiswa</h1>

    <button type="button" id="navToggle"
        aria-expanded="false" aria-controls="navMenu">
        Menu
    </button>

    <nav id="navMenu">
        <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>
</header>

<main class="container">

    <!-- BERANDA -->
    <section id="beranda" class="home card">

        <h2>Selamat Datang</h2>

        <p>
            Halo, saya Nur Annisa Aulia. Saya sedang mempelajari
            Pemrograman Web Dasar.
        </p>

        <img src="image/Nur Annisa Aulia.jpeg"
             alt="Foto profil Nur Annisa Aulia"
             width="175">

        <p>
            Saya adalah seorang mahasiswa yang sedang belajar
            pemrograman web.
        </p>

    </section>

    <!-- TENTANG -->
    <section id="tentang" class="about card">

        <h2>Tentang Saya</h2>

        <article>
            <h3>Profil Singkat</h3>

            <p>
                Perkenalkan, nama saya Nur Annisa Aulia.
                Saya adalah seorang mahasiswa Program Studi
                Sistem Informasi yang sedang mempelajari berbagai
                hal mengenai teknologi dan pemrograman.
                Saya tertarik untuk mempelajari bagaimana sebuah
                website dibuat dan bagaimana kode dapat digunakan
                untuk menghasilkan halaman web yang menarik
                dan bermanfaat.
            </p>

            <p>
                Saat ini saya sedang belajar Pemrograman Web Dasar,
                khususnya HTML, CSS, dan JavaScript.
                Saya ingin memahami cara membuat struktur halaman
                web yang baik serta mengembangkan kemampuan
                membuat website sederhana.
            </p>
        </article>

        <article>
            <h3>Target Belajar</h3>

            <ol>
                <li>Menguasai HTML dan CSS.</li>
                <li>Membuat website sederhana.</li>
                <li>Memahami dasar-dasar pemrograman web.</li>
            </ol>
        </article>

    </section>

    <!-- KONTAK -->
    <section id="kontak" class="contact card">

        <h2>Kontak</h2>

        <p>
            Kunjungi
            <a href="https://github.com/2622500035-cpu"
               target="_blank" rel="noopener noreferrer">
                profil GitHub saya
            </a>
        </p>

        <h3>Formulir Kontak</h3>

        <form id="contactForm" novalidate>

            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="semester">Semester</label>
            <input type="number" id="semester"
                   name="semester" min="1" max="14" required>

            <label for="tanggal">Tanggal Kunjungan</label>
            <input type="date" id="tanggal"
                   name="tanggal" required>

            <p>Jenis Pesan</p>

            <div class="option-group">
                <input type="radio" id="pertanyaan"
                       name="jenis" value="Pertanyaan" required>
                <label for="pertanyaan">Pertanyaan</label>

                <input type="radio" id="saran"
                       name="jenis" value="Saran">
                <label for="saran">Saran</label>
            </div>

            <p>Topik yang Diminati</p>

            <div class="option-group">
                <input type="checkbox" id="html"
                       name="topik" value="HTML">
                <label for="html">HTML</label>

                <input type="checkbox" id="css"
                       name="topik" value="CSS">
                <label for="css">CSS</label>

                <input type="checkbox" id="javascript"
                       name="topik" value="JavaScript">
                <label for="javascript">JavaScript</label>
            </div>

            <label for="prodi">Program Studi</label>

            <select id="prodi" name="prodi" required>
                <option value="">Pilih program studi</option>
                <option value="Sistem Informasi">
                    Sistem Informasi
                </option>
                <option value="Teknik Informatika">
                    Teknik Informatika
                </option>
                <option value="Bisnis Digital">
                    Bisnis Digital
                </option>
            </select>

            <label for="pesan">Pesan</label>

            <textarea id="pesan" name="pesan"
                      rows="4" required></textarea>

            <div class="button-group">
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </div>

            <p id="formFeedback"
               role="status"
               aria-live="polite"></p>

        </form>

    </section>

</main>

<footer>
    <p>© 2026 Nur Annisa Aulia [2622500035]</p>
</footer>

<script src="script.js"></script>

</body>
</html>