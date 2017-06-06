
<?php include_once 'includes/header.php';?>
    <img src="images/blood_donation.png" alt="slider" class="img-responsive "><hr>
        
 <div class="row">
     
   <div class="col-md-12">
 

  <?php
  include_once 'includes/dbconnect.php'; 
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
  
    $query=mysqli_query($con,"SELECT * FROM blog WHERE id='$id'");
          while ($rows=mysqli_fetch_assoc($query)) 
          {
          
            ?>
           
           <p><h4 class="divider">  <?php  echo $rows['heading']; ?>  </h4>Posted on:<i><?php echo $rows['date']; ?></i></p>
         
            <?php  echo $rows['message']; ?>


             <?php
          }
  }
      

       else {
        echo "sry";
          }
  ?>
<a href="index.php">>>Back<<<</a>
 </div>
   </div>

         
<?php include_once 'includes/footer.php';?>
