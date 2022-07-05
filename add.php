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
                           Add Operation
                        </h1>
                       
                    </div>
                </div>


                <div class="col-lg-12">
                  <h2>Eventeny Add Records 
                  </h2>
                  <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="name of the event" name="e_name">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="date of the event" name="e_date">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder= "time of the event"name="e_time" >
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="address of the event" name="address">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="price of the event" name="price">
                            </div> 
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="comment"></textarea>
                            </div>  
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>
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