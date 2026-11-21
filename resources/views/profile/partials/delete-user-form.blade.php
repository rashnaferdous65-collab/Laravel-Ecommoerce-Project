
<section class="space-y-6">

    @php
        $deleteTitle = __('Delete Account');

        $deleteMessage = __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.');

        $confirmMessage = __('Are you sure you want to delete your account?');

        $passwordMessage = __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.');

        $hasErrors = $errors->userDeletion->isNotEmpty();
    @endphp

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ $deleteTitle }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ $deleteMessage }}
        </p>
    </header>

    <x-danger-button
        x-data="{}"
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ $deleteTitle }}
    </x-danger-button>

    <x-modal
        name="confirm-user-deletion"
        :show="$hasErrors"
        focusable>

        <form
            action="{{ route('profile.destroy') }}"
            method="POST"
            class="p-6">

            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900">
                {{ $confirmMessage }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ $passwordMessage }}
            </p>

            <div class="mt-6">

                <x-input-label
                    for="password"
                    :value="__('Password')"
                    class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    :placeholder="__('Password')"
                    autocomplete="current-password" />

                @if ($errors->userDeletion->has('password'))
                    <x-input-error
                        :messages="$errors->userDeletion->get('password')"
                        class="mt-2" />
                @endif

            </div>

            <div class="mt-6 flex justify-end">

                <x-secondary-button
                    type="button"
                    x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" type="submit">
                    {{ $deleteTitle }}
                </x-danger-button>

            </div>

        </form>

    </x-modal>

</section>

