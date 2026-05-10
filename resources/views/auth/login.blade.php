<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-white">
            Welcome Back 👋
        </h2>

        <p class="mt-2 text-gray-400">
            Login to continue managing your marketplace.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('login') }}">
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

            <div class="flex items-center justify-between">

                <x-input-label
                    for="password"
                    :value="__('Password')"
                    class="text-gray-300"
                />

                @if (Route::has('password.request'))
                    <a
                        class="text-sm text-indigo-400 hover:text-indigo-300 transition"
                        href="{{ route('password.request') }}"
                    >
                        Forgot Password?
                    </a>
                @endif

            </div>

            <x-text-input
                id="password"
                class="block mt-2 w-full rounded-2xl border-gray-700 bg-gray-800 text-white focus:border-indigo-500 focus:ring-indigo-500"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Remember -->
        <div class="mt-6 flex items-center">

            <input
                id="remember_me"
                type="checkbox"
                class="rounded border-gray-700 bg-gray-800 text-indigo-600 focus:ring-indigo-500"
                name="remember"
            >

            <label
                for="remember_me"
                class="ms-3 text-sm text-gray-400"
            >
                Remember me
            </label>

        </div>

        <!-- Login Button -->
        <button
            type="submit"
            class="w-full mt-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
        >
            Log In
        </button>

        <!-- Register -->
        <p class="mt-8 text-center text-gray-400 text-sm">

            Don't have an account?

            <a
                href="{{ route('register') }}"
                class="text-indigo-400 hover:text-indigo-300 font-medium"
            >
                Create Account
            </a>

        </p>
    </form>

</x-guest-layout>
