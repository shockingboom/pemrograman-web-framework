<!DOCTYPE html>
<html>
<head>
    <title>Search Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="p-6">
    <h1 class="text-xl font-bold mb-4">Daftar Post</h1>
    
    <!-- Form Pencarian -->
    <form method="GET" action="{{ url('/posts') }}">
        <input type="text" name="search" placeholder="Cari..." class="border p-2">
        <button type="submit" class="bg-blue-500 text-white p-2">Cari</button>
    </form>

    <ul class="mt-4">
        @foreach ($posts as $post)
            <li class="mb-2 border-b pb-2">
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>

    <!-- Tampilkan Pagination -->
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</body>
</html>
