<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<form class="col-md-6 m-auto" method="POST" action="/insert">
<label>INSERT</label><hr>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Firstname</label>
    <input type="text" class="form-control" name="firstname"  placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lastname</label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>