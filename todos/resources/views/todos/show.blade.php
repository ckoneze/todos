<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Todo Item</title>
</head>
<body>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <h1 class="text-center my-5">TODOS ITEM</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            {{ $todo->name}}
          </div>

          <div class="card-body">
          {{ $todo->description}}

          </div>
                      <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info">Edit</a> 
                      <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger">Delete</a> 

        </div>
      </div>
    </div>
  </div>
    
</body>
</html>