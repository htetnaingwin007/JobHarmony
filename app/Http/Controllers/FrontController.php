<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\CompanyProfile;

class FrontController extends Controller
{
    public function portalhome()
    {
        

        $jobposts = JobPost::orderBy('id','desc')->paginate(10);
        
        // var_dump($jobposts);
        return view('front.portalhome',compact('jobposts'));
    }

    public function jobSingle($id)
    {
        $jobpost = JobPost::find($id);
        
        // echo ($jobpost);
        
        return view('front.job-single',compact('jobpost'));
    }
}
