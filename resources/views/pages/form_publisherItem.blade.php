<section class="content">
  <!-- ==========================
    	BLOG ITEM - START
    =========================== --> 
    <section class="content-item grey" id="blog-item">
    	<div class="container">
        	<div class="row">
            	
                <!-- BLOG POST - START -->
                <div class="col-sm-8 blog">
                	<h2>@{{publicacione.titulo}}</h2>
                    <ul class="blog-detail list-unstyled list-inline">
                    	<li><i class="fa fa-calendar"></i>@{{publicacione.fecha}}</li>
                        <li><i class="fa fa-clock-o"></i>@{{publicacione.hora}}</li>
                        <li><i class="fa fa-user"></i>@{{publicacione.nombres}} @{{publicacione.apellidos}}</li>
                        <!--<li><i class="fa fa-comments"></i>124 Comments</li>-->
                    </ul>
                    <p><img class="img-responsive pull-left" src="@{{publicacione.imagen}}" alt="">
                      @{{publicacione.descripcion}}
                     </p>
                    <a class="btn btn-info btn-sm" href="@{{publicacione.archivo_adjunto}}" target="_blank">Descargar PDF</a>
                </div>
                <!-- BLOG POST - END -->
                
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
                                <li ng-repeat="item in publicaciones"><i class="fa fa-chevron-right"></i><a ng-click="verDetalle(item)">@{{item.titulo}}</a><div>@{{item.fecha}}</div></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- SIDEBAR - END -->
                
            </div>
        </div>
    </section>
    
   </section>
