<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-white">
            Create Account 🚀
        </h2>

        <p class="mt-2 text-gray-400">
            Start building your multi-vendor marketplace today.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label
                for="name"
                :value="__('Full Name')"
                class="text-gray-300"
            />

            <x-text-input
                id="name"
                class="block mt-2 w-full rounded-2xl border-gray-700 bg-gray-800 text-white focus:border-indigo-500 focus:ring-indigo-500"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="John Doe"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />
        </div>

        <!-- Email -->
        <div class="mt-6">
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
                :value="__('Password')"
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

        <!-- Terms -->
        <div class="mt-6 flex items-start gap-3">

            <input
                type="checkbox"
                required
                class="mt-1 rounded border-gray-700 bg-gray-800 text-indigo-600 focus:ring-indigo-500"
            >

            <p class="text-sm text-gray-400 leading-relaxed">
                I agree to the
                <a href="#"
                   class="text-indigo-400 hover:text-indigo-300">
                    Terms of Service
                </a>
                and
                <a href="#"
                   class="text-indigo-400 hover:text-indigo-300">
                    Privacy Policy
                </a>.
            </p>
        </div>

        <!-- Register Button -->
        <button
            type="submit"
            class="w-full mt-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
        >
            Create Account
        </button>

        <!-- Login -->
        <p class="mt-8 text-center text-gray-400 text-sm">

            Already have an account?

            <a
                href="{{ route('login') }}"
                class="text-indigo-400 hover:text-indigo-300 font-medium"
            >
                Login
            </a>

        </p>
    </form>

</x-guest-layout>
