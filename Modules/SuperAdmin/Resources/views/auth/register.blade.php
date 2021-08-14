<!DOCTYPE html>
<html lang="en">
<head>
    <title>KeepContact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5b18d42ec0.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assests/style.css')}}">
</head>
<body class="" style="background-color: #F2F1F0">
<div class="container" >
    <div class="row justify-content-center pt-5 mt-5 ">
        <div class="col-md-4 justify-content-center p-5 login" style="background: linear-gradient(to bottom left, #0D877A 0%, #76977D 100%)">
                <h3 class="text-white text-center pt-5" style="font-family: 'Trebuchet MS', sans-serif;">Welcome Back!</h3>
                <p class="text-center px-4 mx-2 pt-2 " style="color: #c3d4c7; font-size: 13px;"><b>To keep connected with us please login with your personal info</b></p>
            <div class="d-grid col-9 mx-auto  mt-5 mb-5">
                <button type="submit" class="btn btn-primary btn-block text-white shadow-none"><b style="font-size: 12px">SIGN IN</b></button>
            </div>
        </div>

        <div class="col-md-8 register" style="background-color:#ffffff">
            <h3 class="text-center pt-5" style="color:#0D877A; font-family: 'Trebuchet MS', sans-serif;"><b>Create Account</b></h3>
            <div class="col-md-4 offset-4 text-center">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-4 offset-4 text-center mt-3">
                <p class="suggest" style=""><b>or use your email for registration</b></p>
            </div>
            <div class="col-md-8 offset-2">
                <form>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" aria-label="First name" class="form-control inputs" placeholder=" First name">
                        <input type="text" aria-label="Last name" class="form-control inputs" placeholder=" Last name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" ><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input type="text" class="form-control inputs" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder=" Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="text" class="form-control inputs" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder=" Password">
                    </div>
                </form>
            </div>
            <div class="d-grid col-3 mx-auto  mt-5 mb-5">
                <button type="submit" class="btn btn-primary btn-block text-white btn-register shadow-none"><b style="font-size: 12px">SIGN UP</b></button>
            </div>
        </div>
    </div>

</div>
</body>
</html>
