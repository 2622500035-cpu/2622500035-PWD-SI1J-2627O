// MENU NAVIGASI
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

if (navToggle && navMenu) {
    navToggle.addEventListener("click", function () {
        const isExpanded =
            navToggle.getAttribute("aria-expanded") === "true";

        navToggle.setAttribute("aria-expanded", !isExpanded);
        navMenu.classList.toggle("active");
    });

    const navLinks = navMenu.querySelectorAll("a");

    navLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            navMenu.classList.remove("active");
            navToggle.setAttribute("aria-expanded", "false");
        });
    });
}


// VALIDASI FORMULIR
const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

if (contactForm && formFeedback) {
    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const nama = document.getElementById("nama").value.trim();
        const email = document.getElementById("email").value.trim();
        const semester = document.getElementById("semester").value;
        const tanggal = document.getElementById("tanggal").value;
        const pesan = document.getElementById("pesan").value.trim();

        if (
            nama === "" ||
            email === "" ||
            semester === "" ||
            tanggal === "" ||
            pesan === ""
        ) {
            formFeedback.textContent =
                "Semua kolom wajib diisi.";
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            formFeedback.textContent =
                "Masukkan alamat email yang valid.";
            return;
        }

        if (Number(semester) < 1) {
            formFeedback.textContent =
                "Semester harus minimal 1.";
            return;
        }

        const topikDipilih =
            contactForm.querySelectorAll(
                'input[name="topik"]:checked'
            );

        if (topikDipilih.length === 0) {
            formFeedback.textContent =
                "Pilih minimal satu topik yang diminati.";
            return;
        }

        formFeedback.textContent =
            "Formulir berhasil divalidasi!";
    });

    contactForm.addEventListener("reset", function () {
        formFeedback.textContent = "";
    });
}