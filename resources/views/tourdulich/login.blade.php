@extends('tourdulich.index')
@section('content')
    {{-- <form class="login" action="pages/login.php" method="post">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="user name"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type ="submit">Login</button>
</form> --}}
    <div class="row justify-content-center loginsection">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                    <div class="text w-100">
                        <h4 style="font-weight: 700">Welcome to Team3ATHTTT</h4>
                        <p>Bạn chưa có tài khoản?</p>
                        <a href="#" class="btn btn-white btn-outline-white">Đăng ký</a>
                    </div>
                </div>
                <div class="login-wrap p-4 p-lg-5">
                    <h2 class="lbSignIn">Đăng Nhập</h2>
                    <form action="#" class="signin-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">Username</label>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
