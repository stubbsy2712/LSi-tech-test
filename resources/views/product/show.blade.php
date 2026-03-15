<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
		@foreach ($product->images as $image)
        <div>
            <img src="{{ asset('images/product/' . $image->path) }}" alt="{{ $product->name }}">
        </div>
		@endforeach
        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>