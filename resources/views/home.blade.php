<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Message Laravel</title>
</head>
<body>

    <h1>Halaman Utama</h1>

    <!-- Menampilkan Flash Message jika ada -->
    @if(session('message'))
        <div style="background-color: #d4edda; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
            <strong>Berhasil!</strong> {{ session('message') }}
        </div>
    @endif

</body>
</html>
