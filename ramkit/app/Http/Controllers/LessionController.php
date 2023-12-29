<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Lession;
use Illuminate\Support\Facades\DB;

class LessionController extends Controller
{
    public function index()
    {
        $data = DB::table('courses')
        ->join('lessions', 'courses.id', '=', 'lessions.course_id')
        ->select([
            'courses.title as courseName',
            'lessions.course_id as courseId'
        ])
        ->get();

        $courses= Course::all();

        $lession = Lession::orderBy('id', 'desc')->get();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.lession.index', compact('lession','data','courses'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }


    public function create()
    {
        $lession = Lession::all();
        $courses= Course::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.lession.create', compact('lession','courses'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $lession = new Lession;
        $lession->id = $request->lession;
        $lession->title = $request->title;
        $lession->url1 = $request->url1;
        $lession->url2 = $request->url2;
        $lession->course_id = $request->course_id;

        if ($request->hasFile('img_1')) {
            $lession->img_1 = $request->img_1->store('lession');
        }
        if ($request->hasFile('img_2')) {
            $lession->img_2 = $request->img_2->store('lession');
        }


        // Store the uploaded pdf1 file
        if ($request->hasFile('pdf_file1')) {
            $file1 = $request->file('pdf_file1');
        }
        if ($request->hasFile('pdf_file1')) {
            $fileName1 = $file1->getClientOriginalName();
        }
        if ($request->hasFile('pdf_file1')) {
            $filePath1 = $file1->store('pdfs1', 'public');
        }

        // Create a new PDF1 record in the database
        if ($request->hasFile('pdf_file1')) {
            $lession->pdf1name = $fileName1;
        }
        if ($request->hasFile('pdf_file1')) {
            $lession->pdf1file_name = $fileName1;
        }
        if ($request->hasFile('pdf_file1')) {
            $lession->pdf1file_path = $filePath1;
        }



        // Store the uploaded pdf2 file
        if ($request->hasFile('pdf_file2')) {
            $file2 = $request->file('pdf_file2');
        }
        if ($request->hasFile('pdf_file2')) {
            $fileName2 = $file2->getClientOriginalName();
        }
        if ($request->hasFile('pdf_file2')) {
            $filePath2 = $file2->store('pdfs2', 'public');
        }

        // Create a new PDF2 record in the database
        if ($request->hasFile('pdf_file2')) {
            $lession->pdf2name = $fileName2;
        }
        if ($request->hasFile('pdf_file2')) {
            $lession->pdf2file_name = $fileName2;
        }
        if ($request->hasFile('pdf_file2')) {
            $lession->pdf2file_path = $filePath2;
        }


        $lession->save();
        return redirect()->back()->with('message', 'A new Lession has been added successfully');
    }



    public function edit_lession(Lession $lession)
    {
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.lession.index', compact('lession'));
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
    public function update(Request $request, Lession $lession)
    {
        $update = $lession->update([
            'title' => $request->title,
            'url1' => $request->url1,
            'url2' => $request->url2,
            'course_id' => $request->course_id
        ]);
        if ($request->hasFile('img_1')) {
            $update = $lession->update([
                'img_1' => $request->file('img_1')->store('lession')
            ]);
        }

        if ($request->hasFile('img_2')) {
            $update = $lession->update([
                'img_2' => $request->file('img_2')->store('lession')
            ]);
        }


        // Store the uploaded pdf1 file
        if ($request->hasFile('pdf_file1')) {
            $file1 = $request->file('pdf_file1');
        }
        if ($request->hasFile('pdf_file1')) {
            $fileName1 = $file1->getClientOriginalName();
        }
        if ($request->hasFile('pdf_file1')) {
            $filePath1 = $file1->store('pdfs1', 'public');
        }


        // Update a new PDF1 record in the database

        if ($request->hasFile('pdf_file1')) {
            $update = $lession->update([
                'pdf1name' => $fileName1
            ]);
        }
        if ($request->hasFile('pdf_file1')) {
            $update = $lession->update([
                'pdf1file_name' => $fileName1
            ]);
        }
        if ($request->hasFile('pdf_file1')) {
            $update = $lession->update([
                'pdf1file_path' => $filePath1
            ]);
        }



        // Store the uploaded pdf2 file
        if ($request->hasFile('pdf_file2')) {
            $file2 = $request->file('pdf_file2');
        }
        if ($request->hasFile('pdf_file2')) {
            $fileName2 = $file2->getClientOriginalName();
        }
        if ($request->hasFile('pdf_file2')) {
            $filePath2 = $file2->store('pdfs2', 'public');
        }


        // Update a new PDF2 record in the database

        if ($request->hasFile('pdf_file2')) {
            $update = $lession->update([
                'pdf2name' => $fileName2
            ]);
        }
        if ($request->hasFile('pdf_file2')) {
            $update = $lession->update([
                'pdf2file_name' => $fileName2
            ]);
        }
        if ($request->hasFile('pdf_file2')) {
            $update = $lession->update([
                'pdf2file_path' => $filePath2
            ]);
        }



        if ($update) {
            return redirect('/lessions')->with('message', 'The Lession Information has been updated successfully');
        }
    }



    public function delete(Lession $lession)
    {

        if ($lession->img_1) {
            unlink(storage_path('app/public/' . $lession->img_1));
        }
        if ($lession->img_2) {
            unlink(storage_path('app/public/' . $lession->img_2));
        }

        if ($lession->pdf1file_path) {
            unlink(storage_path('app/public/' . $lession->pdf1file_path));
        }
        if ($lession->pdf2file_path) {
            unlink(storage_path('app/public/' . $lession->pdf2file_path));
        }

        $delete = $lession->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This Lession Information has been deleted successfully');
        }
    }


    public function showPdf1($id)
    {
        $pdf1 = Lession::findOrFail($id);
        $path = storage_path('app/public/' . $pdf1->pdf1file_path);
        return response()->file($path);
    }

    public function showPdf2($id)
    {
        $pdf2 = Lession::findOrFail($id);
        $path = storage_path('app/public/' . $pdf2->pdf2file_path);
        return response()->file($path);
    }
}
