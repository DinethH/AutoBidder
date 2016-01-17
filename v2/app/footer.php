
</section>

  </core-header-panel>
</core-drawer-panel>


    <notification-panel  style='display: none'></notification-panel>

    <cart-pop-up id="cartPOP" style='display: none'></cart-pop-up>

<script>
    
document.addEventListener('polymer-ready', function() {
    
  var navicon = document.getElementById('navicon');
  var drawerPanel = document.getElementById('drawerPanel');
  navicon.addEventListener('click', function() {
    drawerPanel.togglePanel();
  });
});


document.getElementById("notificationIcon").addEventListener("click", notificationToggle);
function notificationToggle() {
    if (document.querySelector('notification-panel').style.display=="block") {
        document.querySelector('notification-panel').style.display="none";
    } else {
        var notiPanel = new notiConstructor();
        document.querySelector('notification-panel').style.display="block";
        document.querySelector('cart-pop-up').style.display="none";
    }
}

document.getElementById("cartIcon").addEventListener("mouseover", cartToggle);
function cartToggle() {
    if (document.querySelector('cart-pop-up').style.display=="block") {
        document.querySelector('cart-pop-up').style.display="none";
    } else {
        var carPanel = new cartConstructor();
        document.querySelector('cart-pop-up').style.display="block";
        document.querySelector('notification-panel').style.display="none";                  
    }
}
document.getElementById("pageContent").addEventListener("mouseover", hideViewCart);
function hideViewCart() {
    document.querySelector('cart-pop-up').style.display="none";               
}
document.getElementById("pageContent").addEventListener("click", hidePanels);
function hidePanels() {
    document.querySelector('cart-pop-up').style.display="none";
    document.querySelector('notification-panel').style.display="none";                  
}

// Menu events
document.getElementById('core_submenu').addEventListener("click", function(){ showPage('../app/home.php', '../home/');}, false);
document.getElementById('core_submenu1').addEventListener("click", function(){ showPage('../app/search.php', '../search/');}, false);
document.getElementById('core_submenu2').addEventListener("click", function(){ showPage('../app/cart.php', '../cart/');}, false);
document.getElementById('core_submenu4').addEventListener("click", function(){ showPage('../app/profile.php', '../profile/');}, false);
document.getElementById('core_submenu5').addEventListener("click", function(){ showPage('../app/messages.php', '../messages/');}, false);
document.getElementById('core_submenu6').addEventListener("click", function(){ showPage('../app/settings.php', '../settings/');}, false);
document.getElementById('core_submenu8').addEventListener("click", function(){ showPage('../app/faq.php', '../faq/');}, false);
document.getElementById('core_submenu9').addEventListener("click", function(){ showPage('../app/about-us.php', '../about-us/');}, false);
document.getElementById('core_submenu10').addEventListener("click", function(){ showPage('../app/contact-us.php', '../contact-us/');}, false);
document.getElementById("cartIcon").addEventListener("click", function(){ showPage('../app/cart.php', '../cart/');}, false);
document.getElementById("cartIconM").addEventListener("click", function(){ showPage('../app/cart.php', '../cart/');}, false);
//document.getElementById('core_submenu1').addEventListener("click", function() {
////    document.getElementById('mainheader').setAttribute ("mode", "waterfall");
//    
//    document.getElementById('mainheader').classList.remove("tall");
//    document.getElementById('mainheader').classList.add("animate");
//});
//document.getElementById('core_submenu').addEventListener("click", function() {
////    document.getElementById('mainheader').setAttribute ("mode", "waterfall");
//    
//      document.getElementById('mainheader').classList.add("tall");
//      document.getElementById('mainheader').classList.add("animate");
//});
//document.getElementById('core_submenu2').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu10').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu4').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu5').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu6').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu8').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
//document.getElementById('core_submenu9').addEventListener("click", function() {
//      document.getElementById('mainheader').classList.add("tall");
//});
function makeHttpObject () {
  try {return new XMLHttpRequest();}
  catch (error) {}
  try {return new ActiveXObject("Msxml2.XMLHTTP");}
  catch (error) {}
  try {return new ActiveXObject("Microsoft.XMLHTTP");}
  catch (error) {}
  throw new Error("Could not create HTTP request object.");
};
function showPage (urlPath, url) {
    
    pathArray = window.location.href.split('/');
    protocol = pathArray[0];
    host = pathArray[2];
    path = pathArray[5];
    if(typeof pathArray[5] == 'undefined') {
        // does not exist
        alert(pathArray[5].length);
}
else {
    // does exist
//    alert(pathArray[4]);
//    if (pathArray[5].length == 0 ) {
        
        
        var sectionData = document.getElementById('pageContent');
        var request = makeHttpObject();
        request.open("GET", urlPath, true);
        request.send(null);
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            sectionData.innerHTML = request.responseText;
            window.history.pushState({"html":request.responseText,"pageTitle":"response.pageTitle"},"", url);
          };       
        }; 
//    } else {
//        urlPath = '.' + urlPath;
//        url = '.' + url;
//        var request = makeHttpObject();
//        var sectionData = document.getElementById('pageContent');
//        request.open("GET", urlPath, true);
//        request.send(null);
//        request.onreadystatechange = function() {
//          if (request.readyState == 4) {
//            sectionData.innerHTML = request.responseText;
//            window.history.pushState({"html":request.responseText,"pageTitle":"response.pageTitle"},"", url);
//          };       
//        }; 
//    }
}
    

};
    
</script>
</body>

</html>
