@extends('admin.layout.app')
@section('content')


    <!-- Begin page -->
    <div id="wrapper">


        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <!--    <div class="row">
                           <div class="col-sm-12">
                               <div class="page-header-title">
                                   <h4 class="pull-left page-title">Typography</h4>
                                   <ol class="breadcrumb pull-right">
                                       <li><a href="#">Xadmino</a></li>
                                       <li class="active">Typography</li>
                                   </ol>
                                   <div class="clearfix"></div>
                               </div>
                           </div>
                       </div> -->



                    <div class="info_head">
                        <h1>Edit Animal</h1>
                    </div><!-- info_head -->
                    <form action="{{route('addanimal.update',[$addanimal->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="info_sec">
                            <h3>Basic Info</h3>
                            <div class="info_box">

                                <div class="form-group flex_form">
                                    <label class="control-label">Name or Label :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}"  value="{{ old('name', isset($addanimal) ? $addanimal->name : '') }}" placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label  class="control-label">Animal Category :</label>
                                    <div class="col-sm-10">
                                        <select class="form-control {{--{{ $errors->has('category_id') ? 'has-error' : '' }}"  value="{{ old('category_id', isset($category) ? $category->category_id : '') }}--}}"  name="category_id">
                                            <option>Select Option</option>
                                            @forelse($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->category}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label name="status" class="control-label {{ $errors->has('status') ? 'has-error' : '' }}"  value="{{ old('status', isset($addanimal) ? $addanimal->status : '') }}">Animal Status :</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status" >
                                            <option  value="Active">Active</option>
                                            <option  value="Sick">Sick</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- info_box -->
                        </div><!-- info_sec -->
                        <div class="info_sec">
                            <h3>Physical info</h3>
                            <div class="info_box">

                                <div class="form-group flex_form physical">
                                    <label class="control-label">Gender :</label>
                                    <div class="col-md-10">
                                        <div class="checkbox-flex">
                                            <div class="radio mb-0">
                                                <input type="radio" name="gender" id="gender" value="{{$addanimal->gender}}"
                                                       @if($addanimal->gender == "male") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio mb-0">
                                                <input type="radio" name="gender" id="gender" value="{{$addanimal->gender}}"
                                                       @if($addanimal->gender == "female") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="radio mb-0">
                                                <input type="radio" name="gender"  id="gender" value="{{$addanimal->gender}}"
                                                       @if($addanimal->gender == "neutered") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Neutered
                                                </label>
                                            </div>
                                        </div><!-- checkbox-flex -->
                                    </div><!-- col -->
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label class="control-label">Breed :</label>
                                    <div class="col-md-10">
                                        <input  name="breed" type="text" class="form-control {{ $errors->has('breed') ? 'has-error' : '' }}"  value="{{ old('breed', isset($addanimal) ? $addanimal->breed : '') }} " placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label  class="control-label ">Color :</label>
                                    <div class="col-sm-10">
                                        <select class="form-control {{ $errors->has('color') ? 'has-error' : '' }}"  value="{{ old('color', isset($addanimal) ? $addanimal->color : '') }} " name="color">
                                            <option  value="Red">Red</option>
                                            <option  value="Black">Black</option>
                                            <option  value="White">White</option>
                                            <option  value="Green">Green</option>
                                            <option  value="Black and White">Black and White</option>
                                            <option  value="Red and Black">Red and Black</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- info_box -->
                        </div><!-- info_sec -->
                        <div class="info_sec">
                            <h3>Identification</h3>
                            <div class="info_box">

                                <div class="form-group flex_form">
                                    <label class="control-label">Tag Number :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="tagnumber" class="form-control {{ $errors->has('tagnumber') ? 'has-error' : '' }}"  value="{{ old('tagnumber', isset($addanimal) ? $addanimal->tagnumber : '') }}" placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label class="control-label">Tag color :</label>
                                    <div class="col-md-10">
                                        <input type="text"  name="tagcolor" class="form-control  {{ $errors->has('tagcolor') ? 'has-error' : '' }}"  value="{{ old('tagcolor', isset($addanimal) ? $addanimal->tagcolor : '') }} " placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label class="control-label">Reg Number :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="regnumber" class="form-control {{ $errors->has('regnumber') ? 'has-error' : '' }}"  value="{{ old('regnumber', isset($addanimal) ? $addanimal->regnumber : '') }}" placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                        </div><!-- info_sec -->
                        <div class="info_sec">
                            <h3>Birth Info</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info_box info_col">

                                        <div class="form-group flex_form">
                                            <label class="control-label">Birth Date :</label>
                                            <div class="col-md-10">
                                                <input type="date" name="birthdate" class="form-control {{ $errors->has('birthdate') ? 'has-error' : '' }}"  value="{{ old('birthdate', isset($addanimal) ? $addanimal->birthdate : '') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_box info_col">

                                        <div class="form-group flex_form">
                                            <label class="control-label">Weight :</label>
                                            <div class="col-md-10">
                                                <input type="text" name="weight" class="form-control {{ $errors->has('weight') ? 'has-error' : '' }}"  value="{{ old('weight', isset($addanimal) ? $addanimal->weight : '') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_box info_col">

                                        <div class="form-group flex_form">
                                            <label class="control-label">Parent Tag :</label>
                                            <div class="col-md-10">
                                                <input type="text" name="parenttag" class="form-control {{ $errors->has('parenttag') ? 'has-error' : '' }}"  value="{{ old('parenttag', isset($addanimal) ? $addanimal->parenttag : '') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col -->
                                <div class="col-md-6">
                                    <div class="radio radio-info radio-inline radio_btn">
                                        <input type="radio" name="living" id="living"  value="{{$addanimal->living}}"
                                                           @if($addanimal->living == "raised") checked
                                                        @endif>
                                        <label for="inlineRadio1"> Raised </label>
                                    </div>
                                    <div class="radio radio-inline radio_btn">
                                        <input type="radio" name="living" id="living" value="{{$addanimal->living}}"
                                                           @if($addanimal->living == "purchased") checked
                                                        @endif>
                                        <label for="inlineRadio2"> Purchased </label>
                                    </div>
                                    <div class="info_box info_col">
                                        <div class="form-group flex_form">
                                            <label class="control-label">Purchase Date :</label>
                                            <div class="col-md-10">
                                                <input type="date" name="purchasedate" class="form-control {{ $errors->has('purchasedate') ? 'has-error' : '' }}"  value="{{ old('purchasedate', isset($addanimal) ? $addanimal->purchasedate : '') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_box info_col">
                                        <div class="form-group flex_form">
                                            <label class="control-label">Purchase From :</label>
                                            <div class="col-md-10">
                                                <input type="text"  name="purchasefrom" class="form-control {{ $errors->has('purchasefrom') ? 'has-error' : '' }}"  value="{{ old('purchasefrom', isset($addanimal) ? $addanimal->purchasefrom : '') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->

                        </div><!-- info_sec -->


                        {{--                                <div class="add_btn btn_update">--}}
                        {{--                                    <button type="submit" ><i class="fa fa-floppy-o"></i> Add Animal</button>--}}
                        {{--                                </div>--}}
                        <div class="update_btn">
                            <button type="submit" ><i class="fa fa-floppy-o"></i>Update Animal</button>
                        </div><!-- update_btn -->

                    </form>
                </div> <!-- container -->

            </div> <!-- content -->



        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
@endsection
