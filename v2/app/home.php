<link rel="import" 
      href="../components/paper-input/paper-input.html">
<link rel="import" 
      href="../components/paper-fab/paper-fab.html">


<core-layout  justify='center' isContainer align='center'>
    <core-layout  justify='center' isContainer align='center' horizontal style="background: url('../../img/tesla.jpg'); background-size: cover;" class='pageContent'>
        <paper-shadow></paper-shadow>
        <core-layout style="background-color:rgba(0,0,0,0.6); width:100%; height:100%; color: white; padding: 10px; text-align: left">
            <div style="width:100%" class="hidden-xs">
                <h4>Search for an item</h4>
                <hr>
                <core-layout>
                    <div><paper-input style='color: lightgrey;' floatingLabel label="Ex: Toyota Prius Taillight, P26309" ></paper-input></div>
                    <div><paper-button class="homeBtn"  label="Search"  icon='search' style='margin-top:16px; margin-left: 15px;'></paper-button></div>
                </core-layout>
            </div>
            <div style="width:200px; text-align: center; padding-top:100px;" class="hidden-xs">
                <paper-fab><span>OR</span></paper-fab>
            </div>
            <div style="width:100%">
                <h4>Browse for a part or accessory</h4>
                <hr>
                <core-layout style="padding-top:15px;">
                    <div flex style="padding-right: 20px;">
                        <select class="form-control">
                            <option>Any year</option>
                        </select>
                    </div>
                    <div flex style="padding-right: 20px;">
                        <select class="form-control">
                            <option>Any make</option>
                        </select>
                    </div>
                    <div flex>
                        <select class="form-control">
                            <option>Any model</option>
                        </select>
                    </div>
                </core-layout>
                <core-layout style="padding-top:15px;">
                    <div flex  style="">
                        <select class="form-control">
                            <option>Category</option>
                        </select>
                    </div>
                </core-layout>
                <core-layout style="padding-top:15px;">
                    <div><paper-button class="homeBtn"  label="Search"  icon='search' style=''></paper-button></div>
                </core-layout>
            </div>
        </core-layout>
    </core-layout>
</core-layout>

    <core-layout  justify='center' isContainer align='center'>
        <core-layout  justify='center' isContainer align='center' horizontal style="background: white " class='pageContent'>
    
            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 100%; overflow: hidden">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="height: 100%; ">
                  <div class="item active">
                      <img src="../../img/buggati.jpg" style="width: 100%">
                      <div class="carousel-caption" style="margin:0;right:0; left:10%; z-index:0">
                        <div style="width: 100%">
                            <div style="background: rgba(0,0,0,0.6); margin-top:200px; text-align:left; padding:20px; margin-bottom:20px; border-radius:3px;">
                                <paper-shadow z="1"></paper-shadow>
                                <div class="hidden-xs">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>  
                                </div>
                                <div class="visible-xs-block hidden-lg hidden-md hidden-sm">Mobile version ..............</div>
                            </div>
                      </div>
                    </div>     
                  </div>
<div class="item ">
                      <img src="../../img/buggati.jpg" style="width: 100%">
                      <div class="carousel-caption" style="margin:0;right:0; left:10%; z-index:0">
                        <div style="width: 100%">
                            <div style="background: rgba(0,0,0,0.6); margin-top:200px; text-align:left; padding:20px; margin-bottom:20px; border-radius:3px;">
                                <paper-shadow z="1"></paper-shadow>
                                <div class="hidden-xs">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>  
                                </div>
                                <div class="visible-xs-block hidden-lg hidden-md hidden-sm">Mobile version ..............</div>
                            </div>
                      </div>
                    </div>     
                  </div>
                    <div class="item ">
                      <img src="../../img/buggati.jpg" style="width: 100%">
                      <div class="carousel-caption" style="margin:0;right:0; left:10%; z-index:0">
                        <div style="width: 100%">
                            <div style="background: rgba(0,0,0,0.6); margin-top:200px; text-align:left; padding:20px; margin-bottom:20px; border-radius:3px;">
                                <paper-shadow z="1"></paper-shadow>
                                <div class="hidden-xs">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>  
                                </div>
                                <div class="visible-xs-block hidden-lg hidden-md hidden-sm">Mobile version ..............</div>
                            </div>
                      </div>
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
        </core-layout>
    </core-layout>         
    <core-layout  justify='center' isContainer align='center'>
        <core-layout vertical  justify='left' isContainer align='left' horizontal style="background: gainsboro; padding:20px;" class='pageContent'>
            <paper-shadow></paper-shadow>
            <div><h2 style="text-align:left">Featured Categories</h2></div>
            <core-layout horizontal style="//height: 100%">
                <div flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/engine.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        
                        Category 1
                    </div>
                </div>
                <div flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/headlights.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        Category 2
                    </div>
                </div>
                <div class="hidden-xs" flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/hood.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        Category 3
                    </div>
                </div>
                <div class="hidden-xs" flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/tire.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        Category 4
                    </div>
                </div>
            </core-layout>
            <core-layout style="//height: 100%">
                               <div class="hidden-lg hidden-md hidden-sm" flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/hood.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        Category 3
                    </div>
                </div>
                <div class="hidden-lg hidden-md hidden-sm" flex style="background: white; border-radius: 3px; margin:5px;">
                    <paper-ripple id="categoriesRipple" class="recenteringTouch" fit></paper-ripple>
                    <paper-shadow></paper-shadow>
                    <div style="width:100%; overflow: hidden;">
                        <img src="../../img/categories/tire.jpg" style="width:100%">
                    </div>
                    <div style="background: rgba(0,0,0,0.6); height:50px; width:100%; position:absolute; margin-top:-50px; color: white; border-bottom-left-radius:3px; border-bottom-right-radius:3px;
                         padding:10px; text-align:center; font-weight:bold;">
                        <paper-shadow></paper-shadow>
                        Category 4
                    </div>
                </div>
            </core-layout>
        </core-layout>
    </core-layout>
<style>    
      :host {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
      }
      #paper_ripple {
        width: 300px;
        height: 300px;
        left: 840px;
        top: 490px;
        position: absolute;
        color: #4285f4;
      }
    

</style>
<core-layout  justify='center' isContainer align='center'>
    <core-layout vertical  justify='left' isContainer align='left' horizontal style="background: gainsboro; padding:20px;" class='pageContent'>
        <paper-shadow></paper-shadow>
        <div style="height: 100px; width: 100px;">
            <paper-ripple class="recenteringTouch" fit></paper-ripple>
        </div>
    </core-layout>
</core-layout>