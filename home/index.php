<?php
    require_once '../template/header.php';
?>

<div id="bg1" class="row" style="margin-top: 59px; padding-top: 11px; background-image: url(../img/tesla.jpg); z-index: -2; background-size: cover; padding-bottom: 10px;">
    <div class="container card blurBar">
        <div class="row" style="color: white;">
            <div class="col-lg-6" style="padding: 10px;">
                <div class="row">
                    <div class="container">
                        <div class="col-lg-6">
                            <h3 style="color: whitesmoke; font-weight: 400">Search for an item</h3>
                            <hr>
                        </div>
                    </div>
                </div>
                <form class="form-inline" action="../search/" method="post">
                    <div class="col-lg-7">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Enter a keyword, OEM # or a part #" style="width: 100%">
                        <p style="color: whitesmoke" class="help-block">Ex: Toyota Prius Taillight, P26309</p>
                    </div>

                    <div class="col-lg-3"><button type="submit" class="btn btn-warning" style="width: 100%"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                </form>       
            </div>
            
            <div class="col-lg-6" style="padding: 10px;">
                <div class="row">
                    <div class="container">
                        <div class="col-lg-6">
                            <h3 style="color: whitesmoke; font-weight: 400">Browse for a part or accessory</h3>
                            <hr>
                        </div>
                    </div>
                </div>
                <form role="form" class="" action="../search/">
                    <div class="row" style="padding: 10px; padding-left: 15px;">
                        <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any year</option>
                                <option>2000</option>
                                <option>2001</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any make</option>
                                <option>Toyota</option>
                                <option>Audi</option>
                            </select>
                        </div>
                            <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any model</option>
                                <option>Prius</option>
                                <option>RX8</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding: 10px; padding-left: 15px;">
                        <div class="col-lg-6">
                            <select class="form-control">
                                <option>Category</option>
                                <option>Condenser</option>
                                <option>Fog light</option>
                                <option>Radiator</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 10px; padding-top: 10px;">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
   
</div>

<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="padding: 0">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 100%; overflow: hidden">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="height: 100%">
                  <div class="item active">
                      <img src="../img/buggati.jpg" style="width: 100%">
                    <div class="carousel-caption">
                    </div>
                  </div>
                    <div class="item">
                      <img src="../img/buggati.jpg" style="width: 100%">
                    <div class="carousel-caption">
                    </div>
                  </div>
                    <div class="item">
                      <img src="../img/buggati.jpg" style="width: 100%">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>

                <!-- Controls -->
<!--                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>-->
              </div>
            </div>
            <div class="col-lg-6" style="padding: 0; padding-left: 20px;">
                <legend style="font-weight: 400; font-size: 26px;">Welcome Title</legend>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding-top: 10px; background: gainsboro">
    <div class="row">
        <div class="container" style=" padding: 0"><h3 style="font-weight: 400; padding: 0">Featured Categories {{ or trending/popular categories based on the user interest}}</h3></div>
        <div class="container" style=" padding: 0">
            <div class="col-lg-12 featured" style="padding: 0; padding-top: 8px;">
                <table class="featuredTable">
                    <tr>
                        <td>
                            <div class="card-white" style="">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style=" ">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style="">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style=" ">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                    </tr>
                    <tr style="height: 10px;"></tr>
                    <tr>
                        <td>
                            <div class="card-white" style="">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style=" ">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style="">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                        <td>
                            <div class="card-white" style=" ">
                                <img src="../img/categories/engine.jpg" style="width: 90%; padding: 10px;">
                                <h4 class="well well-sm" style="padding: 10px; text-align: center">Category 1</h4>
                            </div>
                        </td>
                    </tr>
                    <tr style="height: 10px;"></tr>
                </table>
            </div>
        </div>
    </div>
</div>



<div class="row" style="padding-top: 10px; background: white;">
    <div class="row">
        <div class="container" style=" padding: 0"><h3 style="font-weight: 400; padding: 0">Items Ending Soon {{ items/related items based on user's search history}}</h3></div>
        <div class="container" style=" padding: 0">
            <div class="col-lg-12" style="padding: 0; padding-top: 8px;">
                <table class="endingSoon">
                    <tr>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>
                            <div class="card-transparent">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 150px">
                                            <img src="../img/categories/engine.jpg" style="width: 100%; padding: 10px;">
                                        </td>
                                        <td style="width: 80%;">
                                            <h4>Item Title 123456789</h4>
                                            <h5>Car Make, Model, Category</h5>
                                            <h5 style="color: green">Current Bid: $1200</h5>
                                            <h5 style="color: red">Time Left: 2 hours 5 minutes</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <h3>{{Also I might add another section called "Latest Additions/New arrivals" as well}}</h3>
        </div>
    </div>
</div>

<!-- add as much div tags needed -->

<div style="height: 60px;"></div>

<?php
    require_once '../template/footer.php';
?>
