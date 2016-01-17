<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../components/core-pages/core-pages.html">
<link rel="import" href="../custom-elements/item-images.php">
<link rel="import" href="../components/paper-input/paper-input.html">
<link rel="import" href="../components/paper-button/paper-button.html">
<polymer-element name="search-item">

    <template>
        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
        <style>
            .itemBox {
               background: white;
               padding: 10px;
            }
            .infoLabel {
                width: 120px;
                text-align: right;
                padding: 10px;
                
                padding-top:0;
            }
            td {
                vertical-align: text-top;
            }
            #bidBtn, #binBtn, #acartBtn {
                background: orange;
                color: #fff;
            }
            #bidBtn:hover, #binBtn:hover, #acartBtn:hover {
                background: lightorange;
            }
            .oinfo {
                width: 200px;
                font-weight: bold;
                height: 40px;
            }
            #section3 table td, #section4 table td {
                padding: 5px;
            }
            .socialIcons td {
                padding: 5px;
            }
            .socialIcons {
                position: absolute;
                right: 10px;
                top: 75px;
            }
        </style>
        
        <div class="row" style="padding-top: 20px;">
            <core-layout justify="center">
                <div class="itemBox ">
                    <paper-shadow></paper-shadow>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6" style="">
                                <item-images></item-images>
                            </div>
                            <div class="col-lg-6">
                                <h2>Item name</h2>
                                <hr>
                                <div class="socialIcons">
                                    <table>
                                        <tr>
                                            <td><img src="../img/icons/no border/facebook500.png" width="24"></td>
                                            <td><img src="../img/icons/no border/googleplus.png" width="24"></td>
                                            <td><img src="../img/icons/no border/twitter.png" width="24"></td>
                                            <td><img src="../img/icons/no border/pinterest.png" width="24"></td>
                                        </tr>
                                    </table>
                                </div>
                                <table>
                                    <tr>
                                        <td class="infoLabel">Make: </td>
                                        <td>Vehicle Make</td>
                                    </tr>
                                    <tr>
                                        <td class="infoLabel">Model: </td>
                                        <td>Vehicle Model</td>
                                    </tr>
                                    <tr>
                                        <td class="infoLabel">Year: </td>
                                        <td>Compatible years</td>
                                    </tr>
                                    <tr>
                                        <td class="infoLabel">Category: </td>
                                        <td>Part category</td>
                                    </tr>
                                    <tr>
                                        <td class="infoLabel">Condition: </td>
                                        <td>Used/new</td>
                                    </tr>
                                </table>
                                <div style="width:100%; background: #e5e5e5; padding-right: 10px;">
<!--                                    <paper-shadow></paper-shadow>-->
                                    <table>
                                        <tr>
                                            <td class="infoLabel">Current Bid: </td>
                                            <td style="padding-top:10px">
                                                <table >
                                                    <tr>
                                                        <td><strong>US $5.50</strong></td>
                                                        <td>[ 0 bids ]</td>
                                                    </tr>
                                                    <tr >
                                                        <td style="width: 250px; padding-right: 30px; vertical-align: middle; padding-top:10px;">
                                                            <input type="text" class="form-control">
                                                        </td>
                                                        <td style="padding-top:10px;//width:300px;">
                                                            <button class="btn btn-warning">Place bid</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-top:5px; font-size: 12px; color: red">
                                                            Time left
                                                        </td>
                                                    </tr>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                            <hr>
                                                        </td>
                                                    </tr>
                                        <tr>
                                            <td class="infoLabel">Price: </td>
                                            <td style="padding-top:0px; padding-bottom: 10px;">
                                                <table >
                                                    <tr>
                                                        <td  style="width: 250px; "><strong>US $19.99</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary">Buy now</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="padding-top: 10px;">
                                    <table>
                                        <tr>
                                            <td class="infoLabel">Shipping: </td>
                                            <td>Standard shipping</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </core-layout>
        </div>
        
        <div class="row">
            <core-layout >
                <div class="container"  style="padding: 20px;">
                    <div class="col-lg-12" style="background: white; width: 100%">
                        <paper-shadow></paper-shadow>
    <paper-tabs selected="0" selectedindex="0" id="paper_tabs" style="background-color: #990000; color: white; margin-left:-15px;  margin-right:-15px;">
      <paper-tab on-click="{{showTab1}}" id="paper_tab" active>OVERVIEW</paper-tab>
      <paper-tab on-click="{{showTab2}}" id="paper_tab1" >SPECS</paper-tab>
      <paper-tab on-click="{{showTab3}}" id="paper_tab1" >Q/A</paper-tab>
<!--      <paper-tab on-click="{{showTab3}}" id="paper_tab2">REVIEWS</paper-tab>-->
    </paper-tabs>
                        <div style=" padding-top: 20px; padding-bottom: 20px; //min-height: 500px;">
                            <siv class="fancy" selected="0" selectedindex="{{ $.paper_tabs.selected }}" id="core_pages">
                                <section id="section3" active >
                                    <table class="table-striped" style="width: 100%">
                                        <tr>
                                            
                                            <td colspan="2">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Part number:</td>
                                            <td>#abcd123</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Manufacturer:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Year of manufacture:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Warranty:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Supporting parts required:</td>
                                            <td>N/A</td>
                                        </tr>
                                    </table>
                                </section>
                                <section id="section4" style="display: none; width: 100%">
                                    <table class="table-striped" style="width: 100%">
                                        <tr style="width: 100%">
                                            <td class="oinfo" style="width:15%">Color:</td>
                                            <td style="width:85%">
                                               N/A
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Weight:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Fuel type:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">Engine type:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">...:</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td class="oinfo">...:</td>
                                            <td>N/A</td>
                                        </tr>
                                    </table>
                                </section>
                                <section id="section5" style="display: none" >
                                    <p>No questions or answers have been posted about this item.</p>
                                    
                                    <paper-button on-click="{{showInput}}"  label="Ask a question" style="background: orange; color: white" ></paper-button>
                                    
                                    <div id="questionIn" style="display: none; padding-top: 20px;">
                                        <paper-input maxRows="10" multiline floatingLabel label="Enter your question"></paper-input>
                                        
                                        <div style="margin-top: 20px;"><paper-button label="Submit" style="background: orange; color: white"></paper-button></div>
                                    </div>
                                </section>
                        </div>
                        </div>
                    </div>
                </core-layout>
                </div>
        
        <div class="row">
            <core-layout >
                <div class="container"  style="padding: 20px;">
                    <div class="col-lg-12" style="background: white; width: 100%">
                        <paper-shadow></paper-shadow>
                        <h4>Recommended items {part category && make && model => related}</h4>
                    </div>
                </div>
            </core-layout>
        </div>
            
            
        </div>
    </template>
    
<script>

    Polymer('search-item', {
        showTab1: function () {
            (this.$.section3).style.display='block';
            (this.$.section4).style.display='none';
            (this.$.section5).style.display='none';
        },
        showTab2: function () {
            (this.$.section3).style.display='none';
            (this.$.section4).style.display='block';
            (this.$.section5).style.display='none';
        },
        showTab3: function () {
            (this.$.section3).style.display='none';
            (this.$.section4).style.display='none';
            (this.$.section5).style.display='block';
        },
        showInput: function () {
            if ((this.$.questionIn).style.display=='none') {
                (this.$.questionIn).style.display='block';
            } else {
                (this.$.questionIn).style.display='none'
            }
        }
    });

</script>
</polymer-element>
