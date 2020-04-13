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










                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="row">
                                                <div class="panel_pad">
                                                <div class="col-md-2">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control ">
                                                        <option>Select Option</option>
                                                        @forelse($category as $categories)

                                                            <option value="{{$categories->id}}">{{$categories->category}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                </div><!-- col -->
                                                 <div class="col-md-2">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Tag Number</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="122323">
                                                </div>
                                            </div>
                                                 </div><!-- col -->
                                                   <div class="col-md-2">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Status</label>

                                                    <select class="form-control">
                                                        <option>Active</option>
                                                        <option>Sick</option>
                                                    </select>

                                            </div>
                                                </div><!-- col -->
                                                 <div class="col-md-2">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Gender</label>

                                                    <select class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>

                                            </div>
                                                </div><!-- col -->

                                                <div class="col-md-2 flt_right">
                                                    <div class="add_btn">
                                                    <a href="addanimal">Add Animal</a>
                                                </div><!-- add_btn -->
                                                </div><!-- col -->
                                            </div><!-- panel_pad -->
                                            </div><!-- row -->
                                            <div class="panel-body pt-0">
                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Tag Number</th>
                                                            <th>Category</th>
                                                            <th>Status</th>
                                                            <th>Gender</th>
                                                            <th>Color</th>
                                                            <th>Breed</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($addanimal as $key=>$addanimals )
                                                        <tr id="addanimal{{$addanimals->id}}">
                                                            <td>{{++$key}}</td>
                                                            <td>{{$addanimals->tagnumber}}</td>
                                                            <td>{{$addanimals->category->category}}</td>
                                                            <td>{{$addanimals->status}}</td>
                                                            <td>{{$addanimals->gender}}</td>
                                                            <td>{{$addanimals->color}}</td>
                                                            <td>{{$addanimals->breed}}</td>
                                                            <td class="font_style"><a href="{{route('addanimal.show', $addanimals->id)}}"><i class="ion-search"></i></a><a href="{{route('addanimal.edit',$addanimals->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('addanimal.destroy',$addanimals->id)}}"><i class="ion-trash-a"></i></a></td>
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
