<link rel="import" href="../components/core-layout/core-layout.html">
<polymer-element name="cart-main-item">

    <template>
        <style>
            :host {
                padding: 20px;
            }
        </style>
        <core-layout style=" border-bottom: 1px solid #e5e5e5; padding-bottom: 10px;">
           <div style="width: 20%; ">
               <img src="../img/wheels.jpg" style="width: 100%">
           </div>
           <div style="width:80%; padding-left: 10px;">
               <table style="width: 100%; font-size: 16px;">
                   <tr>
                       <td style="width: 50%; padding-left: 15px;">Item name</td>
                       <td>$xx.xx</td>
                       <td>Quantity: 1</td>
                   </tr>
                   <tr>
                       <td><paper-button icon="delete" label="Delete" style="text-transform: capitalize"></paper-button></td>
                   </tr>
               </table>
           </div>
            
        </core-layout>       
    </template>
 <script>

    Polymer('cart-main-item', {
        
    });
</script>   
</polymer-element>


