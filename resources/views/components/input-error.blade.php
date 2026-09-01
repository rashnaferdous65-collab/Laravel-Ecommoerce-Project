```blade
@props(['messages'])

@if (!empty($messages))
    <ul {{ $attributes->merge([
        'class' => 'text-sm text-red-600 space-y-1'
    ]) }}>
        @foreach ((array) $messages as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
```

