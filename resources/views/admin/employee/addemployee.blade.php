@extends('admin.layout.app')
@section('content')


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->

<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->


                    <!-- Left Sidebar End -->

                    <!-- Start right Content here -->

                    <div class="content-page">
                        <!-- Start content -->
                        <div class="content">
                            <div class="container">


                                <div class="container">

                                    <div class="info_sec">

                                            <div class="info_head">
                                                <h1>Add Employee</h1>
                                            </div><!-- info_head -->
                                        <form action="{{route('addemployee.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="product-name">Image:</label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'has-error' : '' }}" >
                                                        @if ($errors->has('image'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('image') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
{{--                                              <div class="logo_browse">--}}
{{--                                                  <div class="file-upload">--}}
{{--                                                    <div class="image-upload-wrap">--}}
{{--                                                        <input id="image" name="image"  class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />--}}
{{--                                                        <div class="drag-text">--}}
{{--                                                          <h3>Drag and drop a file or select add Image</h3>--}}
{{--                                                      </div>--}}
{{--                                                  </div>--}}


{{--                                                  <div class="file-upload-content">--}}
{{--                                                    <img  class="file-upload-image" src="#" alt="your image" />--}}
{{--                                                    <div class="image-title-wrap">--}}
{{--                                                      <button type="button" id="image" name="image" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>--}}
{{--                                                  </div>--}}
{{--                                              </div>--}}
{{--                                          </div>--}}
{{--                                      </div><!-- logo_browse -->--}}
                                            </div>  <!-- row -->
                                            <div class="info_box">

                                                <div class="form-group flex_form">
                                                    <label class="control-label">Full Name :</label>
                                                    <div class="col-md-12">
                                                        <input type="text" id="fullname" name="fullname"  class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div><!-- info_box -->
                                            <div class="info_box">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Address :</label>
                                                    <div class="col-md-12">
                                                        <input type="text" id="address" name="address" class="form-control" placeholder="">
                                                    </div>
                                                 </div>
                                            </div><!-- info_box -->
                                            <div class="info_box">

                                                <div class="form-group flex_form physical">
                                                   <label class="control-label">Gender :</label>
                                                   <div class="col-md-12">
                                                        <div class="checkbox-flex">
                                                            <div class="radio mb-0">
                                                            <input type="radio" id="gender" name="gender" value="Male">
                                                            <label for="gender">
                                                                Male
                                                            </label>
                                                        </div>
                                                            <div class="radio mb-0">
                                                            <input type="radio" name="gender" id="gender" value="Female">
                                                            <label for="gender">
                                                                Female
                                                            </label>
                                                        </div>
                                                            <div class="radio mb-0">
                                                            <input type="radio" name="gender" id="gender" value="Neutered">
                                                            <label for="gender">
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
                                                        <input type="text" name="cnumber" id="cnumber"  class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div><!-- info_box -->
                                            <div class="info_box">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Father Name :</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="fname" id="fname"  class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div><!-- info_box -->
                                            <div class="info_box">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Mother Name :</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="mname" id="mname"  class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div><!-- info_box -->
                                            <div class="info_box">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Citizenship No :</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="citizen" id="citizen" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add_btn btn_update">
        {{--                                  <button class="update_btn" type="submit" ><span>Update</span></button>--}}
                                          <button type="submit" ><i class="fa fa-floppy-o"></i> Add employee</button>
                                            </div>
                                        </form>
                                        <!-- info_box -->
                                    </div>

                             </div><!-- container -->



{{--                    <div class="update_btn">--}}
{{--                        <a href="">Update</a>--}}
{{--                    </div>--}}
                                <!-- update_btn -->


                </div> <!-- container -->

            </div> <!-- content -->



        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


@endsection
