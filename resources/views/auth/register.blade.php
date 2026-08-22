<!DOCTYPE html>
<html lang="en">

@include('home.css')

<body>

    @include('home.header')

    <x-guest-layout>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="space-y-4">

                {{-- Name --}}
                <div>
                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input
                        id="name"
                        name="name"
                        type="text"
                        class="block w-full mt-1"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                    />

                    <x-input-error
                        :messages="$errors->get('name')"
                        class="mt-2"
                    />
                </div>

                {{-- Email --}}
                <div>
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input
                        id="email"
                        name="email"
                        type="text"
                        class="block w-full mt-1"
                        :value="old('email')"
                        required
                        autocomplete="username"
                    />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2"
                    />
                </div>

                {{-- Phone --}}
                <div>
                    <x-input-label for="phone" :value="__('Phone')" />

                    <x-text-input
                        id="phone"
                        name="phone"
                        type="tel"
                        class="block w-full mt-1"
                        :value="old('phone')"
                        required
                        autocomplete="tel"
                    />

                    <x-input-error
                        :messages="$errors->get('phone')"
                        class="mt-2"
                    />
                </div>

                {{-- Address --}}
                <div>
                    <x-input-label for="address" :value="__('Address')" />

                    <x-text-input
                        id="address"
                        name="address"
                        type="text"
                        class="block w-full mt-1"
                        :value="old('address')"
                        required
                        autocomplete="street-address"
                    />

                    <x-input-error
                        :messages="$errors->get('address')"
                        class="mt-2"
                    />
                </div>

                {{-- Password --}}
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input
                        id="password"
                        name="password"
                        type="password"
                        class="block w-full mt-1"
                        required
                        autocomplete="new-password"
                    />

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2"
                    />
                </div>

                {{-- Confirm Password --}}
                <div>
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
                        :messages="$errors->get('password_confirmation')"
                        class="mt-2"
                    />
                </div>

            </div>

            <div class="flex items-center justify-end mt-6">

                <a
                    href="{{ route('login') }}"
                    class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>

            </div>

        </form>

    </x-guest-layout>

    @include('home.footer')

</body>

</html>
