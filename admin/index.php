<?php
include '../config.php';
include 'layout/header.php';

// Cek banner config jika ada
$banner = '/assets/image/banner.png'; // default
$result = mysqli_query($conn, "SELECT isi FROM webconfig WHERE nama = 'banner'");
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  if (!empty($row['isi'])) $banner = $row['isi'];
}

// Ambil brand populer jika ada
$brandQuery = mysqli_query($conn, "SELECT * FROM brand WHERE status = 'on' LIMIT 6");
?>

<!-- Banner -->
<section class="p-4">
  <img src="<?= htmlspecialchars($banner) ?>" alt="Promo" class="rounded-lg w-full" />
</section>

<!-- Flash Sale / Promo -->
<section class="p-4">
  <div class="flex items-center gap-2 mb-3">
    <img src="https://cdn-icons-png.flaticon.com/512/953/953803.gif" alt="Petir" class="h-5 w-5">
    <h2 class="font-semibold text-red-600">Flash Sale / Promo</h2>
  </div>
  <div class="grid grid-cols-3 gap-3">
    <a href="#" class="bg-white p-2 rounded-lg shadow text-center border border-red-500">
      <img src="https://upload.wikimedia.org/wikipedia/en/4/4e/Mobile_Legends_Bang_Bang.png" class="mx-auto h-12" />
      <p class="text-xs mt-2 text-red-500 font-semibold">MLBB Diskon 20%</p>
    </a>
    <a href="#" class="bg-white p-2 rounded-lg shadow text-center border border-red-500">
      <img src="https://upload.wikimedia.org/wikipedia/en/9/9f/PUBG_New_State_logo.png" class="mx-auto h-12" />
      <p class="text-xs mt-2 text-red-500 font-semibold">PUBG Bonus UC</p>
    </a>
  </div>
</section>

<!-- Brand Populer -->
<?php if ($brandQuery && mysqli_num_rows($brandQuery) > 0): ?>
<section class="p-4 flex-1">
  <h2 class="font-semibold text-gray-700 mb-3">Top Up Populer</h2>
  <div class="grid grid-cols-3 gap-3">
    <?php while ($brand = mysqli_fetch_assoc($brandQuery)) : ?>
      <a href="produk.php?brand=<?= $brand['id'] ?>" class="bg-white p-2 rounded-lg shadow text-center">
        <img src="/assets/icon/<?= htmlspecialchars($brand['icon']) ?>" class="mx-auto h-12" alt="<?= htmlspecialchars($brand['nama_brand']) ?>" />
        <p class="text-xs mt-2"><?= htmlspecialchars($brand['nama_brand']) ?></p>
      </a>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>

<?php include 'layout/footer.php'; ?>
