<?php
    require_once '../template/header.php';
?>
<script src="../assets/threesixty-slider-master/src/threesixty.js"></script>

<style>
    .item-image-div {
        border: 1px solid gainsboro;
    }
</style>
<link rel="stylesheet" href="../assets/threesixty-slider-master/styles/threesixty.css">
<script src="../assets/threesixty-slider-master/src/threesixty.js"></script>

<div class="row" style="padding-top: 70px; background: gainsboro">
    <div class="container">

        <div class="col-lg-12">
            <div class="row">
                <div class="container card-white" style="margin-bottom: 20px;">
                    <div class="col-lg-5" style="padding-bottom: 10px;">
                        <div id="images">
                            <div style="height: 350px; overflow: hidden">
                                <img id="current-image" style="width: 100%" src="../img/categories/hood.jpg">
                            </div>
                            <hr>
                            <div>
                                <a class="item-image" href=""><img style="width: 15%; display: inline-block; border: " src="../img/categories/engine.jpg"></a>
                                <a class="item-image" href=""><img style="width: 15%; display: inline-block" src="../img/categories/headlights.jpg"></a>
                                <a class="item-image" href=""><img style="width: 15%; display: inline-block" src="../img/categories/tire.jpg"></a>
                            </div>
                        </div>
                        
                        <section class="" id="container" style="padding-top: 150px; cursor: url">
                            <div class="threesixty product1">
                              <div class="spinner">
                                <span>0%</span>
                              </div>
                              <ol class="threesixty_images"></ol>
                            </div>
                          </section>
                        
                        
                        
                        <hr>
                        <div class="">
                            <div id="imageButton" class="btn btn-default btn-lg col-lg-6">Images</div>
                            
                            <div id="360Button" class="btn btn-default btn-lg col-lg-6">360 &deg;</div>
                        </div>
                    </div>
                    
                    <div class="col-lg-7" style="padding: 10px;">
                        <legend style="font-weight: 400; font-size: 30px;">Item name</legend>
                        <p>Item condition:</p>
                        <p>OEM: </p>
                        <div class="row">
                            <div class="container" style="padding-left: 0">
                                <div class="col-sm-1">
                                    Price:
                                </div>
                                <div class="col-sm-3">
                                    <div><strong>$20,000</strong></div>
                                    <div style="padding-top: 20px;"><input class="form-control" type="text" ></div>
                                    <div class="help-block" style="">Enter xx or more.</div>
                                </div>
                                <div class="col-sm-4">
                                    <div>[0 bids]</div>
                                    <div style="padding-top: 20px;"><button class="btn btn-warning">Place bid</button></div>
                                </div>
                            </div>
                        </div>
                        <p>Time left: </p>
                        <p>Shipping: </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-lg-12" style="padding-top: 20px;">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs ">
              <li class="active"><a href="#home" data-toggle="tab">Overview</a></li>
              <li><a href="#profile" data-toggle="tab">Spec</a></li>
              <li><a href="#messages" data-toggle="tab">FAQ</a></li>
              <li><a href="#settings" data-toggle="tab">Reviews</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" style="padding-top: 20px;">
                <div class="tab-pane fade in  active" id="home">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                    <p>
                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                    </p>
                    <p>
                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                    </p>

                </div>
                <div class="tab-pane fade" id="profile">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <div class="tab-pane fade" id="messages">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>

                </div>
                <div class="tab-pane fade" id="settings">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
            </div>
            
            
            
        </div>
    </div>
</div>


   

<div style="height: 60px;"></div>
<div style="height: 60px;"></div>
<!-- add as much div tags needed -->
<script>
    $("#container").hide();
    $(".item-image img").click( function (event) {
        event.preventDefault();
       var imagePath = $(this).attr('src');
       $("#current-image").attr('src', imagePath)
    });
    $(".item-image img").hover( function (event) {
       event.preventDefault();
       var imagePath = $(this).attr('src');
       $("#current-image").attr('src', imagePath)
    });
    $("#imageButton").click(function (event) {
       $("#container").hide();
       $("#images").show();
    });
    $("#360Button").click(function (event) {
       $("#container").show();
       $("#images").hide();
    });
    

</script>   

<script>
    window.onload = init;

    var car;
    function init(){

        car = $('.product1').ThreeSixty({
            totalFrames: 52, // Total no. of image you have for 360 slider
            endFrame: 30, // end frame for the auto spin animation
            currentFrame: 1, // This the start frame for auto spin
            imgList: '.threesixty_images', // selector for image list
            progress: '.spinner', // selector to show the loading progress
            imagePath:'../assets/threesixty-slider-master/demo/img/car/', // path of the image assets
            filePrefix: '', // file prefix if any
            ext: '.png', // extention for the assets
            width: 447,
            navigation: true,
            responsive: true
        });

    }
</script>

<?php
    require_once '../template/footer.php';
?>
