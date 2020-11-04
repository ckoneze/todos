<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>

<div class="container">
    <h1 class="text-center my-5">TODOS ITEM</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
          @include('layouts.navbar')
          </div>
          <div class="card-header">
            <table class="table">
            <tr>
              <td><b>{{ $todo->name}}</b></td>
            
            
              <td>
              <p class="text-right">
              <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm">Edit</a>
              <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
              </p>
              </td>
              </tr>
            </table>
            
            
            
            
          </div>
          <div class="card-body">
          {{ $todo->description}}
          </div>
                      
                      

        </div>
      </div>
    </div>
  </div>
    
</body>
@include('layouts.footer')

</html>