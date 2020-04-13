<?php

namespace App\Http\Controllers\Admin;

use App\Addanimal;
use App\Animalfood;
use App\Category;
use App\Food;
use App\Http\Controllers\Controller;
use App\Medicine;
use App\Animalmedicine;
use Illuminate\Http\Request;

class AnimalmedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animalfood=Animalfood::all();
        $animalmedicine=Animalmedicine::all();
        $medicine=Medicine::all();
        $category=Category::all();
        $addanimal=Addanimal::all();
        return  view('admin.animal.animalview')
            ->with('addanimal',$addanimal)
            ->with('category',$category)
            ->with('medicine',$medicine)
            ->with('animalfood',$animalfood)
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
//                dd($request->all());
        $this->validate($request,[
            'medicine_id'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
            'time'=>'required',
        ]);

        $animalmedicine=new Animalmedicine();
        $animalmedicine->addanimal_id=$request->get('addanimal_id');
        $animalmedicine->medicine_id=$request->get('medicine_id');
        $animalmedicine->startdate =$request->get('startdate');
        $animalmedicine->enddate=$request->get('enddate');
        $animalmedicine->time =$request->get('time');

        $animalmedicine->save();
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
        $animalfood=Animalfood::all();
        $animalmedicine=Animalmedicine::all();
        $food=Food::all();
        $medicine=Medicine::all();
        $addanimal = Addanimal::findOrFail($id);
        return view('admin.animal.animalview', $addanimal)
            ->with('addanimal',$addanimal)
            ->with('medicine',$medicine)
            ->with('food',$food)
            ->with('animalfood',$animalfood)
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
}
