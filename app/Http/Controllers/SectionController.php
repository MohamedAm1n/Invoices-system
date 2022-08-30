<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $sections=Section::all();
            return view('sections.create_section',['sections'=>$sections]);
    
        // return view('sections.create_section');
    }
// public function all_invoices(Request $request)
// {

// }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $add_section = $request->validate([
            'section_name'=>'required|string|min:3|unique:sections',
            'description'=>'required|string',
        ],
        [
            'section_name.required'=>'برجاء ادخال اسم القسم',
            'section_name.unique'=>'اسم القسم مسجل مسبقاً',
            'description.required'=>'برجاء ادخال الوصف الخاص بالقسم'
        ]
        
        );
            
            $add_section['created_by'] = auth()->user()->name;

            // dd($add_section);
        Section::create($add_section);
        return redirect(route('sections'))->with('message','تم إضافة القسم');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('sections.edit_section',['section'=>$section]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Section $section)
    {

        $edit_section = $request->validate([
            'section_name'=>'required|string|min:3|unique:sections,section_name,'.$section->id,
            'description'=>'required|string',
        ],
        [
            'section_name.required'=>'برجاء ادخال اسم القسم',
            'section_name.unique'=>'اسم القسم مسجل مسبقاً',
            'description.required'=>'برجاء ادخال الوصف الخاص بالقسم'
        ]
    );
        
    $edit_section['created_by'] = auth()->user()->name;
        // dd($edit_section);
        // $section = Section::find($id);
        $section->update($edit_section);
        return redirect('erp/section');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
