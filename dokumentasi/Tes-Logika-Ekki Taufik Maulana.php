<?php
$kalimat = "input Kalimat disini: ";
function hitungJumlahKata($kalimat) {
    // Menghapus karakter khusus dan tanda baca dari kalimat
    $kalimat = preg_replace('/[^\p{L}\p{N}\s]/u', '', $kalimat);
    
    // Menghitung jumlah kata dalam kalimat
    $jumlah_kata = str_word_count($kalimat);
    
    return $jumlah_kata;
}

echo "Hasil Dari Jumlah Kalimat: " . hitungJumlahKata($kalimat);
?>