<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>

<div class="container">
    <h1 class="text-center my-5">Todo Sample App</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            
          @include('layouts.navbar')
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
@include('layouts.footer')
</html>
