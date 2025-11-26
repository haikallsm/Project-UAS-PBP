<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login — e-Desa</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="/public/css/style.css" rel="stylesheet">

</head>

<body class="bg-cream min-h-screen flex items-center justify-center font-poppins">

  <div class="w-full max-w-lg mx-4">
    <div class="bg-accent border border-accent-border rounded-3xl p-8 shadow-xl">
      <div class="bg-white rounded-xl p-6">
        
        <div class="flex items-center gap-4 mb-4">
          <div class="w-11 h-11 rounded-lg bg-brand flex items-center justify-center text-white font-semibold text-lg">eD</div>
          <div>
            <h1 class="text-xl font-bold text-brand">e-Desa — Admin</h1>
            <p class="text-sm text-gray-500">Masuk ke akun Anda</p>
          </div>
        </div>

        <form id="loginForm" class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Email address</label>
            <input required type="email" name="email" placeholder="admin@example.com"
              class="mt-1 block w-full rounded-lg border border-gray-200 px-3 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-brand" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input required type="password" name="password" placeholder="••••••••"
              class="mt-1 block w-full rounded-lg border border-gray-200 px-3 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-brand" />
          </div>

          <div class="flex items-center justify-between text-sm text-gray-600">
            <label class="inline-flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300" /> <span>Remember me</span>
            </label>
            <a href="#" class="text-brand font-medium hover:underline">Forgot password?</a>
          </div>

          <button type="submit" class="w-full mt-2 bg-brand text-white py-3 rounded-xl hover:opacity-90 shadow-sm">
            Log In
          </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
          Belum punya akun? <a href="#" class="text-brand font-medium hover:underline">Sign up</a>
        </p>
      </div>
    </div>
  </div>

  <script src="/public/js/app.js"></script>

</body>
</html>