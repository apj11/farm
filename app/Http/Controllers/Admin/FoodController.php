<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        $food= Food::all();
        return  view('admin.food.food')
            ->with('category',$category)
            ->with('food',$food);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.food.food')->with('category',$category);
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
            'fname'=>'required',
            'category_id'=>'required',
            'fprice'=>'required',

        ]);
        $food =new Food();
        $food->fname=$request->get('fname');
        $food->category_id=$request->get('category_id');
        $food->fprice=$request->get('fprice');
        $food->save();
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
        $food=Food::find($id);
        return view('admin.food.editfood')
            ->with('category',$category)
            ->with('food',$food);
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
            'fname'=>'required',
            'category_id'=>'required',
            'fprice'=>'required',

        ]);
        $food =Food::find($id);
        if ($id) {
            $food->fname = $request->get('fname');
            $food->category_id = $request->get('category_id');
            $food->fprice = $request->get('fprice');
        }
            $food->save();
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
        $food= Food::find($id);
        $food->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
