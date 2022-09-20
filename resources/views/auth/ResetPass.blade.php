<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    .container{
        width: 100%;
    }
    form{
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
    span{
        font-size: 13px;
    }
</style>
<body>
    <div class="container">
        <form action="{{route('auth.SubmitResetPass')}}" method="POST">
            <h1>Reset Password</h1>
            @if ($user)
                <h3> User:{{$user->name}}</h3>
            @endif
            @csrf
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="new_password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="New password">
              <span style="color: red">{{$errors->first('new_password')}}</span>
            </div>
              <div class="mb-3">
                <label for="cf_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="cf_password" aria-describedby="emailHelp" placeholder="Confirm password"> 
                <span style="color: red">{{$errors->first('confirm_password')}}</span>
            </div>
                <input type="text" name="email" class="form-control" id="cf_password" aria-describedby="emailHelp" value="{{$user->email}}" hidden>
                <div class="">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

