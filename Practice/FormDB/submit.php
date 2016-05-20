<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <title>Submit form</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 col-xs-6 col-md-12">
                
                <form method="post" action="dbpush.php">
                    <div class="form-group">
                         <label for="Title">Title</label>
                        <input type="text" class="form-control" name="titile" placeholder="Enter Title">     </div>
                        
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" placeholder="Enter Details" name="content" class="form-control">
                        </div>
                        <input type="submit" value="Submit" name="submit" class="btn btn-info">
  
                    
                    
                </form>
                
            </div>
        
            
        </div>
    </div>
    
    
    
</body>
</html>