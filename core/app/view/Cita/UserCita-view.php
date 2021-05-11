<div class="col-md-12 col-lg-12">
     <div class="card mg-b-20">
         <div class="card-header">
             <h4 class="card-header-title">
             
             </h4>
             <div class="card-header-btn">
                 <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse7" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                 <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                 <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                 <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
             </div>
         </div>
         <div class="card-body collapse show" id="collapse7">
            <p class="tm-feature-name text-center" >
               Aqui puede solicitar su Lavado, ingrese fecha para su lavado y sera notificado por un 
               mensaje en <a class = "text-success"> Whatsapp </a> al ser confirmada la cita.  
            </p>
             <form class="needs-validation" action="index.php?action=Cita/AddCitaLavado" method="post" novalidate>
                 <div class="form-row"> 
                     <div class="col-md-6 mb-3 text-center">
                         <label for="cc" class="text-dark" > Ingrese la Fecha Y Hora para lavar su vehiculo </label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="icon icon-clock"></i></span>
                             </div>
                             <input autocomplete="off" type="text" id=hora name="hora" class="form-control datepicker-here text-dark"  placeholder="Ingrese fecha" data-timepicker="true" data-time-format="hh:ii ">
                             <div class="invalid-feedback">
                                 por favor ingrese una fecha.
                             </div>
                         </div>
                     </div>
 
                     <div class="col-md-6 mb-5 text-center">
                         <label for="cc" class="text-dark">Documento de identidad</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"id="cc"><i class="icon icon-wallet"></i></span>
                             </div>
                             <input type="text" class="form-control text-dark" id="cc" name="cc" placeholder="Ingrese su CC" aria-describedby="inputGroupPrepend" required>
                             <div class="invalid-feedback">
                                 por favor ingrese documento de identidad.
                             </div>    
                         </div>
                     </div>
                     <button class="btn btn-secondary " type="submit">Enviar</button>    
                 </div>   
             </form>
         </div>
         
     </div>
 </div>

<!-- Page footer -->
<footer class="row">
    <p class="col-12 text-white text-center tm-copyright-text">
     Copyright &copy; 2020 WhasApp Page. 
     Designed by <a href="#" class="tm-copyright-link">EBsoftware</a>
    </p>
</footer>
