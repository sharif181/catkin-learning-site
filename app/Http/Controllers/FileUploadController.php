<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Resource;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $req){
        $course = new Course;
        $validated = $req->validate([
            'course_title'=>'required|unique:courses,title',
        ]);
        $course->title = $req->course_title;
        $course->instractor = $req->iname;
        $course->startdate = $req->cstart;
        $course->type = $req->type;
        $course->description = $req->desc;
        $filename = time().'_'.$req->file('file')->getClientOriginalName();
        $req->file->move('storage/',$filename);
        $course->video_path = $filename;
        $course->save();
        return redirect()->route('dashboard');
    }

    public function resourseStore(Request $req)
    {
        $res = new Resource;
        $res->course_title = $req->ctitle;
        $res->video_title = $req->vtitle;
        $res->description = $req->desc;
        $filename = time().'_'.$req->file('file')->getClientOriginalName();
        $req->file->move('storage/resource/',$filename);
        $res->resource_path=$filename;
        $res->save();
        return redirect()->route('dashboard');
    }
}
