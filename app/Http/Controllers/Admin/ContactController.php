<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function onContactSend(Request $request){

        $ContactArray = json_decode($request->getContent(), true);

        $name = $ContactArray['name'];
        $email = $ContactArray['email'];
        $message = $ContactArray['message'];


    	$result = Contact::insert([
    	'name' => $name,
    	'email' => $email,
    	'message' => $message,

    	]);

    	if ($result == true ) {
    		return 1;
    	}else{

    		return 0;
    	}



    } // End Method
}
