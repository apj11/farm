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



                                <div class="container">

                          <div class="info_sec">
                                                <div class="info_head">
                                        <h1 class="single_detail">Employee Detail</h1>
                                    </div><!-- info_head -->
                              <div class="row">
                                  <div class="logo_browse">
                                      <div class="file-upload">
{{--                                          <div class="image-upload-wrap">--}}
                                              <img src="{{asset(''.$addemployee->image)}}" height="120px" width="120px">

{{--                                          </div>--}}
                                      </div>
                                  </div><!-- logo_browse -->
                              </div>
                              <div class="info_box">

                                <div class="form-group flex_form">
                                    <label class="control-label">Full Name :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('fullname', isset($addemployee) ? $addemployee->fullname : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                            <div class="info_box">
                                 <div class="form-group flex_form">
                                    <label class="control-label">Address :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('address', isset($addemployee) ? $addemployee->address : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                           <div class="info_box">

                                    <div class="form-group flex_form physical">
                                       <label class="control-label">Gender :</label>
                                       <div class="col-md-12">
                                        <div class="checkbox-flex">
                                            <div class="radio mb-0">
                                                <input type="radio" name="radio1" id="radio1"value="{{$addemployee->gender}}"
                                                       @if($addemployee->gender == "Male") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio mb-0">
                                                <input type="radio" name="radio1" id="radio1" value="{{$addemployee->gender}}"
                                                       @if($addemployee->gender == "Female") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="radio mb-0">
                                                <input type="radio" name="radio1" id="radio1" value="{{$addemployee->gender}}"
                                                       @if($addemployee->gender == "Neutered") checked
                                                    @endif>
                                                <label for="radio1">
                                                    Neutered
                                                </label>
                                            </div>
                                        </div><!-- checkbox-flex -->
                                    </div><!-- col -->
                                </div>
                            </div>
                              <div class="info_box">
                                 <div class="form-group flex_form">
                                    <label class="control-label">Contact Number :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('cnumber', isset($addemployee) ? $addemployee->cnumber : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                              <div class="info_box">
                                 <div class="form-group flex_form">
                                    <label class="control-label">Father Name :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('fname', isset($addemployee) ? $addemployee->fname : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                              <div class="info_box">
                                 <div class="form-group flex_form">
                                    <label class="control-label">Mother Name :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('mname', isset($addemployee) ? $addemployee->mname : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                              <div class="info_box">
                                 <div class="form-group flex_form">
                                    <label class="control-label">Citizenship No :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control"  value="{{ old('citizen', isset($addemployee) ? $addemployee->citizen : '') }}" placeholder="" disabled="">
                                    </div>
                                </div>
                            </div><!-- info_box -->
                        </div>
                    </div><!-- container -->



                    <div class="update_btn">
                        <a  href="{{route('addemployee.edit',$addemployee->id)}}">Edit</a>
                    </div><!-- update_btn -->


                </div> <!-- container -->

            </div> <!-- content -->



        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

@endsection
