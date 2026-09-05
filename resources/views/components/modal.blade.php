```blade
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl',
])

@php
    $widthClasses = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ];

    $maxWidth = $widthClasses[$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),

        focusables() {
            const selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';

            return Array.from($el.querySelectorAll(selector))
                .filter(element => !element.disabled);
        },

        firstFocusable() {
            return this.focusables()[0];
        },

        lastFocusable() {
            const elements = this.focusables();
            return elements[elements.length - 1];
        },

        nextFocusable() {
            const elements = this.focusables();
            return elements[this.nextFocusableIndex()] || this.firstFocusable();
        },

        prevFocusable() {
            const elements = this.focusables();
            return elements[this.prevFocusableIndex()] || this.lastFocusable();
        },

        nextFocusableIndex() {
            const elements = this.focusables();
            return (elements.indexOf(document.activeElement) + 1) % (elements.length + 1);
        },

        prevFocusableIndex() {
            return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1;
        },
    }"
    x-init="$watch('show', (value) => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');

            {{ $attributes->has('focusable')
                ? 'setTimeout(() => firstFocusable()?.focus(), 100)'
                : ''
            }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail === '{{ $name }}' && (show = true)"
    x-on:close-modal.window="$event.detail === '{{ $name }}' && (show = false)"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:mx-auto sm:w-full {{ $maxWidth }}"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="translate-y-4 scale-95 opacity-0 sm:translate-y-0"
        x-transition:enter-end="translate-y-0 scale-100 opacity-100 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="translate-y-0 scale-100 opacity-100 sm:scale-100"
        x-transition:leave-end="translate-y-4 scale-95 opacity-0 sm:translate-y-0"
    >
        {{ $slot }}
    </div>
</div>
```

