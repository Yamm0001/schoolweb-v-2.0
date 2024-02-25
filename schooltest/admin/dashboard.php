<?php include("header.php"); 

include_once "includes/init.php";

?>
<link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<!---- Include the above in your HEAD tag -------->
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/dash.css">


<div class="container bootstrap snippet">
  <div class="row">

    
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="students.php"><div class="circle-tile-heading dark-blue"><i class="fa-duotone fa-user-graduate fa-fw fa-3x" style="margin-top: 15px;"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Students List</div>
          <div class="circle-tile-number text-faded "><?php include 'stdcount.php'; ?></div>
        </div>
      </div> 
    </div>

    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="admin.php"><div class="circle-tile-heading purple"><i class="fa-solid fa-user-tie fa-fw fa-3x" style="margin-top: 15px;"></i></div></a>
        <div class="circle-tile-content purple">
          <div class="circle-tile-description text-faded"> Member List</div>
          <div class="circle-tile-number text-faded "><?php include 'mbcount.php'; ?></div>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="feedback.php"><div class="circle-tile-heading dark-blue"><i class="fa-duotone fa-message-smile fa-fw fa-3x" style="margin-top: 15px;"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Feedback List</div>
          <div class="circle-tile-number text-faded "><?php include 'feedbackcount.php'; ?></div>
        </div>
      </div> 
    </diV>

    <!-- <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Students List</div>
          <div class="circle-tile-number text-faded ">100</div>
        </div>
      </div> 
    </diV>

    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Students List</div>
          <div class="circle-tile-number text-faded ">100</div>
        </div>
      </div>  -->
    </diV>

    <!-- <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Students List</div>
          <div class="circle-tile-number text-faded ">100</div>
        </div>
      </div> 
    </diV> -->


  </div>
</div>