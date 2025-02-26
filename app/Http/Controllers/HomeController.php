<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendar()
    {
        return view('main.calendar');
    }

    public function chatMessage()
    {
        return view('main.chatMessage');
    }

    public function chatempty()
    {
        return view('main.chatempty');
    }

    public function veiwDetails()
    {
        return view('main.veiwDetails');
    }

    public function email()
    {
        return view('main.email');
    }

    public function error1()
    {
        return view('main.error');
    }

    public function faq()
    {
        return view('main.faq');
    }

    public function gallery()
    {
        return view('main.gallery');
    }

    public function kanban()
    {
        return view('main.kanban');
    }

    public function pricing()
    {
        return view('main.pricing');
    }

    public function termsCondition()
    {
        return view('main.termsCondition');
    }

    public function widgets()
    {
        return view('main.widgets');
    }

    public function chatProfile()
    {
        return view('main.chatProfile');
    }

    public function blankPage()
    {
        return view('main.blankPage');
    }

    public function comingSoon()
    {
        return view('main.comingSoon');
    }

    public function starred()
    {
        return view('main.starred');
    }

    public function testimonials()
    {
        return view('main.testimonials');
    }

    public function maintenance()
    {
        return view('main.maintenance');
    }

}
