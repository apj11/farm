@extends('admin.layout.app')
@section('content')


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->

<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

>
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
                                                <label class="control-label">Bought Item</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Cow">
                                                </div>
                                            </div>
                                                 </div><!-- col -->
                                                   <div class="col-md-4">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Buy From</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Ram Prasad</option>
                                                        <option>Manoj</option>
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
                                                            <th>Bought Item</th>
                                                            <th>Buy From</th>
                                                            <th>Price</th>

                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($buy as $key=>$buys )
                                                        <tr id="buy{{$buys->id}}">
                                                            <td>{{++$key}}</td>
                                                            <td>{{$buys->buyitem}}</td>
                                                            <td>{{$buys->buyfrom}}</td>
                                                            <td>{{$buys->buyprice}}</td>
                                                            <td class="font_style"><a href="{{--{{route('categories.show', $categories->id)}}--}}"><i class="ion-search"></i></a><a href="{{route('buy.edit',$buys->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');"href="{{route('buy.destroy',$buys->id)}}" ><i class="ion-trash-a"></i></a></td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="update_blk">
                                            <h3>Add Buy Item</h3>
                                            <form action="{{route('buy.store')}}" method="post">
                                                @csrf
                                            <div class="form-group flex_form">
                                                <label class="control-label">Buy Item</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="buyitem" class="form-control" required >
                                                </div>
                                            </div>

                                            <div class="form-group flex_form">
                                                <label class="control-label">Buy From</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="buyfrom" class="form-control" required >
                                                </div>
                                            </div>

                                              <div class="form-group flex_form">
                                                <label class="control-label">Buying Price</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="buyprice" class="form-control" required>
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
                                                        <h4 class="panel-title">Total Buy</h4>
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
