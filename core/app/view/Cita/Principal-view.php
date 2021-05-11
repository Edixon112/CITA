        <!-- Call to Action -->
        <section class="row" id="tmCallToAction">
            <div class="tm-bg-white tm-call-to-action-text col-md-12 col-lg-12">
              <p class="tm-feature-name">
                Aqui puede solicitar su Lavado, ingrese fecha para su lavado y sera notificado por un 
                mensaje en Whatsapp al ser confirmada la cita.  
              </p>
              <form class="needs-validation" action="index.php?action=Cita/AddCitaLavado" method="post" novalidate>

                 <div class="form-row"> 
                 
                     <div class="col-md-6">
                         <label for="cc">Fecha Y Hora para lavar su vehiculo</label>
                         <div class="input-group">
                             <input autocomplete="off" type="text" id=hora name="hora" class="tm-email-input datepicker-here"  placeholder="Ingrese fecha" data-timepicker="true" data-time-format="hh:ii ">
                             <div class="invalid-feedback">
                                 por favor ingrese una fecha.
                             </div>
                         </div>
                     </div>
 
                     <div class="col-md-6 mb-2">
                         <label for="cc">Documento de identidad</label>
                         <div class="input-group">
                             <input type="text" class="tm-email-input" id="cc" name="cc" placeholder="Ingrese su CC" aria-describedby="inputGroupPrepend" required>
                             <div class="invalid-feedback">
                                 por favor ingrese documento de identidad.
                             </div>    
                         </div>
                     </div>

                     <button type="submit" class="btn btn-secondary">Enviar</button> 

                 </div>   
             </form>
            </div>
        </section>


        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 App Landing Page. 
            Designed by <a href="#" class="tm-copyright-link">TemplateMo</a>
          </p>
        </footer>
   