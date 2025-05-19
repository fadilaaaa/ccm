<head>
    <?php
    $PAGE_TITLE = $PAGE_TITLE ?? "";
    $PAGE_DESCRIPTION = $PAGE_DESCRIPTION ?? "";
    $PAGE_KEYWORDS = $PAGE_KEYWORDS ?? "";
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="/img/logopotrait.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $PAGE_TITLE ?> - HETI UNILA</title>
    <meta name="description" content="<?= $PAGE_DESCRIPTION ?>" />
    <meta name="keywords" content="<?= $PAGE_KEYWORDS ?>" />
    <link rel="stylesheet" type="text/css" href="/Home - PMSC HETI ADB RSPTN UNILA_files/tailwind.min.css" />
    <link rel="stylesheet" type="text/css" href="/Home - PMSC HETI ADB RSPTN UNILA_files/slick.css" />
    <link rel="stylesheet" type="text/css" href="/Home - PMSC HETI ADB RSPTN UNILA_files/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/Home - PMSC HETI ADB RSPTN UNILA_files/jquery.fancybox.min.css" />

    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            width: 50%;
            height: 8px;
            background-color: #e5e7eb;
            overflow: hidden;
            position: relative;
            margin-top: 25px;
        }

        .loader::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 25%;
            background-color: #3b82f6;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                left: -25%;
            }

            50% {
                left: 50%;
            }

            100% {
                left: 100%;
            }
        }

        .gallery-slider div {
            margin: 10px;
        }

        .gallery-image {
            max-width: 100%;
            height: auto;
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .slide-in-bottom {
            animation: slideInBottom 1s ease-in-out;
        }

        @keyframes slideInBottom {
            from {
                transform: translateY(50%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .about-image {
            width: 300px;
            height: auto;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            border: none;
            z-index: -1;
            pointer-events: none;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 0;
        }

        #monitoring {
            background-color: #f3f4f6;
            padding: 2rem 0;
        }

        #monitoring h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        #monitoring .tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        #monitoring .tab-link {
            padding: 0.5rem 1rem;
            cursor: pointer;
            background-color: #d1d5db;
            border: none;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        #monitoring .tab-link.active {
            background-color: #26778f;
            color: white;
        }

        #monitoring .tab-content {
            display: none;
        }

        #monitoring .tab-content.active {
            display: block;
        }

        #monitoring .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        #monitoring .flex img {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #monitoring table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        #monitoring th,
        #monitoring td {
            border: 1px solid #e5e7eb;
            padding: 0.5rem;
            text-align: left;
        }

        .slider img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .gallery-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
    <style>
        .tab-button.active {
            background-color: #3b82f6;
            color: #ffffff;
        }

        .tab-button {
            cursor: pointer;
            background-color: #d1d5db;
            color: #1f2937;
        }

        .gallery {
            display: none;
        }

        .gallery.active {
            display: block;
        }

        .gallery img {
            object-fit: cover;
            width: 100%;
            height: 200px;
        }

        .gallery a {
            display: block;
        }

        .gallery figcaption {
            text-align: center;
            padding: 0.5rem;
            background-color: #f1f1f1;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        figure {
            display: inline-block;
            margin: 0;
            padding: 0;
            max-width: 100%;
        }

        figure img {
            width: 100%;
            height: auto;
        }

        figcaption {
            padding: 10px;
            font-size: 0.8em;
            text-align: center;
            word-wrap: break-word;
            background-color: #f5f5f5;
            max-width: 100%;
        }

        @media (max-width: 600px) {
            figcaption {
                font-size: 0.9em;
            }
        }

        .colorprimary {
            background-color: #26778f;
        }
    </style>
    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        rel="stylesheet" />
</head>