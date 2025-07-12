<?php include '../layout/header.php'; ?>

<div class="h-screen flex justify-center bg-gray-100 pt-8 pb-24 px-4"> <!-- Tambah pt dan pb, ganti min-h-screen jadi h-screen -->
  <div class="w-full max-w-md bg-white rounded-lg shadow p-6 space-y-6">

    <div class="text-center">
      <h1 class="text-2xl font-bold text-blue-600">Login ke Akun Anda</h1>
      <p class="text-sm text-gray-600">Masukkan email dan password untuk melanjutkan.</p>
    </div>

    <!-- Form Login -->
    <form action="#" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" required>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="••••••••" required>
      </div>

      <div class="flex justify-between items-center text-sm">
        <label class="inline-flex items-center">
          <input type="checkbox" class="form-checkbox text-blue-600">
          <span class="ml-2 text-gray-600">Ingat saya</span>
        </label>
        <a href="#" class="text-blue-600 hover:underline">Lupa password?</a>
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold text-sm">Login</button>
    </form>

    <p class="text-sm text-center text-gray-600">
      Belum punya akun?
      <a href="/auth/register.php" class="text-blue-600 hover:underline font-medium">Daftar sekarang</a>
    </p>
  </div>
</div>

<?php include '../layout/footer.php'; ?>
