<link rel="import" href="../components/paper-shadow/paper-shadow.html">
<link rel="import" href="../components/core-animation-master/core-animation-group.html">
<link rel="import" href="../components/core-animation-master/core-animation.html">
<link rel="import" 
      href="../components/core-overlay/core-overlay.html">
<link rel="import" href="notification.php">

<polymer-element name="notification-panel" attributes = "opened autoCloseDisabled" constructor="notiConstructor">
   <script src="../web-animations-js-master/web-animations.js"></script> 
    <template>
        <style>
          #notification_panel {
              position: fixed;
              background-color: gainsboro;
              width: 400px;
              height: calc(100% - 65px);
              right: 0;
              top: 64px;
              overflow: scroll;
              display: {{display}};
              animation-duration: 1s;
            animation-name: slidein;
              
          }        
        </style>

        
        <aside id="notification_panel">
            
            <paper-shadow z="2" animated>
                
                <notification-item>
                    
                </notification-item>
            </paper-shadow>
        </aside>    
    </template>
    
<script>

    Polymer('notification-panel', {
        created: function () {
//            alert ("Instance created");
        }
    });

</script>
</polymer-element>
