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
        transform: translateY(50px);
        width: 420px;
        padding: 50px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        border-radius: 10px;
    }
    h1{
        margin-bottom: 10px;
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
    p{
        margin-bottom: 30px;
        font-size: 15px;
    }
    .google{
      width: 100%;
      text-align: center;
      background-color: transparent;
      border-radius: 20px;
      padding: 5px 0px;
      border: 1px solid rgba(0, 0, 0, 0.178);
      margin-bottom: 20px
    }
    .google img{
        margin-right: 10px;
        margin-top: -4px;
    }
    .line{
        position: relative;
        margin-bottom: 20px;
        width: 100%;
    }
    .line span{
        position: absolute;
        top: -12px;
        left: 30%;
        background-color: white;
        margin: auto;
        padding: 0px 10px;
    }
</style>
<body>
    <div class="container">
        <form action="{{route('auth.SubmitLogin')}}" method="POST">
            <h1>Login</h1>
            <p>See your grouwth and get consulting support!</p>
            
            <button type="button" class="google" > <img width="20px" src="/image/google.png" alt=""> Sign in with Google</button>
              <div class="line">
                 <hr>
                  <span>or Sign in with Email</span>
              </div>
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address *</label>
              <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mail@website.com">
              <span style="color: red">{{$errors->first('email')}}</span>
            </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password *</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder=" Min 8.character">
              <span style="color: red">{{$errors->first('password')}}</span>
            </div>
            <div class="rm_fg">
                <div class="rm">
                    <input type="checkbox" name="" id=""> <span>Remember me</span>
                </div>
                <div class="fg">
                    <a href="{{route('auth.ForgetPass')}}"> Forget Password ?</a>
                </div>
            </div>
            <div class="">
                <button id="bt" type="submit" class="btn btn-primary">Login</button> <br>
               <span>Not registered yet <a href="{{route('auth.register')}}">Create an Account</a></span>
            </div>
        </form>
    </div>
</body>
</html>