<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
		<div class="md:w-1/2 grid grid-cols-2">
			@foreach ($product->images as $image)
			<div>
				<img src="{{ asset('images/product/' . $image->path) }}" alt="{{ $product->name }}">
			</div>
			@endforeach
        </div>
        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>
			<a href="{{ route('enquiry.form', ['product' => $product->name]) }}">
				Enquire about this product
			</a>
        </div>
    </div>
</x-layout>