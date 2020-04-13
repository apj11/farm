<html>
<head>
	<title>Nepali Calendar</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="nepali.datepicker.v2.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="nepali.datepicker.v2.2.min.css" />
</head>
<body>
	<div class="container">
		<h3>Datepicker with Year and Month</h3>
		<input type="text" id="nep"  class="nepali-calendar nepaliDate" value=""/>	
	</div>

</body>
</html>
<script>
	// $(document).ready(function(){
	// 	$('#nepaliDateD').nepaliDatePicker({
	// 		disableBefore: '12/08/2073',
	// 		disableAfter: '12/20/2073'
	// 	});
	

	// 	$('#nepaliDate5').nepaliDatePicker({
	// 		npdMonth: true,
	// 		npdYear: true,
	// 		npdYearCount: 10
	// 	});
		
	// });



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