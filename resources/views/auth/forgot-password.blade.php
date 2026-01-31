<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Portfolio Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased animated-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="glass-card rounded-2xl p-8">
            <h2 class="text-3xl font-bold gradient-text text-center mb-2">Reset Password</h2>
            <p class="text-gray-400 text-center mb-8">Enter your email to receive a password reset link</p>

            @if (session('status'))
                <div class="mb-6 p-4 rounded-lg bg-green-500/20 border border-green-500/30">
                    <p class="text-sm text-green-300">{{ session('status') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                        class="block w-full rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 px-4 py-3">
                    @error('email')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full btn-gradient py-3 px-4 rounded-xl font-semibold">
                    Send Reset Link
                </button>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-400 hover:text-indigo-300 transition-colors">
                        Back to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
