<link rel="import" href="../components/paper-tabs/paper-tab.html">
<link rel="import" href="../components/paper-tabs/paper-tabs.html">
<link rel="import" href="../components/core-toolbar/core-toolbar.html">
<link rel="import" href="../components/paper-icon-button/paper-icon-button.html">
<link rel="import" href="../components/core-layout/core-layout.html">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="../assets/threesixty-slider-master/src/threesixty.js"></script>
<polymer-element name="item-images">

    <template>
<!--        <link rel="stylesheet" href="../assets/threesixty-slider-master/styles/threesixty.css">-->

        <style>
            
            @import "../assets/threesixty-slider-master/styles/threesixty.css";
            .images {
                //border-radius: 3px;
                //border: 1px solid lightgrey;
                
                padding: 10px;
            } 
            @media(min-width:1200px) {
                .images {
                    height:300px;
                }
                .imgClass {
                    height: 100%;
                }
                .imgClass {
                    height: 100%;
                }
            }
            @media(max-width:767px) {
               .images {
                    width:100%;
                } 
            }
            paper-tabs {
              background-color: lightsalmon;
              color: #000;
              box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.2);
            }
            paper-tabs[noink][nobar] paper-tab.core-selected {
              color: #ffff8d;
            }

            paper-tabs.transparent-teal {
              background-color: transparent;
              color: #00bcd4;
              box-shadow: none;
            }

            paper-tabs.transparent-teal::shadow #selectionBar {
              background-color: #ff4081;
            }
            paper-tabs.transparent-teal paper-tab::shadow #ink {
              color: #00bcd4;
            }
        </style>
        <div class="images">
            <div class="photos" id="photosID">
                <core-layout align="center" horizontal justify="center">
                    <div core-flex style="height: 100%">
                        <img class="imgClass" src="../img/engine.jpg" style="//height: 100%;">
                    </div>

                </core-layout>
                
            </div>
            <div class="imgCircle" style="display: none;" id="imgCircleID">
                <core-layout align="center" horizontal>
                    <div core-flex style="height: 100%;">
                        <section class="" id="container" style="cursor: url">
                            <div class="threesixty product1" id="imgthree">
                                <div class="spinner">
                                  <span>0%</span>
                                </div>
                            <ol class="threesixty_images"></ol>
                            </div>
                        </section>
                    </div>
                </core-layout>
                
                
            </div>
        </div>
        <div>
                                <div style="height: 70px; width: 95%; background: rgba(255,255,255,0.6); left:2.5%; bottom:48px; opacity: 0.5">
                        <core-layout align="center" justify="center">
                            <div><img class="imgClass" src="../img/engine.jpg" style="height:70px"></div>
                            <div><img class="imgClass" src="../img/engine.jpg" style="height:70px"></div>
                            <div><img class="imgClass" src="../img/engine.jpg" style="height:70px"></div>
                            <div><img class="imgClass" src="../img/engine.jpg" style="height:70px"></div>
                        </core-layout>
                    </div>
        </div>
        <div>
              <paper-tabs id="imgChanger" selected="0" style="">
                <paper-tab on-click="{{showimg2d}}" id="img2d">PHOTOS</paper-tab>
                <paper-tab on-click="{{showimg360}}" id="img360">360 VIEW</paper-tab>
              </paper-tabs>
        </div>
    </template>
    
<script>

 
    Polymer('item-images', {
        showimg2d: function () {
           this.$.imgCircleID.style.display="none";
           this.$.photosID.style.display="block";
        },
        showimg360: function () {
           this.$.imgCircleID.style.display="block";
           this.$.photosID.style.display="none";
        },
        domReady: function() {
              
            $(this.$.imgthree).ThreeSixty({
                totalFrames: 52, // Total no. of image you have for 360 slider
                endFrame: 30, // end frame for the auto spin animation
                currentFrame: 1, // This the start frame for auto spin
                imgList: '.threesixty_images', // selector for image list
                progress: '.spinner', // selector to show the loading progress
                imagePath:'../assets/threesixty-slider-master/demo/img/car/', // path of the image assets
                filePrefix: '', // file prefix if any
                ext: '.png', // extention for the assets
                width: 300,
                navigation: true,
                responsive: true
            });
            
        }
    });

</script>
</polymer-element>

