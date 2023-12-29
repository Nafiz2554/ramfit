<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::orderBy('id', 'desc')->get();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.course.index', compact('course'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }


    public function create()
    {
        $course = Course::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.course.create', compact('course'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->id = $request->course;
        $course->title = $request->title;
        $course->subtitle = $request->subtitle;
        $course->type = $request->type;
        $course->price = $request->price;
        $course->price_a = $request->price_a;
        $course->tutor = $request->tutor;
        $course->duration = $request->duration;
        $course->tag = $request->tag;
        $course->short_desc = $request->short_desc;
        $course->full_desc = $request->full_desc;

        if ($request->hasFile('img_1')) {
            $course->img_1 = $request->img_1->store('course');
        }
        if ($request->hasFile('img_2')) {
            $course->img_2 = $request->img_2->store('course');
        }
        $course->save();
        return redirect()->back()->with('message', 'Course has been added Successfully');
    }



    public function edit_course(Course $course)
    {
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.course.index', compact('course'));
        } else {
            return Redirect::to('/admins')->send();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $update = $course->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'type' => $request->type,
            'price' => $request->price,
            'price_a' => $request->price_a,
            'tutor' => $request->tutor,
            'duration' => $request->duration,
            'tag' => $request->tag,
            'short_desc' => $request->short_desc,
            'full_desc' => $request->full_desc

        ]);
        if ($request->hasFile('img_1')) {
            $update = $course->update([
                'img_1' => $request->file('img_1')->store('course')
            ]);
        }

        if ($request->hasFile('img_2')) {
            $update = $course->update([
                'img_2' => $request->file('img_2')->store('course')
            ]);
        }
        if ($update) {
            return redirect('/courses')->with('message', 'Course Info has been updated successfully');
        }
    }



    public function delete(Course $course)
    {

        if ($course->img_1) {
            unlink(storage_path('app/public/' . $course->img_1));
        }
        if ($course->img_2) {
            unlink(storage_path('app/public/' . $course->img_2));
        }
        $delete = $course->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This Information has been deleted successfully');
        }
    }
}
