
<link rel="import" 
      href="../custom-elements/search-items.php">


<polymer-element name="search-items-by-model" constructor="sibmModel">
    <template>
        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
<style shim-shadowdom>
    .headerImage {
        height:200px;
    }
    .headerImage h2 {
        color: white;
        bottom:0;
        padding:20px;
        text-shadow: 5px 5px 5px #333;
    }
    .headerImage paper-fab {
        position: absolute;
        margin-left: 20px;
    }
    .headerImage p {
        color: white;
        padding: 20px;
    }
</style>
<section class="container-fluid" style="background: white; margin: 10px;">
    <paper-shadow></paper-shadow>
    <div class="row headerImage" style="background: url('../img/2012-Tesla-Model-S-Signature-Red_000101-537x357.jpg'); background-size: cover;">
        <div><h2 >Model</h2></div>
        <div><p>Vehicle (part) specs -> so the customer can verify the product needed</p></div>
<!--        <paper-fab class='mini' icon="expand-more"></paper-fab>-->
    </div>
    <div class="row" style="padding: 20px;">
        <search-items></search-items>
        <search-items></search-items>
        <search-items></search-items>
        <search-items></search-items>
        <search-items></search-items>
        <search-items></search-items>
    </div>
</section>
</template>
    
<script>

    Polymer('search-items-by-model', {
        created: function () {
//           alert ("Instance created: SIBM");
        }
    });

</script>
</polymer-element>
