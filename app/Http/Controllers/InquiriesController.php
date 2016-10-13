<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SubmitInquiryRequest;
use App\Inquiry;
use App\Mail\SendInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiriesController extends Controller
{
    public function store(SubmitInquiryRequest $request)
    {
    	$inquiry = Inquiry::create($request->all());

    	// Send email

    	Mail::to('mark.timbol@hotmail.com')->send(new SendInquiry($inquiry));

    	flash()->success('Your inquiry has been successfully submitted. We will get back to you soon. Thank you!');

    	return redirect()->route('home');
    }
}
