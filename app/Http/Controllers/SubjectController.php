<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects =subject::get();
         return view('subjects.index',['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields= $request->validate([
            'name' =>'required',
            'code' =>'required',
            'department_id' =>'required'
        ]);
             subject::create($formFields);
             return Redirect::route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject)
    {
        return view('subjects.show',['subject'=> $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subject $subject)
    {
        return view('subjects.edit',['subject'=> $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subject $subject)
    {
        $formFields= $request->validate([
            'name' =>'required',
            'code' =>'required',
            'department_id' =>'required'
        ]);
        $subject->update($formFields);
        return Redirect::route('subjects.show', $subject->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
