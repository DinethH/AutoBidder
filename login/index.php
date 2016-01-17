<?php
    require_once '../template/header.php';
?>

<div class="row">
    <div class="container" style="padding-top: 80px;">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="../home/">AutoBidder</a></li>
                <li class="active">Login</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">

        <div class="col-lg-12">
            <h2>Login with Google+, Facebook, Twitter or Register</h2>
            <hr>
            <p><span style="font-weight: 500">No registration required.</span> Just select your preferred account below to login...</p>
        </div>

    </div>
</div>
<div class="row" style="//background: #e6e6e6">
    <div class="container">
        <div class="col-lg-12">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 33%; display: inline-block"><img style="width: 100%;" src="../img/icons/facebook_banner.jpg"></td>
                    <td style="width: 33%; display: inline-block"><img style="width: 100%;" src="../img/icons/google-plus-banner-logo-640.jpg"></td>
                    <td style="width: 33%; display: inline-block"><img style="width: 100%;" src="../img/icons/twitter1.png"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="container">
        <div class="col-lg-12">
            <hr>
        </div>
            <div class="col-lg-8">

                <div class="panel panel-default">
                    <div class="panel-heading"><span style="font-weight: 500">Login with Email/Password</span></div>
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="col-lg-5">
                                <div class="form-group" style="">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control input-lg" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control input-lg" id="exampleInputPassword2" placeholder="Password">
                                  </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-lg btn-info">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="well well-sm">
                    <div class="list-group" style="margin-bottom: 0">
                        <a class="list-group-item" href="../register/">Register</a>
                            <a class="list-group-item" data-toggle="modal" data-target="#passwordRecoveryModal">Forgot Password</a>
                    </div>
                </div>
            </div>
        <!-- password recovery -->
        <?php
        require_once './recover.php';
        ?>
        <!-- /password recovery-->
    </div>
</div>

<div style="height: 60px;"></div>
<!-- add as much div tags needed -->


<?php
    require_once '../template/footer.php';
?>
