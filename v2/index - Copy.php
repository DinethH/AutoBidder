<!doctype html>
<html>
<head>
  <title>AutoBidder</title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <script src="components/platform/platform.js"></script>
  <link rel="import" href="components/font-roboto/roboto.html">
  
<!-- CSS styles -->
<link rel="stylesheet" href="assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<link href="../assets/bootstrapformhelpers/css/bootstrap-formhelpers.css">
<link rel="stylesheet" href="css/styles-app.css">
<link rel="stylesheet" href="assets/multiselect/css/bootstrap-multiselect.css">
<!-- /css styles-->

<!-- JavaScipt -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="assets/bootstrap/3.1.1/js/bootstrap.js"></script>
<script src="assets/multiselect/js/bootstrap-multiselect.js"></script>
<!-- /JavaScipt-->
  
  <!-- custom element imports -->
  <link rel="import" href="custom-elements/top-nav-bar.php">
  <link rel="import" href="custom-elements/notification-panel.php">
  <link rel="import" href="custom-elements/cart-pop-up.php">
  <link rel="import" href="custom-elements/home-search-box.php">
  <link rel="import" href="components/core-header-panel/core-header-panel.html">
  <link rel="import" href="components/core-layout/core-layout.html">
  <link rel="import" href="components/core-drawer-panel/core-drawer-panel.html">
<link rel="import" href="components/core-menu/core-submenu.html">
<link rel="import" href="components/core-item/core-item.html">
<link rel="import" href="components/paper-shadow/paper-shadow.html">

  <!-- /custom element imports -->
  
  

<style>
            @media (min-width: 1070px) {
                
                #hsb {
                    background: rgba(0,0,0,.6);
                    width:1070px;
                    color: white;
                    padding:10px;
                }
            }
            paper-input {
                color: white;
            }
        paper-button {
            background: orange;
            text-transform: capitalize;
            color: #fff;
        }

        paper-button:hover {
            background: #ff8e20;
        }

        paper-button::shadow #ripple {
            color: white;;
        }
        .pageElement {
            width:1070px;
            padding:10px;  
        }
        </style>
</head>

<body unresolved touch-action="auto">
   
    <header style="">
        <top-nav-bar ></top-nav-bar>
    </header>
    
    <div>
<core-layout vertical id="core_pages" style="background: url('../img/tesla.jpg'); background-size:cover; height:400px; width:100%; padding-top: 64px;">

        <core-layout  justify='center' style='padding-top: 20px;'>
            <div id='hsb'>
   
                <core-layout>
                   
                    <div style="width: 100%; padding-right: 14px;">
                         <core-layout horizontal>
                    <h2>Search for an item</h2>
                    <hr>
                    
                    <form class="form-inline" action="../search/" method="post">
                    <div class='three'>
                        <input type="text" id="search" name="search" class="form-control" placeholder="Enter a keyword, OEM # or a part #" style="width: 100%">
                        <p style="color: whitesmoke" class="help-block">Ex: Toyota Prius Taillight, P26309</p>
                    </div>

                    <div class='three'><button type="submit" class="btn btn-warning" style="width: 100%"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                    </form>
                    </core-layout>
                </div>
                    
                <div style="width: 100%; padding-left: 15px;">
                    <h2>Browse for a part or accessory</h2>
                    <hr>
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
                </div>
                </core-layout>
            </div>
        </core-layout>
    </core-layout>

<core-layout vertical style="width:100%;">

        <core-layout  justify='center' style='padding-top: 20px;'>
            <div class="pageElement">
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
    </core-layout>
</core-layout>


<core-layout vertical style="width:100%; background-color: #efeddf;">

        <core-layout  justify='center' >
            <div class="pageElement">
                <div class="col-lg-6" style="padding: 0">
                    <div class="container" style=" padding: 0"><h3 style="font-weight: 400; padding: 0">Featured Categories {{ or trending/popular categories based on the user interest}}</h3></div>
                </div>
            </div>
        </core-layout>
</core-layout>
    </div>
    <!-- notification panel -->
    <notification-panel  id="notification_panel_1" style="display: none;">
        
    </notification-panel>
    <!-- /notification panel -->
    <!-- cart popup -->
    <cart-pop-up display="block" style="display: none;">
        
    </cart-pop-up>
    <!-- /cart popup -->
    
    
    
    <script>


    </script>

</body>

</html>
