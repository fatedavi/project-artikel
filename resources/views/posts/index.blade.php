<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Post</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card p-4 shadow-sm">
            <h2 class="mb-4">Tambah Post</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/posts" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul:</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten:</label>
                    <textarea id="content" name="content" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div class="mt-5">
            <h2 class="mb-4">Daftar Post</h2>
            @foreach($posts as $post)
                <div class="border-bottom pb-3 mb-3">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->content }}</p>
                    <small class="text-muted">{{ $post->created_at->format('d M Y H:i') }}</small>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
