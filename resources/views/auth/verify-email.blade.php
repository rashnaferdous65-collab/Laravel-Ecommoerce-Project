<x-guest-layout>
    <div class="mb-6 text-sm text-gray-600">
        {{ __('Thank you for creating an account! Please check your email and verify your email address by clicking the verification link we sent you. If you did not receive the email, you can request a new verification link below.') }}
    </div>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-5 text-sm font-medium text-green-600">
            {{ __('We have sent a fresh verification link to the email address associated with your account.') }}
        </div>
    @endif

    <div class="mt-6 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <x-primary-button>
                {{ __('Send Verification Email Again') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 rounded-md"
            >
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</x-guest-layout>
