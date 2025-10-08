<?php
// Array Asosiatif Multidimensi (Produk E-commerce)
$products = [
    "P001" => [ // Kunci/ID Produk
        "nama" => "Smartphone X Pro",
        "kategori" => "Elektronik",
        "harga" => 7500000,
        "rating" => 4.8
    ],
    "P002" => [
        "nama" => "Sepatu Lari Ultra",
        "kategori" => "Fashion Olahraga",
        "harga" => 1250000,
        "rating" => 4.5
    ],
    "P003" => [
        "nama" => "Coffee Maker Digital",
        "kategori" => "Peralatan Rumah Tangga",
        "harga" => 2800000,
        "rating" => 4.9
    ]
];

// Variabel untuk melacak harga tertinggi dan detail produknya
$max_price = 0;
$best_product = null;

// Looping untuk mencari harga tertinggi
foreach ($products as $id => $product_data) {
    // Periksa apakah harga produk saat ini lebih besar dari $max_price
    if ($product_data["harga"] > $max_price) {
        $max_price = $product_data["harga"]; // Perbarui harga tertinggi
        $best_product = $product_data;       // Simpan detail produk ini
        $best_product_id = $id;              // Simpan ID produk
    }
}

// --- Output Hasil ---

echo "### Data Produk E-commerce ###<br>";
print_r($products);
echo "<hr>";

echo "### Produk dengan Harga Tertinggi ###<br>";

if ($best_product) {
    echo "Produk termahal adalah **" . $best_product["nama"] . "**.<br>";
    echo "ID Produk: " . $best_product_id . "<br>";
    echo "Kategori: " . $best_product["kategori"] . "<br>";
    echo "Harga: **Rp " . number_format($best_product["harga"], 0, ',', '.') . "**<br>";
    echo "Rating: " . $best_product["rating"] . " / 5.0<br>";
} else {
    echo "Tidak ada data produk ditemukan.";
}

?>