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
        //margin-left: 94px;
        width: 0px;
    }
    core-scaffold /deep/ core-toolbar {
        background-color: #efeddf;
    }
    core-scaffold::shadow::shadow::shadow #mainPanel {
/*        background-color: #efeddf;*/
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
        }
</style>
 <paper-dialog id="automakeDialog" heading="Make" transition="paper-dialog-transition-bottom" style="">

     <div>
    <core-layout>
      <core-selector class="list" selected="{{multiSelected}}" multi>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1636.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1637.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1638.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1639.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1640.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1641.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1642.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1643.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1644.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1645.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1646.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1647.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1648.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1649.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1650.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1651.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1652.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1653.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1654.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1655.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1656.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1657.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1658.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1660.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1661.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1662.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1663.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1664.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1665.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1666.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1667.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1668.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1669.png"></div>       
      </core-selector>
    </core-layout>
     </div>
<!--    <paper-button label="Close" affirmative></paper-button>-->
<!--    <paper-button label="Submit" affirmative default></paper-button>-->
    <paper-fab class="mini" icon="close" affirmative style="margin-right:20px;"></paper-fab>
    <paper-fab class="greenFab mini" icon="check" affirmative default></paper-fab>
  </paper-dialog>
 <paper-dialog id="automodelDialog" heading="Choose a model" transition="paper-dialog-transition-bottom" style="">

     <div>
    <core-layout>
      <core-selector class="list" selected="{{multiSelected}}" multi>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1636.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1637.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1638.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1639.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1640.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1641.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1642.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1643.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1644.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1645.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1646.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1647.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1648.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1649.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1650.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1651.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1652.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1653.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1654.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1655.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1656.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1657.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1658.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1660.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1661.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1662.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1663.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1664.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1665.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1666.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1667.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1668.png"></div>
          <div><img class="autoImage" src="../img/auto-logos/car_logo_PNG1669.png"></div>       
      </core-selector>
    </core-layout>
     </div>
<!--    <paper-button label="Close" affirmative></paper-button>-->
<!--    <paper-button label="Submit" affirmative default></paper-button>-->
    <paper-fab class="mini" icon="close" affirmative style="margin-right:20px;"></paper-fab>
    <paper-fab class="greenFab mini" icon="check" affirmative default></paper-fab>
  </paper-dialog>


  <core-scaffold mode="waterfall" >
  
    <core-header-panel navigation flex mode="seamed" style="background-color: white;" >
        <paper-shadow ></paper-shadow>
<!--      <core-toolbar style="background-color: #526E9C; color: #fff;">Application</core-toolbar>-->

        
<core-drawer-panel id="core_drawer_panel">
        <section id="section1" drawer >
            <form>
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
                                <paper-icon-button icon="view-module" onclick="toggleDialog();"></paper-icon-button>
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
                                <paper-icon-button icon="view-module" onclick="toggleDialog2();"></paper-icon-button>
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
                                <paper-icon-button icon="view-module" onclick="toggleDialog2();"></paper-icon-button>
                            </div>
                        </core-layout>
                    </div>
                </core-layout>  
                <hr>
                <div class="form-group" style="z-index: 5">
                    <label style="display: block;" for="exampleInputEmail1">Price</label>
                    <paper-slider min="0" max="9999" value="0" pin secondaryProgress editable></paper-slider>
                </div>
                
                
                    <label style="display: block;" for="exampleInputEmail1">Delivery Options</label>
                      <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Free Shipping</span>
                        </div>
                      </div>
                    <div horizontal layout style="margin-top:30px;">
                        <paper-checkbox></paper-checkbox>
                        <div vertical layout style="padding-left: 20px;">
                            <span>Expedited</span>
                        </div>
                      </div>
             
                
                <hr>
                <div class="form-group" style="">
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
            </form>
            
        </section>

    </core-drawer-panel>        
        
        
        
    </core-header-panel>
    
     
      <div id="div" tool style="">
          <div id="control-buttons">
              <core-layout horizontal isContainer  justify="end">
                  <div>
                      <input type="text" id="search" name="search" class="form-control" placeholder="Enter a keyword, OEM # or a part #" style="width:300px;">
                  </div>
                  <div>
                      <button type="submit" class="btn btn-warning" style="width: 100%"><span class="glyphicon glyphicon-search"></span> Search</button>
                  </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">All</button>
                          <button type="button" class="btn btn-default">Auction</button>
                          <button type="button" class="btn btn-default">Buy it now</button>
                      </div>
                        <div>
                      <select class="form-control" style="display: block;">
                          <option value="cheese">Sort: Best Match</option>
                          <option value="tomatoes">Sort: Price+Shipping lowest first</option>
                      </select>
                        </div>
                  <div>
                      <select class="form-control" style="display: block;">
                          <option value="cheese">Group by: Make</option>
                          <option value="tomatoes">Category</option>
                          <option value="tomatoes">None</option>
                      </select>
                        </div>
             </core-layout>     
                  </div>
      </div>
      <div style="padding:20px;">
          <style>
              .headerImage {
                  height:200px;
              }
              .headerImageOverlay {
                  background: rgba(0,0,0,.6);
                  height: 200px;
                  width: 100%;
                  position: absolute;
                  margin-top: -200px;
              }
              .headerImage h2 {
                  color: white;
                  bottom:0;
                  padding:20px;
                  text-shadow: 5px 5px 5px #333;
              }
              .headerImage paper-fab {
                  position: absolute;
                  
                  margin: 20px;
              }
              .headerImage p {
                  color: white;
                  padding: 20px;
              }
              .resultItem {
                  height: 100%;
                  padding: 20px;
              }
              .resultItem span {
                  display: block;
                  line-height: 40px;
              }
              .imageInfo {
                  //background-color: rgba(0,0,0,.6);
                  height: 30px;
                  position: absolute;
                  margin-top: -30px;
              }
              .imageInfo p {
                  color: white;
                  padding: 3px;
                  //background: white;
              }
          </style>
          <core-layout horizontal>
              <section style=" width: 100%">
              <div>
                  <paper-shadow></paper-shadow>
                    <div class="headerImage" style="background: url('../img/2012-Tesla-Model-S-Signature-Red_000101-537x357.jpg'); background-size: cover;">
                        <div style="">
<!--                            <div class="headerImageOverlay"></div>-->
                            <h2>Model</h2>
                          <p>Vehicle (part) specs -> so the customer can verify the product needed</p>
                          <paper-fab class='mini' icon="expand-more"></paper-fab>
                        </div>
                        
                  </div> 
                  
                  <div style="background: white; padding:20px; padding-top: 30px;">
                      <div class='resultItem'>
                          <paper-ripple fit></paper-ripple>
                          <paper-shadow z=""></paper-shadow>
                        <core-layout style='height: 130px;'>
                              <div style="width:180px; height:130px;">
                                  <img src="../img/engine.jpg" style="width: 180px; max-height: 130px;">
                                  <div class="imageInfo">
                                      <p><core-icon icon="visibility" style="fill: white;"></core-icon></p>
                                  </div>
                              </div>
                            <div style="width:100%;">
                                  <core-layout horizontal align='start' style='padding-left:20px;'>
                                      <div style="//width: 300px;">
                                          <span style="font-size: 26px;">Item name</span>
                                          <span>Make, model, year...</span>
                                      </div>
                                      <div style="//width: 300px;">
                                          <span>X Bids</span>
                                          <span>x Days y Hours z Minutes</span>
                                      </div>
                                      <div style="text-align: right; //width: 200px;">
                                          <span><strong>$1,000</strong></span>
                                          <span style="top:-100px;">
                                              <core-icon-button src='../img/auction.png'></core-icon-button>
                                              <core-icon-button src='../img/cash-dark.png'></core-icon-button>
                                              <core-icon-button src='../img/free_shipping.png'></core-icon-button>
                                          </span>
                                      </div>
                                  </core-layout>
                              </div>
                            </core-layout>
                      </div>
                      <hr>

                  </div>
                  
              </div>    
              
              
           
          </section>
              <style>
                  .relatedItem {
                      padding: 5px;
                      border-bottom: 1px #CCC solid;
                  }
              </style>
              <aside style="margin-top: 20px; margin-left: 20px; padding: 20px; background:white; max-width: 250px;" class="hidden-xs">
                  <paper-shadow></paper-shadow>
                  <h2 style="margin: 0; padding: 0">Related Items</h2>
                  <hr>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/tire.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/headlights.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/hood.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
              </aside>
          </core-layout>
         

      </div>
  
  </core-scaffold>


  <script>
    function toggleDialog() {
      var dialog1 = document.getElementById('automakeDialog');
      dialog1.toggle();
    }
    function toggleDialog2() {
      var dialog2 = document.getElementById('automodelDialog');
      dialog2.toggle();
    }

  </script>
<!--
<script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect({
      enableCaseInsensitiveFiltering: true
    });
  });
</script>-->
