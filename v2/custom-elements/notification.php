<link rel="import" href="../components/paper-shadow/paper-shadow.html">
<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../components/paper-ripple/paper-ripple.html">
<link rel="import" href="../components/core-item/core-item.html">
<polymer-element name="notification-item">

    <template repeat="{{t in test}}" >
        <style>
            :host {
                //padding:10px;
                
            }
            .card {
                height: 100px;
                width: 100%;
                background-color: white;
                padding:10px;
            }
        </style>
        
        <div class="card" >
            <core-tem>
            
            <core-layout horizontal>
                <div style="height: 100%"><img src="../img/mail.png" style="height: 90%; padding-top: 5%; padding-left:5px;"></div>
                <div flex style="padding-left: 50px; padding-top:10px;">
                    <p><strong>{{t.name}}</strong></p>
                    <p style="margin-top: -10px;">Message content 1 2 3 4 5</p>
                </div>
            </core-layout>
            <paper-ripple class="recenteringTouch" fit></paper-ripple>
            </core-tem>
        </div>
    </template>
    
<script>

    Polymer('notification-item', {
//        test: function () {
//            var JSONObj = { "name" : "tutorialspoint.com", "year"  : 2005 };
//            return JSONObj;
//        };
//        created: function () {
//            alert ("");
//        }
    });

</script>
</polymer-element>
