<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="col-md-6 m-auto">

<form class="mt-5" method="post" action="/update">
@csrf
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" value="{{$data['firstname']}}" name="firstname">
  </div>
  <div class="form-group">
    <label >Lastname</label>
    <input type="text" class="form-control" value="{{$data['lastname']}}"  name="lastname">
  </div>
  <input type="hidden" name="upd_id" value="{{$upd_id}}"/>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>