<title>Sign In</title>
<!-- Sign In Sign Up -->
<main class="sign-in-sign-up">
    <div class="background-sisu">
        <div class="container" id="container">
            <div class=" form-container sign-in-container">
                <form action="index.php?act=dangnhap" method="POST">
                    <h1>Sign in</h1>
                    <div class="infield">
                        <input type="text" placeholder="User name" name="username" required />
                    </div>
                    <div class="infield">
                        <input type="password" placeholder="Password" name="password" required />
                    </div>

                    <div class="remember-pass">
                        <div><input type="checkbox"><span>Remember password</span></div>
                        <a href="" class="forgot">Forgot your password?</a>
                    </div>
                    <button value="Đăng nhập" name="dangnhap">Sign In</button>
                    <p>Do not have an account? <a href="index.php?act=dangky">Register now</a></p>
                </form>
            </div>

        </div>
    </div>
</main>

<h2 class="thongbao">
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</h2>

<div class="section-separator"></div>