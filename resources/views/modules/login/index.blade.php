<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astronacci - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/astronacci-logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-2xl shadow-lg">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/img/astronacci-logo.png') }}" alt="Logo" class="w-64 h-13" />
        </div>

        <form class="space-y-4" method="POST" autocomplete="off">
          @csrf
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input
                type="email"
                name="email"
                value="{{ request('email') }}"
                class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                style="padding: 10px; border-radius: 8px;"
                placeholder="your@example.com"
            />
          </div>

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

          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors"
          >
            Sign In
          </button>
        </form>

        <br>

        <div id="g_id_onload" data-client_id="{{ $googleClientId }}" data-context="signin" data-ux_mode="popup"
            data-callback="handleGoogleLogin">
        </div>

        <div class="g_id_signin" data-type="standard"></div>
        <br>
        <button
          onclick="handleFacebookLogin()"
          class="relative w-full flex items-center justify-center bg-[#3b5998] text-white py-2 rounded-lg hover:bg-[#2d4373] transition-all font-medium"
        >
          <!-- Icon absolutely positioned to the left -->
          <span class="absolute left-4">
            <i class="fab fa-facebook-f"></i>
          </span>

          <!-- Centered text -->
          <span>Login with Facebook</span>

    </div>
    <script src="{{ asset('assets/js/login.js') }}" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script>
      var apiBaseUrl = "{{ $apiBaseUrl }}";
      var gbci = "{{ $facebookClientId }}";
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
