<link rel="import" href="../components/paper-shadow/paper-shadow.html">
<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../components/paper-input/paper-input.html">
<link rel="import" href="../components/paper-button/paper-button.html">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap/3.1.1/css/bootstrap-theme.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../assets/bootstrap/3.1.1/js/bootstrap.js"></script>

<polymer-element name="home-search-box">

    <template>
        <style>
            @media (min-width: 1070px) {
                
                #hsb {
                    background: rgba(0,0,0,.6);
                    width:1070px;
                    color: white;
                    padding:10px;
                }
            }
            paper-input {
                color: white;
            }
        paper-button {
            background: orange;
            text-transform: capitalize;
            color: #fff;
        }

        paper-button:hover {
            background: #ff8e20;
        }

        paper-button::shadow #ripple {
            color: white;;
        }
        </style>
        <core-layout  justify='center'>
            
            <div id='hsb'>
                <paper-shadow z='2'></paper-shadow>
                <core-layout>
                    <div style="width: 100%; padding-right: 14px;">
                    <h2>Search for an item</h2>
                    <hr>
                    
                    <paper-input floatinglabel label="Enter a ketword, OEM# or a part #"></paper-input>
                    <paper-button label="Search" style='margin-left:30px;'></paper-button>
                </div>
                <div style="width: 100%; padding-left: 15px;">
                    <h2>Browse for a part or accessory</h2>
                    <hr>
                    <div class="row" style="padding: 10px; padding-left: 15px;">
                        <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any year</option>
                                <option>2000</option>
                                <option>2001</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any make</option>
                                <option>Toyota</option>
                                <option>Audi</option>
                            </select>
                        </div>
                            <div class="col-lg-4">
                            <select class="form-control">
                                <option>Any model</option>
                                <option>Prius</option>
                                <option>RX8</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding: 10px; padding-left: 15px;">
                        <div class="col-lg-6">
                            <select class="form-control">
                                <option>Category</option>
                                <option>Condenser</option>
                                <option>Fog light</option>
                                <option>Radiator</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 10px; padding-top: 10px;">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                    </div>
                </div>
                </core-layout>
            </div>
      
        </core-layout>
        
    </template>
    
<script>

    Polymer('home-search-box', {
        
    });

</script>
</polymer-element>