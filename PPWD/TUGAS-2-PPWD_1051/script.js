// JavaScript Eksternal - Pengembangan Website Biodata
// Materi: variabel, fungsi, DOM, percabangan, event, dan preventDefault().

// Mengambil elemen form dan input menggunakan DOM.
const formPendaftaran = document.getElementById("formPendaftaran");
const kolomNama = document.getElementById("nama");
const kolomEmail = document.getElementById("email");
const kolomTelepon = document.getElementById("nim");
const kolomPesan = document.getElementById("alasan");
const hitungKarakter = document.getElementById("hitungKarakter");
const pilihanLaki = document.getElementById("lk");
const pilihanPerempuan = document.getElementById("pr");
const pilihanTeknologi = document.getElementById("teknologi");
const pilihanFiksi = document.getElementById("fiksi");
const tombolTema = document.getElementById("tombolTema");

// Event submit dijalankan ketika tombol "Kirim" ditekan.
formPendaftaran.addEventListener("submit", function (event) {

    // Mencegah form melakukan reload halaman.
    event.preventDefault();

    // Mengambil nilai input dan menghapus spasi di awal/akhir.
    const nilaiNama = kolomNama.value.trim();
    const nilaiEmail = kolomEmail.value.trim();
    const nilaiTelepon = kolomTelepon.value.trim();

    // Percabangan untuk validasi sederhana.
    if (nilaiNama === "") {
        alert("Nama Lengkap wajib diisi.");
    } else if (nilaiNama.length < 3) {
        alert("Nama Lengkap minimal 3 karakter.");
    } else if (nilaiEmail === "") {
        alert("Email wajib diisi.");
    } else if (!nilaiEmail.includes("@") || !nilaiEmail.includes(".")) {
        alert("Format email tidak valid.");
    } else if (nilaiTelepon === "") {
        alert("Nomor Telepon wajib diisi.");
    } else if (nilaiTelepon.length < 10) {
        alert("Nomor Telepon minimal 10 digit.");
    } else if (!pilihanLaki.checked && !pilihanPerempuan.checked) {
        alert("Jenis Kelamin wajib dipilih.");
    } else if (!pilihanTeknologi.checked && !pilihanFiksi.checked) {
        alert("Minimal satu minat atau hobi harus dipilih.");
    } else {
        console.log("=== Data Formulir ===");
        console.log("Nama:", nilaiNama);
        console.log("Email:", nilaiEmail);
        console.log("Nomor Telepon:", nilaiTelepon);

        alert(`Terima kasih, ${nilaiNama}! Pesan berhasil diterima.`);
    }
});

kolomPesan.addEventListener("input", function () {
    const jumlahKarakter = kolomPesan.value.length;
    hitungKarakter.textContent = `${jumlahKarakter} karakter`;
});

tombolTema.addEventListener("click", function () {

    document.body.classList.toggle("mode-gelap");

    if (document.body.classList.contains("mode-gelap")) {
        tombolTema.textContent = "☀️ Mode Terang";
    } else {
        tombolTema.textContent = "🌙 Mode Gelap";
    }

});

// Output ke Console untuk membantu proses debugging.
console.log("JavaScript berhasil terhubung ke website.");
console.log("Nama halaman:", document.title);