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
            //#bidBtn::shadow #ripple {
/*                color: #2a56c6;
            }*/

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
                                <div style="width:100%">
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
            <core-layout justify="center">
                <div class="container"  style="padding: 20px;">
                    <div class="col-lg-12" style="background: white;">
                        <paper-shadow></paper-shadow>

                        <paper-tabs selected="{{ $.core_animated_pages.selected }}" selectedindex="0" id="paper_tabs">
    <paper-tabs selected="{{ $.core_pages.selected }}" selectedindex="1" id="paper_tabs">
      <paper-tab id="paper_tab">ITEM ONE</paper-tab>
      <paper-tab id="paper_tab1" active>ITEM TWO</paper-tab>
      <paper-tab id="paper_tab2">ITEM THREE</paper-tab>
      <paper-tab id="paper_tab3">ITEM FOUR</paper-tab>
      <paper-tab id="paper_tab4">ITEM FIVE</paper-tab>
    </paper-tabs>
    <core-pages selected="1" selectedindex="{{ $.paper_tabs.selected }}" notap id="core_pages">
      <section id="section3">Page One</section>
      <section id="section4" active>Page Two</section>
    </core-pages>
                    </div>
                </div>
            </core-layout>
            
        </div>
    </template>
    
<script>

    Polymer('search-item', {
        
    });

</script>
</polymer-element>
