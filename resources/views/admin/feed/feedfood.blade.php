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
                                                    <input type="text" class="form-control" placeholder="123456">
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
                                                            <th>status</th>
                                                            <td>Action</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($animalfood as $key=>$animalfoods )
                                                        <tr id="categories{{$animalfoods->id}}">
                                                            <td>{{++$key}}</td>
                                                            <td>{{$animalfoods->addanimal_id}}</td>
                                                            <td>{{$animalfoods->addanimal_id}}</td>
                                                            <td>{{$animalfoods->status}}</td>
                                                            <td class="font_style"><a href="{{route('foodstatus.show',$animalfoods->id)}}"><i class="ion-search"></i></a>{{--<a href="{{route('addanimal.edit',$addanimals->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('addanimal.destroy',$addanimals->id)}}"><i class="ion-trash-a"></i></a>--}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="update_blk">
                                            <h3>Food feed Update</h3>
                                            <form action="{{route('animalfood.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                               <div class="panel-body pt-0">
                                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table_label_check" cellspacing="0" width="100%">
                                                    <thead>
                                                    @foreach($animalfood as $key=>$animalfoods )
                                                                                                                    <tr id="categories{{$animalfoods->id}}">
                                                                                                                        <td>{{++$key}}</td>
                                                        <td>{{$animalfoods->food_id}}</td>
                                                        <th><span class="block_element"> <input type="checkbox" name="status"><label for="vehicle1"> {{$animalfoods->time}}</label></span>
{{--                                                                                                                                <span class="block_element"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> 02:00 A.M</label></span>--}}
                                                        </th>                                                       <td class="font_style"><a href="{{route('categories.show', $errors->id)}}"><i class="ion-search"></i></a><a href="{{route('categories.edit',$errors->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.destroy',$errors->id)}}"><i class="ion-trash-a"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    </thead>
                                                </table>

                                            </div>

                                            <div class="update_btn">
                                                <button type="submit" ><i class="fa fa-floppy-o"></i>Submit</button>
                                            </div><!-- update_btn -->
                                            </form>
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
