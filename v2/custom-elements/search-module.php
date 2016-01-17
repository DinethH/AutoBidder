
<link rel="import" 
      href="../components/paper-slider/paper-slider.html">
<link rel="import" 
      href="../components/paper-checkbox/paper-checkbox.html">
<link rel="import" 
      href="../components/core-scaffold/core-scaffold.html">
<link rel="import" 
      href="../components/core-header-panel/core-header-panel.html">
<link rel="import" 
      href="../components/core-item/core-item.html">
<link rel="import" 
      href="../components/core-menu/core-menu.html">
<link rel="import" 
      href="../components/core-toolbar/core-toolbar.html">
<link rel="import" 
      href="../components/paper-dialog/paper-dialog.html">
<link rel="import" 
      href="../components/paper-dialog/paper-dialog-transition.html">
<link rel="import" 
      href="../components/core-selector/core-selector.html">
<link rel="import" 
      href="../components/core-scroll-header-panel/core-scroll-header-panel.html">
<link rel="import" 
      href="../components/paper-item/paper-item.html">
<link rel="import" 
      href="../components/core-layout/core-layout.html">
<link rel="import" 
      href="../components/core-menu-button/core-menu-button.html">
<link rel="import" 
      href="../custom-elements/search-items-by-model.php">
<link rel="import" 
      href="../components/paper-toggle-button/paper-toggle-button.html">
<link rel="import" 
      href="../custom-elements/related-items.php">
<link rel="import" 
      href="../custom-elements/car-make-dialog.php">

<polymer-element name="search-module" >
    <template>
        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
<style shim-shadowdom>
    #core_drawer_panel {
        position: absolute;
        right: 0px;
        bottom: 0px;
        left: 0px;
      }
      #section1 {
        box-shadow: rgba(0, 0, 0, 0.0980392) 0px 2px 4px, rgba(0, 0, 0, 0.0980392) 0px 0px 3px;
        background-color: rgb(250, 250, 250);
        padding:20px;
/*        width:350px;*/
        height: 100%;
      }
      #section2 {
        height: 100%;
        box-sizing: border-box;
        background-color: #efeddf;
      }
     paper-slider {
      width: 100%;
    }
        core-scaffold {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      //width: 100hw;
    }
    core-scaffold core-header-panel {
        width:100%;
        
    }
    core-scaffold /deep/ #main {
/*        margin-left: 94px;*/
    }
    core-scaffold /deep/ core-toolbar {
        background-color: #efeddf;
    }
    core-scaffold::shadow::shadow::shadow::shadow::shadow #drawer #mainContainer {
        background-color: white;
    }
    .greenFab {
        background: green;
    }
        .list {
          display: block;
          list-style: none;
          margin: 0;
        -moz-column-count: 5;
        -moz-column-gap: 20px;
        -webkit-column-count: 5;
        -webkit-column-gap: 20px;
        column-count: 5;
        column-gap: 20px;        
        }
        
        .list > * {
            margin: 8px;
            padding:8px;
        }
        
        .list > *.core-selected {
          background: #333;
        }
        .autoImage {
            width: 100px;
        }
        #control-buttons div {
            padding-right: 20px;
            padding-top: -3px;
        }
        #control-buttons /deep/ paper-item {
            font-size: 16px;
            width: 100px;
        }
</style>
    <core-scaffold mode="waterfall" >
  
    <core-header-panel navigation flex mode="seamed" >
<form style="padding: 20px;">
                <core-layout vertical style="padding-bottom: 20px;">
                    <div>
                        <label style="display: block;" for="exampleInputEmail1">Car Make</label>
                    </div>
                    <div>
                        <core-layout horizontal>
                            <div flex>
                                <select class=" form-control multiselect"  style="display: block;">
                                    <option value="cheese">Acura</option>
                                    <option value="tomatoes">Audi</option>
                                    <option value="mozarella">BMW</option>
                                    <option value="mushrooms">Cadillac</option>
                                    <option value="pepperoni">Chevrolet</option>
                                    <option value="onions">Ford</option>
                                  </select>
                            </div>
                            <div style="padding-left:10px;">
                                <paper-icon-button icon="view-module" on-click="{{toggleDialog}}"></paper-icon-button>
                            </div>
                        </core-layout>
                    </div>
                </core-layout>
                <core-layout vertical style="padding-bottom: 20px;">
                    <div>
                        <label style="display: block;" for="exampleInputEmail1">Car Model</label>
                    </div>
                    <div>
                        <core-layout horizontal>
                            <div flex>
                                <select class=" form-control multiselect"  style="display: block;">
                                    <option value="cheese">100</option>
                                    <option value="tomatoes">5000</option>
                                    <option value="mozarella">A6</option>
                                    <option value="mushrooms">Q7</option>
                                    <option value="pepperoni">Quattro</option>
                                    <option value="onions">Roadster</option>
                                  </select>
                            </div>
                            <div style="padding-left:10px;">
                                <paper-icon-button icon="view-module" onclick="{{toggleDialog}}"></paper-icon-button>
                            </div>
                        </core-layout>
                    </div>
                </core-layout>                
                
                <hr>
                <core-layout vertical style="padding-bottom: 20px;">
                    <div>
                        <label style="display: block;" for="exampleInputEmail1">Category</label>
                    </div>
                    <div>
                        <core-layout horizontal>
                            <div flex>
                                <select class=" form-control multiselect"  style="display: block;">
                                    <option value="cheese">Fog Lights</option>
                                  </select>
                            </div>
                            <div style="padding-left:10px;">
                                <paper-icon-button icon="view-module" onclick="{{toggleDialog}}"></paper-icon-button>
                            </div>
                        </core-layout>
                    </div>
                </core-layout>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label style="display: block;" for="exampleInputEmail1">Condition</label>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>New</span>
                        </div>
                      </div>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Used</span>
                        </div>
                      </div>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label style="display: block;" for="exampleInputEmail1">* Type</label>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Auction</span>
                        </div>
                      </div>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Buy Now</span>
                        </div>
                      </div>
                </div>
                <hr>
                <div class="form-group" style="z-index: 5">
                    <label style="display: block;" for="exampleInputEmail1">Price</label>
                    <paper-slider min="0" max="9999" value="0" pin secondaryProgress editable></paper-slider>
                </div>
                
                
                    <div class="form-group" style="padding-bottom: 20px;">
                    <label style="display: block;" for="exampleInputEmail1">Shipping Method</label>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Free Shipping</span>
                        </div>
                      </div>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Expedited Shipping</span>
                        </div>
                      </div>
                </div>
             
                
                <hr>
                
            </form>
    </core-header-panel>
    
        <div tool>
            <core-layout id="control-buttons" horizontal core-flex>
                                    <core-toolbar>

                <div>
                    <input type="text" id="search" name="search" class="form-control" placeholder="Enter a keyword, OEM # or a part #" style="">
                </div>
                <div class=" hidden-xs hidden-sm">
                    <button type="submit" class="btn btn-warning" style=""><span class="glyphicon glyphicon-search"></span> Search</button>
                </div>
                <div style="padding-top:4px;" class='hidden-lg hidden-md' >
                    <core-icon-button style='' icon="search" onclick=""></core-icon-button>
                </div>
                <div class="hidden-xs hidden-sm">
                      <select class="form-control" style="display: block;">
                          <option value="cheese">Sort: Best Match</option>
                          <option value="tomatoes">Sort: Price+Shipping lowest first</option>
                      </select>
                        </div>
<!--                <div class="hidden-xs hidden-sm">
                      <select class="form-control" style="display: block;">
                          <option value="cheese">Group by: Make</option>
                          <option value="tomatoes">Category</option>
                          <option value="tomatoes">None</option>
                      </select>-->
                  
                <div class="hidden-lg hidden-md" style="padding-top:4px; right:0;  text-align: right;">
<!--                    <core-icon-button icon="more-vert" onclick=""></core-icon-button>-->
    		<core-menu-button icon="more-vert" halign="right">

          <paper-item>Sort by blah</paper-item>

		</core-menu-button>                    


                </div>
                            </core-toolbar>
            </core-layout>
        </div>
    
        <core-layout horizontal>
                <div style="padding: 5px;" core-flex>
                <section>
                    <search-items-by-model></search-items-by-model>
                    <search-items-by-model></search-items-by-model>
                </section>

            </div>

            <div class="hidden-sm hidden-xs">
                <related-items></related-items>
            </div>
  
        </core-layout>
        
  </core-scaffold>

    </template>
    
<script>
//    function toggleDialog() {
//        
//      var dialog1 = document.getElementById('automakeDialog');
//      dialog1.toggle();
//      alert ("");
//    }
//    function toggleDialog2() {
//      var dialog2 = document.getElementById('automodelDialog');
//      dialog2.toggle();
//    }

    Polymer('search-module', {
//        created: function () {
//            //alert ("Instance created");
//        }
    toggleDialog: function() {
        
      var dialog1 = document.querySelector('automakeDialog');
      dialog1.toggle();
      alert("");
    }
    });

</script>
</polymer-element>
