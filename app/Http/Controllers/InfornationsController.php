<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestInformation;
use Illuminate\Support\Facades\Mail;

class InfornationsController extends Controller
{
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    Mail::to('jose.garcia051@gmail.com')->send(
	        new RequestInformation($request->validate([
	    			'fullName' => 'required|min:2',
	    			'header' => 'required|min:2',
	    			'message' => 'required|min:10'
	    		])
	    	)
    	);

        return redirect('/');
    }
}
