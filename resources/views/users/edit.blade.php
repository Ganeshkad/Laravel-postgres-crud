<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit User</title>
  </head>
  <body>
  <section class="px-5 my-5 mt-5" >
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div> 
    @endif
    <div class="card">
    <div class="card-header">
    <h5>Edit User</h5>
    </div>
    <div class="card-body">
    <form action="{{ route('user.update', $data->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}">
    @error('name')<p class="text text-danger">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
    <label>Email Address</label>
    <input type="email" name="email" class="form-control" value="{{$data->email}}">
    @error('email')<p class="text text-danger">{{ $message }}</p> @enderror
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
    @error('password') <p class="text text-danger">{{ $message }}</p> @enderror
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('user.index') }}" class="btn btn-primary">View Users</a>
    </div>
    </form>
    </div>
    <div class="card-footer">
    </div>
    </div>
  </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>