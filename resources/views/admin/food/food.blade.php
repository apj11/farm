@extends('admin.layout.app')
@section('content')

    <!-- Begin page -->
<div id="wrapper">

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">



                <div class="row">
                    <div class="col-md-7">
                        <div class="panel panel-primary">
                            <div class="row">
                                <div class="panel_pad">

                                    <div class="col-md-4">
                                        <div class="form-group flex_form">
                                            <label class="control-label">Food Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Paral">
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-4">
                                        <div class="form-group flex_form">
                                            <label class="control-label">Food For</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
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
                                        <th>Food Name</th>
                                        <th>Food For</th>
                                        <th>Price</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($food as $key=>$foods )
                                        <tr id="food{{$foods->id}}">
                                            <td>{{++$key}}</td>
                                            <td>{{$foods->fname}}</td>
                                            <td>{{$foods->category->category}}</td>
                                            <td>{{$foods->fprice}}</td>
                                            <td class="font_style"><a href="{{--{{route('categories.show', $categories->id)}}--}}"><i class="ion-search"></i></a><a href="{{route('food.edit',$foods->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('food.destroy',$foods->id)}}"><i class="ion-trash-a"></i></a></td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="update_blk">
                            <h3>Add Food</h3>
                            <form action="{{route('food.store')}}" method="post">
                                @csrf
                            <div class="form-group flex_form">
                                <label class="control-label">Food Name</label>
                                <div class="col-md-10">
                                    <input type="text"  name="fname" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group flex_form">
                                <label class="control-label">Food For</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="category_id" name="category_id">
                                        <option>Select Option</option>
                                        @forelse($category as $categories)

                                            <option value="{{$categories->id}}">{{$categories->category}}</option>

                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group flex_form">
                                <label class="control-label">Food Price</label>
                                <div class="col-md-10">
                                    <input type="text" name="fprice" class="form-control" required>
                                </div>
                            </div>
{{--                            <div class="add_btn btn_update">--}}
{{--                                <a href="#">Update</a>--}}
{{--                            </div>--}}

                            <div class="add_btn btn_update">
                                <button type="submit" ><i class="fa fa-floppy-o"></i> Add Food</button>
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
                                        <h3 class=""><b>200</b></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Food</h4>
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
