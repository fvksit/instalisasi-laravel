{{-- View --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perkalian</title>
</head>
<body>
    <h1>Hasil Perkalian</h1>
    <p>{{ $angka1 }} x {{ $angka2 }} = {{ $hasil }}</p>
    <a href="{{ route('perkalian.form') }}">Kembali ke Form</a>
</body>
</html>