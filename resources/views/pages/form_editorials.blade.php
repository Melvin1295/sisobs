<section class="content">
	<!-- ==========================
    	PRICING - START
    =========================== --> 
    <section class="content-item pricing">
    	<div class="container">
        	<div class="content-headline">
            	<h2>Editoriales</h2>
            </div>
        	<div class="row">
            	
                <!-- PRICING PLAN 1 - START -->
                <div class="col-sm-4" ng-repeat="row in editoriales">
                	<div class="pricing-plan">
                    	<h4>@{{row.anio}}</h4>
                    	<div class="price">@{{row.descripcion_corta}}</div>
                    	<ul class="list-unstyled">
                        	<li><i class="fa fa-book"></i><b>Editorial</b> @{{row.nombre}}</li>
                            <li><i class="fa fa-calendar"></i><b>Publicado</b> @{{row.fecha_publicacion}}</li>
                            <li><i class="fa fa-check-circle-o"></i><b>Titulo</b> @{{row.titulo_descripcion}}</li>
                        </ul>
                        <div class="order-wrapper"><a href="" ng-click="verEditorial(row.id)" class="btn btn-normal btn-order">Ver +</a></div>
                    </div>
                </div>
                
                <!-- PRICING PLAN 1 - END -->
                
               
                
            </div>
            <div class="row">
            	<div class="box-footer clearfix">
                  <pagination total-items="totalItems" ng-model="currentPage" max-size="maxSize" class="pagination-sm no-margin pull-right" items-per-page="itemsperPage" boundary-links="true" rotate="false" num-pages="numPages" ng-change="pageChanged2()"></pagination>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	PRICING - END 
    =========================== -->
</section>