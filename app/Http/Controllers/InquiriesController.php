<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inquiry;
use App\Http\Requests;
use App\Http\Requests\SubmitInquiryRequest;

class InquiriesController extends Controller
{
    public function store(SubmitInquiryRequest $request)
    {
    	Inquiry::create($request->all());

    	flash()->success('Your inquiry has been successfully submitted. We will get back to you soon. Thank you!');

    	return redirect()->route('home');
    }
}
