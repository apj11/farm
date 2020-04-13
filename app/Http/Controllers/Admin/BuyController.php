<?php

namespace App\Http\Controllers\Admin;
use App\Buy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buy=Buy::all();
        return  view('admin.buy.buy')
            ->with('buy',$buy);
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
        $this->validate($request,[
            'buyitem'=>'required',
            'buyfrom'=>'required',
            'buyprice'=>'required',

        ]);
        $buy =new Buy();
        $buy->buyitem=$request->get('buyitem');
        $buy->buyfrom=$request->get('buyfrom');
        $buy->buyprice=$request->get('buyprice');
        $buy->save();
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
        $buy=Buy::find($id);
        return  view('admin.buy.editbuy')
            ->with('buy',$buy);
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
            'buyitem'=>'required',
            'buyfrom'=>'required',
            'buyprice'=>'required',

        ]);
        $buy =Buy::find($id);
        if ($id) {
            $buy->buyitem = $request->get('buyitem');
            $buy->buyfrom = $request->get('buyfrom');
            $buy->buyprice = $request->get('buyprice');
        }
        $buy->save();
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
        $buy=Buy::find($id);
        $buy->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
