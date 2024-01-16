<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Customers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Customers

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Phone Number 1</th>
<th>Phone Number2</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<?php

$i=0;
$get_c = "select * from customers";
$run_c = mysqli_query($con,$get_c);
while($row_c=mysqli_fetch_array($run_c)){

$c_id = $row_c['customer_id'];
$c_name = $row_c['customer_name'];
$c_email = $row_c['customer_email'];
$c_country = $row_c['customer_country'];
$c_city = $row_c['customer_city'];
$c_contact = $row_c['customer_contact'];
$i++;
?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $c_name; ?></td>
<td><?php echo $c_email; ?></td>
<td><?php echo $c_country; ?></td>
<td><?php echo $c_city; ?></td>
<td><?php echo $c_contact; ?></td>
<td>
<a href="index.php?customer_delete=<?php echo $c_id; ?>" >
<i class="fa fa-trash-o" ></i> Delete
</a>
</td>


</tr>

<?php } ?>


</tbody>



</table>

</div>

</div>


</div>

</div>

</div><

<?php } ?>