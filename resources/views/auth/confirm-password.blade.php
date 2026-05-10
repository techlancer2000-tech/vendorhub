<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-white">
            Confirm Password 🔐
        </h2>

        <p class="mt-3 text-gray-400 leading-relaxed">
            This is a secure area of the application. Please confirm your password before continuing.
        </p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>

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
                autocomplete="current-password"
                placeholder="••••••••"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>

        <!-- Submit -->
        <button
            type="submit"
            class="w-full mt-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
        >
            Confirm Password
        </button>

        <!-- Back -->
        <p class="mt-8 text-center text-gray-400 text-sm">

            Want to return?

            <a
                href="{{ route('dashboard') }}"
                class="text-indigo-400 hover:text-indigo-300 font-medium"
            >
                Back to Dashboard
            </a>

        </p>
    </form>

</x-guest-layout>
