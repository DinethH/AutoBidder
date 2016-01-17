<polymer-element name="related-items" >
    <template>


<style shim-shadowdom>
                .relatedItem {
                    padding: 5px;
                    border-bottom: 1px #CCC solid;
                }
</style>
  
    <aside style="margin:15px; padding: 20px; background:white; max-width: 200px;" class="hidden-xs">
                  <paper-shadow></paper-shadow>
                  <h2 style="margin: 0; padding: 0">Related Items</h2>
                  <hr>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/tire.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/headlights.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
                  <div class="relatedItem">
                      <paper-ripple fit></paper-ripple>
                      <paper-shadow z="0"></paper-shadow>
                      <div style="text-align: center">
                          <img src="../../img/categories/hood.jpg" style="width: 100px;">
                      </div>
                      <h5>Item name/title 123 456 789 123 456 789</h5>
                      <p><strong>$999</strong></p>
                      
                  </div>
              </aside>

</template>
    
<script>

    Polymer('related-items', {
        domReady: function() {
//            var cars = ["Saab", "Volvo", "BMW"];
            
        },
        created: function () {
            //alert ("Instance created");
            
        }
    });

</script>
</polymer-element>
