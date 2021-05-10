<div class="col-md-12 col-lg-12">
    <div class="card mg-b-20">
        <div class="card-header">
            <h4 class="card-header-title">
            Modificar datos igresados en Cita para lavado
            </h4>
            <div class="card-header-btn">
                <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse7" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <?php $cita = CitaData::getById($_GET["id"]); ?>
        <div class="card-body collapse show" id="collapse7">
            <form class="needs-validation" action="index.php?action=Cita/EditCita" method="post" novalidate>
                <div class="form-row"> 
                 <!--info oculta-->
				   <input type="text" style="display: none" name="id" id="id" value="<?php echo $cita->id;?>" readonly="true"  required />
                   
               <div class="col-md-6 mb-3">
                        <label for="cc">Ingrese la Fecha Y Hora para lavar su vehiculo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">H</span>
                            </div>
                            <input autocomplete="off" type="text" id=hora name="hora" class="form-control datepicker-here"  placeholder="Ingrese fecha" data-timepicker="true" data-time-format="hh:ii ">
                            <div class="invalid-feedback">
                                por favor ingrese una fecha.
                            </div>
                        </div>
                    </div>                    <div class="col-md-6 mb-3">
                    <label for="cc">Estado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"id="cc">#</span>
                        </div>
                         <select id="estado" name="estado" class="form-control" data-provide="selectpicker">
                            <option value="0" selected>Desactivado</option>
                            <option value="1">Activado</option>
                         </select>                              
                        <div class="invalid-feedback">
                            por favor ingrese.
                        </div>    
                    </div>
                </div>   
                <button class="btn btn-custom-primary" type="submit">Enviar</button>
            </form>
            
        </div>
    </div>
</div>
