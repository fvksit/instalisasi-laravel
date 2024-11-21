<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    <form action="{{ route('cars.store') }}" method="POST">
    @csrf
        <label for="name">Car Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="jenis">Car Type:</label>
        <input type="text" name="jenis" id="jenis" required>

        <label for="harga">Price:</label>
        <input type="number" name="harga" id="harga" required>

        <label for="tanggal_pembuatan">Tanggal Pembuatan:</label>
        <input type="date" name="tanggal_pembuatan" id="tanggal_pembuatan" required>

        <button type="submit">Save</button>
    </form>
    <h1>Car List</h1>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
    <table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Tanggal Pembuatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carsEloquent as $car)
            <tr>
                <td>{{ $car->nama }}</td>
                <td>{{ $car->jenis }}</td>
                <td>{{ number_format($car->harga, 0, ',', '.') }}</td>
                <td>{{ $car->tanggal_pembuatan }}</td>
                <td>{{ $car->manufacture->nama ?? 'Tidak Ada Manufaktur' }}</td>
                <td>{{ $car->manufacture->alamat ?? 'Tidak Ada Alamat' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</table>
</body>
</html>