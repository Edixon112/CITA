        <!-- Call to Action -->
        <section class="row" id="tmCallToAction">
          <div class="col-12  tm-call-to-action-col">
            <img src="img/call-to-action.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
            <div class="tm-bg-white tm-call-to-action-text">
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
          </div>
        </section>


        <section class="row" id="tmHome">
          <div class="col-12 tm-home-container" >
           <div>
            <div class="tm-bg-black-transparent tm-about-box">

            <div class="text-white tm-home-left" >
              <p class="text-white tm-slogan">Disponible en movil</p>
              <hr class="tm-home-hr" />
              <h2 class="text-white tm-home-title">Adaptado a Movil</h2>
              <p class="text-white tm-home-text">
                Igrese desde su Celular y solicite su cita para su Lavado
              </p>
              <a href="#tmCallToAction" class="btn btn-primary">Solicitar Cita</a>
              <!--a href="#tmFeatures" class="btn btn-primary">Soporte</a-->
               </div>
            </div>
           </div>  
            <div class="tm-home-right offset-md-2">
              <img src="img/mobile-screen.png" alt="App on Mobile mockup" />
            </div>
          </div>
        </section>


        <!-- Features >
        <div class="row" id="tmFeatures">
          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
            <h3 class="tm-feature-name">High Performance</h3>
            
            <div class="tm-feature-icon-container">
                <i class="fas fa-3x fa-server"></i>
            </div>

            <p class="text-center">Download and use this layout for your sites. Total 5 HTML pages included.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
                <h3 class="tm-feature-name">Rapido soporte tecnico</h3>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x fa-headphones"></i>
                </div>
                <p class="text-center">You are allowed to use this for commercial purpose or personal site.
                </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
                <h3 class="tm-feature-name">App Marketing</h3>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x fa-satellite-dish"></i>
                </div>
                <p class="text-center">You are NOT allowed to redistribute this template on any download site.
                </p>
            </div>
          </div>
        </div>


         Call to Action -->
        <!--ssection class="row" id="tmCallToAction">
          <div class="col-12 tm-call-to-action-col">
            <img src="img/call-to-action.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
            <div class="tm-bg-white tm-call-to-action-text">
              <h2 class="tm-call-to-action-title">Images by Unsplash</h2>
              <p class="tm-call-to-action-description">
                You may browse <a rel="nofollow" href="https://www.toocss.com">Too CSS</a> website for the collection of CSS templates for your projects. Aliquam erat volutpat. Nulla eros est,
                imperdiet vel feugiat non, ullamcorper mattis nulla.
              </p>
              <form action="#" method="get" class="tm-call-to-action-form">                
                <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />
                <button type="submit" class="btn btn-secondary">Get Updates</button>
              </form>
            </div>
          </div>
        </section-->

        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 App Landing Page. 
            Designed by <a href="#" class="tm-copyright-link">TemplateMo</a>
          </p>
        </footer>
   