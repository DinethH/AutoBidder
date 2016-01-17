<link rel="import" href="../components/core-icon-button/core-icon-button.html">
<link rel="import" href="../components/core-toolbar/core-toolbar.html">
<link rel="import" href="../components/core-icons/core-icons.html">
<link rel="import" href="../components/core-icon/core-icon.html">
<link rel="import" href="../components/paper-shadow/paper-shadow.html">

<polymer-element name="top-nav-bar" attributes="notiClicked">

  <template>
    <style>    
      :host {
        position: fixed;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        
      }
      #core_toolbar {
        right: 0px;
        left: -10px;
        color: rgb(255, 255, 255);
        fill: rgb(255, 255, 255);
        top: 0px;
        position: absolute;
        background-color: #990000;
      }
    </style>
    
      <core-toolbar class="" id="core_toolbar" class="slide-from-right" >
    <core-icon-button icon="menu" id="core_icon_button"></core-icon-button>
    <div id="div" flex>NAP</div>
    <img src="../img/user.png" style="height: 30px;">
        <core-icon-button on-tap="{{showCart}}" icon="shopping-cart"></core-icon-button>
        <core-icon-button on-tap="{{showNotifications}}" src="../img/bell.png"></core-icon-button>
<!--    <div class="middle indent">label aligns to the middle</div>
    <div class="bottom indent" style="color: #666; font-size: 18px;">some stuffs align to the bottom</div>-->
  </core-toolbar>
    
    

        
    
  </template>

  <script>

    Polymer('top-nav-bar', {
        showNotifications: function () {
            if (document.querySelector('notification-panel').style.display=="block") {
                document.querySelector('notification-panel').style.display="none";
            } else {
                var notiPanel = new notiConstructor();
                document.querySelector('notification-panel').style.display="block";
                
                document.querySelector('cart-pop-up').style.display="none";
            }
        },
        showCart: function () {
            if (document.querySelector('cart-pop-up').style.display=="block") {
                document.querySelector('cart-pop-up').style.display="none";
            } else {
                var carPanel = new cartConstructor();
                document.querySelector('cart-pop-up').style.display="block";
                document.querySelector('notification-panel').style.display="none";                  
            }
        }
    });
    

  </script>

</polymer-element>