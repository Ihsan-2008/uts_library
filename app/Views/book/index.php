<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    </style>
</head>
<body class="font-sans">
    <div class="container mx-auto px-4 py-8">
        <div class="glass rounded-2xl shadow-2xl p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-book-open"></i> <?= $title ?>
                </h1>
                <a href="/book/create" class="bg-white text-purple-600 px-5 py-2.5 rounded-xl font-semibold hover:bg-purple-100 transition-all duration-300 flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Tambah Buku
                </a>
            </div>

            <?php if(session()->getFlashdata('success')): ?>
                <div class="bg-green-500/20 border border-green-400 text-green-100 px-4 py-3 rounded-xl mb-6">
                    <i class="fa-solid fa-circle-check"></i> <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <div class="overflow-x-auto">
                <table class="w-full text-white">
                    <thead>
                        <tr class="border-b border-white/20">
                            <th class="text-left py-3 px-4">#</th>
                            <th class="text-left py-3 px-4">Judul Buku</th>
                            <th class="text-left py-3 px-4">Penulis</th>
                            <th class="text-left py-3 px-4">Tahun</th>
                            <th class="text-center py-3 px-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($books as $b): ?>
                        <tr class="border-b border-white/10 hover:bg-white/10 transition">
                            <td class="py-4 px-4"><?= $no++ ?></td>
                            <td class="py-4 px-4 font-semibold"><?= $b['title'] ?></td>
                            <td class="py-4 px-4 text-white/80"><?= $b['author'] ?></td>
                            <td class="py-4 px-4"><span class="bg-white/20 px-3 py-1 rounded-full text-sm"><?= $b['year'] ?></span></td>
                            <td class="py-4 px-4">
                                <div class="flex justify-center gap-2">
                                    <a href="/book/detail/<?= $b['id'] ?>" class="bg-blue-500/30 hover:bg-blue-500/50 p-2.5 rounded-lg transition"><i class="fa-solid fa-eye"></i></a>
                                    <a href="/book/edit/<?= $b['id'] ?>" class="bg-yellow-500/30 hover:bg-yellow-500/50 p-2.5 rounded-lg transition"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/book/delete/<?= $b['id'] ?>" class="bg-red-500/30 hover:bg-red-500/50 p-2.5 rounded-lg transition" onclick="return confirm('Yakin hapus <?= $b['title'] ?>?')"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if(empty($books)): ?>
                        <tr><td colspan="5" class="text-center py-8 text-white/60">Belum ada data buku</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>