<x-layout>
	<head>
		<title>Product Enquiry</title>
		@vite(['resources/css/app.css'])
	</head>
	<body>

		<h1 class="text-2xl mb-4">Product Enquiry</h1>

		<form method="POST" action="{{ route('enquiry.submit') }}" class="space-y-4">
			@csrf

			<div>
				<label class="block mb-1">Select Product</label>
				<select name="productName" class="border p-2">
					<option value="">-- Choose a product --</option>
						@foreach ($products as $product)
							<option value="{{ $product->name }}" {{ (isset($selectedProduct) && $selectedProduct == $product->name) ? 'selected' : '' }}>
								{{ $product->name }}
							</option>
						@endforeach
					<option value="Other">Other</option>
				</select>
			</div>

			<!-- Name -->
			<div>
				<label class="block mb-1">Your Name</label>
				<input type="text" name="name" class="border p-2">
			</div>

			<!-- Message -->
			<div>
				<label class="block mb-1">Message</label>
				<textarea name="message" class="border p-2 w-full"></textarea>
			</div>

			<button type="submit" class="bg-blue-500 text-white px-4 py-2">
				Send Enquiry
			</button>
			@if(session('success'))
				<div class="mb-4 p-3 border bg-green-100 text-green-800">
					{{ session('success') }}
				</div>
			@endif
		</form>

	</body>
</x-layout>