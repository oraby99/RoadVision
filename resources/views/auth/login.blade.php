


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/images/favicon.png')}}">

  </head>
  <body class="vh-100" ;
  style="width: 100%;background-image: url('/assets/img/MacBook Pro - 3.png');
  background-size: cover;">

<div class="col-12 " style="margin: 200px 200px -330px 588px">
    <img src="assets/img/Group 2364.png" alt="" srcset="">
</div>
                <div class="col-12 d-flex align-items-center justify-content-center" style="padding-top: 22%">

                    <div class="bg-white shadow-soft border rounded border-light  p-lg-4  fmxw-500" style="width: 25%">

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="pt-2" action="{{ route('handleLogin') }}" method="POST" >
                                @csrf
                                <h3 style="color: black">Login</h3><br>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                                @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                                @error('password')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div><a  class="small text-right">
                                    Forget password?</a></div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login in</button>
                            </div>
                        </form>

                    </div>

                </div>


    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
  </body>
</html>
