<?php include_once 'helpers/helper.php'; ?>
	<?php subview('header.php'); 
    require 'helpers/init_conn_db.php';                      
	?> 	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
/*--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--*/
footer {
  /* position: absolute; */
  bottom: 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}
form.logout_form {
	background: transparent;
	padding: 10px !important;
}
body {
	/* background:url('assets/images/bg2.jpg') no-repeat 0px 0px;
	background-size: cover;
	font-family: 'Open Sans', sans-serif;
	background-attachment: fixed;
    background-position: center; */
	/**background: #bdc3c7;  /* fallback for old browsers */
/*background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
/*background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 scroll-behavior: smooth;
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Montserrat', sans-serif;
	
}
html{
	scroll-behavior: smooth;
}
h5. {
	margin-top: 10px;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:cornflowerblue ;
	font-size:50px;
	margin-top:50px;
	text-align:center;
}

.main-agileinfo{
	margin:50px auto;
	width:50%;
}
/*--SAP--*/
.sap_tabs{
	clear:both;
	padding: 0;
	border: 1px solid #c6c6c6;
    box-shadow: 0px 1px 5px #00000057;
}
.tab_box{
	background:#fd926d;
	padding: 2em;
}
.top1{
	margin-top: 2%;
}
.resp-tabs-list {
    list-style: none;
    padding: 15px 0px;
    margin: 0 auto;
    text-align: center;
	/* background: rgb(33, 150, 243); */
	background: #41bef4;
}
.resp-tab-item {
    font-size: 1.1em;
    font-weight: 500;
    cursor: pointer;
    display: inline-block;
    margin: 0;
    text-align: center;
    list-style: none;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    text-transform: uppercase;
    margin: 0 1.2em 0;
	color:#5d5757;
	padding:7px 15px;
}

.resp-tab-active {
	color:#fff;	
}
.resp-tabs-container {
	padding: 0px;
	clear: left;	
}
h2.resp-accordion {
	cursor: pointer;
	padding: 5px;
	display: none;
}
.resp-tab-content {
	display: none;
}
.resp-content-active, .resp-accordion-active {
   display: block;
}
form {
    /* background:rgba(3, 3, 3, 0.57); */
    padding: 25px;
}

h3 {
    font-size: 16px;
    /* color:rgb(255, 255, 255); */
    margin-bottom: 7px;
}
.from,.to,.date,.depart,.return{
	width:48%;
	float:left;
}

.from,.to,.date{
	margin-bottom:40px;
}
.from,.date,.depart{
	margin-right:4%;
}
input[type="text"]{
	padding:10px;
	width:93%;
	float:left;
}
input#datepicker,input#datepicker1,input#datepicker2,input#datepicker3 {
    width: 85%;
	margin-bottom:10px;
}
select#w3_country1 {
    padding: 10px;
	float:left;
}
label.checkbox {
  display: inline-block;
}
.checkbox {
    position: relative;
    font-size: 0.95em;
    font-weight: normal;
    color:#dedede;
    padding: 0em 0.5em 0em 2em;
}
.checkbox i {
    position: absolute;
    bottom: 1px;
    left: 2px;
    display: block;
    width: 18px;
    height: 18px;
    outline: none;
    background: #fff;
    border: 1px solid #6A67CE;
}
.checkbox i {
    font-size: 20px;
    font-weight: 400;
    color: #999;
    font-style: normal;
}
.checkbox input:checked + i:after {
    opacity: 1;
}
.checkbox input + i:after {
    position: absolute;
    opacity: 0;
    transition: opacity 0.1s;
    -o-transition: opacity 0.1s;
    -ms-transition: opacity 0.1s;
    -moz-transition: opacity 0.1s;
    -webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
    content: '';
    background: url("assets/images/tick.png") no-repeat 5px 5px;
    top: -1px;
    left: -1px;
    width: 15px;
    height: 15px;
    font: normal 12px/16px FontAwesome;
    text-align: center;
}
input[type="checkbox"]{
	opacity:0;
	margin:0;
	display:none;
}

.quantity-select .entry.value-minus {
    margin-left: 0;
}
.value-minus, .value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
	background:#818181;
}

.value {
    cursor: default;
    width: 40px;
    height:33px;
    color: #000;
    line-height: 24px;
    border: 1px solid #E5E5E5;
    background-color: #fff;
    text-align: center;
    display: inline-block;
    margin-right: 3px;
	padding-top:7px;
}

.quantity-select .entry.value-minus:hover, .quantity-select .entry.value-plus:hover {
    background:rgba(0, 0, 0, 0.6);;
}
.value-minus, .value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
}
.quantity-select .entry.value-minus:before, .quantity-select .entry.value-plus:before {
    content: "";
    width: 13px;
    height: 2px;
    background: #fff;
    left: 50%;
    margin-left: -7px;
    top: 50%;
    margin-top: -0.5px;
    position: absolute;
}
.quantity-select .entry.value-plus:after {
    content: "";
    height: 13px;
    width: 2px;
    background: #fff;
    left: 50%;
    margin-left: -1.4px;
    top: 50%;
    margin-top: -6.2px;
    position: absolute;
}

.numofppl,.adults,.child{
	width:50%;
	float:left;
}
.class{
	width:48%;
	float:left;
}
input[type="submit"] {
    font-size: 18px;
    color: #fff;
    background:#4caf50;
    border: none;
    outline: none;
    padding: 10px 20px;
    margin-top: 50px;
	cursor:pointer;
	 transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
}
input[type="submit"]:hover  {
    background:#212121;
	color:#fff;
}
/*-- load-more --*/
ul#myList{
	margin-bottom:2em;
}
#myList li{ 
	display:none;
	list-style-type:none;
}
#loadMore,#showLess {
	display: inline-block;
    cursor: pointer;
    padding: 7px 20px;
    background: #fff;
    font-size: 14px;
    color: #fff;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
    background: rgb(33, 150, 243);
}
#loadMore:hover  {
    background:#212121;
	color:#fff;
}

.spcl{
	position:relative;
}

.ui-datepicker {width:16.2%;
	padding: 0 0em 0;
	}
	.ui-datepicker .ui-datepicker-header {
	  position: relative;
	  padding: .56em 0;
	  background:rgb(33, 150, 243);;
	  text-transform: uppercase;
	}

form.blackbg{
	background:rgba(3, 3, 3, 0.57);
}
/*-- //load-more --*/
.footer-w3l {
    margin: 50px 0 15px 0;
}
.footer-w3l p{
	font-size:14px;
	text-align:center;
	color:#000;
	line-height:27px;
}
.footer-w3l p a{
	color:#000;
}
.footer-w3l p a:hover{
	text-decoration:underline;
}
/*-- responsive --*/
 @media (max-width:1440px){
	.checkbox {
		font-size: 0.9em;
	}
}
 @media (max-width:1366px){
	.main-agileinfo {
		width: 53%;
	}
}
 @media (max-width:1280px){
	.main-agileinfo {
		width: 57%;
	}
}
 @media (max-width:1080px){
	h1 {
		color: #fff;
		font-size: 47px;
	}
	.main-agileinfo {
		width: 68%;
	}
}
 @media (max-width:1024px){
	.main-agileinfo {
		width: 71%;
	}
}
 @media (max-width:991px){
	.from, .to, .date, .depart, .return {
		width: 49%;
		float: left;
	}
	.from, .date, .depart {
		margin-right: 2%;
	}
}
 @media (max-width:966px){
	.main-agileinfo {
		width: 73%;
	}
	
}
 @media (max-width:900px){
	.checkbox {
		font-size: 0.82em;
	}
}
 @media (max-width:800px){
	.main-agileinfo {
		width: 81%;
	}
}
 @media (max-width:768px){
	.main-agileinfo {
		width: 85%;
	}
	.checkbox i {
		width: 15px;
		height: 15px;
	}
	.checkbox input + i:after {
		top: -3px;
		left: -3px;
	}
}
 @media (max-width:736px){
	.main-agileinfo {
		width: 88%;
		margin:40px auto;
	}
	h1 {
		color: #fff;
		font-size: 43px;
		margin-top:40px;
	}
	input[type="text"] {
		padding: 10px;
		width: 90%;
		float: left;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 79%;
	}
	.value-minus, .value-plus {
		height: 30px;
		width: 30px;
	}
	.value {
		width: 33px;
		height: 25px;
		padding-top: 6px;
	}
}
 @media (max-width:667px){
	.numofppl {
		width: 60%;
	}
	.roundtrip .date {
		width: 68%;
		float:left;
	}
	.roundtrip .class{
		width:30%;
		float:left;
	}
	.oneway .depart,.multicity .depart{
		width: 68%;
	}
}
 @media (max-width:600px){
	select#w3_country1 {
		width: 100%;
	}
}
 @media (max-width:568px){
	h1 {
		font-size: 40px;
	}
	.resp-tab-item {
		padding: 7px 13px;
		margin: 0 1em 0;
	}
	.numofppl {
		width: 70%;
	}
}
 @media (max-width:480px){
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0.7em 0;
	}
	 input[type="text"] {
		padding: 10px;
		width: 86%;
		float: left;
	}
	.roundtrip .date {
		width: 100%;
		float: left;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 86%;
	}
	.roundtrip .class{
		width: 100%;
		float: left;
		margin-bottom:40px;
	}
	.numofppl {
		width: 80%;
	}
	.oneway .depart, .multicity .depart {
		width: 100%;
	}
}
 @media (max-width:414px){
	h1 {
		font-size: 35px;
		margin-top:30px;
	}
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0.5em 0;
		font-size: 15px;
	}
	.numofppl {
		width: 100%;
	}
}
 @media (max-width:384px){
	h1 {
		font-size: 32px;
	}
	h3 {
		font-size: 15px;
	}
	.from, .to, .date, .depart, .return {
		width: 100%;
		float: left;
		margin-bottom:25px;
	}
	.date{
		margin-bottom:0;
	}
	.resp-tab-item {
		padding: 7px 7px;
		margin: 0 0em 0;
		font-size: 15px;
	}
	.class {
		width: 100%;
		float: left;
		margin-bottom: 40px;
	}
	input[type="text"] {
		padding: 10px;
		width: 91.5%;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 91.5%;
	}
}
 @media (max-width:320px){
	h1 {
		font-size: 26px;
		margin-top:25px;
	}
	form{
		padding:15px;
	}
	.resp-tab-item {
		padding: 7px 5px;
		margin: 0 0em 0;
		font-size: 14px;
	}
	.adults, .child {
		width: 100%;
		float: left;
	}
	.adults{
		margin-bottom:25px;
	}
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1 {
	font-family: 'product sans';
    /* font-style: italic; */
    font-size: 40px !important;	
}	










.popup {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: white;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      max-width: 500px;
      width: 90%;
      z-index: 1000;
    }

    .popup img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .close-btn {
      position: absolute;
      top: 8px;
      right: 12px;
      font-size: 24px;
      font-weight: bold;
      color: #555;
      cursor: pointer;
    }
    .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .hero video {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .hero-text {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
    }

    .hero-text h1 {
      font-size: 3rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    /* Content below the video */
    .content {
      padding: 50px 20px;
      background-color: #f4f4f4;
      text-align: center;
    }

    .content h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .content p {
      max-width: 800px;
      margin: auto;
      font-size: 1.2rem;
      line-height: 1.6;
    }
    .CartBtn {
  width: 250px;
  height: 70px;
  border-radius: 12px;
  border: none;
  background-color: #007bff;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition-duration: 0.5s;
  overflow: hidden;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.103);
  position: relative;
  transform: -50% -50%;
    top: 70%;
    left: 45%;
}

.IconContainer {
  position: absolute;
  left: -50px;
  width: 30px;
  height: 30px;
  background-color: transparent;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  z-index: 2;
  transition-duration: 0.5s;
}

.icon {
  border-radius: 1px;
}

.text {
  height: 100%;
  width: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgb(255, 255, 255);
  z-index: 1;
  transition-duration: 0.5s;
  font-size: 1.5em;
  font-weight: 600;margin-top: 10px;
}

.CartBtn:hover .IconContainer {
  transform: translateX(58px);
  border-radius: 40px;
  text-decoration: n;
  transition-duration: 0.5s;
}

.CartBtn:hover .text {
  transform: translate(10px, 0px);
  transition-duration: 0.5s;
}

.CartBtn:active {
  transform: scale(0.95);
  transition-duration: 0.5s;
}	
.CartBtn a:active {
  text-decoration: none;
}	
.stats-section {
      text-align: center;
      padding: 80px 20px;
    }

    .stats-section h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .stats-section p {
      font-size: 1rem;
      max-width: 700px;
      margin: 0 auto 60px;
      color: #555;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 40px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .stat-item {
      font-size: 1rem;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: bold;
      color: #007bff;
    }

    .stat-label {
      margin-top: 10px;
      color: #666;
    }




</style>
</head>
<body>
<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'sameval') {
		  echo '<script>alert("Select different value for departure city and arrival city")</script>';
      } else if($_GET['error'] === 'seldep') {
          echo '<script>alert("Select Departure city")</script>';
      } else if($_GET['error'] === 'selarr') {
          echo"<script>alert('Select Arrival city')</script>";
      }
    }
?>

<div class="hero">
  <video autoplay muted loop playsinline width="100" height="10">
    <source src="assets/images/main.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <!-- From Uiverse.io by vinodjangid07 --> 
<button class="CartBtn" id="scrollBtn">
  <span class="IconContainer">
    <svg viewBox="0 0 13 13" width="18px">
      <path
        fill="white"
        d="M1.55989957,5.41666667 L5.51582215,5.41666667 L4.47015462,0.108333333 L4.47015462,0.108333333 C4.47015462,0.0634601974 4.49708054,0.0249592654 4.5354546,0.00851337035 L4.57707145,0 L5.36229752,0 C5.43359776,0 5.50087375,0.028779451 5.55026392,0.0782711996 L5.59317877,0.134368264 L7.13659662,2.81558333 L8.29565964,2.81666667 C8.53185377,2.81666667 8.72332694,3.01067661 8.72332694,3.25 C8.72332694,3.48932339 8.53185377,3.68333333 8.29565964,3.68333333 L7.63589819,3.68225 L8.63450135,5.41666667 L11.9308317,5.41666667 C12.5213171,5.41666667 13,5.90169152 13,6.5 C13,7.09830848 12.5213171,7.58333333 11.9308317,7.58333333 L8.63450135,7.58333333 L7.63589819,9.31666667 L8.29565964,9.31666667 C8.53185377,9.31666667 8.72332694,9.51067661 8.72332694,9.75 C8.72332694,9.98932339 8.53185377,10.1833333 8.29565964,10.1833333 L7.13659662,10.1833333 L5.59317877,12.8656317 C5.55725264,12.9280353 5.49882018,12.9724157 5.43174295,12.9907056 L5.36229752,13 L4.57707145,13 L4.55610333,12.9978962 C4.51267695,12.9890959 4.48069792,12.9547924 4.47230803,12.9134397 L4.47223088,12.8704208 L5.51582215,7.58333333 L1.55989957,7.58333333 L0.891288881,8.55114605 C0.853775374,8.60544678 0.798421006,8.64327676 0.73629202,8.65879796 L0.672314689,8.66666667 L0.106844414,8.66666667 L0.0715243949,8.66058466 L0.0715243949,8.66058466 C0.0297243066,8.6457608 0.00275502199,8.60729104 0,8.5651586 L0.00593007386,8.52254537 L0.580855011,6.85813984 C0.64492547,6.67265611 0.6577034,6.47392717 0.619193545,6.28316421 L0.580694768,6.14191703 L0.00601851064,4.48064746 C0.00203480725,4.4691314 0,4.45701613 0,4.44481314 C0,4.39994001 0.0269259152,4.36143908 0.0652999725,4.34499318 L0.106916826,4.33647981 L0.672546853,4.33647981 C0.737865848,4.33647981 0.80011301,4.36066329 0.848265401,4.40322477 L0.89131128,4.45169723 L1.55989957,5.41666667 Z"
      ></path>
    </svg>
  </span>
  <a href="#horizontalTab underline"><p class="text" style="text-decoration:none;">Explore Flights</p></a>
  
</button>

</div>

<link rel="stylesheet" type="text/css"
        href="styles%2c_bootstrap4%2c_bootstrap.min.css%2bplugins%2c_font-awesome-4.7.0%2c_css%2c_font-awesome.min.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl.carousel.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ;</script>	
	<div class="main-agileinfo">
		<h1 class=" brand mt-2">
			<img src="assets/images/plane-logo.png" 
				height="105px" width="105px" alt="">				
		Online Flight Booking</h1>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>
					<li class="resp-tab-item"><span>One way</span></li>
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="book_flight.php" method="post">
							<input type="hidden" name="type" value="round">
							<div class="from">
								<h3 >From</h3>
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select class="" name="dep_city" id="w3_country1">
								<option value="0" selected disabled >Departure</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo "<option value='{$row['city']}'>{$row['city']}</option>";
								}
								?>
								</select>  
							</div>
							<div class="to">
								<h3 >To</h3>
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select value="0" name="arr_city" id="w3_country1">
								<option selected disabled>Arrival</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo "<option value='{$row['city']}'>{$row['city']}</option>";
								}
								?>
								</select>							
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3 >Depart</h3>
									<input class="form-control" name="dep_date" type="date"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="return">
									<h3 >Return</h3>
									<input class="form-control"  name="ret_date" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3 >Class</h3>
								<select id="w3_country1" 
									name="f_class" onchange="change_country(this.value)" class="frm-field required">
									<option value="E">Economy</option>  
									<option value="B">Business</option>   
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3 >Passenger</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus text-dark">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<input type="hidden" name="passengers"
												 class="input_val" value="1">
											<div class="entry value-plus text-dark active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights" name="search_but">
						</form>						
					</div>		
					<div class="tab-1 resp-tab-content oneway">
						<form action="book_flight.php" method="post">
							<input type="hidden" name="type" value="one">
							<div class="from">
								<h3 >From</h3>								
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select value="0" name="dep_city" id="w3_country1">
								<option selected disabled>Departure</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo "<option value='{$row['city']}'>{$row['city']}</option>";
								}
								?>
								</select> 														
							</div>
							<div class="to">
								<h3>To</h3>								
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select value="0" name="arr_city" id="w3_country1">
								<option selected disabled>Arrival</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo "<option value='{$row['city']}'>{$row['city']}</option>";
								}
								?>
								</select>									
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3 >Depart</h3>
									<input name="dep_date" type="date" 
										class="form-control"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
							</div>
							<div class="class">
								<h3 >Class</h3>
								<select id="w3_country1" name="f_class"
									onchange="change_country(this.value)" class="frm-field required">
									<option value="E">Economy</option>  
									<option value="B">Business</option>   
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3 >Passenger</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus  text-dark">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<input type="hidden" name="passengers"
												 class="input_val" value="1">											
											<div class="entry value-plus  text-dark active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights" name="search_but">
						</form>																				
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>









	<div class="popup" id="popupAd">
  <span class="close-btn" onclick="closePopup()">&times;</span>
  <img id="adImage" src="" alt="Ad Image">
</div>

<script>
  document.getElementById('scrollBtn').addEventListener('click', function() {
  const aboutSection = document.getElementById('horizontalTab');
  aboutSection.scrollIntoView({ behavior: 'smooth' });
});

</script>

















<style>
.intro{width:100%;background:#fff;z-index:1}
.intro_background{top:-128px;left:0;width:100%;height:20px;background-repeat:no-repeat;background-size:cover;background-position:center center}
.intro_container{width:100%;border-bottom:solid 2px #e4e6e8;padding-top:142px;padding-bottom:121px}
.intro_icon{width:70px;height:71px}
.intro_icon img{max-width:100%}
.intro_content{padding-left:28px}
.intro_title{font-family:'Oswald',sans-serif;font-size:18px;color:#181818;font-weight:400}
.destinations{width:100%;background:#fff;padding-top:115px;padding-bottom:116px}

div.card {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
}

.col-lg-6:hover div.card {
  -webkit-transform: scale(1.08);
  transform: scale(0.89);
}
/* .card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
} */
.card img{
  width: 100%;
  height: 370px;
  object-fit:cover; 
  transition: all .25s ease;
} 




<style>
    .destination {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f7f8fc;
      margin-top: 200px;
      padding: 40px;
    }
    h1 {
      text-align: center;
      font-size: 32px;
      font-weight: 700;
    }
    p.subtitle {
      text-align: center;
      font-size: 16px;
      color: #555;
      margin-bottom: 30px;
    }
    .filter-buttons {
      text-align: center;
      margin-bottom: 30px;
    }
    .filter-buttons button {
      background: none;
      border: none;
      font-weight: 600;
      padding: 10px 15px;
      font-size: 16px;
      cursor: pointer;
      color: #444;
    }
    .filter-buttons button.active {
      border-bottom: 2px solid #3b82f6;
      color: #3b82f6;
    }
    .cards-wrapper {
      width: 100%;
      overflow: hidden;
      display: flex;
      justify-content: center;
    }
    .cards-container {
      display: inline-flex;
      gap: 60px;
      padding: 20px 0;
      justify-content: center;
    }
    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.1);
      width: 300px;
      min-width: 300px;
      overflow: hidden;
      position: relative;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: scale(1.03);
    }
    .image-wrapper {
      width: 100%;
      height: 200px;
      overflow: hidden;
    }
    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    .card:hover img {
      transform: scale(1.1);
    }
    .badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: #3b82f6;
      color: white;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
      z-index: 1;
    }
    .badge.mountain { background-color: #22c55e; }
    .badge.city { background-color: #a855f7; }
    .card-content {
      padding: 20px;
    }
    .card-content h2 {
      margin: 0 0 8px;
      font-size: 20px;
    }
    .stars {
      color: #facc15;
    }
    .card-content p {
      font-size: 14px;
      color: #444;
    }
  </style>
</head>
<body>
<section class="destination" id="destinations-section">
  <h1>Discover Popular Destinations</h1>
  <p class="subtitle">Explore the beauty and diversity of India's most beloved travel spots</p>

  <div class="filter-buttons">
    <button class="active" onclick="filterCards('all', 'destinations')">All Destinations</button>
    <button onclick="filterCards('beach', 'destinations')">Beaches</button>
    <button onclick="filterCards('city', 'destinations')">Cities</button>
    <button onclick="filterCards('mountain', 'destinations')">Mountains</button>
  </div>

  <div class="cards-wrapper">
    <div class="cards-container" id="destinations-container">
      <!-- HARIDWAR -->
      <div class="card" data-category="mountain">
        <span class="badge mountain">MOUNTAIN</span>
        <div class="image-wrapper">
          <img src="" alt="Haridwar" class="slideshow" data-images='[
            "haridwar1.jpg",
            "haridwar2.jpg",
            "haridwar3.jpg",
            "haridwar4.jpg",
            "haridwar5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Haridwar</h2>
          <div class="stars">★★★★☆ <span style="color:#555;">4.2 (110 reviews)</span></div>
          <p><strong>Spiritual Gateway</strong></p>
          <p>Located on the banks of the Ganges, Haridwar is a major pilgrimage site offering spiritual serenity and holy rituals.</p>
        </div>
      </div>

      <!-- GOA -->
      <div class="card" data-category="beach">
        <span class="badge">BEACH</span>
        <div class="image-wrapper">
          <img src="" alt="Goa Beach" class="slideshow" data-images='[
            "goa1.jpg",
            "goa2.jpg",
            "goa3.jpg",
            "goa4.jpg",
            "goa5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Goa</h2>
          <div class="stars">★★★★★ <span style="color:#555;">5.0 (120 reviews)</span></div>
          <p><strong>The Beach Paradise</strong></p>
          <p>Sun-soaked beaches, vibrant nightlife, and Portuguese heritage make Goa India's favorite coastal paradise.</p>
        </div>
      </div>

      <!-- DELHI -->
      <div class="card" data-category="city">
        <span class="badge city">CITY</span>
        <div class="image-wrapper">
          <img src="" alt="Delhi" class="slideshow" data-images='[
            "dehli1.jpg",
            "dehli2.jpg",
            "dehli3.jpg",
            "dehli4.jpg",
            "dehli5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Delhi</h2>
          <div class="stars">★★★★☆ <span style="color:#555;">4.0 (95 reviews)</span></div>
          <p><strong>The Historic Capital</strong></p>
          <p>India's capital blends ancient monuments with modern infrastructure and rich culture.</p>
        </div>
      </div>

      <!-- KASHMIR -->
      <div class="card" data-category="mountain">
        <span class="badge mountain">MOUNTAIN</span>
        <div class="image-wrapper">
          <img src="" alt="Kashmir" class="slideshow" data-images='[
            "kashmir1.jpg",
            "kashmir2.jpg",
            "kashmir3.jpg",
            "kashmir4.jpg",
            "kashmir5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Kashmir</h2>
          <div class="stars">★★★★★ <span style="color:#555;">5.0 (150 reviews)</span></div>
          <p><strong>Paradise on Earth</strong></p>
          <p>Kashmir offers breathtaking landscapes, serene lakes, and unforgettable traditional experiences.</p>
        </div>
      </div>

      <!-- KOLKATA -->
      <div class="card" data-category="city">
        <span class="badge city">CITY</span>
        <div class="image-wrapper">
          <img src="" alt="Kolkata" class="slideshow" data-images='[
            "kolkata1.jpg",
            "kolkata2.jpg",
            "kolkata3.jpg",
            "kolkata4.jpg",
            "kolkata5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Kolkata</h2>
          <div class="stars">★★★☆☆ <span style="color:#555;">3.8 (80 reviews)</span></div>
          <p><strong>The Cultural Capital</strong></p>
          <p>Kolkata offers colonial charm, artistic heritage, and mouth-watering street food – all wrapped in vibrant Bengali culture.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="destination" id="airlines-section">
  <h1>Popular Airlines</h1>
  <p class="subtitle">Fly with India's most trusted and loved airlines</p>

  <div class="filter-buttons">
    <button class="active" onclick="filterCards('all', 'airlines')">All Airlines</button>
    <button onclick="filterCards('budget', 'airlines')">Budget</button>
    <button onclick="filterCards('premium', 'airlines')">Premium</button>
  </div>

  <div class="cards-wrapper">
    <div class="cards-container" id="airlines-container">
      <!-- INDIGO -->
      <div class="card" data-category="budget">
        <span class="badge">BUDGET</span>
        <div class="image-wrapper">
          <img src="" alt="IndiGo" class="slideshow" data-images='[
            "indigo1.jpg",
            "indigo2.jpg",
            "indigo3.jpg",
            "indigo4.jpg",
            "indigo5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>IndiGo</h2>
          <div class="stars">★★★★☆ <span style="color:#555;">4.1 (250 reviews)</span></div>
          <p><strong>India's Largest Airline</strong></p>
          <p>Known for punctuality and affordability, IndiGo dominates Indian skies with excellent domestic and international coverage.</p>
        </div>
      </div>

      <!-- AIR INDIA -->
      <div class="card" data-category="premium">
        <span class="badge premium">PREMIUM</span>
        <div class="image-wrapper">
          <img src="" alt="Air India" class="slideshow" data-images='[
            "airindia1.jpg",
            "airindia2.jpg",
            "airindia3.jpg",
            "airindia4.jpg",
            "airindia5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Air India</h2>
          <div class="stars">★★★★☆ <span style="color:#555;">4.0 (200 reviews)</span></div>
          <p><strong>Legacy Carrier</strong></p>
          <p>With global connectivity and full-service comfort, Air India is the nation's flag carrier serving destinations worldwide.</p>
        </div>
      </div>

      <!-- VISTARA -->
      <div class="card" data-category="premium">
        <span class="badge premium">PREMIUM</span>
        <div class="image-wrapper">
          <img src="" alt="Vistara" class="slideshow" data-images='[
            "vistara1.jpg",
            "vistara2.jpg",
            "vistara3.jpg",
            "vistara4.jpg",
            "vistara5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Vistara</h2>
          <div class="stars">★★★★★ <span style="color:#555;">4.6 (180 reviews)</span></div>
          <p><strong>Premium Experience</strong></p>
          <p>Jointly owned by Tata and Singapore Airlines, Vistara offers exceptional service and premium comfort for air travelers.</p>
        </div>
      </div>

      <!-- SPICEJET -->
      <div class="card" data-category="budget">
        <span class="badge">BUDGET</span>
        <div class="image-wrapper">
          <img src="" alt="SpiceJet" class="slideshow" data-images='[
            "spicejet1.jpg",
            "spicejet2.jpg",
            "spicejet3.jpg",
            "spicejet4.jpg",
            "spicejet5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>SpiceJet</h2>
          <div class="stars">★★★☆☆ <span style="color:#555;">3.8 (170 reviews)</span></div>
          <p><strong>Low-cost Carrier</strong></p>
          <p>SpiceJet brings affordable travel to millions, serving domestic and regional routes with budget-friendly options.</p>
        </div>
      </div>

      <!-- GO FIRST -->
      <div class="card" data-category="budget">
        <span class="badge">BUDGET</span>
        <div class="image-wrapper">
          <img src="" alt="Go First" class="slideshow" data-images='[
            "gofirst1.jpg",
            "gofirst2.jpg",
            "gofirst3.jpg",
            "gofirst4.jpg",
            "gofirst5.jpg"
          ]' />
        </div>
        <div class="card-content">
          <h2>Go First</h2>
          <div class="stars">★★★☆☆ <span style="color:#555;">3.5 (140 reviews)</span></div>
          <p><strong>Simplified Travel</strong></p>
          <p>Previously known as GoAir, Go First focuses on hassle-free, cost-efficient air travel with reliable operations.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function filterCards(category, section) {
    // Reset active buttons in the current section
    const sectionElement = document.getElementById(`${section}-section`);
    sectionElement.querySelectorAll('.filter-buttons button').forEach(btn => {
      btn.classList.remove('active');
    });
    event.target.classList.add('active');

    // Filter cards only in the current section
    const container = document.getElementById(`${section}-container`);
    container.querySelectorAll('.card').forEach(card => {
      card.style.display = (category === 'all' || card.dataset.category === category) ? 'block' : 'none';
    });
  }

  // Slideshow logic for all slideshows
  document.querySelectorAll('.slideshow').forEach(img => {
    const imageList = JSON.parse(img.dataset.images);
    let index = 0;
    img.src = imageList[index];

    setInterval(() => {
      index = (index + 1) % imageList.length;
      img.src = imageList[index];
    }, 3000);
  });
</script>




</style>
<div class="conatiner-fluid p-4" style="background-color: whitesmoke;margin-top:150px;">
	<section class="stats-section" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h2>Explore the World with Ease</h2>
    <p>Book your next journey effortlessly with our trusted flight booking platform. Whether you're traveling for business or leisure, we offer the best deals, smooth booking experience, and real-time flight updates.</p>

    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">2.3M</div>
        <div class="stat-label">Flights Booked</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">1.8M</div>
        <div class="stat-label">Happy Travelers</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">99%</div>
        <div class="stat-label">On-Time Departures</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">150+</div>
        <div class="stat-label">Destinations Covered</div>
      </div>
    </div>
  </section>




<style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .about-contact {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f2f2;
      padding: 40px;
    }

    .section-container {
      display: flex;
      flex-wrap: wrap;
      background: whitesmoke;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .about, .contact {
      flex: 1 1 300px;
      padding: 30px;
    }

    .about {
      background: whitesmoke;
      border-right: 1px solid #ddd;
    }

    .about h2 {
      font-size: 28px;
      margin-bottom: 15px;
      position: relative;
    }

    .about h2::after {
      content: "✦✦";
      font-size: 16px;
      color: #5ba5ff;
      position: absolute;
      right: 0;
      top: 0px;
    }

    .about p {
      line-height: 1.6;
      color: #333;
      margin-bottom: 0px;
    }

    .contact {
      background: url('airindia1.jpg') no-repeat center center/cover;
      color: #fff;
      position: relative;
    }

    .contact::before {
      content: "";
      background: rgba(0, 0, 0, 0.5);
      position: absolute;
      inset: 0;
    }

    .contact-content {
      position: relative;
      z-index: 1;
    }

    .contact h2 {
      font-size: 28px;
      margin-bottom: 0px;
    }

    .contact p {
      font-style: italic;
      margin-bottom: 0px;
    }

    .contact-info {
      margin: 0px 0;
    }

    .contact-info i {
      margin-right: 0px;
    }

    .contact a {
      color: #fff;
      text-decoration: underline;
    }

    @media (max-width: 900px) {
      .about, .contact {
        border-right: none;
      }
    }
  </style>
</head>
<section class="about-contact">
  <div class="section-container">
    <div class="about">
      <h2>About Us</h2>
      <p>Welcome to our flight booking system! We're your friendly, reliable, and efficient travel companion. Our mission is to make your travel planning as smooth as possible. We understand that booking flights can sometimes be a hassle, but we're here to change that. 

      Our platform is designed with you in mind. We've made it easy for you to search, compare, and book flights from a wide range of airlines. Whether you're planning a quick business trip or a long-awaited vacation, we've got you covered.</p>
      <p>Come do business with us and make your business more known to the public because of the creative aspect of marketing!</p>
      <p><strong>www.quickflights.com</strong></p>
    </div>
    <div class="contact">
      <div class="contact-content">
        <h2>Contact Us</h2><br>
        <p>Reach out to our dedicated team for any inquiries, assistance, or information you need.</p><br>
        <div class="contact-info"><i>📧</i> quickflights@gmail.com</div>
        <div class="contact-info"><i>📍</i> Maruti Mandir, Ratnagiri - 415612</div>
        <div class="contact-info"><i>🌐</i> www.quickflights.com</div>
        <div class="contact-info"><i>📞</i> +91 7499552398</div>
      </div>
    </div>
  </div>
</section>






    <?php subview('footer.php'); ?> 

		<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default',         
					width: 'auto', 
					fit: true   
				});
			});		
		</script>
		<script>
		$('.value-plus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			divUpd.text(newVal);
			$('.input_val').val(newVal);
		});

		$('.value-minus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			if(newVal>=1) {
				divUpd.text(newVal);
				$('.input_val').val(newVal);
			} 
		});
		</script>
								<!--//quantity-->
						<!--load more-->
		<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>

</body>
</html>