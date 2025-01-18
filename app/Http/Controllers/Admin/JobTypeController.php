<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobType;
use App\Http\Requests\JobTypeRequest;
use App\Http\Requests\UpdateJobTypeRequest;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobtypes = JobType::orderBy('id', 'DESC')->get();
        return view('admin.jobtypes.index',compact('jobtypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobTypeRequest $request)
    {

        $jobtypes = JobType::create($request->all());
        $jobtypes->save();
        return redirect()->route('backend.jobtype.index')
                        ->with('success','Job Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobtype = JobType::find($id);
        return view('admin.jobtypes.edit',compact('jobtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobTypeRequest $request, string $id)
    {
        $jobtype = JobType::find($id);
        $jobtype->update($request->all());

        $jobtype->save();
        return redirect()->route('backend.jobtype.index')
                        ->with('success','Job Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobtype = JobType::find($id);
        $jobtype->delete();

        return redirect()->route('backend.jobtype.index');
    }
}
