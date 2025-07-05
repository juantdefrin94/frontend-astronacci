<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronacci - Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/astronacci-logo.png') }}') }}">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md p-6 bg-white rounded-2xl shadow-lg">
    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="{{ asset('assets/img/astronacci-logo.png') }}" alt="Logo" class="w-64 h-13" />
    </div>

    <!-- Login Form -->
    <form class="space-y-4" method="POST" autocomplete="off">
      @csrf
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
            type="email"
            name="email"
            value="{{ request('email') }}"
            {{ request('email') ? 'readonly' : '' }}
            class="w-100 rounded-lg border border-gray-300"
            style="padding: 10px; border-radius: 8px;"
        />

        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input
            type="text"
            name="name"
            value="{{ request('name') }}"
            {{ request('name') ? 'readonly' : '' }}
            class="w-100 rounded-lg border border-gray-300"
            style="padding: 10px; border-radius: 8px;"
        />

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="••••••••"
        />
      </div>

      <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="••••••••"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors"
      >
        Sign Up
      </button>
    </form>
  </div>
</body>
</html>
