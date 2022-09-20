<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
  .container{
      width: 100%;
  }
  .form{
      margin: auto;
      transform: translateY(100px);
      width: 420px;
      padding: 50px;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
      border-radius: 10px;
  }
  h1{
        margin-bottom: 40px;
    }
  .rm_fg{
      display: flex;
      justify-content: space-between;
      margin: 10px 0px 40px 0px;
  }
   #bt{
      width: 100%;
      border-radius: 20px;
      margin-bottom: 20px;
  }
  .form-control{
      border-radius: 20px;
      padding: 4px 20px;
      font-size: 14px;
  }
  .main{
    width: 600px;
    margin: auto;
    padding-top: 200px;
    text-align: center
  }
</style>
<body>
  
    <div class="container">
        @if (Auth::check())
        <div class="form">
            <h1>Infor</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Your name</label>
                <input type="text" name="name" class="form-control" id="name" readonly aria-describedby="emailHelp" value="{{Auth::user()->name}}" >
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" readonly aria-describedby="emailHelp" value="{{Auth::user()->email}}" >         
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="text" name="password" class="form-control" id="exampleInputPassword1" readonly value="{{Auth::user()->password}}">
            </div>
            <div class="">
               <a href="{{route('auth.logout')}}"><button id="bt" type="submit" class="btn btn-primary">Logout</button> </a> <br>
            </div>
        </div>
        @else
        <div class="main">
            <h3>You are not sign in.  <br>   <a href="{{route('auth.login')}}">Login</a>/ <a href="{{route('auth.register')}}">Register</a>          </h3> 
        </div>
        @endif
       
    </div>
</body>
</html>