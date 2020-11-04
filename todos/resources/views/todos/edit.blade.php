<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>

<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
          @include('layouts.navbar')
          </div>

          <div class="card-body">
            <form action="/todos/{{$todo->id}}/update-todos" method="POST">
            @csrf

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $todo->name}}">
                </div>
                <div class="form-group">
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $todo->description}}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">
                    Save/Update
                    </button>
                </div>
                
            
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@include('layouts.footer')

</html>
