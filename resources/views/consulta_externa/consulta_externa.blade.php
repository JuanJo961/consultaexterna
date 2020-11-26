@extends('layouts.aplication')


<form>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="curp" class="form-control-label">Curp</label>
                    <input class="form-control" type="text"  id="curp">
                </div>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="row">
        <div class="col-sm">
             <div class="form-group">
                 <label for="nombre" class="form-control-label">Nombre</label>
                 <input class="form-control" type="text"  id="nombre">
            </div>
        </div>
  <div class="col-sm">
    <div class="form-group">
             <label for="apellido_paterno" class="form-control-label">Apellido Paterno</label>
             <input class="form-control" type="text"  id="apellido_paterno">
         </div>
     </div>
  <div class="col-sm">
    <div class="form-group">
                 <label for="apellido_materno" class="form-control-label">Apellido Materno</label>
                 <input class="form-control" type="text"  id="apellido_materno">
            </div>
         </div>
    </div>
  </div>
  <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="fecha_nacimiento" class="form-control-label">Fecha de nacimiento</label>
                    <input class="form-control" type="date"  id="fecha_nacimiento">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
               <div class="form-group">
                    <label for="example-date-input" class="form-control-label">Nacio Extranjero</label><br/>
                    <label class="custom-toggle">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                 </label>
              </div>
        </div>
    <div class="col-sm">
        <div class="form-group">
                <label for="pais_origen" class="form-control-label">Pais Origen</label>
                <input class="form-control" type="text"  id="pais_origen">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="entidad_nacimiento" class="form-control-label">Entidad Nacimiento</label>
                    <input class="form-control" type="text"  id="entidad_nacimiento">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                        <label for="edad" class="form-control-label">Edad</label>
                        <input class="form-control" type="number"  id="edad">
                      </div>
                </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="gratuidad" class="form-control-label">Gratuidad</label>
                    <input class="form-control" type="text"  id="gratuidad">
                </div>
             </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="numero_afiliacion" class="form-control-label">Numero de Afiliciacion</label>
                    <input class="form-control" type="text"  id="numero_afiliacion">
                </div>
            </div>
    <div class="col-sm">
        <div class="form-group">
                     <label for="numero_afiliacion" class="form-control-label">Afiliacion</label>
                     <select class="form-control form-control-sm">
                     </select>
                </div>
            </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="digito_verificador" class="form-control-label">Digito Verificador</label>
                    <input class="form-control" type="number"  id="digito_verificador">
                </div>  
             </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                     <label for="example-date-input" class="form-control-label">Lee</label><br/>
                     <label class="custom-toggle">
                     <input type="checkbox" checked>
                     <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                </label>
            </div>
      </div>
    <div class="col-sm">
        <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Escribe</label><br/>
                        <label class="custom-toggle">
                        <input type="checkbox" checked>
                        <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                    </label>
                </div>
            </div>
    <div class="col-sm">
            <div class="form-group">
                <label for="example-date-input" class="form-control-label">Habla Lengua Indigena</label><br/>
                <label class="custom-toggle">
                <input type="checkbox" checked>
                <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
            </label>
        </div>
    </div>
    <div class="col-sm">
         <div class="form-group">
                        <label for="asentamiento" class="form-control-label">Cual Lengua</label>
                        <select class="form-control form-control-sm">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Tiene Alguna Incapacidad</label><br/>
                        <label class="custom-toggle">
                    <input type="checkbox" checked>
                <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
            </label>
        </div>
    </div>
    <div class="col-sm">
         <div class="form-group">
                        <label for="asentamiento" class="form-control-label">Cual Discapacidad</label>
                        <select class="form-control form-control-sm">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="numero_expediente" class="form-control-label">Numero de Expediente</label>
                    <input class="form-control" type="number"  id="numero_expediente">
                </div>
            </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="fecha_registro" class="form-control-label">Fecha de Registro</label>
            <input class="form-control" type="date" id="fecha_registro">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="telefono" class="form-control-label">Telefono</label>
                    <input class="form-control" type="tel" id="telefono">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">Reside en el Extranjero</label><br/>
                    <label class="custom-toggle">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                </label>
            </div> 
        </div> 
    <div class="col-sm">
        <div class="form-group">
            <label for="entidad_residencia" class="form-control-label">Entidad Residencia</label>
            <input class="form-control" type="text"  id="entidad_residencia">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="municipio_residencia" class="form-control-label">Municipio Residencia</label>
                    <input class="form-control" type="text"  id="municipio_residencia">
                </div>
            </div> 
        </div>
    </div> 
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="localidad_residencia" class="form-control-label">Localidad Residencia</label>
                    <input class="form-control" type="text"  id="localidad_residencia">
            </div>
        </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="otra_localidad" class="form-control-label">Otra Localidad</label>
            <input class="form-control" type="text"  id="otra_localidad">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="codigo_postal" class="form-control-label">Codigo Postal</label>
                    <input class="form-control" type="text"  id="codigo_postal">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">Se Ignora Codigo Postal</label><br/>
                    <label class="custom-toggle">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                </label>
            </div>
        </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="vialidad" class="form-control-label">Vialidad</label>
            <input class="form-control" type="text"  id="vialidad">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                     <label for="vialidad" class="form-control-label">Tipo Vialidad</label>
                     <select class="form-control form-control-sm">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="numero_exterior" class="form-control-label">Numero Exterior</label>
                    <input class="form-control" type="number"  id="numero_exterior">
                </div>
            </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="numero_exterior_alfabetico" class="form-control-label">Numero Exterior Alfabetico</label>
            <input class="form-control" type="text"  id="numero_exterior_alfabetico">
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group">
                    <label for="numero_interior" class="form-control-label">Numero Interior</label>
                    <input class="form-control" type="number"  id="numero_interior">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="asentamiento" class="form-control-label">Asentamiento</label>
                    <input class="form-control" type="text"  id="asentamiento">
                </div>
            </div>
    <div class="col-sm">
        <div class="form-group">
                        <label for="asentamiento" class="form-control-label">Tipo Asentamiento</label>
                        <select class="form-control form-control-sm">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="escolaridad" class="form-control-label">Escolaridad</label>
                    <select class="form-control form-control-sm">
                </select>
            </div>
        </div>
    <div class="col-sm">
        <div class="form-group">
                        <label for="sexo" class="form-control-label">Sexo</label>
                        <select class="form-control form-control-sm">
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>
        
            
        
            

          
            
            
           
         
         