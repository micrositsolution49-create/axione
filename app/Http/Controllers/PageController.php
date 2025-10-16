<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        return view('blog');
    }

    public function seo() {
        return view('seo');
    }
    public function smm() {
        return view('smm');
    }
    public function faqs() {
        return view('faqs');
    }

    public function graphicsDesigning() {
        return view('graphics-designing');
    }
    public function webDesigning() {
        return view('web-designing');
    }

    public function webDevelopment() {
        return view('web-development');
    }

    public function googleAds() {
        return view('google-ads');
    }
    public function privacyPolicy() {
        return view('privacy-policy');
    }
    public function termsandConditions() {
        return view('terms-and-conditions');
    }
}
