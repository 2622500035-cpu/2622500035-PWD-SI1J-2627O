const form = document.getElementById("formDaftar");
const hasil = document.getElementById("hasil");

function galat(id, pesan) {
  document.getElementById("galat-" + id).textContent = pesan;
  return pesan === "";
}

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const nama = form.nama.value.trim();
  const email = form.email.value.trim();
  const hp = form.hp.value.trim();
  const jk = form.jk.value;
  const pedas = form.pedas.value;
  const pesan = form.pesan.value.trim();
  console.log("pesan:", pesan);

  const cek = [
    galat("nama", nama.length < 3 ? "Nama minimal 3 huruf." : ""),
    galat("email", /^\S+@\S+\.\S+$/.test(email) ? "" : "Format email belum benar."),
    galat("hp", /^08\d{8,11}$/.test(hp) ? "" : "Nomor HP harus diawali 08 dan 10-13 digit."),
    galat("jk", jk ? "" : "Pilih jenis kelamin."),
    galat("pedas", pedas ? "" : "Pilih tingkat kepedasan."),
  ];
  if (cek.includes(false)) { hasil.hidden = true; return; }

  const topping = [...form.querySelectorAll("input[name=topping]:checked")]
    .map((c) => c.value).join(", ") || "-";

  hasil.innerHTML = "<h3>Pendaftaran berhasil</h3><p></p><ul class='isi'></ul>";
  hasil.querySelector("p").textContent = "Terima kasih, " + nama + "! Data kamu sudah kami catat.";
  const ul = hasil.querySelector("ul");
  [["Email", email], ["No. HP", hp], ["Jenis kelamin", jk],
   ["Tingkat pedas", pedas], ["Topping", topping],
   ["Pesan", pesan || "-"]
  ].forEach(([k, v]) => {
    const li = document.createElement("li");
    li.textContent = k + ": " + v;
    ul.appendChild(li);
  });
  hasil.hidden = false;
  form.reset();
});

document.getElementById("btnReset").addEventListener("click", function () {
  hasil.hidden = true;
  document.querySelectorAll(".galat").forEach((g) => (g.textContent = ""));
});