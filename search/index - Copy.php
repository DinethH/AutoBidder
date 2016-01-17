<?php
    require_once '../template/header.php';
?>
<div class="row" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <form class="form-inline" action="../search/" method="post" _lpchecked="1">
                        <div class="col-lg-9">
                            <input type="text" id="search" name="search" class="form-control" placeholder="Enter a keyword, OEM # or a part #" style="width: 100%">
                        </div>

                        <div class="col-lg-3"><button type="submit" class="btn btn-warning" style="width: 100%"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                    </form>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
        
        
        
        <aside id="leftSideBar" class="col-lg-2" style="background: transparent" >
            <form role="form">
                <div class="form-group" style="">
                    <label style="display: block;" for="exampleInputEmail1">Car Make</label>
                  <select class=" form-control multiselect" multiple="multiple" style="display: block;">
                    <option value="cheese">Acura</option>
                    <option value="tomatoes">Audi</option>
                    <option value="mozarella">BMW</option>
                    <option value="mushrooms">Cadillac</option>
                    <option value="pepperoni">Chevrolet</option>
                    <option value="onions">Ford</option>
                  </select>
                </div>
                <div class="form-group" style="">
                    <label style="display: block;" for="exampleInputEmail1">Car Model</label>
                  <select class=" form-control multiselect " multiple="multiple" style="display: block;">
                    <option value="cheese">100</option>
                    <option value="tomatoes">5000</option>
                    <option value="mozarella">A6</option>
                    <option value="mushrooms">Q7</option>
                    <option value="pepperoni">Quattro</option>
                    <option value="onions">Roadster</option>
                  </select>
                </div>
                <hr>
                <div class="form-group" style="">
                    <label style="display: block;" for="exampleInputEmail1">Category</label>
                  <select class=" form-control multiselect " multiple="multiple" style="display: block;">
                    <option value="cheese">CONDENSER</option>
                    <option value="tomatoes">FOG LIGHT</option>
                    <option value="mozarella">FAN</option>
                    <option value="mushrooms">HOOD</option>
                    <option value="pepperoni">MOLDING</option>
                    <option value="onions">BUMPER COVER</option>
                  </select>
                </div>
                <hr>
                <div class="form-group">
                    <label style="display: block;" for="exampleInputEmail1">Price</label>
                    <div class="input-group" style="width: 150px;">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon"> to $ </span>
                        <input type="text" class="form-control" placeholder="">

                    </div>
                </div>
                
                <div class="form-group" style="">
                    <label style="display: block;" for="exampleInputEmail1">Delivery Options</label>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Free Shipping
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Expedited
                        </label>
                    </div>
                </div>
                
                <hr>
                <div class="form-group" style="">
                    <label style="display: block;" for="exampleInputEmail1">Show only</label>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Completed listings
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Sold listings
                        </label>
                    </div>
                </div>
            </form>
        </aside>
        
        <div id="middleContent" class="col-lg-8" style="padding-left: 30px; padding-top: 25px;">
            <div id="topRefiningBar">
                <div class="btn-group">
                    <button type="button" class="btn btn-default">All</button>
                    <button type="button" class="btn btn-default">Auction</button>
                    <button type="button" class="btn btn-default">Buy it now</button>
                </div>
                <select class="multiselect " multiple="multiple" style="display: block;">
                    <option value="cheese">New</option>
                    <option value="tomatoes">Used</option>
                    <option value="mozarella">Damaged</option>
                  </select>
                <select class="multiselect" style="display: block;">
                    <option value="cheese">Sort: Best Match</option>
                    <option value="tomatoes">Sort: Price+Shipping lowest first</option>
                </select>
            </div>
            <div id="searchItems" style="border: 1px solid gainsboro; border-radius: 3px; margin-top: 20px; padding: 10px;">
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/tire.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 5,000</p>
                            <p>Buy It Now</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/engine.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style=""><a href="../item/">Item title</a></h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 91,000</p>
                            <p style="color: red">0 bids</p>
                            <p style="color: green">2 days left</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/headlights.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 91,000</p>
                            <p style="color: red">0 bids</p>
                            <p style="color: green">2 days left</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/hood.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 5,000</p>
                            <p>Buy It Now</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/tire.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 5,000</p>
                            <p>Buy It Now</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/engine.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 91,000</p>
                            <p style="color: red">0 bids</p>
                            <p style="color: green">2 days left</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/headlights.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 91,000</p>
                            <p style="color: red">0 bids</p>
                            <p style="color: green">2 days left</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-2">
                            <img src="../img/categories/hood.jpg" style="width: 100%">
                        </div>
                        <div class="col-lg-3">
                            <h3 style="">Item title</h3>
                            <p>make, model, year ...</p>
                        </div>
                        <div class="col-lg-2" style="padding-top: 20px; text-align: right">
                            <p>$ 5,000</p>
                            <p>Buy It Now</p>
                        </div>
                    </div>
                </div>



            </div>
            <div id="pageNavigation" style="text-align: right">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>

        <aside id="rightSideBar" class="col-lg-2" style="padding-top: 65px;">
            <h4>Recently Viewed</h4>
            <p>......</p>
            <h4>Related Items</h4>
            <p>......</p>
        </aside>
    </div>
</div>
<!-- Initialize the plugin: -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect({
      enableFiltering: true,
      buttonWidth: '150px'
    });
  });
</script> 
<div style="height: 60px;"></div>
<div style="height: 60px;"></div>
<!-- add as much div tags needed -->


<?php
    require_once '../template/footer.php';
?>
