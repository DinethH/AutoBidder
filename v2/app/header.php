<!doctype html>
<html>
<head>
  <title>AutoBidder</title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  
  <?php
  $query = $_SERVER['PHP_SELF'];
    $path = pathinfo( $query );
    $currentPage = $path['basename'];
    if ($query == '/AutoBidder/v2/index.php') {
        require_once './app/init.php';
    } else {
        require_once '../app/init2.php';
    }
  ?>
  <style>
      body {
  font-family: sans-serif;
  background-color: #efeddf;
}
core-header-panel {
  background: white;
  /* height: 100% fails here on some browsers */
  height: 100vh;
  width: 100vw;
  background-color: #efeddf;
}
core-toolbar {
  background-color: #990000;
  color: white;
  fill: white;
}

/* drawer is always visible on a wide screen
   so menu button isn't required */
/*core-drawer-panel:not([narrow]) #navicon {
  display: none;
}*/
#side-nav-bar {
    background-color: white;
    diaply: none;
}
/* Style #my-button blue with white text and darker blue ink. */
.homeBtn {
    background: orange;
    color: #fff;
    text-transform: capitalize;
}

.homeBtn:hover {
    background: #ffa242;
}

.homeBtn::shadow #ripple {
    color: white;
}
    #cartIconM {
        display: block;
    }
    #cartIcon {
        display:none;
    }
@media all and (min-width:1200px) {
    #cartIcon {
        display: block;
    }
    #cartIconM {
        display:none;
    }

}
/*@media (min-width:1200px) {

}*/
  </style>
</head>

<body fullbleed unresolved>
<core-drawer-panel id="drawerPanel" responsiveWidth="12000px">

<core-header-panel drawer id='side-nav-bar'>
    <paper-shadow z='1'></paper-shadow>
    <core-menu selected="0" selectedindex="0" id="core_menu">
        <core-submenu active label="Home" icon="home" id="core_submenu"></core-submenu>
        <paper-ripple class="recenteringTouch" ></paper-ripple>
      <core-submenu label="Search" icon="search" id="core_submenu1"></core-submenu>
      <core-submenu label="Cart" icon="shopping-cart" id="core_submenu2"></core-submenu>
      <core-submenu label="My Account" icon="account-circle" id="core_submenu3">
          <core-submenu label="Messages" icon="inbox" id="core_submenu5"></core-submenu>
          <core-submenu label="Order History" icon="history" id="core_submenu4"></core-submenu>
          
          <core-submenu label="Settings" icon="settings" id="core_submenu6"></core-submenu>
      </core-submenu>
      <core-submenu label="FAQ" icon="info-outline" id="core_submenu8"></core-submenu>
      <core-submenu label="About Us" icon="shopping-cart" id="core_submenu9"></core-submenu>
      <core-submenu label="Contact Us" icon="shopping-cart" id="core_submenu10"></core-submenu>
    </core-menu>
</core-header-panel>
 <core-media-query query="max-width: 767px" queryMatches="{{qMatches}}"></core-media-query>
  <core-header-panel id="mainMenu" mode='waterfall' main>
    <core-toolbar id="mainheader" class="{{qMatches ? "" : "tall"}}">
        
      <paper-icon-button id="navicon" icon="menu"></paper-icon-button>
      <span flex>NAP</span>
      <paper-icon-button iconsrc="../img/user.png"></paper-icon-button>
      <paper-icon-button id='cartIcon' icon="shopping-cart"></paper-icon-button>
      <paper-icon-button id='cartIconM' icon="shopping-cart"></paper-icon-button>
      <paper-icon-button id='notificationIcon' iconsrc="../img/bell.png"></paper-icon-button>
<!--      <div class="middle indent">latest info </div>
    <div class="bottom indent" style="color: lightgrey; font-size: 18px;">stuff</div>-->
    </core-toolbar>
      
<section id="pageContent">
    
