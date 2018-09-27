<?php

namespace App\Http\Controllers\Front;

use App\models\Sites\Example;
use App\models\Sites\Page;
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
        $exampleData = Example::where('type','example')->get();
        $solutionData = Example::where('type','solutions')->get();
        $links = Link::all();
        $contact = Contact::all();
        $pages = Page::all();
        $banner = $pages->where('page','banner')->first();
        $aboutUs = $pages->where('page','about-us')->first();
        $example = $pages->where('page','example')->first();
        $solutions = $pages->where('page','solutions')->first();
        $contactUs = $pages->where('page','contact')->first();
        $joinUs = $pages->where('page','join-us')->first();
        $footer = $pages->where('page','footer')->first();
        $data = [
            'banner'=>$banner,
            'about_us'=>$aboutUs,
            'example'=>$example,
            'example_data'=>$exampleData,
            'solutions'=>$solutions,
            'solutions_data'=>$solutionData,
            'contact_us'=>$contactUs,
            'join_us'=>$joinUs,
            'footer'=>$footer,
            'links' => $links,
            'contact' => $contact
        ];
        //dd($data);
        return view('welcome', $data);
    }
}
