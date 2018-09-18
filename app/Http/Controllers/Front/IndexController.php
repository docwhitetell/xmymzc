<?php

namespace App\Http\Controllers\Front;

use App\Models\Sites\Contact;
use App\Models\Sites\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        $contact = Contact::all();
        $data = ['links' => $links, 'contact' => $contact];
        return view('welcome', $data);
    }
}
