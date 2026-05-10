<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-white">
            Forgot Password 🔒
        </h2>

        <p class="mt-3 text-gray-400 leading-relaxed">
            No worries. Enter your email address and we’ll send you a secure password reset link.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status
        class="mb-6"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div>

            <x-input-label
                for="email"
                :value="__('Email Address')"
                class="text-gray-300"
            />

            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-2xl border-gray-700 bg-gray-800 text-white focus:border-indigo-500 focus:ring-indigo-500"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                placeholder="you@example.com"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>

        <!-- Submit -->
        <button
            type="submit"
            class="w-full mt-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
        >
            Email Password Reset Link
        </button>

        <!-- Back to Login -->
        <p class="mt-8 text-center text-gray-400 text-sm">

            Remember your password?

            <a
                href="{{ route('login') }}"
                class="text-indigo-400 hover:text-indigo-300 font-medium"
            >
                Back to Login
            </a>

        </p>
    </form>

</x-guest-layout>
