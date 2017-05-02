<section class="content">

     <!-- ==========================
        TEAM - END 
    =========================== -->
    
    <!--<div id="google-map">
        <div id="map-canvas"></div>
    </div>-->
    
    <!-- ==========================
        CONTACT - START
    =========================== --> 
    <section class="content-item grey" id="contact">
        <div class="container">
            <div class="row">
                    
                <div class="col-sm-7">
                <h2>Escribanos</h2>
                    
                   <form name="contactoCreateForm" role="form" novalidate>
                        <div class="contact-alert-wrapper"></div> 
                        <div class="col-sm-12">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ contactoCreateForm.nombres.$error.required && contactoCreateForm.$submitted || contactoCreateForm.nombres.$dirty && contactoCreateForm.nombres.$invalid]">
                                    <!--<label>Nombre y Apellidos o Seudonimo *</label>-->
                                    <input type="text" required ng-model="contacto.nombres" placeholder="Nombre o seudonimo" class="form-control" name="nombres">
                                    <label ng-show="contactoCreateForm.$submitted || contactoCreateForm.nombres.$dirty && contactoCreateForm.nombres.$invalid">
                                    <span ng-show="contactoCreateForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                                  </div>
                                  </div>
                        <div class="col-sm-12" >
                                   <div class="form-group" ng-class="{true: 'has-error'}[ contactoCreateForm.email.$error.required && contactoCreateForm.$submitted || contactoCreateForm.email.$dirty && contactoCreateForm.email.$invalid]">
                                <!--<label>Correo Electronico *</label>-->
                                <input type="email" required ng-model="contacto.email" placeholder="Email ejemplo@xxxxxxx.xxx" class="form-control" name="email">
                                    <label ng-show="contactoCreateForm.$submitted || contactoCreateForm.email.$dirty && contactoCreateForm.email.$invalid">
                                    <span ng-show="contactoCreateForm.email.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                            </div>
                                  </div>
                        <div class="col-sm-12">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ contactoCreateForm.telefono.$error.required && contactoCreateForm.$submitted || contactoCreateForm.telefono.$dirty && contactoCreateForm.telefono.$invalid]">
                                <!--<label>Telefono</label>-->
                                <input type="text" ng-model="contacto.telefono" placeholder="Telefono" class="form-control" required name="telefono">
                            
                                  <label ng-show="contactoCreateForm.$submitted || contactoCreateForm.telefono.$dirty && contactoCreateForm.telefono.$invalid">
                                    <span ng-show="contactoCreateForm.telefono.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                                  </div>
                                  </div>
                                                       
                            <div class="col-sm-12">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ contactoCreateForm.descripcion.$error.required && contactoCreateForm.$submitted || contactoCreateForm.descripcion.$dirty && contactoCreateForm.descripcion.$invalid]">
                                <!--<label>Mensaje *</label>-->
                                <textarea class="form-control" required ng-model="contacto.descripcion" placeholder="Mensaje ......." rows="5" name="descripcion"></textarea>
                                    <label ng-show="contactoCreateForm.$submitted || contactoCreateForm.descripcion.$dirty && contactoCreateForm.descripcion.$invalid">
                                    <span ng-show="contactoCreateForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                            </div>
                                
                       
                        <div class="form-group form-btn" style="text-align: center;">
                            <button type="submit" class="btn btn-normal" ng-click="registrarMensaje()">Enviar</button>
                        </div>
                        </div>
                    </form>
                    
                </div>
               <div class="col-sm-5">
                     <h2>Contactenos</h2>
                    <div class="box" id="contacts" >
                        <ul class="list-unstyled">
                            <li><i class="fa fa-home"></i>212-222 Broadway, New York, NY 10038, USA</li>
                            <li><i class="fa fa-envelope"></i>info@mycompany.com</li>
                            <li><i class="fa fa-phone"></i>+420 123 456 789</li>
                            <li><i class="fa fa-globe"></i>www.mycompany.com</li>
                        </ul>                       
                      <ul class="list-unstyled">
                            <li><b>Monday-Friday:</b> 9:00 - 16:00</li>
                            <li><b>Saturday:</b> 9:00 - 12:00</li>
                            <li><b>Sunday:</b> Closed</li>
                        </ul>
                     </div>
                   
                    
            </div>
            </div>
           
    </section>
    <!-- ==========================
        CONTACT - END 
    =========================== --> 
    </section>