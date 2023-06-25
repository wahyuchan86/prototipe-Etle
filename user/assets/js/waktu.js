  // Mengambil elemen dengan ID "tanggal"
  const tanggal = document.getElementById("tanggal");

  // Membuat array untuk nama bulan dalam Bahasa Indonesia
  const namaBulan = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober", 
     "November", 
     "Desember"   
  ];

  // Mendapatkan waktu saat ini (date) dari browser pengguna
  const waktuSekarang = new Date();

   // Menyimpan nilai hari, bulan, dan tahun ke variabel terpisah.
   const hariIni = waktuSekarang.getDate();
   const bulanIni = namaBulan[waktuSekarang.getMonth()];
   const tahunIni= waktuSekarang.getFullYear();

  
// Menampilkan hasilnya pada paragraf dengan ID 'tanggal'
tanggal.innerHTML = `${hariIni} ${bulanIni} ${tahunIni}`;
