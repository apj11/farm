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
                                    <h1>Add</h1>
                                </div><!-- info_head -->
                                <form action="{{route('animalfood.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="info_sec">
                                  <h3>Basic Info</h3>
                                  <div class="info_box">

                                    <div class="form-group flex_form">
                                        <label class="control-label">Name or Label :</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">
                                    <div class="form-group flex_form">
                                        <label  class="control-label">Animal Category :</label>
                                        <div class="col-sm-10">
                                                <select class="form-control"  name="category_id">
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
                                        <label name="status" class="control-label">Animal Status :</label>
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
                                                    <input type="radio" name="gender" id="gender" value="male">
                                                    <label for="radio1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="radio mb-0">
                                                    <input type="radio" name="gender" id="gender" value="female">
                                                    <label for="radio1">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="radio mb-0">
                                                    <input type="radio" name="gender"  id="gender" value="neutered">
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
                                        <input  name="breed" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                <div class="form-group flex_form">
                                    <label  class="control-label">Color :</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="color">
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
                                    <input type="text" name="tagnumber" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div><!-- info_box -->
                        <div class="info_box">
                            <div class="form-group flex_form">
                                <label class="control-label">Tag color :</label>
                                <div class="col-md-10">
                                    <input type="text"  name="tagcolor" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div><!-- info_box -->
                        <div class="info_box">
                            <div class="form-group flex_form">
                                <label class="control-label">Reg Number :</label>
                                <div class="col-md-10">
                                    <input type="text" name="regnumber" class="form-control" placeholder="">
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
                                        <input type="date" name="birthdate" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="info_box info_col">

                                <div class="form-group flex_form">
                                    <label class="control-label">Weight :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="weight" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="info_box info_col">

                                <div class="form-group flex_form">
                                    <label class="control-label">Parent Tag :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="parenttag" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-md-6">
                            <div class="radio radio-info radio-inline radio_btn">
                                <input type="radio" id="living"  value="raised" name="living">
                                <label for="inlineRadio1"> Raised </label>
                            </div>
                            <div class="radio radio-inline radio_btn">
                                <input type="radio" id="living" value="purchased" name="living">
                                <label for="inlineRadio2"> Purchased </label>
                            </div>
                            <div class="info_box info_col">
                                <div class="form-group flex_form">
                                    <label class="control-label">Purchase Date :</label>
                                    <div class="col-md-10">
                                        <input type="date" name="purchasedate" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="info_box info_col">
                                <div class="form-group flex_form">
                                    <label class="control-label">Purchase From :</label>
                                    <div class="col-md-10">
                                        <input type="text"  name="purchasefrom" class="form-control" placeholder="">
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
                                                <button type="submit" ><i class="fa fa-floppy-o"></i> Add Animal</button>
                                            </div><!-- update_btn -->

                                </form>
                                        </div> <!-- container -->

                                    </div> <!-- content -->



                                </div>
                                <!-- End Right content here -->

                            </div>
                            <!-- END wrapper -->
    @endsection
