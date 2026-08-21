<!DOCTYPE html>
<html lang="en">

@include('home.css')

<body>

    @include('home.header')

    <main class="login-section py-5">
        <div class="container">

            <x-guest-layout>

                <div class="login-wrapper">

                    <!-- Session Status -->
                    <x-auth-session-status
                        class="mb-4"
                        :status="session('status')"
                    />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-4">
                            <x-input-label
                                for="email"
                                :value="__('Email')"
                            />

                            <x-text-input
                                id="email"
                                type="email"
                                name="email"
                                :value="old('email')"
                                class="block mt-1 w-full"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <x-input-error
                                :messages="$errors->get('email')"
                                class="mt-2"
                            />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <x-input-label
                                for="password"
                                :value="__('Password')"
                            />

                            <x-text-input
                                id="password"
                                type="password"
                                name="password"
                                class="block mt-1 w-full"
                                required
                                autocomplete="current-password"
                            />

                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2"
                            />
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-4">
                            <label
                                for="remember_me"
                                class="inline-flex items-center"
                            >
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    name="remember"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                >

                                <span class="ms-2 text-sm text-gray-600">
                                    {{ __('Remember me') }}
                                </span>
                            </label>
                        </div>

                        <!-- Login Actions -->
                        <div class="d-flex align-items-center justify-content-end mt-4">

                            @if (Route::has('password.request'))
                                <a
                                    href="{{ route('password.request') }}"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button>

                        </div>

                    </form>

                </div>

            </x-guest-layout>

        </div>
    </main>

    <!-- Footer -->
    @include('home.footer')

</body>
</html>
