@extends('layouts.aplication')

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary" type="button" id="button-addon1">Buscar</button>
  </div>
  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<div class="table-responsive">
<div>
    <table class="table align-items-center">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">Nombre</th>
                <th scope="col" class="sort" data-sort="budget">Curp</th>
                <th scope="col" class="sort" data-sort="status">Estado</th>
                <th scope="col">No. Expediente</th>
                <th scope="col" class="sort" data-sort="completion">??</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="list">
            
            <tr>
                <th scope="row">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Josefa Ortiz Dominguez</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                   JOOS45543318HTCRN03
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">hospital</span>
                    </span>
                </td>
                <td>
                              
    <div class="avatar-group">
  
                   115025
   
    </div></td>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Subir Documentos</a>
                            <a class="dropdown-item" href="#">Eliminar</a>
                            <a class="dropdown-item" href="#">Agendar cita</a>
                        </div>
                    </div>
                </td>
            </tr>
                
        </tbody>
    </table>
</div>

</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>