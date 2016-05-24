<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TechnoLogic Admin Panel</title>

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
                <a class="navbar-brand" href="index.php">Brand</a>
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
                    <a href="index.php" class="list-group-item active"><i class="fa fa-tachometer" aria-hidden="true"></i>
     Dashboard
  </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">14</span>
                        <i class="fa fa-file-text" aria-hidden="true"></i> All Post
                    </a>
                    <a href="#" class="list-group-item"> <span class="badge">10</span><i class="fa fa-comments" aria-hidden="true"></i> Comments</a>
                    <a href="categories.php" class="list-group-item"> <span class="badge">10</span><i class="fa fa-folder-open" aria-hidden="true"></i> Categories</a>
                    <a href="users.php" class="list-group-item"> <span class="badge">8</span><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                </div>
            </div>
              <div class="col-md-9">
                <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Different Categories</small></h1>
                <hr>
                <ol class="breadcrumb">
                    <li><a class="" href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                     <li class="active"><i class="fa fa-folder-open" aria-hidden="true"></i> Categories</li>
                    
                </ol>
                
                
                
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label for="category">Category Name : </label>
                                <input type="text" placeholder="category name" class="form-control">
                            </div>
                            <input type="submit" value="Add category" name="submit" class="btn btn-warning">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Category Name</th>
                                    <th>Posts</th>
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Video Tutorial</td>
                                    <td>12</td>
                                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Video Tutorial</td>
                                    <td>12</td>
                                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Video Tutorial</td>
                                    <td>12</td>
                                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Video Tutorial</td>
                                    <td>12</td>
                                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Video Tutorial</td>
                                    <td>12</td>
                                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
          


<!--
<footer class="text-center footer">
   Copyright &copy; by <a href="">Mohammad Shaon</a> from 2014-16
    
</footer>



-->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>