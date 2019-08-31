<?php

namespace App\Http\Controllers;

use App\GoiChup;
use Illuminate\Http\Request;

class GoiChupController extends Controller
{
    public function show($slug){
        $gc = GoiChup::where('slug', $slug)->firstOrFail();
        return view('frontend.goi-chup.show', compact('gc'));
    }
}
