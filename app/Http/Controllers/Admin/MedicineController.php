<?php

namespace App\Http\Controllers\Admin;
use App\Medicine;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        $medicine= Medicine::all();
        return  view('admin.medicine.medicine')
            ->with('category',$category)
            ->with('medicine',$medicine);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.medicine.medicine')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'mname'=>'required',
            'category_id'=>'required',
            'mprice'=>'required',

        ]);
        $medicine =new Medicine();
        $medicine->mname=$request->get('mname');
        $medicine->category_id=$request->get('category_id');
        $medicine->mprice=$request->get('mprice');
        $medicine->save();
        return back()->with('success','Data has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=category::all();
        $medicine=Medicine::find($id);
        return view('admin.medicine.editmedicine')
            ->with('category',$category)
            ->with('medicine',$medicine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'mname'=>'required',
            'category_id'=>'required',
            'mprice'=>'required',

        ]);
        $medicine =Medicine::find($id);
        if ($id) {
            $medicine->mname = $request->get('mname');
            $medicine->category_id = $request->get('category_id');
            $medicine->mprice = $request->get('mprice');
        }
        $medicine->save();
        return back()->with('success','Data has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine= Medicine::find($id);
        $medicine->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
