
<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-700">
                {{ __('My Profile') }}
            </h2>
        </div>
    </x-slot>

    <main class="py-10 bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="space-y-6">

                {{-- Profile Information --}}
                <section class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="max-w-2xl">
                        <h3 class="text-lg font-medium text-gray-800 mb-4">
                            Profile Information
                        </h3>

                        @include('profile.partials.update-profile-information-form')
                    </div>
                </section>

                {{-- Password Settings --}}
                <section class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="max-w-2xl">
                        <h3 class="text-lg font-medium text-gray-800 mb-4">
                            Update Password
                        </h3>

                        @include('profile.partials.update-password-form')
                    </div>
                </section>

                {{-- Account Deletion --}}
                <section class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="max-w-2xl">
                        <h3 class="text-lg font-medium text-gray-800 mb-4">
                            Delete Account
                        </h3>

                        @include('profile.partials.delete-user-form')
                    </div>
                </section>

            </div>

        </div>

    </main>

</x-app-layout>
