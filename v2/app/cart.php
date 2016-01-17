<!--<link rel="import" href="../components/core-layout/core-layout.html">-->
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
<link rel="import" href="../custom-elements/cart-main-item.php">
<link rel="import" href="../custom-elements/cart-summary.php">
<style>
    .cartbox {
        margin-top: 20px;
    }

    .recommended {
        margin-top: 20px;
    }
</style>

<section>
    <div class="cartbox">
        <div class="row">
            <div class="container" style="background: white; padding: 20px;">
                <paper-shadow></paper-shadow>
                <div class="col-lg-8 cartItems">
                    <div class="cartItem">
                        <cart-main-item></cart-main-item>
                        <cart-main-item></cart-main-item>
                        <cart-main-item></cart-main-item>                        
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <cart-summary></cart-summary>
                </div>
            </div>
        </div>
    </div>
    <div class="recommended">
        <div class="row">
            <div class="container" style="background: white; padding: 20px;">
                <paper-shadow></paper-shadow>
                <div class="col-lg-12 cartItems">
                    <h4>Customers who bought items in your cart also bought</h4>
                </div>
            </div>
        </div>
        
    </div>
</section>