<?php

namespace App\Http\Controllers\Admin;
use App\Addanimal;
use App\Category;
use App\Food;
use App\Http\Controllers\Controller;
use App\Medicine;
use App\Animalmedicine;
use App\Animalfood;
use Illuminate\Http\Request;

class AddanimalController extends Controller
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
        $food=Food::all();
        $medicine=Medicine::all();
        $category=Category::all();
        $addanimal=Addanimal::all();
        return  view('admin.animal.addanimal')
            ->with('addanimal',$addanimal)
            ->with('category',$category)
            ->with('medicine',$medicine)
            ->with('food',$food)
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
        $category=Category::all();
        return  view('admin.animal.addanimal')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            'status'=>'required',
            'tagnumber'=>'required',
            'tagcolor'=>'required',
            'regnumber'=>'required',
            'birthdate'=>'required',
        ]);

        $addanimal=new Addanimal();
        $addanimal->name=$request->get('name');
        $addanimal->category_id=$request->get('category_id');
        $addanimal->status =$request->get('status');
        $addanimal->gender =$request->get('gender');
        $addanimal->breed =$request->get('breed');
        $addanimal->color =$request->get('color');
        $addanimal->tagnumber =$request->get('tagnumber');
        $addanimal->tagcolor=$request->get('tagcolor');
        $addanimal->regnumber=$request->get('regnumber');
        $addanimal->birthdate =$request->get('birthdate');
        $addanimal->weight =$request->get('weight');
        $addanimal->parenttag =$request->get('parenttag');
        $addanimal->living =$request->get('living');
        $addanimal->purchasedate =$request->get('purchasedate');
        $addanimal->purchasefrom=$request->get('purchasefrom');

        $addanimal->save();
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
        $animalfood=Animalfood::where('addanimal_id',$id)->get();
        $animalmedicine=Animalmedicine::where('addanimal_id',$id)->get();
//        $animalfood=Animalfood::all();
//        $animalmedicine=Animalmedicine::all();
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
        $category=category::all();
        $addanimal=Addanimal::find($id);
        return view('admin.animal.editanimal')
            ->with('category',$category)
            ->with('addanimal',$addanimal);
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
            'name'=>'required',
            'category_id'=>'required',
            'status'=>'required',
            'tagnumber'=>'required',
            'tagcolor'=>'required',
            'regnumber'=>'required',
            'birthdate'=>'required',
        ]);

        $addanimal=Addanimal::find($id);
        if ($id) {
            $addanimal->name = $request->get('name');
            $addanimal->category_id = $request->get('category_id');
            $addanimal->status = $request->get('status');
            $addanimal->gender = $request->get('gender');
            $addanimal->breed = $request->get('breed');
            $addanimal->color = $request->get('color');
            $addanimal->tagnumber = $request->get('tagnumber');
            $addanimal->tagcolor = $request->get('tagcolor');
            $addanimal->regnumber = $request->get('regnumber');
            $addanimal->birthdate = $request->get('birthdate');
            $addanimal->weight = $request->get('weight');
            $addanimal->parenttag = $request->get('parenttag');
            $addanimal->living = $request->get('living');
            $addanimal->purchasedate = $request->get('purchasedate');
            $addanimal->purchasefrom = $request->get('purchasefrom');
        }
        $addanimal->save();
        return back()->with('success','Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addanimal= Addanimal::find($id);
        $addanimal->delete();
        return back()->with('info','Data has been deleted successfully');
    }

}
