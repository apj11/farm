<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Avishek Admin</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profile</a></li>
                        <li><a href="javascript:void(0)"> Settings</a></li>
                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('index')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                <li>
                    <a href="{{route('animal.index')}}" class="waves-effect"><i class="fa fa-github-square"></i><span> Animals</span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-lemon-o" aria-hidden="true"></i> <span> Feed </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('feedfood.index')}}">Feed Food</a></li>
                        <li><a href="{{route('feedmedicine.index')}}">Feed Medicine</a></li>


                    </ul>
                </li>
                <li>
                    <a href="{{route('medicine.index')}}" class="waves-effect"><i class="fa fa-medkit" aria-hidden="true"></i><span> Medicines</span></a>
                </li>
                <li>
                    <a href="{{route('food.index')}}" class="waves-effect"><i class="fa fa-cutlery" aria-hidden="true"></i><span> Food</span></a>
                </li>
                <li>
                    <a href="{{route('sell.index')}}" class="waves-effect"><i class="fa fa-money" aria-hidden="true"></i><span> Sell</span></a>
                </li>
                <li>
                    <a href="{{route('buy.index')}}" class="waves-effect"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Buy</span></a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}" class="waves-effect"><i class="fa fa-stack-exchange" aria-hidden="true"></i><span> Categories</span></a>
                </li>
                <li>
                    <a href="{{route('employee.index')}}" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i></i><span> Employee</span></a>
                </li>
                <!--
                                <li>
                                    <a href="typography.html" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Typography <span class="badge badge-primary pull-right">6</span></span></a>
                                </li> -->
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Reports </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('salesreport.index')}}">Sales Report</a></li>
                        <li><a href="{{route('purchasereport.index')}}">Purchase Report</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
