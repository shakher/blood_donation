
  <?php
include_once 'dbconnect.php';

function total_donor()
{
  global $con;
  $query=mysqli_query($con, "SELECT * FROM donor");
  $num=mysqli_num_rows($query);
  return $num;
}

function total_acceptor()
{
 global $con;
  $query=mysqli_query($con, "SELECT * FROM acceptor");
  $num=mysqli_num_rows($query);
  return $num;
}
function total_donate()
{
 global $con;
  $query=mysqli_query($con, "SELECT * FROM donor");
  $num=mysqli_num_rows($query);
  return $num;
}
function blood_acceptor()
{
  global $con;
  $query=mysqli_query($con, "SELECT * FROM acceptor");
  $num=mysqli_num_rows($query);
  return $num;
}

function blood_amount()
{	
	global $con;
	$array=array();
	$query=mysqli_query($con, "SELECT amount FROM blood");
	 while ($row=mysqli_fetch_assoc($query)) {
		$array[]=$row['amount'];
		}
		$ar=array_sum($array);
		return $ar;
		
		}

?>   
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="index.php" class="list-group-item active">Category</a>
			      <a href="donor.php" class="list-group-item ">Donors (<?php echo total_donor(); ?>)</a>
            <a href="total_donate.php" class="list-group-item">Total donate( <?php echo total_donate(); ?>)</a>
            <a href="acceptor.php" class="list-group-item">Acceptors (<?php echo total_acceptor(); ?>)</a>
            <a href="total_accept.php" class="list-group-item">Total receive ( <?php echo blood_acceptor(); ?>)</a>
            <a href="total_blood.php" class="list-group-item">Total Amount (<?php echo blood_amount();?>)</a>
          
          </div>
           
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->








      <hr>

      <footer>
        <center><p>রক্ত দান পদ্ধতি &copy; Copyright: 2017</p></center>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
</html>

