<?php 
 include_once 'includes/header.php';

 //include_once'admin/adlogin.php';

  ?>

    <div style="position:absolute;left:1180px;top=10px">
      <a href="admin/adlogin.php">
      <img src="images/adminlogin.jpg"width="40px";height="40px">
      </a>
     <a href="admin/adlogin.php">ADMIN</a>

     </div>

  <img src="images/blood_donation.png" alt="slider" class="img-responsive "><hr>
          
   <div class="row">
       
     <div class="col-md-12">
   

    <?php
    include_once 'includes/dbconnect.php'; 
  
 
    if($con)

    {


              //echo "connect successfull";
               $sql = "SELECT * FROM blog" ;
               $res = mysqli_query($con, $sql);
             
             /*if(mysqli_num_rows($res )==1)
             {
                $rows=mysqli_fetch_assoc($res);
      
              }*/


    while ($rows=mysqli_fetch_assoc($res)) {

      printf(' <p><h4 class="divider"> %s</h4>
           Posted on: <i>%s</i></p>%s <a class="btn btn-info btn-sm " href="view_full.php?id=%s" role="button">
            View Details
            </a>', $rows['heading'], $rows['date'],substr($rows['message'], 0,300), $rows['id']);



 



    }
  }
    
      ?>
    

   </div>
     </div>   

     <?php
include_once 'includes/footer.php';
     ?>
     


 