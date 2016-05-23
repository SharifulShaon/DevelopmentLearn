<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  
  </head>
  <body>

    
    
    <nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Post</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
   
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-3">
               <div class="list-group">
  <a href="#" class="list-group-item active"><i class="fa fa-tachometer" aria-hidden="true"></i>
     Dashboard
  </a>
  <a href="#" class="list-group-item">
      <span class="badge">14</span>
    <i class="fa fa-file-text" aria-hidden="true"></i> All Post
  </a>
  <a href="#" class="list-group-item"> <span class="badge">10</span><i class="fa fa-comments" aria-hidden="true"></i> Comments</a>
  <a href="#" class="list-group-item"> <span class="badge">10</span><i class="fa fa-folder-open" aria-hidden="true"></i> Categories</a>
  <a href="#" class="list-group-item"> <span class="badge">8</span><i class="fa fa-user" aria-hidden="true"></i> Users</a>
</div>
           </div>
           <div class="col-md-9">
               <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Statistics Overview</small></h1>
               <hr>
               <ol class="breadcrumb">
  <li class="active"><i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard</li>
</ol>
              
              <div class="row tag-boxes">
                  <div class="col-md-6 col-lg-3">
                      
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                             <div class="row">
                              <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                              </div>
                              
                              <div class="col-xs-9">
                                  <div class="text-right huge">11</div>
                                  <div class="text-right">New COmment</div>
                              </div>
                          </div>
                          </div>
                          <a href="">
                              <div class="panel-footer">
                                <span class="pull-left">View All Comments</span>
                                  
                                  <span class="pull-right">
                                      <i class="fa fa-arrow-circle-right"></i>
                                  </span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                      
                      
                  </div>
                         <div class="col-md-6 col-lg-3">
                      
                      <div class="panel panel-red">
                          <div class="panel-heading">
                             <div class="row">
                              <div class="col-xs-3">
                               <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
                              </div>
                              
                              <div class="col-xs-9">
                                  <div class="text-right huge">20</div>
                                  <div class="text-right">All Post</div>
                              </div>
                          </div>
                          </div>
                          <a href="">
                              <div class="panel-footer">
                                <span class="pull-left">View All Post</span>
                                  
                                  <span class="pull-right">
                                      <i class="fa fa-arrow-circle-right"></i>
                                  </span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                      
                      
                  </div>
                         <div class="col-md-6 col-lg-3">
                      
                      <div class="panel panel-yellow">
                          <div class="panel-heading">
                             <div class="row">
                              <div class="col-xs-3">
                               <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                              </div>
                              
                              <div class="col-xs-9">
                                  <div class="text-right huge">11</div>
                                  <div class="text-right">Users</div>
                              </div>
                          </div>
                          </div>
                          <a href="">
                              <div class="panel-footer">
                                <span class="pull-left">View All Users</span>
                                  
                                  <span class="pull-right">
                                      <i class="fa fa-arrow-circle-right"></i>
                                  </span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                      
                      
                  </div>
                         <div class="col-md-6 col-lg-3">
                      
                      <div class="panel panel-green">
                          <div class="panel-heading">
                             <div class="row">
                              <div class="col-xs-3">
                               <i class="fa fa-folder-open fa-5x" aria-hidden="true"></i>
                              </div>
                              
                              <div class="col-xs-9">
                                  <div class="text-right huge">11</div>
                                  <div class="text-right">All Categories</div>
                              </div>
                          </div>
                          </div>
                          <a href="">
                              <div class="panel-footer">
                                <span class="pull-left">View All Categories</span>
                                  
                                  <span class="pull-right">
                                      <i class="fa fa-arrow-circle-right"></i>
                                  </span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                      
                      
                  </div>
              </div>
               
               
           </div>
       </div>
   </div>
    
    
    
    
    
    
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>