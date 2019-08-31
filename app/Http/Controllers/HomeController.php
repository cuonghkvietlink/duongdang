<?php

namespace App\Http\Controllers;

use App\GoiChup;
use App\Slide;
use App\Testimonial;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    private $service_category_id = 11;
    private $post_category_id = 4;


    public function index(){
        $slides = Slide::orderBy('piority','ASC')->get();

        // dich vu

        // Testimonials
        $testimonials = Testimonial::orderBy('pioriry')->get();

        // Posts
        $posts = !empty(Category::find($this->post_category_id)->posts) ? Category::find($this->post_category_id)->posts : collect();

        // Goi chup
        $goi_chups = GoiChup::latest()->get();

        return view('frontend.home', compact('slides','testimonials', 'posts','goi_chups'));
    }
}
