<?php include '../layout/header.php'; ?>

<div class="bg-gray-100 min-h-screen p-4 space-y-4">

  <!-- Judul -->
  <div class="bg-white p-4 rounded-lg shadow-sm">
    <h1 class="text-xl font-bold text-blue-600">Daftar Harga Produk</h1>
    <p class="text-sm text-gray-600">Lihat semua harga produk berdasarkan kategori.</p>
  </div>

  <!-- Filter -->
  <div class="bg-white p-4 rounded-lg shadow-sm space-y-3">
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Pilih Kategori</label>
      <select class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring focus:border-blue-500">
        <option>Semua Kategori</option>
        <option>Top Up</option>
        <option>Membership</option>
        <option>Voucher</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Pilih Produk</label>
      <select class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring focus:border-blue-500">
        <option>Semua Produk</option>
        <option>BIGO LIVE</option>
        <option>Mobile Legends</option>
        <option>Free Fire</option>
      </select>
    </div>
  </div>

  <!-- Tabel Harga -->
  <div class="bg-white p-4 rounded-lg shadow-sm overflow-x-auto">
    <table class="min-w-full text-sm text-left text-gray-700">
      <thead class="bg-blue-50 text-blue-700 font-semibold">
        <tr>
          <th class="py-2 px-4">Kode Produk</th>
          <th class="py-2 px-4">Nama Produk</th>
          <th class="py-2 px-4">Harga</th>
          <th class="py-2 px-4">Status</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="py-2 px-4">BIGO70</td>
          <td class="py-2 px-4">70 Diamonds</td>
          <td class="py-2 px-4">Rp15.000</td>
          <td class="py-2 px-4">
            <span class="inline-block px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">On</span>
          </td>
        </tr>
        <tr>
          <td class="py-2 px-4">ML-D123</td>
          <td class="py-2 px-4">86 Diamonds</td>
          <td class="py-2 px-4">Rp12.000</td>
          <td class="py-2 px-4">
            <span class="inline-block px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">Off</span>
          </td>
        </tr>
        <!-- Tambahkan produk lainnya di sini -->
      </tbody>
    </table>
  </div>

</div>

<?php include '../layout/footer.php'; ?>
