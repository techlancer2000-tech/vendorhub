<x-guest-layout>

    <!-- Heading -->
    <div class="mb-8">

        <div class="w-20 h-20 rounded-3xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-4xl mb-6">
            📩
        </div>

        <h2 class="text-3xl font-black text-white">
            Verify Your Email
        </h2>

        <p class="mt-3 text-gray-400 leading-relaxed">
            Thanks for signing up! Before getting started, please verify your email address by clicking the link we just sent to your inbox.
        </p>

    </div>

    <!-- Success Message -->
    @if (session('status') == 'verification-link-sent')

        <div class="mb-6 p-4 rounded-2xl border border-green-500/20 bg-green-500/10 text-green-400 text-sm">
            A fresh verification link has been sent to your email address.
        </div>

    @endif

    <!-- Actions -->
    <div class="space-y-4">

        <!-- Resend -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button
                type="submit"
                class="w-full py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold shadow-xl shadow-indigo-500/20"
            >
                Resend Verification Email
            </button>

        </form>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="w-full py-4 rounded-2xl border border-gray-700 hover:border-gray-500 transition text-gray-300 hover:text-white font-medium"
            >
                Log Out
            </button>

        </form>

    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">

        <p class="text-sm text-gray-500">
            Check your spam or promotions folder if you don't see the email.
        </p>

    </div>

</x-guest-layout>
