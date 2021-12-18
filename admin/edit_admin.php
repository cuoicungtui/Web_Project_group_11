<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    if(!isset($_GET['id'])){
        header("location:Home.php");
    }
?>

    <?php
        include "header_admin.php"
    ?>

    <div class="container">
        <section class="login-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="md-float-material form-material" action="edit_admin_DB.php?id=<?php echo $_GET['id'] ?>" method="POST">
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center heading">Change Password</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary"> <input type="Password" class="form-control" name="curent_password" value="" placeholder="Curent Password" id="first_name" require> </div>
                                    <div class="form-group form-primary"> <input type="password" class="form-control" name="password_new" placeholder="New Password" value="" id="password" require> </div>
                                    <div class="form-group form-primary"> <input type="password" class="form-control" name="password_confirm" placeholder="Confirm password" value="" id="password_confirm"require> </div>                                  
                                    <div class="row">
                                        <div class="col-md-12"> <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Register"> <!-- <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i class="fa fa-lock"></i> Signup Now </button> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <style>
            body {
                background-color: #f2f7fb
            }

            .login-block {
                margin: 30px auto;
                min-height: 93.6vh
            }

            .login-block .auth-box {
                margin: 20px auto 0;
                max-width: 450px !important
            }

            .card {
                border-radius: 5px;
                -webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
                box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
                border: none;
                margin-bottom: 30px;
                -webkit-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
                background-color: #fff
            }

            .card .card-block {
                padding: 1.25rem
            }

            .f-80 {
                font-size: 80px
            }

            .form-group {
                margin-bottom: 1.25em
            }

            .form-material .form-control {
                display: inline-block;
                height: 43px;
                width: 100%;
                border: none;
                border-radius: 0;
                font-size: 16px;
                font-weight: 400;
                padding: 9px;
                background-color: transparent;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-bottom: 1px solid #ccc
            }

            .btn-md {
                padding: 10px 16px;
                font-size: 15px;
                line-height: 23px
            }

            .btn-primary {
                background-color: #4099ff;
                border-color: #4099ff;
                color: #fff;
                cursor: pointer;
                -webkit-transition: all ease-in .3s;
                transition: all ease-in .3s
            }

            .btn {
                border-radius: 2px;
                text-transform: capitalize;
                font-size: 15px;
                padding: 10px 19px;
                cursor: pointer
            }

            .m-b-20 {
                margin-bottom: 20px
            }

            .btn-md {
                padding: 10px 16px;
                font-size: 15px;
                line-height: 23px
            }

            .heading {
                font-size: 21px
            }

            .btn-google {
                color: #545454;
                background-color: #ffffff;
                box-shadow: 0 1px 2px 1px #ddd
            }

            .or-container {
                align-items: center;
                color: #ccc;
                display: flex;
                margin: 25px 0
            }

            .line-separator {
                background-color: #ccc;
                flex-grow: 5;
                height: 1px
            }
        </style>

    </div>

        <?php
            include "footer.php";
        ?>


<!-- password_hash -->