<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card-header">
                <h1 class="card-title">Register</h1><br>
            </div>
            <div class="card-body">
                @if(Session:: has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form action="{{ route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label><br>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email</label><br>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label><br>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <div>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>