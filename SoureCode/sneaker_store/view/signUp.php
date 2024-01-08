<title>Sign Up</title>
<!-- Sign In Sign Up -->
<main class="sign-in-sign-up">
    <div class="background-sisu">
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="index.php?act=dangky" method="POST">
                    <h1>Create Account</h1>
                    <div class="infield">
                        <input type="text" placeholder="User name" name="username" required />
                    </div>
                    <div class="infield">
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="infield">
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <button value="Đăng ký" name="dangky">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</main>

<h2 class="thongbao">
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
        echo '<br/><br/>';
        echo '<a href="index.php?act=dangnhap"><button>Sign In now</button></a> ';
    }
    ?>
</h2>

<div class="section-separator"></div>