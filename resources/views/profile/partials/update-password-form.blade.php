
<section>
    @php
        $passwordFields = [
            [
                'id' => 'update_password_current_password',
                'name' => 'current_password',
                'label' => 'Current Password',
                'autocomplete' => 'current-password'
            ],
            [
                'id' => 'update_password_password',
                'name' => 'password',
                'label' => 'New Password',
                'autocomplete' => 'new-password'
            ],
            [
                'id' => 'update_password_password_confirmation',
                'name' => 'password_confirmation',
                'label' => 'Confirm Password',
                'autocomplete' => 'new-password'
            ]
        ];
    @endphp

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form action="{{ route('password.update') }}" method="POST"
          class="mt-6 space-y-6">

        @csrf
        @method('PUT')

        @foreach ($passwordFields as $field)
            <div>
                <x-input-label
                    :for="$field['id']"
                    :value="__($field['label'])"
                />

                <x-text-input
                    :id="$field['id']"
                    :name="$field['name']"
                    type="password"
                    class="mt-1 block w-full"
                    :autocomplete="$field['autocomplete']"
                />

                <x-input-error
                    :messages="$errors->updatePassword->get($field['name'])"
                    class="mt-2"
                />
            </div>
        @endforeach

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Save') }}
            </x-primary-button>

            @php
                $passwordUpdated = session()->get('status');
            @endphp

            @if ($passwordUpdated === 'password-updated')
                <p
                    x-data="{ visible: true }"
                    x-show="visible"
                    x-transition
                    x-init="setTimeout(() => visible = false, 2000)"
                    class="text-sm text-gray-600"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

