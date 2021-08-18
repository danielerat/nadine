<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>

<body>

    <div class="main ">

        <section class="signup loginfom">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="#" method="POST" enctype="multipart/form-data" id="signup-form" autocomplete="off" class="signup-form">
                        <h2 class="" style="color:#eee;">Create account</h2>
                        <div class="error-text"></div>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group passeye">
                            <i class="zmdi zmdi-eye"></i>
                            <input type="password" class="form-input passwordshowhide" name="password" id="password"
                                placeholder="Password" />
                    </div>
                    <div class="form-group">
                            <input type="file" class="form-input form-file" name="image"
                                accept="image/x-png,image/gif,image/jpeg,image/jpg" id="re_password">
                        </div>

                        <div class="form-group button">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Dont't Have An Account ? <a href="register.php" class="loginhere-link">Sign Up</a>
                    </p>
                </div>
            </div>
        </section>

    </div>



    <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>