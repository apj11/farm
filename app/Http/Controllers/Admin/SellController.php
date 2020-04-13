<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Medicine;
use App\Sell;
use Illuminate\Http\Request;
use App\Category;
class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine=Medicine::all();
        $category=Category::all();
        $sell=Sell::all();
        return  view('admin.sell.sell')
            ->with('sell',$sell)
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
//        dd($request->all());
        $this->validate($request,[
            'sellingitem'=>'required',
            'sellingto'=>'required',
            'sellingprice'=>'required',

        ]);
        $sell =new Sell();
        $sell->sellingitem=$request->get('sellingitem');
        $sell->sellingto=$request->get('sellingto');
        $sell->sellingprice=$request->get('sellingprice');
        $sell->save();
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
        $sell=Sell::find($id);
        return  view('admin.sell.editsell')
            ->with('sell',$sell);
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
            'sellingitem'=>'required',
            'sellingto'=>'required',
            'sellingprice'=>'required',

        ]);
        $sell =Sell::find($id);
        if ($id)
        {
            $sell->sellingitem = $request->get('sellingitem');
            $sell->sellingto = $request->get('sellingto');
            $sell->sellingprice = $request->get('sellingprice');
        }
        $sell->save();
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
        $sell=Sell::find($id);
        $sell->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
