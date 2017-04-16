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
                                    <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li ><a href="#" ng-click="@{{cambiar_pestaña()}}"><span></span>Indicadores @{{bandera1}}</a></li>
                                        <li><a href="#" ><span></span>Provincias</a></li>
                                    </ul>
                    </div>
                
                <!-- BLOG POSTS - END -->
                <style>
.vertical-menu {
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
            
                <section class="content-item" id="slideshow">
                    <div ng-if="bandera">
                <div class="vertical-menu col-sm-12">
                                          <a href="#" style="">hhhh 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>
            </div>
            <div ng-if="bandera1">
                <div class="vertical-menu col-sm-12">
                                          <a href="#" style="">vbn 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>
            </div>

                    </section>
                </div>
                <!-- SIDEBAR - START -->
                
                <!-- SIDEBAR - END -->


            </div>
        </div>
    </section>
</section>