<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductEnquiryMail extends Mailable
{
	use Queueable, SerializesModels;
	public $product;
	public $name;
	public $messageText;

    /**
     * Create a new message instance.
     */
	public function __construct($product, $name, $messageText)
	{
		$this->product = $product;
		$this->name = $name;
		$this->messageText = $messageText;
	}

	public function build()
	{
		return $this->subject('Product enquiry: ' . $this->product)
			->view('emails.product-enquiry-email');
	}
}
