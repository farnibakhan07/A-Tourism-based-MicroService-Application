<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
		<script>
		function city(city)
		{
			//alert(city);
	document.getElementById('city_dropdown').innerHTML='';
	$("#city_dropdown").load("city.php",{city:city});
		}
		</script>
		<!------
		<script>
		function myFunction()
		{
			var date= document.getElementById('Check-in').value;
			var city= document.getElementById('city_dropdown').value;
			document.getElementById('gridX').innerHTML='';
	        //$("#gridX").load("result.php",{date:date,city:city});
			//$("#gridX").load("result.php?date=date&city=city");
			$("#gridX").load("search_destination.php?" + $.param({date:date,city:city}));
			
		}
		</script>
		----->
		<script>
		$(document).ready(function(){
    $('#getUser').on('click',function(){
		//alert('yes');
        //var user_id = $('#user_id').val();
		var date= document.getElementById('Check-in').value;
		//alert(date);
		var city= document.getElementById('city_dropdown').value;
		//document.getElementById('show').innerHTML= " ";
        $.ajax({
            type:'GET',
            url:'findLocation.php',
            dataType: "json",
            data:{date:date,city:city},
            success:function(data){
				if(data.status == 'ok'){
					
                  $('#temp').text(data.temp + "°C");
                  $('#humi').text(data.humidity);
                   $('#con').text(data.condition);
				   
					
	
                    
					 
 
                    //$('#userCreated').text(data.result.created);
                    $('.user-content').slideDown();
                }else{
                    $('.user-content').slideUp();
                    alert("Wrong Query");
                } 
            }
        });
    });
});
</script>
		
		<style>
		#gridX
		{
		width:100%;
		height:400px;
		background-color:#fff2e6;
		margin-top:20px;
		
		}
		</style>
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">ABOUT</a></li>
								<li><a href="index-1.html">HOT TOURS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="index-3.html">BLOG</a></li>
								<li><a href="#">Sign In</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>$1000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide1.jpg">
					<div class="caption fadeIn">
						<h2>Maldives</h2>
						<div class="price">
							FROM
							<span>$2000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide2.jpg">
					<div class="caption fadeIn">
						<h2>Venice</h2>
						<div class="price">
							FROM
							<span>$1600</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img1.jpg" alt="">
						<div class="label">
							<div class="title">Barcelona</div>
							<div class="price">FROM<span>$ 1000</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img2.jpg" alt="">
						<div class="label">
							<div class="title">GOA</div>
							<div class="price">FROM<span>$ 1.500</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img3.jpg" alt="">
						<div class="label">
							<div class="title">PARIS</div>
							<div class="price">FROM<span>$ 1.600</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<!--------------------------------------Form Div--------------------------->
				<div class="grid_6">
					<h3>Destination & Activity</h3>
					<form id="bookingForm">
						<div class="clear"></div>
						
						<label class="tmDatepicker">
							<input type="text" name="Check-in" id='Check-in' placeHolder='Select Date' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="fl1 fl2">
						<?php include("city_name.php"); ?>
							<em>Country</em>
							<select name="Adults" style="width:200px" class="" onchange="city(this.value)"  >
							<option id="empty" name="empty">Choose</option>
								
						<?php for($i=0; $i<count($country); $i++)
                         echo "<option id='country' name='country' value=\"".$country[$i]."\">".$country[$i]."</option>";?>
								
							</select>
							
						</div>
						<div class="fl1 fl2">
							<em>City</em>
							<select name="city_dropdow" id="city_dropdown" style="width:200px">
								<option id="empty" name="empty">Choose</option>
								
							</select>
						</div>
						<div class="clear"></div>
						
						<input type="button" class="btn" id='getUser' value="Submit" style="width:200px; margin-top:20px">
					</form>
					<div id="gridX">
					<h1 id='show' style="padding-top:20px;padding-bottom:20px; padding-left:10px; font-size:15px"> Show Details</h1>
					<div class="user-content" style="display:none;margin: 10px 10px 10px 10px">
    <h1 style="padding-top:10px;padding-bottom:20px; font-size:15px">Weather Forecast for Desired Destination</h1>
    <p>Temperature: <span id="temp"></span></p>
    <p>Humidity: <span id="humi"></span></p>
    <p>weather Condition: <span id="con"></span></p>
</div>
					
					
					</div>
				</div>
				<!--------------------------------------Form Div--------------------------->
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>
					</div>
					<div class="clear cl1"></div>
					<p>Make the most of an upcoming trip or find inspiration for a future getaway</p>
					<p><span class="col1">
					
					<blockquote class="bq1">
						<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>Ready to experience the world?
Discover Our Best Destinations </p>
							<div class="alright">
								<div class="col1">Miranda Brown</div>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</blockquote>
				</div>
				
				
				
				
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Designed & Developed By Farniba Khan
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

