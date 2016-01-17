<link rel="import" href="../components/paper-shadow/paper-shadow.html">
<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../custom-elements/cart-item.php">

<polymer-element name="cart-pop-up" attributes = "display" constructor="cartConstructor">
    
<template>
        <style>
            :host {
                
            }
          #cart-pop-up {
              position: fixed;
              background-color: white;
              width:400px;
              //height: calc(100% - 65px);
              max-height: 300px;
              right: 0;
              top: 64px;
              overflow: scroll;
              display: {{display}};
              padding: 10px;
          }
/*          @media(max-width:767px) {
              #cart-pop-up {
                  width:90hw;
              }
          }
          @media(min-width:1200px) {
              #cart-pop-up {
                  width:500px;
              }
          }*/
        </style>
        <aside id="cart-pop-up">
            <paper-shadow z="2" animated></paper-shadow>
            <div style="overflow-y:scroll; height: 100%; padding-right:10px; padding-bottom: 30px;">
                <cart-item></cart-item>
                <cart-item></cart-item>
                <br>
                <paper-button on-click="{{showCartPage}}" icon="shopping-cart" label="View Cart (x items)" style="width: 100%; background: orange; color: white; fill: white"></paper-button>
            </div>
        </aside>    
</template>
    
<script>

    Polymer('cart-pop-up', {
        showCartPage: function () {
            showPage('../app/cart.php', '../cart/');
        },
        makeHttpObject: function  () {
          try {return new XMLHttpRequest();}
          catch (error) {}
          try {return new ActiveXObject("Msxml2.XMLHTTP");}
          catch (error) {}
          try {return new ActiveXObject("Microsoft.XMLHTTP");}
          catch (error) {}
          throw new Error("Could not create HTTP request object.");
        },
        showPage: function (urlPath, url) {
            pathArray = window.location.href.split( '/' );
            protocol = pathArray[0];
            host = pathArray[2];
            path = pathArray[5];
            if(typeof pathArray[5] == 'undefined') {
                alert(pathArray[5].length);
            }
            else {
                var request = makeHttpObject();
                var sectionData = document.getElementById('pageContent');
                request.open("GET", urlPath, true);
                request.send(null);
                request.onreadystatechange = function() {
                  if (request.readyState == 4) {
                    sectionData.innerHTML = request.responseText;
                    window.history.pushState({"html":request.responseText,"pageTitle":"response.pageTitle"},"", url);
                  };       
                }; 
            }
        }       
    });

</script>
</polymer-element>
