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
                                <h1>Add / Edit Employee</h1>
                            </div><!-- info_head -->
                            <form action="{{route('addemployee.update',[$addemployee->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="logo_browse">
                                        <div class="file-upload">
{{--                                            <div class="image-upload-wrap">--}}
                                            <img src="{{asset(''.$addemployee->image)}}" height="100px" width="100px">
                                                <input id="image" name="image"  class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />

                                                <div class="drag-text">
                                                    <h3>Drag and drop a file or select add Image</h3>
                                                </div>
{{--                                            </div>--}}


                                            <div class="file-upload-content">
                                                <img  class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" id="image" name="image" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- logo_browse -->
                                </div>  <!-- row -->
                                <div class="info_box">

                                    <div class="form-group flex_form">
                                        <label class="control-label">Full Name :</label>
                                        <div class="col-md-12">
                                            <input type="text" id="fullname" name="fullname"  class="form-control {{ $errors->has('fullname') ? 'has-error' : '' }}"  value="{{ old('fullname', isset($addemployee) ? $addemployee->fullname : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">
                                    <div class="form-group flex_form">
                                        <label class="control-label">Address :</label>
                                        <div class="col-md-12">
                                            <input type="text" id="address" name="address" class="form-control {{ $errors->has('address') ? 'has-error' : '' }}"  value="{{ old('address', isset($addemployee) ? $addemployee->address : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">

                                    <div class="form-group flex_form physical">
                                        <label class="control-label">Gender :</label>
                                        <div class="col-md-12">
                                            <div class="checkbox-flex">
                                                <div class="radio mb-0">
                                                    <input type="radio" id="gender" name="gender" value="{{$addemployee->gender}}"
                                                           @if($addemployee->gender == "Male") checked
                                                        @endif>
                                                    <label for="gender">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="radio mb-0">
                                                    <input type="radio" name="gender" id="gender" value="{{$addemployee->gender}}"
                                                    @if($addemployee->gender == "Female") checked
                                                        @endif>
                                                    <label for="gender">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="radio mb-0">
                                                    <input type="radio" name="gender" id="gender" value="{{$addemployee->gender}}"
                                                           @if($addemployee->gender == "Neutered") checked
                                                    @endif>
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
                                            <input type="text" name="cnumber" id="cnumber"  class="form-control {{ $errors->has('cnumber') ? 'has-error' : '' }}"  value="{{ old('cnumber', isset($addemployee) ? $addemployee->cnumber : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">
                                    <div class="form-group flex_form">
                                        <label class="control-label">Father Name :</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fname" id="fname"  class="form-control {{ $errors->has('fname') ? 'has-error' : '' }}"  value="{{ old('fname', isset($addemployee) ? $addemployee->fname : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">
                                    <div class="form-group flex_form">
                                        <label class="control-label">Mother Name :</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mname" id="mname"  class="form-control {{ $errors->has('mname') ? 'has-error' : '' }}"  value="{{ old('mname', isset($addemployee) ? $addemployee->mname : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div><!-- info_box -->
                                <div class="info_box">
                                    <div class="form-group flex_form">
                                        <label class="control-label">Citizenship No :</label>
                                        <div class="col-md-12">
                                            <input type="text" name="citizen" id="citizen" class="form-control {{ $errors->has('citizen') ? 'has-error' : '' }}"  value="{{ old('citizen', isset($addemployee) ? $addemployee->citizen : '') }}" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                {{--                                  <button class="update_btn" type="submit" ><span>Update</span></button>--}}
                                <button type="submit"  class="update_btn"><i class="fa fa-floppy-o"></i> Update</button>
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
