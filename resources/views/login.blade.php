<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekan Wisata Login</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full">
      <div class="flex justify-center pb-4 flex-col items-center">
        <!-- Pastikan path gambar sudah benar -->
        <img src="images\logo_2.png" alt="Rekan Wisata Logo" class="w-39 h-39">
        <h1 class="text-2xl font-bold text-center">REKAN WISATA</h1>
      </div>
      <div class="container mx-auto px-2 py-8">
        <div class="max-w-md mx-auto shadow-sm rounded-xl overflow-hidden">
          <div class="p-4">
            <form action="#">
              <div class="mb-4">
                <label for="email" class="text-sm text-gray-600 block mb-2">Email Address</label>
                <input type="email" id="email" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-stroke-2 border-lime-950 shadow-sm">
              </div>
              <div class="mb-4">
                <label for="password" class="text-sm text-gray-600 block mb-2">Password</label>
                <input type="password" id="password" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-stroke-2 border-lime-950 shadow-sm">
              </div>
              <button type="submit" class="w-full rounded-2xl bg-lime-950 mh-6 px-2 py-3 text-center text-white font-medium shadow-sm hover:bg-lime-900 focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
