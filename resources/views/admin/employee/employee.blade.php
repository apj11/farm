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
                              <!--   <div class="row">
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

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="row">
                                                <div class="panel_pad">
                                                     <div class="col-md-2">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="122323">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                                <div class="col-md-2">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Citizenship No</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="122323">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                                  <div class="col-md-2">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Address</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="122323">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-2 flt_right">
                                                <div class="add_btn">
                                                    <a href="addemployee">Add Employee</a>
                                                </div>
                                            </div><!-- col -->

                                        </div><!-- panel_pad -->
                                    </div><!-- row -->
                                    <div class="panel-body pt-0">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Image</th>
                                                    <th>Employee Name</th>
                                                    <th>Father's Name</th>
                                                    <th>Mother Name</th>
                                                    <th>Address</th>
                                                    <th>Citizenship Number</th>
                                                    <th>Contact Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                        <tbody>
                                        @foreach($addemployee as $key =>$addemployees )
                                            <tr id="addemployees{{$addemployees->id}}">
                                                <td>{{++$key}}</td>
                                                <td><img src="{{asset(''.$addemployees->image)}}" height="100px" width="100px"></td>
                                                <td>{{$addemployees->fullname}}</td>
                                                <td>{{$addemployees->fname}}</td>
                                                <td>{{$addemployees->mname}}</td>
                                                <td>{{$addemployees->address}}</td>
                                                <td>{{$addemployees->cnumber}}</td>
                                                <td>{{$addemployees->citizen}}</td>
                                                <td class="font_style"><a href="{{route('addemployee.show', $addemployees->id)}}"><i class="ion-search"></i></a><a href="{{route('addemployee.edit',$addemployees->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('addemployee.destroy',$addemployees->id)}}"><i class="ion-trash-a"></i></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                        </div>


                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->



</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->
@endsection
