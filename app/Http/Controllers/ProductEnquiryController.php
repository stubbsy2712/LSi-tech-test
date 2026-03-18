<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProductEnquiryMail;

class ProductEnquiryController extends Controller
{
	public function enquiryForm(Request $request)
	{
		$products = Product::all();
		$selectedProduct = $request->query('product');
		return view('enquiry.form', compact('products', 'selectedProduct'));
	}

	public function submitEnquiry(Request $request)
	{

		Mail::to('test@example.com')->send(
			new ProductEnquiryMail(
				$request->productName,
				$request->name,
				$request->message
			)
		);

		return back()->with('success', 'Enquiry sent!');
	}
}
