<form action="/sign-up" method="POST">
  <div class="container py-5 h-screen flex justify-center items-center">
    <div class="w-full max-w-md">
      <div class="bg-gray-800 text-white rounded-lg shadow-lg">
        <div class="p-6 text-center">

          <div class="mb-8">

            <h2 class="text-2xl font-bold mb-2 uppercase">Sign Up</h2>
            <p class="text-gray-400 mb-4">Inserisci i tuoi dati</p>
            <p class="text-gray-400 mb-4">{{message}}</p>

            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
              <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
              <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
              <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
              <label for="confirmed" class="block text-sm font-medium text-gray-300 mb-1">Ripeti Password</label>
              <input type="password" name="confirmed" id="confirmed" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-gray-900 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Sign Up</button>

          </div>

        </div>
      </div>
    </div>
  </div>
</form>
