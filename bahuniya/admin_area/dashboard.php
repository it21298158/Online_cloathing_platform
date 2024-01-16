<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<!-- <h1 class="page-header">Dashboard</h1> -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Admin Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->




<div class="row"><!-- 2 row Starts -->

<!-- **********************************************ROW 1************************************************************* -->

<!-- **************************ROW 1 Col1*************************** -->

<div class="row"><!-- First row starts -->

    <div class="col-lg-6 col-md-6"><!-- col-lg-6 col-md-6 Starts -->

        <div class="panel panel-success"><!-- panel panel-success Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->
            
                <div class="row"><!-- panel-heading row Starts -->
                
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                        <i class="fa fa-dollar fa-5x"> </i>
                        
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                        <div class="huge"> <?php echo $count_total_earnings ?> </div>
                        
                        <div>Total Income</div>
                        
                    </div><!-- col-xs-9 text-right Ends -->
                    
                </div><!-- panel-heading row Ends -->
                
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_orders">
            
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                    <span class="pull-left">Manage Income </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer Ends -->
                
            </a>
            
        </div><!-- panel panel-success Ends -->

    </div><!-- col-lg-6 col-md-6 Ends -->

    <div class="col-lg-6 col-md-6"><!-- col-lg-6 col-md-6 Starts -->

        <div class="panel panel-primary"><!-- panel panel-primary Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->
            
                <div class="row"><!-- panel-heading row Starts -->
                
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                        <i class="fa fa-tasks fa-5x"> </i>
                        
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                        <div class="huge"> <?php echo $count_products; ?> </div>
                        
                        <div>Inventory Count</div>
                        
                    </div><!-- col-xs-9 text-right Ends -->
                    
                </div><!-- panel-heading row Ends -->
                
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_products">
            
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                    <span class="pull-left"> Manage Inventory </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer Ends -->
                
            </a>
            
        </div><!-- panel panel-primary Ends -->

    </div><!-- col-lg-6 col-md-6 Ends -->

</div><!-- First row ends -->

<div class="row"><!-- Second row starts -->

    <div class="col-lg-6 col-md-6"><!-- col-lg-6 col-md-6 Starts -->

        <div class="panel panel-green"><!-- panel panel-green Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->
            
                <div class="row"><!-- panel-heading row Starts -->
                
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                        <i class="fa fa-comments fa-5x"> </i>
                        
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        
                        <div>Customers Count</div>
                        
                    </div><!-- col-xs-9 text-right Ends -->
                    
                </div><!-- panel-heading row Ends -->
                
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_customers">
            
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                    <span class="pull-left"> Manage Customers </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer Ends -->
                
            </a>
            
        </div><!-- panel panel-green Ends -->

    </div><!-- col-lg-6 col-md-6 Ends -->

    <div class="col-lg-6 col-md-6"><!-- col-lg-6 col-md-6 Starts -->

        <div class="panel panel-red"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->
            
                <div class="row"><!-- panel-heading row Starts -->
                
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                        <i class="fa fa-support fa-5x"> </i>
                        
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                        <div class="huge"> <?php echo $count_total_orders; ?> </div>
                        
                        <div>Total Orders</div>
                        
                    </div><!-- col-xs-9 text-right Ends -->
                    
                </div><!-- panel-heading row Ends -->
                
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_orders">
            
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                    <span class="pull-left"> Manage Orders </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer Ends -->
                
            </a>
            
        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-6 col-md-6 Ends -->

</div><!-- Second row ends -->



<div class="row"><!-- Third row starts -->

    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3"><!-- col-lg-6 col-md-6 and col-lg-offset-3 col-md-offset-3 Starts -->

        <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->
            
                <div class="row"><!-- panel-heading row Starts -->
                
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                        <i class="fa fa-shopping-cart fa-5x"> </i>
                        
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                        
                        <div>Products Categories</div>
                        
                    </div><!-- col-xs-9 text-right Ends -->
                    
                </div><!-- panel-heading row Ends -->
                
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_p_cats">
            
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                    <span class="pull-left"> View Details </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer Ends -->
                
            </a>
            
        </div><!-- panel panel-yellow Ends -->

    </div><!-- col-lg-6 col-md-6 and col-lg-offset-3 col-md-offset-3 Ends -->

</div><!-- Third row ends -->




        





<?php } ?>