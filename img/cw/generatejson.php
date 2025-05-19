<?php

for ($i = 1; $i < 63; $i++) {
    $folderPath = __DIR__ . '/' . $i; // Ganti dengan path folder kamu
    $files = scandir($folderPath);
    $imageList = [];

    foreach ($files as $file) {
        $filePath = $folderPath . '/' . $file;

        // Filter file gambar
        if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
            $imageList[] = [
                'filename' => $file,
                'caption' => ''
            ];
        }
    }
    $result = ['images' => $imageList];
    file_put_contents($folderPath . '/images.json', json_encode($result, JSON_PRETTY_PRINT));
}

echo "JSON files created successfully.";
