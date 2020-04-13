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
                               <!--  <div class="row">
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
                                    <div class="col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="row">
                                                <div class="panel_pad">

                                                 <div class="col-md-4">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Animal Tag</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="1234">
                                             </div>
                                            </div>
                                                 </div><!-- col -->
                                                   <div class="col-md-4">
                                                   <div class="form-group flex_form">
                                                <label class="control-label">Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Cow</option>
                                                        <option>Dog</option>
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
                                                            <th>Animal Tag NO</th>
                                                            <th>Category</th>
                                                            <th>Time</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($animalmedicine as $key=>$animalmedicines )
                                                        <tr id="categories{{$animalmedicines->id}}">
                                                            <td>{{++$key}}</td>
                                                            <td>{{$animalmedicines->addanimal_id}}</td>
                                                            <td>{{$animalmedicines->addanimal_id}}</td>
                                                            <td>{{$animalmedicines->time}}</td>
                                                            <td class="font_style"><a href="{{route('medicinestatus.show',$animalmedicines->id)}}"><i class="ion-search"></i></a>{{--<a href="{{route('addanimal.edit',$addanimals->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('addanimal.destroy',$addanimals->id)}}"><i class="ion-trash-a"></i></a>--}}</td>

{{--                                                                                                                  <td class="font_style"><a href="{{route('categories.show', $categories->id)}}"><i class="ion-search"></i></a><a href="{{route('categories.edit',$categories->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.destroy',$categories->id)}}"><i class="ion-trash-a"></i></a></td>--}}
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="update_blk">
                                            <h3>Medicine feed Update</h3>

                                               <div class="panel-body pt-0">
                                                <table id="datatable-resp   onsive" class="table table-striped table-bordered dt-responsive nowrap table_label_check" cellspacing="0" width="100%">
                                                    <thead>
                                                    @foreach($animalmedicine as $key=>$animalmedicines )
                                                        {{--                                                            <tr id="categories{{$animalmedicines->id}}">--}}
                                                        {{--                                                                <td>{{++$key}}</td>--}}
                                                        <td>{{$animalmedicines->medicine_id}}</td>
                                                        <td>{{$animalmedicines->startdate}} / {{$animalmedicines->enddate}}</td>
                                                        <th><span class="block_element"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> {{$animalmedicines->time}}</label></span>
                                                            {{--                                                                    <span class="block_element"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> 02:00 A.M</label></span>--}}
                                                        </th>                                                       <td class="font_style"><a href="{{route('categories.show', $errors->id)}}"><i class="ion-search"></i></a><a href="{{route('categories.edit',$errors->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.destroy',$errors->id)}}"><i class="ion-trash-a"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    </thead>
                                                  <!--   <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>1234567</td>
                                                            <td><span> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> 10 A.M</label></span>
                                                            </td>


                                                        </tr>

                                                    </tbody> -->
                                                </table>

                                            </div>

                                            <div class="add_btn btn_update">
                                                    <a href="#">Submit</a>
                                                </div>
                                            </div><!-- update_blk -->

                                    </div><!-- col -->

                                </div> <!-- End Row -->


                            </div> <!-- container -->

                        </div> <!-- content -->



                    </div>
                    <!-- End Right content here -->

                </div>
                <!-- END wrapper -->

@endsection
