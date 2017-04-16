<section class="content">
	  <!-- ==========================
    	BLOG - START
    =========================== --> 
    <section class="content-item grey" id="blog-timeline">
    	<div class="container">
        	<div class="row">
            	
                <!-- BLOG POSTS - START -->
                <div class="col-sm-8">
                	<h2>Publicaciones</h2>
                    <div class="timeline">
                    
                    	<!-- BLOG POST 1 - START -->
                        <div class="blog-post" ng-repeat="item in publicaciones">
                        	<div class="blog-info">
                            	<img src="@{{item.autor.imagen}}" class="img-responsive" alt="">
                                <div class="date"><div class="number">18</div><div>Dec</div></div>
                            </div>
                            <h3><a href="blogitem.html">@{{item.titulo}}</a></h3>
                            <div class="date-xs">18/12/2014</div>
                            <p><img class="img-responsive pull-right" src="@{{item.imagen}}" alt="">@{{item.descripcion_corta}}</p>
                        	<ul class="blog-tags list-unstyled list-inline">
                                <li><a href=""><i class="fa fa-tag"></i>book</a></li>
                                <li><a href=""><i class="fa fa-tag"></i>music</a></li>
                                <li><a href=""><i class="fa fa-tag"></i>nature</a></li>
                                <li><a href=""><i class="fa fa-tag"></i>read</a></li>
                                <li><a href=""><i class="fa fa-tag"></i>songs</a></li>
                                <li><a href=""><i class="fa fa-tag"></i>sunshine</a></li>  
                            </ul>
                        </div>
                        <!-- BLOG POST 1 - END -->
                        
                       
                        
                    </div>
                    
                    <div class="text-center">
                    	<a href="#" class="btn btn-normal btn-lg">Load More</a>
                    </div>
                    
                </div>
                <!-- BLOG POSTS - END -->
                
                <!-- SIDEBAR - START -->
                <div class="col-sm-4">
                	<div class="sidebar">
                        <h3>Categories</h3>
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-female"></i>Fashion</a></li>
                                <li><a href=""><i class="fa fa-paint-brush"></i>Design</a></li>
                                <li><a href=""><i class="fa fa-music"></i>Music</a></li>
                                <li><a href=""><i class="fa fa-plane"></i>Travel</a></li>
                                <li><a href=""><i class="fa fa-hashtag"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <h3>Publicaciones Recientes</h3>
                        <div class="box posts">
                            <ul class="list-unstyled">
                                <li ng-repeat="item in publicaciones"><i class="fa fa-chevron-right"></i><a href="">@{{item.titulo}}</a><div>27/02/2014</div></li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
                <!-- SIDEBAR - END -->
                
            </div>
        </div>
    </section>
</section>