<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klinik Bintang Barokah</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="h-100">

    @include('components.navbar')
    <div class="container w-75 mt-5">
        <div class="d-flex align-items-center">
            <img src="{{ asset('logo.jpeg') }}" alt='logo' />
            <h1 class="text-justify-hyphen" style="font-size: 3em;">
                Website untuk menyimpan daftar pasien Klinik Jebres Berkah
            </h1>
        </div>
        <button class="btn btn-lg btn-primary d-flex ms-auto">
            <a href="{{ route('patients.index') }}" class="text-decoration-none text-light">Lihat Daftar Pasien</a>
        </button>
    </div>
    @include('components.notification')
</body>
</html>
