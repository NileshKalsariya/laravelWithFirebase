<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="col-md-6 m-auto">
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($data as $key=>$list)
      <th scope="row">{{$key+1}}</th>
      <td>{{$list['firstname']}}</td>
      <td>{{$list['lastname']}}</td>
      <td><a class="btn-sm btn-primary" href="/edit/{{$list->id()}}">Edit</a>
          <a class="btn-sm btn-danger" href="/delete/{{$list->id()}}">Remove</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
