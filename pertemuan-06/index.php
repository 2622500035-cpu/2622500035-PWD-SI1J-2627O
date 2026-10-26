<?php
// P6: PHP Dasar dan Pemrograman Sisi Peladen

// Bagian 1: Variabel dan konstanta
$nim = "2622500035";
$namaMahasiswa = "Nur Annisa Aulia";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 2;
$ipk = 3.75;
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "2622500035-cpu";

// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;

$semesterValid = $semester >= 1 && $semester <= $batasSemester;

$statusSemester = ($semesterValid && $statusAktif)
    ? "Sesuai rentang"
    : "Perlu diperiksa";

// Bagian 3: Percabangan if-elseif-else
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

// Operator ternary
$namaProdi = ($programStudi == "SI")
    ? "Sistem Informasi"
    : (($programStudi == "TI")
        ? "Teknik Informatika"
        : "Lainnya");

// Bagian 4: Percabangan switch-case
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;

    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;

    default:
        $fokusProgramStudi = "Belum ditentukan";
}
?>

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
            Halo, saya
            <strong><?php echo htmlspecialchars($namaMahasiswa); ?></strong>.
            Saya sedang mempelajari mata kuliah
            <strong><?php print NAMA_MATA_KULIAH; ?></strong>
            pada tahun akademik
            <?php echo $tahunAkademik; ?>.
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
                Perkenalkan, nama saya
                <?php echo htmlspecialchars($namaMahasiswa); ?>.
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
                khususnya HTML, CSS, JavaScript, dan PHP.
                Saya ingin memahami cara membuat struktur halaman
                web yang baik serta mengembangkan kemampuan
                membuat website sederhana.
            </p>

            <h3>Informasi Mahasiswa</h3>

            <p>NIM: <?php echo $nim; ?></p>

            <p>
                Program Studi:
                <?php echo $namaProdi . " (" . $programStudi . ")"; ?>
            </p>

            <p>
                Semester:
                <?php echo $semester . " (" . $keteranganSemester . ")"; ?>
            </p>

            <p>
                Sisa semester hingga batas:
                <?php echo $sisaSemester; ?>
            </p>

            <p>
                Pemeriksaan rentang semester:
                <?php echo $statusSemester; ?>
            </p>

            <p>
                Status mahasiswa:
                <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?>
            </p>

            <p>
                Fokus program studi:
                <?php echo $fokusProgramStudi; ?>
            </p>

            <p>
                IPK:
                <?php echo number_format($ipk, 2, ',', '.'); ?>
            </p>

            <p>
                Catatan tambahan:
                <?php
                echo $catatanTambahan === null
                    ? "Belum ada"
                    : htmlspecialchars($catatanTambahan);
                ?>
            </p>

        </article>

        <article>

            <h3>Target Belajar (Perulangan for)</h3>

            <ol>
                <?php
                // Perulangan for tanpa array
                for ($i = 1; $i <= 5; $i++) {

                    echo "<li>Target belajar ke-" . $i . ": ";

                    switch ($i) {
                        case 1:
                            echo "Memahami sintaks dasar PHP.";
                            break;

                        case 2:
                            echo "Menggunakan variabel dan konstanta.";
                            break;

                        case 3:
                            echo "Menerapkan operator dan percabangan.";
                            break;

                        case 4:
                            echo "Menggunakan perulangan for dan while.";
                            break;

                        default:
                            echo "Belum dipetakan";
                            break;
                    }

                    echo "</li>";
                }
                ?>
            </ol>

            <h3>Semester (Perulangan while):</h3>

            <ol>
                <?php
                $nomorSemester = 1;

                while ($nomorSemester <= 3) {
                    echo "<li>Semester " . $nomorSemester . "</li>";
                    $nomorSemester++;
                }
                ?>
            </ol>

        </article>

    </section>

    <!-- KONTAK -->
    <section id="kontak" class="contact card">

        <h2>Kontak</h2>

        <p>
            Kunjungi
            <a href="https://github.com/<?= PROFIL_GITHUB ?>"
               target="_blank"
               rel="noopener noreferrer">
                profil GitHub saya
            </a>.
        </p>

        <h3>Formulir Kontak</h3>

        <form id="contactForm" action="index.php"
              method="get" novalidate>

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
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
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
    <p>
        &copy; <?php echo date("Y"); ?>
        <?php echo htmlspecialchars($namaMahasiswa); ?>
        [<?php echo $nim; ?>]
    </p>
</footer>

<script src="script.js"></script>

</body>
</html>