<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class adminController extends Controller
{

    public function index(){

        //import all data from database
        $users = User::all();
        $courses = Course::all();
        $resource = Resource::all();
        $courseNumber = $courses->count();

        //count user
        $usercount = 0;
        foreach($users as $u){
            if($u->is_admin==0) $usercount++;
        }

        //count course percentage
        $android = 0;
        $web = 0;
        $other = 0;

        foreach($courses as $c){
            if($c->type=="android") $android++;
            elseif($c->type=="web") $web++;
            else $other++;
        }
        if($courseNumber>0){
            $android = number_format(($android/$courseNumber)*100,2);
            $web = number_format(($web/$courseNumber)*100,2);
            $other = number_format(($other/$courseNumber)*100,2);
        }
        //count total resources
        $res = array();
        $i = 0;
        foreach($courses as $c){
            $count = 0;
            foreach($resource as $r){
                if($c->title == $r->course_title) $count++;
            }
            $res[$i]=$count;
            $i++;
        }

        return view('admin.dashboard',['learner'=>$usercount,'courses'=>$courseNumber
        ,'android'=>$android,'web'=>$web,'other'=>$other,'courseslist'=>$courses,'res'=>$res]);
    }
    public function login(){
        return view('admin.login');
    }

    public function signup(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'is_admin' => 1]))
        {
            return redirect()->route('dashboard');
        }
        else{
            return back();
        }
    }

    public function resoursePage(){
        $courses = Course::all();
        return view('admin.resourse',['courses'=>$courses]);
    }


}
