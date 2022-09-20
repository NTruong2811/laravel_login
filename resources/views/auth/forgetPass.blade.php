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
        <form action="{{route('auth.SubmitForgetPass')}}" method="POST">
            <h1>Forget Password</h1>
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@website.com">          
              <span style="color: red">{{$errors->first('email')}}</span>
            </div>
              <div class="">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>