<tbody>

    @if($cart->count() > 0)

        @foreach($cart as $item)

            <tr>
                <td>{{ $item->product->title }}</td>

                <td>${{ $item->product->price }}</td>

                <td>
                    <img
                        src="{{ asset('products/' . $item->product->image) }}"
                        alt="{{ $item->product->title }}"
                    >
                </td>

                <td>
                    <form action="{{ route('delete_cart', $item->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')"
                        >
                            Remove
                        </button>

                    </form>
                </td>
            </tr>

        @endforeach

    @else

        <tr>
            <td colspan="4">Your cart is currently empty.</td>
        </tr>

    @endif

</tbody>

