<?php

// Cek jika ada form yang disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $week = $_POST['week-input'];
    $building = $_POST['building-input'];
    $caption = $_POST['caption-input'];
    $image = $_FILES['image-input'];


    // Pastikan folder tujuan sudah ada
    $uploadDir = 'img/cw/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Menyusun nama file berdasarkan format week_timestamp.jpg
    $timestamp = time();
    $fileName = $week . '_' . $timestamp . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);

    // Tentukan path file yang akan disimpan
    $uploadFile = $uploadDir . $fileName;

    // Pindahkan file yang diupload ke folder yang ditentukan
    if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
        // Menyusun path file gambar untuk file JSON
        $filePath = './' . $uploadFile;

        // Menyusun data baru
        $photoData = [
            'file_name' => $filePath,
            'caption' => $caption,
            'building' => $building
        ];

        // Tentukan file JSON berdasarkan minggu
        $jsonFile = 'data/cw/' . $week . '.json';

        // Pastikan folder data/cw sudah ada
        if (!is_dir('data/cw')) {
            mkdir('data/cw', 0777, true);
        }

        // Cek jika file JSON sudah ada
        if (file_exists($jsonFile)) {
            // Membaca data JSON yang sudah ada
            $jsonData = json_decode(file_get_contents($jsonFile), true);
        } else {
            // Jika file JSON belum ada, buat struktur baru
            $jsonData = [
                'name_week' => 'week ' . $week,
                'photos' => []
            ];
        }

        // Menambahkan foto baru ke array photos
        $jsonData['photos'][] = $photoData;

        // Menyimpan data JSON yang diperbarui
        file_put_contents($jsonFile, json_encode($jsonData, JSON_PRETTY_PRINT));

        // Mengirimkan response ke AJAX
        echo "Gambar berhasil diunggah dan data JSON berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan saat mengunggah gambar.";
    }
} else {
    echo "Tidak ada data yang diterima.";
}
