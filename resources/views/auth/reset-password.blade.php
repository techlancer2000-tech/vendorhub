<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-white">
            Reset Password 🔑
        </h2>

        <p class="mt-3 text-gray-400 leading-relaxed">
            Create a new secure password for your VendorHub account.
        </p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Token -->
        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >

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
                :value="old('email', $request->email)"
                required
                autofocus
                autocomplete="username"
                placeholder="you@example.com"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>

        <!-- Password -->
        <div class="mt-6">

            <x-input-label
                for="password"
                :value="__('New Password')"
                class="text-gray-300"
            />

            <x-text-input
                id="password"
                class="block mt-2 w-full rounded-2xl border-gray-700 bg-gray-800 text-white focus:border-indigo-500 focus:ring-indigo-500"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>

        <!-- Confirm Password -->
        <div class="mt-6">

            <x-input-label
                for="password_confirmation"
                :value="__('Confirm Password')"
                class="text-gray-300"
            />

            <x-text-input
                id="password_confirmation"
                class="block mt-2 w-full rounded-2xl border-gray-700 bg-gray-800 text-white focus:border-indigo-500 focus:ring-indigo-500"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />

        </div>

        <!-- Submit -->
        <button
            type="submit"
            class="w-full mt-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
        >
            Reset Password
        </button>

        <!-- Back -->
        <p class="mt-8 text-center text-gray-400 text-sm">

            Remembered your password?

            <a
                href="{{ route('login') }}"
                class="text-indigo-400 hover:text-indigo-300 font-medium"
            >
                Back to Login
            </a>

        </p>

    </form>

</x-guest-layout>
