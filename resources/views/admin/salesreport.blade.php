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
                                                <label class="control-label">Sold Item</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>All</option>
                                                        <option>Chicken</option>
                                                        <option>Buff</option>
                                                    </select>
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-md-2">
                                                 <div class="form-group flex_form">
                                                    <label class="control-label">Date</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="2076/04/08">
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
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sell as $key=>$sells )
                                                <tr id="buy{{$sells->id}}">
                                                    <td>{{++$key}}</td>
                                                    <td>{{$sells->sellingitem}}</td>
                                                    <td>{{$sells->sellingto}}</td>
                                                    <td>{{$sells->created_at}}</td>
                                                    <td>{{$sells->sellingprice}}</td>
{{--                                                    <td class="font_style"><a href="--}}{{--{{route('categories.show', $categories->id)}}--}}{{--"><i class="ion-search"></i></a><a href="{{route('sell.edit',$sells->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');"href="{{route('sell.destroy',$sells->id)}}" ><i class="ion-trash-a"></i></a></td>--}}
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
