<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopify Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>


<div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form action="upload.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="name" Name="name">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Price" name="price">
    </div>
   <div class="form-group">
      <label for="">Brand:</label>
      <input type="text" class="form-control" id="brand" placeholder="Brand" name="brand">
    </div>
 <div class="form-group">
      <label for="category">Category</label>
      <input type="text" class="form-control" id="category" placeholder="category" name="category">
    </div>
<div class="form-group">
      <label for="gender">Gender</label>
      <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender">
    </div>
<div class="form-group">
    <label for="image1">Image</label>
      <input type="file" name="image1">
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>

        </div>

</body>
</html>

