<link rel="import" href="../components/core-selector/core-selector.html">
<link rel="import" href="../components/paper-dialog/paper-dialog.html">
<link rel="import" href="../components/paper-dialog/paper-dialog-transition.html">
<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../components/paper-fab/paper-fab.html">
<polymer-element name="car-make-dialog" >
   
    <template>
        <style>
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
    </template>
    
<script>

    Polymer('car-make-dialog', {
        created: function () {
//            alert ("Instance created");
        }
    });

</script>
</polymer-element>
