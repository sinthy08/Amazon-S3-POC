<!DOCTYPE html>
<html lang="en" style="margin: 100px;">
<head>
  <title>Upload data to s3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 
  <form class="form-horizontal" action="./upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">File:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="email" placeholder="Enter email" name="ftp">
      </div>
    </div>
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
