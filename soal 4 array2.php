<?php
// Tentukan ukuran matriks
$rows = 3;
$cols = 3;

// Inisialisasi variabel untuk menyimpan total
$total_sum = 0;

// 1. Buat array 2 dimensi 3x3 berisi angka acak (1-9)
$matrix = [];
for ($i = 0; $i < $rows; $i++) {
    $row_data = [];
    for ($j = 0; $j < $cols; $j++) {
        // Hasilkan angka acak antara 1 dan 9
        $random_number = rand(1, 9);
        $row_data[] = $random_number;
        
        // Langsung tambahkan ke total saat mengisi array
        $total_sum += $random_number;
    }
    $matrix[] = $row_data;
}

// 2. Cetak array dalam bentuk matriks (menggunakan tabel HTML agar rapi)
echo "### Matriks Angka Acak 3x3 ###<br>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $element) {
        // Menggunakan padding untuk meratakan tampilan angka
        echo "<td style='text-align:center; font-weight:bold;'>" . $element . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";

// 3. Hitung jumlah total semua elemen (sudah dilakukan saat pengisian array)
echo "### Total Jumlah Semua Elemen ###<br>";
echo "Jumlah total semua angka dalam matriks adalah: **" . $total_sum . "**<br>";
?>