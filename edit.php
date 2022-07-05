<!DOCTYPE html>
<html lang="en">


<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

<div id="wrapper">

        
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Navigation bar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Eventeny Events Dashboard</a>
    </div>

    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Eventeny</a>
            </li>
            
        </ul>
    </div>
    
</nav>

<div id="page-wrapper">

<div class="container-fluid">

   
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
             My Sample Dashboard
            </h1>
           
        </div>
    </div>
  
                
    <?php 
$query = 'SELECT * FROM events
              WHERE
              events_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['events_id'];
                $i= $row['e_name'];
                $a=$row['e_date'];
                $b=$row['e_time'];
                $c=$row['address'];
                $d=$row['price'];
                $e=$row['comment'];
             
              }
              
              $id = $_GET['id'];
         
?>
                      <div class="col-lg-12">
                  <h2>Edit Event Record</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
    <div class="form-group">
      <input class="form-control" placeholder="event Name" name="e_name" value="<?php echo $i; ?>">
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="date of the event" name="e_date" value="<?php echo $a; ?>">
    </div> 
    <div class="form-group">
      <input class="form-control" placeholder="time of the event"  name="e_time" value="<?php echo $b; ?>">
    </div> 
    <div class="form-group">
      <input class="form-control" placeholder="address of the event"  name="address" value="<?php echo $c; ?>">
    </div> 
    <div class="form-group">
      <input class="form-control" placeholder="price of the event" name="price" value="<?php echo $d; ?>">
    </div> 
    <div class="form-group">
     <label>Comment</label>
      <textarea class="form-control" rows="3"  name="comment"><?php echo $e; ?></textarea>
    </div>  
    <button type="submit" class="btn btn-default">Return to dashboard</button>
 


    </form>  
                    </div>
                </div>
                
            </div>
            

        </div>
       

    </div>
   

   
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>



