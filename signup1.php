
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="container  alert alert-success " role="alert" >
    <div class="row">
        <div class="col-sm-5">

<form action=""method="post">
  <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="fname">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="femail">
  </div>
  <div class="form-group">
  <label for="mobile">Mobile</label>
    <input type="num" class="form-control" id="exampleCheck1" name="fmobile">
   
  </div>
  <div class="form-group">
  <label for="pass">Password</label>
    <input type="password" class="form-control" id="exampleCheck1" name="fpass">
   
  </div>
  <div class="form-group">
  <label for="pass"> Confirm Password</label>
    <input type="password" class="form-control" id="exampleCheck1" name="cpass">
   
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>
