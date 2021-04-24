<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Resource;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use File;
class CourseController extends Controller
{
    public function index($type){
        $courses = Course::where('type',$type)->get();
        $type = ucwords($type);
        return view('pages.course',['courses'=>$courses,'type'=>$type]);
    }

    public function courselist($id){
        $course = Course::find($id);
        $title = $course->title;
        $resourses = Resource::where('course_title',$title)->get();
        return view('course.courselist',['course'=>$course,"resourses"=>$resourses]);
    }

    public function deleteCourse(){
        $courses = Course::all();
        return view('admin.deletecourses',['courses'=>$courses]);
    }

    public function delete($id){
        $course = Course::find($id);
        File::delete(public_path("storage/".$course->video_path));
        $resourses = Resource::where('course_title',$course->title)->get();
        foreach($resourses as $r){
            File::delete(public_path("storage/resource/".$r->resource_path));
        }
        $course->delete();
        foreach($resourses as $r){
            $r->delete();
        }
        return redirect()->route('dashboard');
    }

}
