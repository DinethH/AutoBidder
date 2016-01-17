<polymer-element name="search-items" >
    <template id="searchItem" repeat="5">

        <link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>
<style shim-shadowdom>
              .resultItem {
                  height: 100%;

              }
              .resultItem span {
                  display: block;
                  line-height: 40px;
              }
              .imageInfo {
                  //background-color: rgba(0,0,0,.6);
                  height: 30px;
                  position: absolute;
                  margin-top: -30px;
              }
              .imageInfo p {
                  color: white;
                  padding: 3px;
                  //background: white;
              } 
              @media (max-width:767px){
                  .itemImage img{
                      width: 100%;
                  }
                  .itemImage {
                      width: 100px;
                      display:inline-block;
                  }
                  .itemData1 {
                      width: 200px;
                      display: inline-bloack;
                      font-size: 12px;
                  }
                  .resultItem span {
                      line-height: 20px;
                  }
                  resultItem {
                      
                  }
                  rowHeight {
                      //height: 80px;
                  }
              }
              table td {
                  vertical-align: top;
              }
              a {
                  text-decoration: none;
                  color: #333;
              }
              a:hover {
                  color: black;
              }
</style>
<div class="container-fluid" style="background: white; padding:10px;">
    <a id="itemLink"  on-click="{{showItem}}">
    <div class="container-fluid resultItem" style="margin:0; padding:0">
        
        <div class="row rowHeight">
            <paper-ripple fit ></paper-ripple>
            <paper-shadow z="0"></paper-shadow>
            <table style="width:100%">
                <tr>
                    <td style="width:25%;">
                        <div class="itemImage" style="">
                            <img src="../img/engine.jpg" style="//width: 180px; max-height: 130px;">
                            <div class="imageInfo">
                                <p><core-icon icon="visibility" style="fill: white;"></core-icon></p>
                            </div>
                        </div> 
                    </td>
                    <td style="width:25%;">
                        <span style="">Item name</span>
                                          <span>Make, model, year...</span>
                    </td>
                    <td style="width:25%;" class="hidden-xs hidden-sm">
                        <span>X Bids</span>
                        <span>x Days y Hours z Minutes</span>
                    </td>
                    <td style="width:25%; text-align: right;">
                        <span style="color: #006dcc;"><strong>$1,000</strong></span>
                        <span style="top:-100px;" class="hidden-xs hidden-sm">
                              <core-icon-button src='../img/auction.png'></core-icon-button>
                              <core-icon-button src='../img/cash-dark.png'></core-icon-button>
                              <core-icon-button src='../img/free_shipping.png'></core-icon-button>
                          </span>
                        <span class="visible-xs visible-sm">X Bids</span>
                    </td>
                </tr>
            </table>
 
        </div>
    </div>
    </a>
    <hr>
</div>
</template>
    
<script>
//    document.getElementById('searchItemClickEventID').addEventListener("click", showItem);
//    function showItem() {
//        alert ();
//    }

    Polymer('search-items', {
        domReady: function() {
//            var cars = ["Saab", "Volvo", "BMW"];
            
        },
        created: function () {
            //alert ("Instance created");
            
        },
        showItem: function () {
            showPage('../app/item.php', '../item/');
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
              // does not exist
              alert(pathArray[5].length);
          }
          else {
              // does exist

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
