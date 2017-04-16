<style>
.vertical-menu {
}
.vertical-menu a {
    background-color: #f3f3f3;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}
.vertical-menu a:hover {
    background-color: #CB2027;
}
.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
<section class="content">
      <!-- ==========================
        BLOG - START
    =========================== --> 
    <section class="content-item grey" id="blog-timeline">
        <div class="container">
            <div class="row">
                
                <!-- BLOG POSTS - START -->
                <div class="col-xs-3">
                    <div id="slideshow-links">                                   <!-- Nav tabs -->
                                    
                                    <div ng-if="bandera">
                                    <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li class="active"><a href="#" ng-click="cambiar_pestana(1)"><span></span>Indicadores</a></li>
                                        <li ><a   href="#" ng-click="cambiar_pestana(2)" ><span></span>Provincias</a></li>
                                        </ul>
                                    </div>
                                    <div ng-if="!bandera">
                                    <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li><a href="#" ng-click="cambiar_pestana(1)"><span></span>Indicadores</a></li>
                                        <li class="active" ><a   href="#" ng-click="cambiar_pestana(2)" ><span></span>Provincias</a></li>
                                         </ul>
                                    </div>
                                        
                                    
                    </div>
                
                <!-- BLOG POSTS - END -->
                
            
                    <div ng-if="bandera">
                <div class="vertical-menu">
                                          <a href="#" style="">hhhh 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>
            </div>
            <div ng-if="bandera1">
                <div class="vertical-menu">
                                          <a href="#" style="">vbn 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>
            </div>

                </div>
                <!-- SIDEBAR - START -->
                
                <!-- SIDEBAR - END -->


            </div>
        </div>
    </section>
</section>