# Pertemuan 06 - PHP Dasar

## Identitas Mahasiswa
- Nama: Nur Annisa Aulia
- NIM: 2622500035
- Program Studi: Sistem Informasi
- Mata Kuliah: Pemrograman Web Dasar

## 1. Tujuan Praktikum

Melanjutkan website Profil Mahasiswa dari pertemuan 05 dengan menerapkan dasar-dasar pemrograman PHP.

## 2. Perubahan dari Pertemuan 05

Pada pertemuan 06 dilakukan beberapa perubahan:

1. Mengubah index.html menjadi index.php.
2. Menambahkan variabel dan konstanta PHP.
3. Menggunakan operator aritmetika, perbandingan, dan logika.
4. Menerapkan percabangan if-elseif-else dan switch.
5. Menggunakan perulangan for dan while.
6. Menggunakan fungsi number_format() dan date().
7. Mempertahankan CSS dan JavaScript dari P5.

## 3. Penerapan PHP

### A. Variabel dan Konstanta

php
$nim = "2622500035";
$namaMahasiswa = "Nur Annisa Aulia";
$programStudi = "SI";
$semester = 2;
$ipk = 3.75;
$statusAktif = true;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";


### B. Operator

php
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;

$semesterValid = $semester >= 1 && $semester <= $batasSemester;


### C. Percabangan if-elseif-else

php
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}


### D. Percabangan switch

php
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


### E. Perulangan for

php
for ($i = 1; $i <= 5; $i++) {
    echo "Target belajar ke-" . $i;
}


### F. Perulangan while

php
$nomorSemester = 1;

while ($nomorSemester <= 3) {
    echo "Semester " . $nomorSemester;
    $nomorSemester++;
}


### G. Fungsi PHP

php
echo number_format($ipk, 2, ',', '.');

echo date("Y");


## 4. Struktur Folder

text
pertemuan-06/
│
├── image/
│   └── Nur Annisa Aulia.jpeg
├── index.php
├── style.css
├── script.js
└── README.md


## 5. Cara Menjalankan Program

1. Buka aplikasi Laragon.
2. Klik Start All untuk menjalankan Apache.
3. Pastikan folder pertemuan-06 berada di direktori www.
4. Jalankan index.php melalui localhost.
5. Periksa hasil tampilan website pada browser.

## 6. Hasil Pengujian

- Apache Laragon berhasil dijalankan.
- File proyek sudah disalin ke folder Laragon.
- Pengujian tampilan PHP melalui localhost belum selesai.
- Pengujian menu dan formulir belum selesai.

## 7. Kesimpulan

Pada pertemuan 06, saya mempelajari penerapan dasar PHP pada website Profil Mahasiswa. PHP digunakan untuk menampilkan data mahasiswa, melakukan perhitungan, percabangan, dan perulangan. Website ini merupakan pengembangan dari tugas pertemuan 05.