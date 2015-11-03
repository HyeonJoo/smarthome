<html>
<head>
<script src="./javascript/chartjs/Chart.js"></script>
<!--<link rel="stylesheet" href="../main.css">-->
<!--<link rel="stylesheet" href="../main.js">-->
<!--copied start-->
<meta charset="utf-8">
<title>**The House where You Live**</title>
<!-- Optional theme -->
<link rel="stylesheet" href="./css/index.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="./css/index.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!--copied end-->
</head>
<body style="background:black; font-family:BM HANNA_TTF" >

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span id="navbn" class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a style="color:black" class="navbar-brand black"  href="index.php">니가 사는 그 집</a>
          <img src="./images/btn_home.png" align="left" class="white_house">
        </div>
        <div class="collapse navbar-collapse" >
          <ul class="nav navbar-nav navbar-right">
            <li class="intro"><a href="info.php">소개</a></li>
            <li class="active intro"><a href="view.php">집상태</a></li>
            <li class="intro"><a href="control.php">원격 제어</a></li>
            <li class="intro"><a href="wiring.php">배선 상태</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--eunju copied-->
<div class="container house">
	<div class="row">
		 <p class="white" style="font-size:50px" >현재 집 상태</p>
		<div class="col-md-9 col-sm-12">
			<div>
				<canvas id="canvas1"></canvas>	
			</div>
		</div>
		<div class="col-md-3 col-sm-12" id="canvas-holder">
			<canvas id="chart-area"/>
		</div>
	</div>
</div>

<script>
var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
var barChartData = {
	labels : ["Light","Humidity","Current","Temperature"],
	datasets : [
		{
			fillColor : "rgba(220,220,220,0.5)",
			strokeColor : "rgba(220,220,220,0.8)",
			highlightFill: "rgba(220,220,220,0.75)",
			highlightStroke: "rgba(220,220,220,1)",
			data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
		},
		{
			fillColor : "rgba(151,187,205,0.5)",
			strokeColor : "rgba(151,187,205,0.8)",
			highlightFill : "rgba(151,187,205,0.75)",
			highlightStroke : "rgba(151,187,205,1)",
			data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
		}
	]
}

var pieData = [
	{
		value: 300,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Red"
	},
	{
		value: 50,
		color: "#46BFBD",
		highlight: "#5AD3D1",
		label: "Green"
	},
	{
		value: 100,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "Yellow"
	},
	{
		value: 40,
		color: "#949FB1",
		highlight: "#A8B3C5",
		label: "Grey"
	},
	{
		value: 120,
		color: "#4D5360",
		highlight: "#616774",
		label: "Dark Grey"
	}
];
		
window.onload = function(){
	var ctx = document.getElementById("chart-area").getContext("2d");
	var ctx1 = document.getElementById("canvas1").getContext("2d");
	
	window.myPie = new Chart(ctx).Pie(pieData);
	window.myBar = new Chart(ctx1).Bar(barChartData, {
		responsive : true
	});
}
</script>

<div class="index-footer">
  <p class="bottom">2015_X[deca] _ Konkuk Univ.</p>
</div>
</body>
</html>
