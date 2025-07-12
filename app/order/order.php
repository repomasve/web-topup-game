<?php include '../../layout/header.php'; ?>

<div class="bg-gray-100 min-h-screen p-4 space-y-4 pb-24">

  <!-- Judul + Gambar -->
  <div class="bg-white rounded-lg shadow-sm p-4">
    <div class="flex items-center space-x-4">
      <img src="/assets/img/bigo.png" alt="BIGO" class="w-16 h-16 rounded bg-gray-200 object-cover">
      <div>
        <h1 class="text-xl font-bold text-blue-600">BIGO LIVE</h1>
        <p class="text-sm text-gray-600">Top Up Diamonds dan Membership BIGO Live cepat & aman.</p>
      </div>
    </div>
  </div>

  <!-- Input User ID -->
  <div class="bg-white rounded-lg shadow-sm p-4">
    <label class="block text-sm font-semibold text-gray-700 mb-1">User ID</label>
    <input type="text" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-500 text-sm" placeholder="Masukkan User ID kamu" />
    <p class="text-xs text-gray-400 mt-1">Contoh: 123456789</p>
  </div>

  <!-- Daftar Produk -->
  <div class="bg-white rounded-lg shadow-sm p-4">
    <h2 class="text-sm font-semibold text-gray-700 mb-2">Pilih Produk</h2>
    <div class="grid grid-cols-2 gap-3 items-stretch">
      <?php
      $allProducts = [
        ["name" => "70 Diamonds", "price" => "Rp15.000"],
        ["name" => "140 Diamonds + Bonus", "price" => "Rp30.000"],
        ["name" => "280 Diamonds (Best Deal)", "price" => "Rp60.000"],
        ["name" => "560 Diamonds", "price" => "Rp120.000"],
        ["name" => "Weekly VIP Membership", "price" => "Rp45.000"],
        ["name" => "Monthly VIP Membership Promo", "price" => "Rp120.000"]
      ];
      foreach ($allProducts as $product): ?>
        <button class="w-full h-full border border-gray-200 rounded-lg px-3 py-2 text-left hover:border-blue-500 flex flex-col justify-between">
          <div class="text-sm font-medium text-gray-800 leading-snug"><?= $product["name"] ?></div>
          <div class="text-xs font-semibold text-blue-600 mt-2"><?= $product["price"] ?></div>
        </button>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Metode Pembayaran -->
  <div class="bg-white rounded-lg shadow-sm p-4">
    <h2 class="text-sm font-semibold text-gray-700 mb-2">Pilih Pembayaran</h2>
    <div class="grid grid-cols-2 gap-3">
      <button class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm hover:border-blue-500">QRIS</button>
      <button class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm hover:border-blue-500">OVO</button>
      <button class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm hover:border-blue-500">DANA</button>
      <button class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm hover:border-blue-500">Bank Transfer</button>
    </div>
  </div>

  <!-- Cara Top Up -->
  <div class="bg-white rounded-lg shadow-sm p-4 text-sm text-gray-600 leading-relaxed">
    <h2 class="font-semibold text-gray-700 mb-2">Cara Top Up</h2>
    <ol class="list-decimal list-inside space-y-1">
      <li>Masukkan Nomor/User ID Kamu</li>
      <li>Pilih Produk yang kamu inginkan</li>
      <li>Selesaikan pembayaran</li>
      <li>Produk akan ditambahkan ke akun kamu</li>
    </ol>
  </div>

  <!-- Tombol Submit -->
  <div class="bg-white rounded-lg shadow-sm p-4">
    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold text-sm shadow">Lanjutkan Pembayaran</button>
  </div>

</div>

<?php include '../../layout/footer.php'; ?>
