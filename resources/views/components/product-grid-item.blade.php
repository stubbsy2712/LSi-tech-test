<a href="{{ route('product.show', $product) }}">
    <img src="{{ asset('images/product/' . $product->thumbnail) }}" alt="{{ $product->name }}">
    {{ $product->name }}
</a>