<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link">Exercises videos</h4>
	</div>
	
<div class="panel panel-body" style="font-size: 12px;">
	


	<?php
if($exvideos->num_rows() > 0){
	foreach($exvideos->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;">

     	 	<div class="col-lg-12">
	     	 	
	     	 		 <div class="view view-fifth">
				  	  	<video  width="auto" height="450" controls>
							  <source src="<?php echo base_url();?>assets/videos/<?php echo $row->video;?>" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>
					      
	                  </div>
	     	 </div>
	     	 <div class="col-lg-12">
	  
	     	 		<b>Exercise name:</b>
	     	 		<p><?php echo $row->vname;?></p>
	     	 		
	     	 		<b>Exercise Category:</b>
	     	 		<p><?php echo $row->vcat;?></p>
	     	 	
	     	 		</div>
	     	 		<!-- <div class="col-lg-12">
	     	 		<h4>Exercise details:</h4>
	     	 		<p><?php echo $row->eqdetails;?></p>
	     	 		</div> -->
	     	 		
	     	 	
     	 		<div class="clear"></div>
 
    
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>