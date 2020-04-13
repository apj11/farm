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










                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="panel panel-primary">
                                            <div class="row">
                                                <div class="panel_pad">

                                                 <div class="col-md-4">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Medicine Name</label>
                                                <div class="col-md-10">
                                                    <select class="form-control"  name="medicine_id">
                                                        <option>Select Option</option>
                                                        @forelse($medicine as $medicines)
                                                            <option value="{{$medicines->id}}">{{$medicines->mname}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                 </div><!-- col -->
                                                   <div class="col-md-4">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Medicine For</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control js-example-basic-single">
                                                        <option>Select Option</option>
                                                        @forelse($category as $categories)

                                                            <option value="{{$categories->id}}">{{$categories->category}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                </div><!-- col -->

                                            </div><!-- panel_pad -->
                                            </div><!-- row -->
                                                                                       <div class="panel-body pt-0">
                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Sold Item</th>
                                                            <th>Sold To</th>
                                                            <th>Price</th>

                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($sell as $key=>$sells )
                                                        <tr id="buy{{$sells->id}}">
                                                            <td>{{++$key}}</td>
                                                            <td>{{$sells->sellingitem}}</td>
                                                            <td>{{$sells->sellingto}}</td>
                                                            <td>{{$sells->sellingprice}}</td>
                                                            <td class="font_style"><a href="{{--{{route('categories.show', $categories->id)}}--}}"><i class="ion-search"></i></a><a href="{{route('sell.edit',$sells->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');"href="{{route('sell.destroy',$sells->id)}}" ><i class="ion-trash-a"></i></a></td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="update_blk">
                                            <h3>Selling</h3>
                                            <form action="{{route('sell.store')}}" method="post">
                                                @csrf
                                            <div class="form-group flex_form">
                                                <label class="control-label">Selling Item</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="sellingitem" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group flex_form">
                                                <label class="control-label">Sold To</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="sellingto" class="form-control"required>
                                                </div>
                                            </div>

                                              <div class="form-group flex_form">
                                                <label class="control-label">Selling Price</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="sellingprice" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="add_btn btn_update">
                                                <button type="submit" ><i class="fa fa-floppy-o"></i> Save</button>
                                            </div>
                                            </form>
                                            </div><!-- update_blk -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel panel-primary text-center panel_iner_update">
                                                    <div class="panel-body">
                                                        <div class="image_patt">
                                                           <!--  <img src="assets/images/cow.png"> --><i class="fa fa-medkit" aria-hidden="true"></i>
                                                        </div><!-- image_patt -->
                                                        <h3 class=""><b>71000 /-</b></h3>
                                                                                                           </div>
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Total Sell</h4>
                                                    </div>
                                                </div>
                                                </div><!-- col -->
                                                <div class="col-md-6"></div><!-- col -->
                                            </div><!-- row -->
                                    </div><!-- col -->

                                </div> <!-- End Row -->


                            </div> <!-- container -->

                        </div> <!-- content -->



                    </div>
                    <!-- End Right content here -->

                </div>
                <!-- END wrapper -->
@endsection
