<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .input-glass { background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.3); }
    </style>
</head>
<body class="font-sans flex items-center justify-center">
    <div class="w-full max-w-lg px-4 py-8">
        <div class="glass rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-bold text-white mb-6"><i class="fa-solid fa-circle-plus"></i> Tambah Buku Baru</h1>
            <form action="/book/store" method="post" class="space-y-5">
                <?= csrf_field() ?> <!-- PENTING BIAR GA ERROR 403 -->
                <div>
                    <label class="block text-white/80 mb-2">Judul Buku</label>
                    <input type="text" name="title" class="input-glass w-full px-4 py-3 rounded-xl text-white" required>
                </div>
                <div>
                    <label class="block text-white/80 mb-2">Penulis</label>
                    <input type="text" name="author" class="input-glass w-full px-4 py-3 rounded-xl text-white">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-white/80 mb-2">Penerbit</label>
                        <input type="text" name="publisher" class="input-glass w-full px-4 py-3 rounded-xl text-white">
                    </div>
                    <div>
                        <label class="block text-white/80 mb-2">Tahun</label>
                        <input type="number" name="year" class="input-glass w-full px-4 py-3 rounded-xl text-white" min="1900" max="2026">
                    </div>
                </div>
                <div class="flex gap-3 pt-4">
                    <a href="/book" class="flex-1 bg-white/20 text-white text-center py-3 rounded-xl hover:bg-white/30">Batal</a>
                    <button type="submit" class="flex-1 bg-white text-purple-600 py-3 rounded-xl font-semibold hover:bg-purple-100">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>