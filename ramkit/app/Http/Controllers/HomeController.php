<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function dashboard(){
        // Get the currently authenticated user
        $user = Auth::user();

        // Pass the user data to the view
        return view('auth.dashboard', compact('user'));
    }
    public function courseDashboard(){
        // Get the currently authenticated user
        $user = Auth::user();
        $profile = Profile::where('user_id','=',$user->id)->first();
        return view('auth.course_dashboard', compact('user','profile'));
    }

    public function aboutRamfit(){

        return view('frontend.aboutramfit');

    }


    public function teamRamfit(){

        return view('frontend.teamramfit');

    }

    public function contactUs(){

        return view('frontend.contactus');

    }

    public function course(){

        $courses = Course::all();
        return view('frontend.course',compact('courses'));

    }

    public function schedule(){

        return view('frontend.schedule');

    }




}
