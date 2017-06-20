<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Exercise registration form</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form class="" action="<?php echo base_url();?>controlExercise/newExercise" method="post" enctype="multipart/form-data" >
   <div class="form-group">
    <label for="eqname">Exercise Name:</label>
    <input type="text" name="eqname" class="form-control" id="eqname" placeholder="please enter equipment name" required="required">
  </div>


  <div class="form-group">

   <label for="eqcat">Exercise category:</label>
    <select class="form-control" id="eqcat" name="eqcat">

    <option>please select category</option>
   <?php
if($eqclass->num_rows() > 0){
foreach($eqclass->result() as $row){

	?>
  
  <option><?php echo $row->catname; ?></option>
  
  	<?php
}
}
?>
</select>
 </div>
 
 <div class="form-group">
    <label for="eqimage">Exercise image:</label>
    <input type="file" name="eqimage" class="form-control" id="eqimage" required="required">
  </div>
  <div class="form-group">
    <label for="eqvideo">Exercise video:</label>
    <input type="file" name="eqvideo" class="form-control" id="eqvideo" required="required">
  </div>
   <div class="form-group">
    <label for="eqdetails">Exercise details:</label>
    <textarea type="text" name="eqdetails" class="form-control" id="eqdetails" placeholder="please describe about exercise" required="required" style="height:100px;"></textarea>
  </div>
<div class="panel panel-footer">
<input type="submit" name="btnequipmentsubmit" value="submit" class="btn btn-success" >
</div>
</form>
</div>
</div>
</div>