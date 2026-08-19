<x-guest-layout>
    <div class="max-w-md mx-auto">
        <div class="mb-5">
            <h2 class="text-lg font-semibold text-gray-800">
                {{ __('Confirm Your Password') }}
            </h2>

            <p class="mt-2 text-sm text-gray-600">
                {{ __('For your security, please enter your password to continue.') }}
            </p>
        </div>

        <form action="{{ route('password.confirm') }}" method="POST">
            @csrf

            <div>
                <x-input-label 
                    for="password" 
                    :value="__('Password')" 
                />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="w-full mt-1"
                    required
                    autofocus
                    autocomplete="current-password"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />
            </div>

            <div class="flex items-center justify-end mt-5">
                <x-primary-button>
                    {{ __('Confirm Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
