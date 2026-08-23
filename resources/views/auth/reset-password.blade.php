<x-guest-layout>

    <form action="{{ route('password.store') }}" method="POST">
        @csrf

        {{-- Reset Token --}}
        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >

        {{-- Email --}}
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
            />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block w-full mt-1"
                :value="old('email', $request->email)"
                required
                autofocus
                autocomplete="username"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />
        </div>

        {{-- New Password --}}
        <div class="mt-4">
            <x-input-label
                for="password"
                :value="__('Password')"
            />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="block w-full mt-1"
                required
                autocomplete="new-password"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('password')"
            />
        </div>

        {{-- Confirm Password --}}
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                :value="__('Confirm Password')"
            />

            <x-text-input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="block w-full mt-1"
                required
                autocomplete="new-password"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('password_confirmation')"
            />
        </div>

        {{-- Submit --}}
        <div class="flex justify-end items-center mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>

    </form>

</x-guest-layout>
