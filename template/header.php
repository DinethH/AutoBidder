<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AutoBidder</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS styles -->
        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
        <link href="../assets/bootstrapformhelpers/css/bootstrap-formhelpers.css">
        <link rel="stylesheet" href="../css/styles.css">
        
        <link rel="stylesheet" href="../assets/multiselect/css/bootstrap-multiselect.css">
        <!-- /css styles-->
        
        <!-- JavaScipt -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
        <script src="https://rawgit.com/abduzeedo/ios7-blur-html5/master/js/html2canvas.js"></script>
        <script src="https://rawgit.com/abduzeedo/ios7-blur-html5/master/js/StackBlur.js"></script>
        <script src="http://www.ericbarber.me/jsfiddle/bootstrap-formhelpers.min.js"></script>
        <script src="http://www.ericbarber.me/jsfiddle/bootstrap-formhelpers-states.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/blur.js"></script>
        <script src="../assets/multiselect/js/bootstrap-multiselect.js"></script>
        <!-- /JavaScipt-->
    </head>
    <body>
        <header>
            <!-- Nav Bar -->
            <div id="mainnavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                  </div>
                  <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li class=""><a href="../login/">Login/Register</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="profile-icon" href="#" style="padding: 0"><img style="height: 58px;" src="../img/icons/no_profile_50.png"></a></li>
                        <li><a id="bell-icon" href="#"><span style="font-size: 1.5em" class="glyphicon glyphicon-bell"></span></a></li>
                      <li><a href=""><span style="font-size: 1.5em" class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                  <!-- mobile version only -->
                  
                </div>
            </div>            
    </header>     
            <div class="blurheader"></div>
            <!-- / Nav Bar -->
            
            <div id="wrap" class="container-fluid" style="">
                <!-- search bar -->
                
                <!-- account menu -->
                <div id="profile-card" class="pull-right" style="display: none; ">
                    <div style="padding: 20px; position: absolute;z-index: 1000; width: 500px; height: 200px; margin-left: -900px; margin-top: 55px;">
                        <div style=" box-shadow: 1px 1px 5px #CCCCCC; border-radius: 1px; padding: 10px;  " class="card-white">
                            <div>
                                <table>
                                    <tr>
                                        <td style="vertical-align: text-top">
                                            <div style="width: 128px;">
                                                <img src="../img/icons/no_profile_50.png" style="width: 128px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 340px; padding-left: 10px;">
                                                <h3 style="margin: 0; padding-bottom: 5px;">First Last</h3>
                                                <p>Bids</p>
                                                <p>Watchlist</p>
                                                <p>Purchase history</p>
                                                <p><a href="../inbox/">Inbox</a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>


                            </div>    
                            <br>
                            <div class="clearfix" style="background-color: #006dcc; width: 100%; color: white; height: 50px; font-size: 26px; text-align: center; padding-top: 7px; box-shadow: 1px 1px 5px #333; font-weight: 400">
                                Account
                            </div>
                        </div>
                    </div>
                </div>
                <script>

                    $("#profile-icon").click( function (event) {
                        event.preventDefault();
                        $("#profile-card").toggle();
                    });
                    $("#profile-icon").hover( function (event) {
                        event.preventDefault();
                        $("#profile-card").toggle();
                    });
                    $("#profile-card").hover( function (event) {
                        event.preventDefault();
                        $("#profile-card").show();
                    }, function (event) {
                        event.preventDefault();
                        $("#profile-card").hide();
                    });
                </script>
                <!-- /account menu -->
                
                <!-- notification panel -->
                <div id="notification-card" class="pull-right" style="display: none;">
                    <div style="padding: 20px; position: absolute;z-index: 1000; width: 500px; height: 200px; margin-left: -880px; margin-top: 55px;">
                        <div style="border-radius: 1px; padding: 10px; background: rgba(0, 0, 0, 0.7)">
                            <div class="card card-white" style="box-shadow: 1px 1px 5px #CCCCCC; border-radius: 1px; margin-bottom: 10px;">
                                <table>
                                    <tr>
                                        <td style="vertical-align: text-top">
                                            <div style="width: 96px;">
                                                <img src="../img/icons/no_profile_50.png" style="width:96px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 372px; padding-left: 10px;">
                                                <h3 style="margin: 0; padding-bottom: 5px;">Subject</h3>
                                                <p>Click to see the message content</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> 
                            <div class="card card-white" style="box-shadow: 1px 1px 5px #CCCCCC; border-radius: 1px; margin-bottom: 10px;">
                                <table>
                                    <tr>
                                        <td style="vertical-align: text-top">
                                            <div style="width: 96px;">
                                                <img src="../img/icons/no_profile_50.png" style="width:96px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 372px; padding-left: 10px;">
                                                <h3 style="margin: 0; padding-bottom: 5px;">Subject</h3>
                                                <p>Click to see the message content</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> 
                            <div class="card card-white" style="box-shadow: 1px 1px 5px #CCCCCC; border-radius: 1px; margin-bottom: 10px;">
                                <table>
                                    <tr>
                                        <td style="vertical-align: text-top">
                                            <div style="width: 96px;">
                                                <img src="../img/icons/no_profile_50.png" style="width:96px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 372px; padding-left: 10px;">
                                                <h3 style="margin: 0; padding-bottom: 5px;">Subject</h3>
                                                <p>Click to see the message content</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
                <script>

                    $("#bell-icon").click( function (event) {
                        event.preventDefault();
                        $("#notification-card").toggle();
                    });
                    $("#bell-icon").hover( function (event) {
                        event.preventDefault();
                        $("#notification-card").toggle();
                    });
                    $("#notification-card").hover( function (event) {
                        event.preventDefault();
                        $("#notification-card").show();
                    }, function (event) {
                        event.preventDefault();
                        $("#notification-card").hide();
                    });
                </script>
                <!-- /notification panel -->