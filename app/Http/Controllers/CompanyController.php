<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $company= company::all();
      return view('backend.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        //
        {
            //validation
            $request->validated();

            if ($request->hasFile('primary_image')) {
                $filename = time() . '.' . $request->file('primary_image')->getClientOriginalName();
                $primaryImagePath = $request->file('primary_image')->storeAs('primary_image', $filename, 'public');
            }
            
            $company = Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'primary_image' => $primaryImagePath 
            ]);
            
            if ($request->hasFile('secondary_images')) {
                foreach ($request->file('secondary_images') as $secondaryImage) {
                    $filename = time() . '.' . $secondaryImage->getClientOriginalExtension();
                    $secondaryImagePath = $secondaryImage->storeAs('secondary_images', $filename, 'public');
            
                    image::create([
                        'company_id' => $company->id,
                        'secondary_images' => $secondaryImagePath ,
                    ]);
                }
            }
        
            return redirect()->route('company.index')->with('add', 'add company ...');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $company = Company::findOrFail($id);
        //show secandary image 
        $secondaryImages = $company->images;
        return view('backend.company.show',compact('company','secondaryImages'));
 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(company $company)
    {
        //
    }
 
}
