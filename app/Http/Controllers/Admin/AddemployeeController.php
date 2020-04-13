<?php

namespace App\Http\Controllers\Admin;
use App\Addemployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addemployee=Addemployee::all();
        return  view('admin.employee.addemployee')
            ->with('addemployee',$addemployee);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.employee.addemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd($request->all());
        $this->validate($request,[
            'fullname'=>'required',
            'address'=>'required',
            'image'=>'required',
            'gender'=>'required',
            'cnumber'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'citizen'=>'required',
        ]);

        $addemployee=new Addemployee();
        $addemployee->fullname=$request->get('fullname');
        $addemployee->address=$request->get('address');
        $addemployee->gender =$request->get('gender');
        $addemployee->cnumber =$request->get('cnumber');
        $addemployee->fname =$request->get('fname');
        $addemployee->mname =$request->get('mname');
        $addemployee->citizen =$request->get('citizen');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $addemployee->image = '/uploads/topwide/'.$image_new_name;
        }
        $addemployee->save();
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
       $addemployee = Addemployee::findOrFail($id);
//        dd($data);
        return view('admin.employee.viewemployee', $addemployee)->with('addemployee',$addemployee);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addemployee =Addemployee::find($id);
        return view('admin.employee.editemployee')->with('addemployee',$addemployee);
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
            'fullname'=>'required',
            'address'=>'required',
            'image'=>'required',
            'gender'=>'required',
            'cnumber'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'citizen'=>'required',
        ]);

        $addemployee=Addemployee::find( $id);
        if ($id) {
            $addemployee->fullname = $request->get('fullname');
            $addemployee->address = $request->get('address');
            $addemployee->gender = $request->get('gender');
            $addemployee->cnumber = $request->get('cnumber');
            $addemployee->fname = $request->get('fname');
            $addemployee->mname = $request->get('mname');
            $addemployee->citizen = $request->get('citizen');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_new_name = time() . $image->getClientOriginalName();
                $destination = 'uploads/topwide';
                $image->move($destination, $image_new_name);
                $addemployee->image = '/uploads/topwide/' . $image_new_name;
            }
        }
        $addemployee->save();
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
        $addemployee= Addemployee::find($id);
        $addemployee->delete();
        return back()->with('info','Data has been deleted successfully');
    }
}
