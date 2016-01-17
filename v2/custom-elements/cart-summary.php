<polymer-element name="cart-summary">

    <template>
        <style>
                .orderEstimate {
        background: #efefef;
        border-radius: 3px;
        padding: 10px;
    }
     h3 {
        margin: 0;
        padding: 0;
    }
    td {
        width:50%;
        height: 30px;
    }
    .tdvalue {
        text-align: right;
    }
        </style>
        <div class="orderEstimate">
           <h3>Order Summary</h3>
                    <hr>
                    <table style="width: 100%; font-size: 16px;">
                        <tr>
                            <td class="tdlabel">Items (x): </td>
                            <td class="tdvalue">$xx.xx</td>
                        </tr>
                        <tr>
                            <td class="tdlabel">Shipping &amp; handling: </td>
                            <td class="tdvalue">$xx.xx</td>
                        </tr>
                        <tr>
                            <td class="tdlabel">Estimated tax:</td>
                            <td class="tdvalue">$xx.xx</td>
                        </tr>
                    </table>
                    <hr>
                    <table style="width: 100%; font-size: 16px; font-weight: bold;">
                        <tr>
                            <td class="tdlabel">Estimated total: </td>
                            <td class="tdvalue">$xx.xx</td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" style="padding-top: 10px;">
<!--                                <button class="btn btn-warning" style="width: 100%">Proceed to checkout</button>-->
<paper-button  icon="check-circle-outline" label="Proceed to checkout" style="width: 100%; background: orange; color: white; fill: white"></paper-button>
                            </td>
                        </tr>
                    </table>  
        </div>
                  
    </template>
 <script>

    Polymer('cart-summary', {
 
    });
</script>   
</polymer-element>


