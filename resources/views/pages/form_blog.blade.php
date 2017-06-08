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
                        <div class="blog-post" ng-repeat="item in publicaciones" ng-if="!banderaCategoriaSeleionada">
                            <div class="blog-info">
                                <img src="@{{item.imagenEmployee}}" class="img-responsive" alt="">
                                <div class="date"><div class="number">@{{item.dia}}</div><div>@{{item.mes}}</div></div>
                            </div>
                            <h3><a ng-click="verDetalle(item)">@{{item.titulo}}</a></h3>
                            <div class="date-xs">@{{item.fecha}}</div>
                            <p style="white-space: pre-line; text-align: justify;" ><img class="img-responsive pull-right" src="@{{item.imagen}}" alt="">@{{item.descripcion_corta}}</p>
                            <ul class="blog-tags list-unstyled list-inline">
                                <li><a href="" ng-click="verDetalle(item)"><i class="fa fa-tag"></i>Ver +</a></li>
                            </ul>
                        </div>

                        <div class="blog-post" ng-repeat="item in publicaciones" ng-if="item.tipo_publicacion_id == categoriaSelecionada && banderaCategoriaSeleionada">
                        	<div class="blog-info">
                            	<img src="@{{item.imagenEmployee}}" class="img-responsive" alt="">
                                <div class="date"><div class="number">@{{item.dia}}</div><div>@{{item.mes}}</div></div>
                            </div>
                            <h3><a ng-click="verDetalle(item)">@{{item.titulo}}</a></h3>
                            <div class="date-xs">@{{item.fecha}}</div>
                            <p><img class="img-responsive pull-right" src="@{{item.imagen}}" alt="">@{{item.descripcion_corta}}</p>
                        	<ul class="blog-tags list-unstyled list-inline">
                                <li><a href="" ng-click="verDetalle(item)"><i class="fa fa-tag"></i>Ver +</a></li>
                            </ul>
                        </div>
                        <!-- BLOG POST 1 - END -->
                        
                       
                        
                    </div> 
                    
                    <div class="box-footer clearfix">
                  <pagination total-items="totalItems" ng-model="currentPage" max-size="maxSize" class="pagination-sm no-margin pull-right" items-per-page="itemsperPage" boundary-links="true" rotate="false" num-pages="numPages" ng-change="pageChanged()"></pagination>
                </div>
                    
                </div>
                <!-- BLOG POSTS - END -->
                
                <!-- SIDEBAR - START -->
                <div class="col-sm-4">
                	<div class="sidebar">
                        <h3>Categories</h3> 
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li ng-repeat="row in tipoPublicaciones"><a ng-click="selectCategoria(row.id,false)" href=""><i class="fa fa-book" ></i>@{{row.descripcion}} </a></li>
                                <!--<li><a href=""><i class="fa fa-paint-brush"></i>Design</a></li>
                                <li><a href=""><i class="fa fa-music"></i>Music</a></li>
                                <li><a href=""><i class="fa fa-plane"></i>Travel</a></li>
                                <li><a href=""><i class="fa fa-hashtag"></i>Uncategorized</a></li>-->
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