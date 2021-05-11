
<div class="col-md-12 col-lg-12">
    <div class="card mg-b-20">
        <div class="card-header">
            <h4 class="card-header-title text-ceter">
            
            </h4>
            <div class="card-header-btn">
                <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse7" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="card-body collapse show" id="collapse7">
             <p class="text-center text-dark"> Ingrese sus datos para poder solicitar un lavado. </p>     
            <form class="needs-validation" action="index.php?action=Cita/AddClienteCita" method="post" novalidate>
                <div class="form-row"> 
                    <!--info oculta-->
				<input type="text" style="display: none" id="activo" name="activo" value="<?php echo $activo=0;?>" readonly="true"  required />
                    <div class="col-md-6 mb-3 text-dark">
                       <label for="nombre">Nombre</label>
                       <input type="text" class="form-control text-dark" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="" required>
                       <div class="valid-feedback">
                          Nombre valido
                       </div>
                       <div class="invalid-feedback">
                          Por favor ingrese un nombre 
                       </div>
                    </div>
                    <div class="col-md-6 mb-3 text-dark">
                       <label for="apellido">Apellido</label>
                       <input type="text" class="form-control text-dark" id="apellido" name="apellido"placeholder="ingrese su apellido" value="" required>
                       <div class="valid-feedback">
                          Apellido valido
                       </div>
                       <div class="invalid-feedback">
                          Por favor ingrese un apellido 
                       </div>
                    </div>
                    <div class="col-md-6 mb-3 text-dark">
                       <label for="apellido">Numero de Cedula</label>
                       <input type="text" class="form-control text-dark" id="cc" name="cc"placeholder="ingrese su cc" value="<?php echo $_GET["cedula"]; ?>" required>
                       <div class="valid-feedback">
                          Numero de cedula valido
                       </div>
                       <div class="invalid-feedback">
                          Por favor ingrese un numero cedula
                       </div>
                    </div>
                    <div class="col-md-6 mb-3 text-dark">
                       <label for="apellido">Numero de Celular</label>
                       <input  type="text" class="form-control text-dark" id="celular" name="celular"placeholder="ingrese su celular" value="" required>
                       <div class="valid-feedback">
                          Numero valido 
                       </div>
                       <div class="invalid-feedback">
                          Por favor ingrese un numero 
                       </div>
                    </div>   
                </div>   
                <button class="btn btn-secondary" type="submit">Enviar</button> 
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
