<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Xadmino - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- DataTables -->
    <link href="{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
{{--    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">--}}

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <script type="text/javascript" src="nepali.datepicker/js/jquery.js"></script>
    <script type="text/javascript" src="nepali.datepicker/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="nepali.datepicker/nepali.datepicker.v2.2.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="nepali.datepicker/nepali.datepicker.v2.2.min.css" />
<script>
    $(document).ready(function(){
    $(".nepaliDate").nepaliDatePicker({
    disableBefore: '12/08/2073',
    disableAfter: '12/20/2073'
    });


    $(".nepaliDate").nepaliDatePicker({
    npdMonth: true,
    npdYear: true,
    npdYearCount: 10
    });

    });
    </script>
    @stack('styles')
</head>
<body>
<div id="wrapper">

    @include('admin.partials.sidebar')

    @include('admin.partials.header')



    @yield('content')


</div>
@include('flash-message')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{asset('assets/js/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Datatables-->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>

<script src="{{asset('assets/pages/dashborad.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script>
    $(function(){
        'use strict'

        $('#example1').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example8').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });



        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>


<script>
    $(function(){

        'use strict'

        $.plot('#flotChart1', [{
            data: df1,
            color: '#38c4fa'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 40,
                max: 80
            }
        });

        $.plot('#flotChart2', [{
            data: df1,
            color: '#22d273'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 20,
                max: 60
            }
        });

        $.plot('#flotChart3', [{
            data: df1,
            color: '#e83e8c'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 60,
                max: 100
            }
        });

        $.plot('#flotChart4', [{
            data: df1,
            color: '#fd7e14'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 100,
                max: 140
            }
        });

        // card-calendar-one widget
        $('#datepicker1').datepicker({
            showOtherMonths: true
        });

    })
</script>

<script>
    $(function(){

        'use strict'

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        if(!Cookies.get('theme-skin')){
            $('#defaultTheme').addClass('theme-selected');
        }

        $('.card-theme').on('click', function(e){
            $('.card-theme').removeClass('theme-selected');
            $(this).addClass('theme-selected');

            var skin = $(this).attr('data-title');

            if(skin === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skin+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skin+'.css');
                }

                Cookies.set('theme-skin', skin);
            }
        })

        var skinParam = getUrlParameter('skin');
        if(skinParam.length) {
            $('.card-theme').removeClass('theme-selected');
            $('.card-theme[data-title="'+skinParam+'"]').addClass('theme-selected');

            if(skinParam === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skinParam+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skinParam+'.css');
                }

                Cookies.set('theme-skin', skinParam);
            }
        }

    })
</script>
{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="https://unpkg.com/nepali-date-picker@2.0.0/dist/jquery.nepaliDatePicker.min.js" integrity="sha384-bBN6UZ/L0DswJczUYcUXb9lwIfAnJSGWjU3S0W5+IlyrjK0geKO+7chJ7RlOtrrF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.0/dist/nepaliDatePicker.min.css" integrity="sha384-Fligaq3qH5qXDi+gnnhQctSqfMKJvH4U8DTA+XGemB/vv9AUHCwmlVR/B3Z4nE+q" crossorigin="anonymous">

<script type="text/javascript">
    $(".bod-picker").nepaliDatePicker({
        // dateFormat: "%D, %M %d, %y",

        dateFormat: "%y-%m-%d",
        closeOnDateSelect: true
    });
    $("#clear-bth").on("click", function(event) {
        $(".bod-picker").val('');
    });

</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@stack('scripts')
</body>
</html>
