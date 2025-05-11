<?php
// Lisansları depolayan bir dizi (bu veritabanı yerine dosya da olabilir)
$validLicenses = [
    'TEST1' => 'gecerli',
    'API_KEY_2' => 'gecerli',
    'API_KEY_3' => 'gecersiz'
];

// API key'ini alıyoruz
$apiKey = $_GET['api_key'];

// Lisans doğrulaması yapıyoruz
if (isset($validLicenses[$apiKey])) {
    echo $validLicenses[$apiKey];  // Geçerli veya geçersiz yanıtı gönder
} else {
    echo 'gecersiz';  // API key bulunamazsa geçersiz yanıtı
}
?>
