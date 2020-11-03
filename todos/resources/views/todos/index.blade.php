<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Todos App</title>
</head>
<body>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/todos')}}">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/new-todos')}}">Create new ToDos</a>
                  </li>
                  
                </ul>
              </div>
            </nav>

          </div>

          <div class="card-body">
            <ul class="list-group">
              @foreach($todos as $todo)
                <li class="list-group-item">
                  {{ $todo->name }}

                  <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                  @if(!$todo->completed)
                  <a href="/todos/{{ $todo->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
                @endif
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
