// script.js - interaksi sisi klien (warisan P5)

document.addEventListener("DOMContentLoaded", function () {
  // ---------- 1. Navigasi responsif ----------
  var navToggle = document.getElementById("navToggle");
  var navMenu = document.getElementById("navMenu");

  if (navToggle && navMenu) {
    navToggle.addEventListener("click", function () {
      var terbuka = navMenu.classList.toggle("open");
      navToggle.setAttribute("aria-expanded", terbuka ? "true" : "false");
      navToggle.setAttribute(
        "aria-label",
        terbuka ? "Tutup navigasi" : "Buka navigasi"
      );
    });

    // Tutup menu setelah salah satu tautan diklik (tampilan ponsel)
    navMenu.addEventListener("click", function (event) {
      if (event.target.tagName === "A") {
        navMenu.classList.remove("open");
        navToggle.setAttribute("aria-expanded", "false");
        navToggle.setAttribute("aria-label", "Buka navigasi");
      }
    });
  }

  // ---------- 2. Validasi formulir kontak ----------
  var form = document.getElementById("contactForm");
  var feedback = document.getElementById("formFeedback");

  if (form && feedback) {
    form.addEventListener("submit", function (event) {
      var nama = form.elements["nama"].value.trim();
      var email = form.elements["email"].value.trim();
      var semester = form.elements["semester"].value.trim();
      var tanggal = form.elements["tanggal"].value.trim();
      var prodi = form.elements["prodi"].value.trim();
      var pesan = form.elements["pesan"].value.trim();
      var jenisPesan = form.querySelector('input[name="jenis_pesan"]:checked');

      var galat = "";

      if (nama.length < 3) {
        galat = "Nama lengkap minimal 3 karakter.";
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        galat = "Format email belum benar.";
      } else if (semester === "" || Number(semester) < 1 || Number(semester) > 14) {
        galat = "Semester harus berupa angka 1 sampai 14.";
      } else if (tanggal === "") {
        galat = "Tanggal kunjungan wajib diisi.";
      } else if (!jenisPesan) {
        galat = "Pilih jenis pesan.";
      } else if (prodi === "") {
        galat = "Pilih program studi.";
      } else if (pesan === "") {
        galat = "Pesan wajib diisi.";
      }

      // Pemrosesan data formulir dengan PHP baru dibahas di P7,
      // sehingga pengiriman ditahan dan hasil validasi hanya ditampilkan.
      event.preventDefault();

      if (galat !== "") {
        feedback.textContent = galat;
        feedback.className = "error";
      } else {
        feedback.textContent = "Data formulir valid.";
        feedback.className = "success";
      }
    });

    form.addEventListener("reset", function () {
      feedback.textContent = "";
      feedback.className = "";
    });
  }
});