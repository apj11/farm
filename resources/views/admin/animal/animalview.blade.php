
@extends('admin.layout.app')
@section('content')

    <!-- Begin page -->
    <div id="wrapper">

                    <!-- Left Sidebar End -->

                    <!-- Start right Content here -->


        <div class="content-page view_page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="col-lg-12">
                        <div class="tab_head">
                            <ul class="nav nav-tabs navtab-bg">
                                <li class="active">
                                    <a href="#home" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs head_list">Basic Info</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs head_list">Medicine History</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#messages" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs head_list">Food History</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#foodUpdate" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs head_list">Food Update</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#medicineUpdate" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs head_list">Medicine Update</span>
                                    </a>
                                </li>


                            </ul>
                            <div class="view_edit">
                                <a href="addanimal.edit">Edit</a>
                            </div><!-- view_edit -->

                        </div><!-- tab_head -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">

                                <div class="basic_content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="basic_detail">
                                                <ul>
                                                    <li>
                                                        <span>Name or label : {{$addanimal->name}}</span>
                                                    </li>
                                                    <li><span>Animal Category : {{$addanimal->category->category}}</span></li>
                                                    <li><span>Animal Status : {{$addanimal->status}}</span></li>
                                                    <li><span>Gender: {{$addanimal->gender}}</span> </li>
                                                    <li><span>Breed : {{$addanimal->breed}}</span></li>
                                                    <li><span>Color : {{$addanimal->color}}</span></li>
                                                    <li><span>Tag Number : {{$addanimal->tagnumber}}</span></li>
                                                    <li><span>Tag Color : {{$addanimal->tagcolor}}</span></li>
                                                </ul>
                                            </div><!-- basic_detail -->
                                        </div><!-- col -->
                                        <div class="col-md-4">
                                            <div class="basic_detail">
                                                <ul>
                                                    <li>
                                                        <span>Reg Number : {{$addanimal->regnumber}}</span>
                                                    </li>
                                                    <li><span>Birth Date : {{$addanimal->birthdate}}</span></li>
                                                    <li><span>Animal Was : {{$addanimal->living}}</span></li>
                                                    <li><span>Weight: {{$addanimal->weight}}</span> </li>
                                                    <li><span>Purchase Date : {{$addanimal->purchasedate}}</span></li>
                                                    <li><span>Parent Tag : {{$addanimal->parenttag}}</span></li>
                                                    <li><span>Purchase From : {{$addanimal->purchasefrom}}</span></li>
                                                </ul>
                                            </div><!-- basic_detail -->
                                        </div><!-- col -->
                                    </div><!-- row -->
                                </div><!-- basic_content -->

                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Medicine Name</th>
                                                    <th>From </th>
                                                    <th>To</th>
                                                    <th>Feeding Days</th>
                                                    <th>Feeding time</th>
                                                    <th>Remaining Days</th>
                                                </tr>
                                                </thead>
                                                <tbody>


                                                @foreach($animalmedicine as $key=>$animalmedicines )
                                                    <tr id="categories{{$animalmedicines->id}}">
                                                        <td>{{++$key}}</td>
                                                        <td>{{$animalmedicines->medicine_id}}</td>
                                                        <td>{{$animalmedicines->startdate}}</td>
                                                        <td>{{$animalmedicines->enddate}}</td>
                                                        <td>
                                                            <?php
                                                            $startdate = $animalmedicines->startdate;
                                                            $enddate = $animalmedicines->enddate;
                                                            $datetime1 = new DateTime($startdate);
                                                            $datetime2 = new DateTime($enddate);
                                                            $interval = $datetime1->diff($datetime2);
                                                            $days = $interval->format('%a');
                                                            echo $days;
                                                            ?>
                                                        </td>
                                                        <td>{{$animalmedicines->time}}</td>
                                                        <td>
                                                            <?php
                                                            $startdate = $animalmedicines->startdate;
                                                            $enddate = $animalmedicines->enddate;
                                                            $datetime1 = new DateTime($startdate);
                                                            $datetime2 = new DateTime($enddate);
                                                            $interval = $datetime1->diff($datetime2);
                                                            $days = $interval->format('%a');
                                                            echo $days;
                                                            ?>

                                                        </td>
{{--                                                        <td class="font_style"><a href="{{route('categories.show', $categories->id)}}"><i class="ion-search"></i></a><a href="{{route('categories.edit',$categories->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.destroy',$categories->id)}}"><i class="ion-trash-a"></i></a></td>--}}
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->

                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Food</th>
                                                    <th>Feeding Time</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($animalfood as $key=>$animalfoods )
                                                    <tr id="categories{{$animalfoods->id}}">
                                                        <td>{{++$key}}</td>
                                                        <td>{{$animalfoods->food_id}}</td>
                                                        <td>{{$animalfoods->time}}</td>
{{--                                                                                                                <td class="font_style"><a href="{{route('categories.show', $categories->id)}}"><i class="ion-search"></i></a><a href="{{route('categories.edit',$categories->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.destroy',$categories->id)}}"><i class="ion-trash-a"></i></a></td>--}}
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div>
                            <div class="tab-pane" id="foodUpdate">
                                <div class="info_sec">
                                    <h3>Food Info</h3>
                                    <form  action="{{route('animalfood.store')}}" method="post">
                                        @csrf
                                    <button class="add-panel" data-panel="food-panel" data-output-panel="food-output-wrapper"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <input type="hidden" name="addanimal_id" value="{{$addanimal->id}}">
                                        <div class="" id="food-panel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row panel_pad">
                                                    <div class="col-md-6">
                                                        <div class="form-group flex_form mb-0">
                                                            <label class="control-label">Food</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control"  name="food_id">
                                                                    <option>Select Option</option>
                                                                    @forelse($food as $foods)
                                                                        <option value="{{$foods->id}}">{{$foods->fname}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- col -->


                                                    <div class="col-md-6 time_appended">
                                                        <div class="form-group flex_form mb-0">
                                                            <label class="control-label">Time</label>

                                                            <input type="text" name="time" value="" class="form-control"/>
                                                            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{asset('assets/images/add-icon.png')}}"/></a>
                                                            <a href="javascript:void(0);" class="remove_panel" title="Add field"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                            <div class="form-group flex_form">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- col -->
                                        </div><!-- row -->

                                    </div>
                                    <div class="field_wrapper" id="food-output-wrapper">
                                    </div>
                                        <div class="update_btn">
                                            <button type="submit" ><i class="fa fa-floppy-o"></i> Add Food Info</button>
                                        </div><!-- update_btn -->
                                    </form>
                                </div><!-- info_sec -->
                            </div>
                            <div class="tab-pane" id="medicineUpdate">
                                <div class="info_sec">
                                    <h3>Medicine Info</h3>
                                    <form  action="{{route('animalmedicine.store')}}" method="post">
                                        @csrf
                                    <button class="add-panel" data-panel="medicine-panel" data-output-panel="medicine-output-wrapper"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <input type="hidden" name="addanimal_id" value="{{$addanimal->id}}">
                                    <div class="" id="medicine-panel">
                                        <div class="row panel_pad">
                                            <div class="col-md-3">
                                                <div class="form-group flex_form">
                                                    <label class="control-label">Medicine</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control"  name="medicine_id">
                                                            <option>Select Option</option>
                                                            @forelse($medicine as $medicines)
                                                                <option value="{{$medicines->id}}">{{$medicines->mname}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-3">
                                                <div class="form-group flex_form">
                                                    <label class="control-label">Feeding Duration</label>
                                                    <div class="col-md-10">
                                                        <input type="date"  name="startdate" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-3">
                                                <div class="form-group flex_form">
                                                    <label class="control-label">To</label>
                                                    <div class="col-md-10">
                                                        <input type="date"  name="enddate" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-3 time_appended">
                                                <div class="form-group flex_form">
                                                    <label class="control-label">Time</label>

                                                    <input type="text" name="time" value="" class="form-control"/>
                                                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{asset('assets/images/add-icon.png')}}"/></a>
                                                    <a href="javascript:void(0);" class="remove_panel" title="Add field"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                    <div class="form-group flex_form">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="field_wrapper" id="medicine-output-wrapper">

                                    </div>
                                        <div class="update_btn">
                                            <button type="submit" ><i class="fa fa-floppy-o"></i> Add Medicine Info</button>
                                        </div><!-- update_btn -->
                                    </form>

                                </div><!-- info_sec -->
                            </div>

                        </div>
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->



        </div>
                    <!-- End Right content here -->

                </div>
                <!-- END wrapper -->

    @endsection
