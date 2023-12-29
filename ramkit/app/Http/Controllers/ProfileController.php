<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $profile = Profile::where('user_id', '=', $user->id)->first();
        return view('auth.course_dashboard', compact('user', 'profile'));

    }






    public function store(Request $request)
    {
        $user = Auth::user();

        // Get the profile excluding cover_img and profile_img
        $profileToPreserve = DB::table('profiles')
            ->select('id', 'cover_img', 'profile_img')
            ->where('user_id', $user->id)
            ->first();

        // Delete all columns' data except cover_img and profile_img
        DB::table('profiles')
            ->where('user_id', $user->id)
            ->update([
                'f_name' => null,
                'l_name' => null,
                'phone' => null,
                'gender' => null,
                'college' => null,
                'session' => null,
                'city' => null,
                'position' => null,
                'address' => null,
                'bio' => null,
                'website' => null,
                'facebook' => null,
                'twitter' => null,
                'linkedin' => null,
            ]);

        // Fetch or create the Profile model instance
        $profile = Profile::where('user_id', $user->id)->firstOrNew();
        if (!$profile->exists) {
            // Preserve the id if creating a new profile
            $profile->id = $profileToPreserve->id ?? null;
            $profile->user_id = $user->id;
        }

        // Update profile data with the requested values
        $profile->f_name = $request->f_name;
        $profile->l_name = $request->l_name;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->college = $request->college;
        $profile->session = $request->session;
        $profile->city = $request->city;
        $profile->position = $request->position;
        $profile->address = $request->address;
        $profile->bio = $request->bio;
        $profile->website = $request->website;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->linkedin = $request->linkedin;

        // Handle file uploads
        if ($request->hasFile('cover_img')) {
            $profile->cover_img = $request->cover_img->store('profile');
        } else {
            $profile->cover_img = $profileToPreserve->cover_img ?? null;
        }
        if ($request->hasFile('profile_img')) {
            $profile->profile_img = $request->profile_img->store('profile');
        } else {
            $profile->profile_img = $profileToPreserve->profile_img ?? null;
        }

        // Save the updated profile
        $profile->save();

        return redirect()->back()->with('message', 'Profile information has been added successfully');
    }






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



}
