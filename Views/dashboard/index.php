<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard e-Desa</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">
  
</head>

<body class="bg-cream min-h-screen flex font-poppins">

<!-- Toggle Button -->
<button id="toggleSidebar" class="fixed left-3 top-3 z-50 p-2 bg-white rounded-md shadow-md border hover:bg-gray-200">
  ☰
</button>

<!-- SIDEBAR -->
<div id="sidebar" class="w-64 bg-accent border-r border-accent-border text-gray-700 p-6 space-y-4 fixed h-full transition-all duration-300">
  <h2 class="text-3xl font-bold mb-6 text-gray-700">e-Desa</h2>

  <ul class="space-y-3">
    <li class="p-3 rounded-lg font-semibold bg-sidebar-active cursor-pointer" onclick="location.href='dashboard.html'">
      Dashboard
    </li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer" onclick="location.href='profil.html'">
      Profil Desa
    </li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer">Users</li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer">Export Data</li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer">Surat Keterangan</li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer">Surat Pengantar</li>
    <li class="p-3 rounded-lg hover:bg-sidebar-hover cursor-pointer">Tema Aplikasi</li>
  </ul>
</div>

<!-- CONTENT -->
<div id="content" class="flex-1 p-10 ml-64 transition-all duration-300">
  <h1 class="text-4xl font-bold mb-8 text-brand">Dashboard</h1>

  <!-- Stats -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    
    <div class="rounded-xl p-6 text-center shadow-md border-l-8 border-brand bg-white">
      <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Penduduk</h3>
      <p class="text-3xl font-bold text-brand">1.245</p>
    </div>

    <div class="rounded-xl p-6 text-center shadow-md border-l-8 border-brand bg-white">
      <h3 class="text-lg font-semibold text-gray-700 mb-2">Surat Masuk</h3>
      <p class="text-3xl font-bold text-brand">87</p>
    </div>

    <div class="rounded-xl p-6 text-center shadow-md border-l-8 border-brand bg-white">
      <h3 class="text-lg font-semibold text-gray-700 mb-2">Pengguna Aktif</h3>
      <p class="text-3xl font-bold text-brand">56</p>
    </div>
  </div>

  <!-- TABEL -->
  <h2 class="text-2xl font-semibold mb-4">Permintaan Surat Terbaru</h2>

  <table class="w-full bg-white shadow-md rounded-xl overflow-hidden text-left">
    <thead class="bg-accent border-b border-accent-border">
      <tr>
        <th class="p-4 font-semibold">Nama</th>
        <th class="p-4 font-semibold">Jenis Surat</th>
        <th class="p-4 font-semibold">Tanggal</th>
        <th class="p-4 font-semibold">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border-b">
        <td class="p-4">Budi Santoso</td>
        <td class="p-4">Surat Keterangan Domisili</td>
        <td class="p-4">21 Nov 2025</td>
        <td class="p-4 text-green-600 font-semibold">Selesai</td>
      </tr>
      <tr class="border-b">
        <td class="p-4">Siti Aminah</td>
        <td class="p-4">Surat Keterangan Usaha</td>
        <td class="p-4">19 Nov 2025</td>
        <td class="p-4 text-yellow-600 font-semibold">Proses</td>
      </tr>
      <tr>
        <td class="p-4">Ahmad Fauzi</td>
        <td class="p-4">Surat Pengantar SKCK</td>
        <td class="p-4">18 Nov 2025</td>
        <td class="p-4 text-red-600 font-semibold">Ditolak</td>
      </tr>
    </tbody>
  </table>
</div>

<script src="js/dashboard.js"></script>

</body>
</html>
