<?php
    require_once '../template/header.php';
?>

<div class="row">
    <div class="container" style="padding-top: 80px;">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="../home/">AutoBidder</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">

        <div class="col-lg-8" style="padding-left: 0; padding-bottom: 20px;">
              <form role="form">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="inputFirstName">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="inputLasttName">Last Name</label>
                        <input type="text" class="form-control" id="inputLasttName" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="inputEmailAddress">Email Address</label>
                      <input type="email" class="form-control" id="inputEmailAddress" placeholder="">
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="inputVerifyPassword">Verify your password</label>
                        <input type="password" class="form-control" id="inputVerifyPassword" placeholder="">
                      </div>
                  </div>
                  
                  <div class="col-lg-12"><hr></div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="inputAddress1">Street</label>
                      <input type="text" class="form-control" id="inputAddress1" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="inputAddress2">Suit/Apt</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputState">State</label>
                      <select class="form-control bfh-select-fix bfh-states" data-country="US" data-state=""></select>
                      
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputZipCode">Zip Code</label>
                      <input type="number" class="form-control" id="inputZipCode" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="inputPhone">Phone</label>
                      <input id="inputPhone" type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd">
                    </div>
                  </div>
                  
                  
                 <div class="col-lg-12">
                     <button type="submit" class="btn btn-warning">Submit</button>
                 </div>
                
            </form>          
        </div>
        
        <div class="col-lg-4">
                <div class="well well-sm">
                    <div class="list-group" style="margin-bottom: 0">
                        <a class="list-group-item" href="../login/">Login</a>
                        <a class="list-group-item" data-toggle="modal" data-target="#passwordRecoveryModal">Forgot Password</a>
                    </div>
                </div>
            </div>
        <!-- password recovery -->
        <?php
        require_once '../login/recover.php';
        ?>
        <!-- /password recovery-->
        

    </div>
</div>

<div style="height: 60px;"></div>
<!-- add as much div tags needed -->


<?php
    require_once '../template/footer.php';
?>
