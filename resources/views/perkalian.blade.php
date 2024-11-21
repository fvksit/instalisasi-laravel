
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perkalian</title>
</head>
<body>
    <h1>Form Perkalian</h1>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('perkalian.store') }}" method="GET">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" required>
        <br>
        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" required>
        <br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html> --}}