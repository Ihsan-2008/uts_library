<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    </style>
</head>
<body class="font-sans flex items-center justify-center">
    <div class="w-full max-w-2xl px-4 py-8">
        <div class="glass rounded-2xl shadow-2xl p-8 text-white">
            <h1 class="text-3xl font-bold mb-8"><i class="fa-solid fa-circle-info"></i> Detail Buku</h1>
            <div class="space-y-4 mb-8">
                <div class="flex border-b border-white/20 pb-3">
                    <span class="w-1/3 font-semibold text-white/70">Judul Buku</span>
                    <span class="w-2/3 text-xl font-bold"><?= $book['title'] ?></span>
                </div>
                <div class="flex border-b border-white/20 pb-3">
                    <span class="w-1/3 font-semibold text-white/70">Penulis</span>
                    <span class="w-2/3"><?= $book['author'] ?: '-' ?></span>
                </div>
                <div class="flex border-b border-white/20 pb-3">
                    <span class="w-1/3 font-semibold text-white/70">Penerbit</span>
                    <span class="w-2/3"><?= $book['publisher'] ?: '-' ?></span>
                </div>
                <div class="flex">
                    <span class="w-1/3 font-semibold text-white/70">Tahun Terbit</span>
                    <span class="w-2/3"><span class="bg-white/20 px-4 py-1 rounded-full"><?= $book['year'] ?></span></span>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="/book" class="flex-1 bg-white/20 text-center py-3 rounded-xl font-semibold hover:bg-white/30"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                <a href="/book/edit/<?= $book['id'] ?>" class="flex-1 bg-yellow-500/50 text-center py-3 rounded-xl font-semibold hover:bg-yellow-500/70"><i class="fa-solid fa-pen"></i> Edit</a>
                <a href="/book/delete/<?= $book['id'] ?>" class="flex-1 bg-red-500/50 text-center py-3 rounded-xl font-semibold hover:bg-red-500/70" onclick="return confirm('Yakin hapus?')"><i class="fa-solid fa-trash"></i> Hapus</a>
            </div>
        </div>
    </div>
</body>
</html>