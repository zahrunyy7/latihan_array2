<?php
// Array 2 dimensi berisi data 3 siswa: Nama, Nilai Matematika, Nilai Bahasa
$siswa = [
    ["Rina", 85, 92],  // Siswa ke-1 (Indeks 0)
    ["Dian", 78, 88],  // Siswa ke-2 (Indeks 1)
    ["Eko", 90, 80]   // Siswa ke-3 (Indeks 2)
];

// 1. Cetak nilai Bahasa dari siswa ke-2 (Indeks 1)
// Siswa ke-2 berada di indeks [1]. Nilai Bahasa ada di kolom ke-3, yaitu indeks [2].
echo "### 1. Mencetak Nilai Bahasa Siswa ke-2 ###" . "<br>";
echo "Nilai Bahasa Dian (siswa ke-2) adalah: **" . $siswa[1][2] . "**<br>";

echo "<br>";

// 2. Cetak semua data menggunakan looping (loop bersarang/nested loop)
echo "### 2. Mencetak Semua Data Siswa dengan Looping ###" . "<br>";
echo "<table>";
echo "<tr><th>Nama</th><th>Matematika</th><th>Bahasa</th></tr>";

// Loop luar (outer loop) untuk mengulang baris (setiap siswa)
foreach ($siswa as $data_siswa) {
    echo "<tr>";
    
    // Loop dalam (inner loop) untuk mengulang kolom (data siswa: Nama, Matematika, Bahasa)
    foreach ($data_siswa as $data_kolom) {
        echo "<td>" . $data_kolom . "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>