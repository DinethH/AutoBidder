<link rel="import" href="../components/core-layout/core-layout.html">
<polymer-element name="cart-item">

    <template>
        <style>
            :host {
                //padding:10px;
                
            }

        </style>
        

        <core-layout style=" border-bottom: 1px solid #e5e5e5; padding-bottom: 10px;">
           <div style="width: 20%; ">
               <table style="width: 100%; font-size: 16px;">
                   <tr>
                       <td style="width: 50%; padding-left: 15px;">
                           <p>
                               <img src="../img/wheels.jpg" style="width: 100%">
                           </p>
                       </td>
                   </tr>
               </table>
               
           </div>
           <div style="width:80%; padding-left: 10px;">
               <table style="width: 100%; font-size: 16px;">
                   <tr>
                       <td style="width: 50%; padding-left: 15px;">
                           <p>Item name</p>
                           <p>$xx.xx</p>
                       </td>
                   </tr>
               </table>
           </div>
            
        </core-layout>  
  
    </template>
    
<script>

    Polymer('cart-item', {
        
    });

</script>
</polymer-element>
