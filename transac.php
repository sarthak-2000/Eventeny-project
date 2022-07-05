
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
              

             <div class="col-lg-12">
                <?php
						$ename = $_POST['e_name'];
					    $edate = $_POST['e_date'];
						$etime = $_POST['e_time'];
						$address = $_POST['address'];
						$price = $_POST['price'];
						$comment = $_POST['comment'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO events
								(events_id,e_name, e_date, e_time, address ,price, comment)
								VALUES ('Null','".$ename."','".$edate."','".$etime."','".$address."','$price','".$comment."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
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

