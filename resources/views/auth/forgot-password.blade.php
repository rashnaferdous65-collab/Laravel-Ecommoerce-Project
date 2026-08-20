<x-guest-layout>
    <div class="mb-5 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Enter your email address below and we will send you a link to reset your password.') }}
    </div>

    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <div class="space-y-2">
            <x-input-label
                for="email"
                :value="__('Email')"
            />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block w-full"
                :value="old('email')"
                required
                autofocus
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <div class="flex justify-end mt-5">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>