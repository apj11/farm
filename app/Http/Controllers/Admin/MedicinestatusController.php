<?php

namespace App\Http\Controllers\Admin;

use App\Animalmedicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medicinestatus;

class MedicinestatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animalmedicine=Animalmedicine::all();
        return  view('admin.feed.medicinestatus')
            ->with('animalmedicine',$animalmedicine);
    }

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $animalmedicine=Animalmedicine::findOrFail($id);
        return view('admin.feed.medicinestatus', $animalmedicine)
            ->with('animalmedicine',$animalmedicine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus(Request $request)
    {

//        dd($request->all());
        $animalmedicine = Animalmedicine::find($request->animlmedicines_id);
        $animalmedicine->status = $request->status;
        $animalmedicine->save();
        return back()->with('success','Status changed successfully');
    }
}
