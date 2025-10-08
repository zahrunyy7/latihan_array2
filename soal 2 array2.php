<?php
// Array 2 dimensi: [Nama, Harga, Stok]
$buah = [
    ["Apel", 15000, 10], // Indeks 0
    ["Jeruk", 12000, 8],  // Indeks 1
    ["Mangga", 20000, 5]  // Indeks 2
];

$total_nilai_inventori = 0; // Variabel untuk menyimpan total nilai

// 1. Cetak nama buah pertama
// Nama buah pertama (Apel) ada di indeks [0] (baris) dan [0] (kolom).
echo "### 1. Nama Buah Pertama ###" . "<br>";
echo "Nama buah pertama adalah: **" . $buah[0][0] . "**<br>";

echo "<br>";

// 2. Hitung total nilai (Stok * Harga) untuk semua buah
echo "### 2. Total Nilai Inventori ###" . "<br>";

// Looping untuk setiap baris (setiap jenis buah)
foreach ($buah as $item) {
    // $item[0] = Nama Buah
    $harga = $item[1]; // Harga berada di indeks [1]
    $stok = $item[2];  // Stok berada di indeks [2]
    
    // Hitung nilai per jenis buah (Harga * Stok)
    $nilai_buah = $harga * $stok;
    
    // Tambahkan nilai_buah ke total_nilai_inventori
    $total_nilai_inventori += $nilai_buah;
    
    // Opsional: Menampilkan perhitungan per buah
    echo "Nilai stok **" . $item[0] . "** (Rp " . number_format($harga, 0, ',', '.') . " x " . $stok . " unit) = Rp " . number_format($nilai_buah, 0, ',', '.') . "<br>";
}

echo "<br>";

// Cetak hasil akhir
echo "Total Nilai Inventori Keseluruhan adalah: **Rp " . number_format($total_nilai_inventori, 0, ',', '.') . "**";
?>