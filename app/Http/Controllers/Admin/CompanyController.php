<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyProfile::orderBy('id', 'DESC')->get();
        return view('admin.companyprofiles.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companyprofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $companyprofiles = CompanyProfile::create($request->all());
        $file_name = time().'.'.$request->logo->extension();
        $upload = $request->logo->move(public_path('images/companyprofiles/'), $file_name);
        if($upload){
           $companyprofiles->logo = "/images/companyprofiles/".$file_name;
        }

        $companyprofiles->save();
        return redirect()->route('backend.companyprofile.index')
                        ->with('success','Company created successfully.');
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
        $companyprofile = CompanyProfile::find($id);
        return view('admin.companyprofiles.edit',compact('companyprofile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, string $id)
    {
        $companyprofile = CompanyProfile::find($id);
        $companyprofile->update($request->all());

        if($request->hasFile('logo')){
            $file_name = time().'.'.$request->logo->extension();

            $upload = $request->logo->move(public_path('images/companyprofiles/'),$file_name);
            if($upload){
                $companyprofile->logo = "/images/companyprofiles/".$file_name;

            }

        }else{
            $companyprofile->logo = $request->old_image;
        }

        $companyprofile->save();
        return redirect()->route('backend.companyprofile.index')
                        ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo "<h1>$id</h1>";
        $company = CompanyProfile::find($id);
        $company->delete();

        return redirect()->route('backend.companyprofile.index');
    }
}
