<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showbooks = Library::all();
        return view('library/all',compact('showbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('library/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $addbook = new Library();
       $addbook-> bookname = $request->bookname;
       $addbook->bookdes =   $request->bookdes;
       $addbook->authorname = $request->authorname;
       $addbook->quantity = $request->quantity;
       $addbook->save();
       return redirect(route('library.index'))->with('msg','Your Book Details Are Updated Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library  $library)
    {
        $single_datas = Library::find( $library)->first();
        return view('library/single',compact('single_datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
       $edit_data = Library::find($library)->first();
       return view('library/edit',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        $update_data = Library::find($library)->first();
        $update_data->bookname = $request->bookname;
        $update_data->bookdes = $request->bookdes;
        $update_data->authorname = $request->authorname;
        $update_data->quantity = $request->quantity;
        $update_data->save();
        return redirect(route('library.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        //
    }
}
