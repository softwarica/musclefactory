<html>
<?php include('link.php');?>
	<style type="text/css">
	h4{
color:white !important;
	}
	
</style>
<body>
<?php include('header.php');?>
 
	<div class="header" style="font-size: 12px;">
	   <div class="container" >
		  <div class="header-text">
			<h1>MUSCLE FACTORY</h1>
			<h2>Best Choice For fitness</h2>
			<p>
        Exercise is extremely important to staying healthy both in body and mind.
         Being active can help a person continue to do things they enjoy and be independent as they age
       </p>
			<div class="banner_btn">
				<a href="#">Read More</a>
			</div>
		  </div>
    </div>
    </div>

    <div class="menu" id="menu">
	  <div class="container" >

		 <!-- <div class="logo">
			<a href="index.html">
         <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt"" class="img-responsive" width="100"/></a>
		 </div> -->
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <!-- <a class="toggleMenu" href="#">Menu</a> -->
			 <ul class="nav">
			   <li class="active"><a href="#">Home</a></li>
			   
			   <!-- <li><a href="<?php echo base_url();?>controlWelcome/goToLogin">Trainer</a></li> -->
			   <li><a href="classes.html">Classes</a>

			   </li>
			   <li><a href="blog.html">Blog</a></li>
			   <li><a href="pricing.html">Pricing</a></li>
			   <li><a href="contact.html">Contact</a></li>
			   <li><a href="<?php echo base_url();?>controlWelcome/goToLogin" class="btn btn-success">login</a></li>
			 </ul>
			<!--   <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script> -->
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container-fluid" >
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-4">
				  <img src="<?php echo base_url();?>assets/images/pic.png" class="img-responsive" alt="">
			     </div>
				 <div class="col-md-4">
				   <!-- <h3>NISCHAL shrestha</h3>
				   <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> -->
				   <div class="card">
				   <div class="panel panel-default">
				   	<div class="panel panel-heading" style="background: #72d0f4;">
				   		<h5 align="center" style="color:white">calculate body mass index:</h5>
				   	</div>
				   	
				   	<div class="panel panel-body" style="color: #00bff0;">
				   		
				   		<form class="form-horizontal">
				   		<div class="form-group">
				   			<label for="height" class="form-label col-sm-6">Height(in feet):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control" placeholder=" (ft)" name="height" id="height" style="float:left; width:55px"/>
				   			
				   			<input type="text" class="form-control" placeholder="inch" name="heightinch" id="heightinch" style="width:55px" />
				   			</div>
				   		</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="weight" class="form-label col-sm-6">weight(in kg):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder=" enter weight" name="weight" id="weight" />
				   			</div>
				   		</div>
				   		</form>
				   		 	<div class="panel panel-footer">
				   		<button class="btn btn-success center-block" onclick="bmiCalculation()">calculate:</button>
				   	</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="bmi" class="form-label col-sm-6">BMI:</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder="your BMI..." name="bmi" id="bmi" />
				   			</div>
				   		</div>
				   		
				   		</div>
				   	</div>
				  
				   </div> 


				 </div>
				 <div class="col-md-4">
				 <div class="card">
				 	<div class="panel panel-default">
				 	<div class="panel panel-heading" style="background: #72d0f4;">
				 		<h5  align="center" style="color:white">BMI Categories:</h5>
				 	</div>
				 	
				 	<div class="panel panel-body" style="color: #00bff0;">
				 		
				 		<p>
				 			<ul>
				 			<li>Underweight = 18.5</li>
							<li>Normal weight = 18.5–24.9</li> 
							<li>Overweight = 25–29.9 </li>
							<li>Obesity = BMI of 30 or greater</li>
							</ul>
							</p>
							<hr/>
							<div class="class="btn btn-link">
							<h3 align="center">
							<a href="<?php echo base_url();?>controlWelcome/goToBmiTable">BMI table:</a>
							</h3></div>
				 		</div>

				 	</div>
				 	</div>
				 </div>

            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
		       <div class="card">
     	 <a href="<?php echo base_url();?>controlVideo/getVideo">
     	 <h3 class="m_2">Videos</h3></a></div>

	 	    	<div class="col-md-6 col-lg-offset-3"><a href="<?php echo base_url();?>controlVideo/getVideo">
	 	    		<ul class="spinning">
	 	    			<li class="live">click <span class="m_1">for more</span></li>
	 	    			<li class="room">just chill</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth card">
				  	   <!-- <img src="<?php echo base_url();?>assets/images/pic3.jpg" class="img-responsive" alt=""> -->

				  	  <!--  ============================================ -->

				  	  	<video  width="auto" height="350" controls>
							  <source src="<?php echo base_url();?>assets/videos/video1.mp4" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>

						<!-- <canvas id="myCanvas" style="border:0px solid #FFF;"> 
						</canvas>  -->

				  	<!--    ============================================ -->
					      <div class="mask">
	                       	<div class="info">view More</div>
			              </div>
	                  </div>
			     </a></div>
			   <!--   //another video -->
			   <!-- 	<div class="col-md-6 "><a href="<?php echo base_url();?>controlVideo/getVideo">
	 	    		<ul class="spinning">
	 	    			<li class="live">click <span class="m_1">for more</span></li>
	 	    			<li class="room">hudd hud dabang</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth card"> -->
				  	   <!-- <img src="<?php echo base_url();?>assets/images/pic3.jpg" class="img-responsive" alt=""> -->

				  	  <!--  ============================================ -->

				  	  <!-- 	<video  width="" height="350" controls>
							  <source src="<?php echo base_url();?>assets/videos/video2.mp4" type="video/mp4"> -->
							<!--   <source src="<?php echo base_url();?>assets/videos/myvideo1.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/myvideo1.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/myvideo1.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/myvideo1.swf"  height="350">
							  </object>  -->
							 <!--  Your browser does not support the video tag.
							</video> -->

						<!-- <canvas id="myCanvas" style="border:0px solid #FFF;"> 
						</canvas>  -->

				  	<!--    ============================================ -->
					     <!--  <div class="mask">
	                       	<div class="info">view More</div>
			              </div>
	                  </div>
			     </a></div> -->


<!-- ........................................................ -->



				<!--  <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Gym</span></li>
	 	    			<li class="room">Room 1</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="<?php echo base_url();?>assets/images/pic2.jpg" class="img-responsive" alt="">
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div> -->
				<!--  <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Pilates</span></li>
	 	    			<li class="room">Room 4</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="<?php echo base_url();?>assets/images/pic1.jpg" class="img-responsive" alt="">
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div> -->
				<div class="clear"></div>
		   </div>
		  <!-- end content-middle -->
		

						
		   <div class="row about">
		      <div class="col-md-8 ">
		     	 <h3 class="m_2 card">All Classes</h3>
		     	 <div class="classes">
		     	 	<!-- <div class="cardio_list"> -->
		     	 	   <?php
					if($class->num_rows() > 0){
						foreach($class->result() as $row){
							?>
		     	 	  <div class="cardio_sublist">
		     	 	 
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span><?php echo $row->cname;?></span></li>
			     	 	</ul>
			     	 	
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	
 	 </div>

		     	 	  	<?php	
						}

					}
		  ?>
		     	 	<!--   <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Spinning</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 	  <!-- <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Pilates</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 	  <!--  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Boxing</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	<!--  	</div> -->

		     	 <!-- 	<div class="cardio_list1"> -->
		     	 	  <!-- <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Aerobics</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 	  <!-- <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Kik Boxing</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 	<!--   <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>CrossFit</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 	 <!--   <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Yoga</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div> -->
		     	 <!-- 	</div> -->
		     	 <!-- 	<div class="clear"></div> -->
		     	 </div>
				</div>
				
				<div class="col-md-4 ">
				  <h3 class="m_4 card">Membership Prices</h3>
				  <div class="members">
				   <h4 class="m_3">25% Discount of for all members</h4>
				   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
				   <div class="btn1">
				    <a href="#">More</a>
			       </div>
				  </div>
			    </div>
			    <div class="clear"></div>
			</div>
			
		    <div class="row content_middle_bottom">
			  <div class="col-md-4 ">
		        <h3 class="m_2 card">Our Trainers</h3>
		         <div class="course_demo">
		          <ul id="flexiselDemo3">
					<li><img src="<?php echo base_url();?>assets/images/pic4.jpg"><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart1"> </i>
							<i class="like"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="<?php echo base_url();?>assets/images/pic5.jpg"><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="<?php echo base_url();?>assets/images/pic4.jpg"><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="<?php echo base_url();?>assets/images/pic5.jpg"><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="<?php echo base_url();?>assets/images/pic4.jpg"><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
				</ul>
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: {
			    		portrait: {
			    			changePoint:480,
			    			visibleItems: 1
			    		},
			    		landscape: {
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: {
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });

			});
		</script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
	  </div>
     </div>
     <!-- ......................... -->
     
     <div class="col-md-8" >
     <div class="card">
     	 <a href="<?php echo base_url();?>controlExercise/getExercise"><h3 class="m_2">Exercises</h3></a>
     	

     	 <div class="col-lg-6 " >
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<img src="<?php echo base_url();?>assets/images/chest.gif" alt="" >
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 	<h4>Chest exercise</h4>
	     	<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getChestExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>

     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/shoulder.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Shoulder exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getShoulderExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 			<img src="<?php echo base_url();?>assets/images/back.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Back exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBackExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>

     	  <div class="col-lg-6 ">
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<div class="card"><img src="<?php echo base_url();?>assets/images/biceps.gif" alt=""></div>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Biceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBicepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/triceps.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Triceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getTricepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/legs.gif" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Legs exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getlegsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>
     	 
     </div>
     </div>


<!--      ...................... -->
   
     <div class="clear"></div>
     </div>
      <div class="row about">
		 <div class="col-md-8">
		     	 <h3 class="m_2">Gallery</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Partner</h3>
			  <ul class="partner">
			  	<li><img src="<?php echo base_url();?>assets/images/p6.png" alt=""></li>
			  	<li><img src="<?php echo base_url();?>assets/images/p5.png" alt=""></li>
			  	<li><img src="<?php echo base_url();?>assets/images/p4.png" alt=""></li>
			  	<li><img src="<?php echo base_url();?>assets/images/p3.png" alt=""></li>
			  	<li><img src="<?php echo base_url();?>assets/images/p2.png" alt=""></li>
			  	<li><img src="<?php echo base_url();?>assets/images/p1.png" alt=""></li>
			  	 <div class="clear"></div>
			  </ul>
		   </div>
	       <div class="clear"></div>
	      </div>
	     </div>


		</div>
	    <div class="map">
			<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
			<div class="opening_hours">
			 <ul class="times">
			 	<h3>Opening <span class="opening">Hours</span></h3>
			 	<li><i class="calender"> </i><span class="week">Monday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Friday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
			 	<h4>Enjoy it!</h4>
			 </ul>
		    </div>
		 </div>

		 <!-- <div class="footer-top">
		 	<ul class="twitter_footer">
		 	 <li>
		 	   <i class="twt_icon"> </i><p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel  <span class="m_6">2 days ago</span></p>
		 	   <div class="clear"></div>
		 	 </li>
		 	</ul>
		 </div>
		 <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="<?php echo base_url();?>assets/images/logo.png" alt="">
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">About</a></li>
						<li><a href="#">Trainers</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		    <div class="social">
			   <ul>
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>
				  <li class="rss"><a href="#"><span> </span></a></li>
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	     </div> -->
<?php include('footer.php'); ?>
</body></html>

<script type="text/javascript">
	function bmiCalculation(){
		
		var height=document.getElementById('height').value;	
		var heightinch=document.getElementById('heightinch').value;
		var ftheight=(height*0.3084)+(heightinch*0.0254);
		var weight=document.getElementById('weight').value;

		var bmi=weight/(ftheight*ftheight);
		document.getElementById('bmi').value=bmi;
		// note:.value is normally use for form/input
		// .innerhtml is used fo div/span
	}

</script>
