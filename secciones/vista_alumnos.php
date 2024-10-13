<?php include('../template/cabezera.php'); ?>
  
        <h1>Lista de Alumnos</h1>
        <div class="row">
                <div class="col-5">
                        <form action="" method="post"></form>

                        <div class="card">
                                <div class="card-header">Alumnos</div>
                                <div class="card-body">

                                <div class="mb-3">
                                        <label for="id" class="form-label">ID</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                name="id" 
                                                id="id" 
                                                aria-describedby="helpId"
                                                placeholder="ID"
                                        />
                                </div>
                                
                                  <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                name="nombre"
                                                id="nombre"
                                                aria-describedby="helpId"
                                                placeholder="Escriba su nombre"
                                        />
                                       
                                  </div>
                                       <div class="mb-3">
                                        <label for="apellidos" class="form-label">Apellidos</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                name="apellidos"
                                                id="apellidos"
                                                aria-describedby="helpId"
                                                placeholder="Escriba sus apellidos"
                                        />
                                        
                                       </div>


                                       <div class="mb-3">
                                        <label for="" class="form-label">Curso del alumno:</label>
                                        <select multiple
                                                class="form-select form-select-lg"
                                                name="cursos[]"
                                                id="listaCursos"
                                        >
                                                <option selected>Seleccione una opción</option>
                                                <option value="">Curso 1</option>
                                                <option value="">Curso 2</option>
                                                <option value="">Jakarta</option>
                                        </select>
                                       </div>
                                       
                                        <div class="btn-group" role="group" aria-label="Button group name">
                                                <button
                                                        type="button"
                                                        class="btn btn-success"
                                                >
                                                        Agregar
                                                </button>
                                                <button
                                                        type="button"
                                                        class="btn btn-warning"
                                                >
                                                        Editar
                                                </button>
                                                <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                >
                                                        Borrar
                                                </button>
                                        </div>
                                        
                                       
                                       


                                </div>
                        </div>
                        
                        
                </div>

                <div class="col-7">
                        <div
                                class="table-responsive"
                        >
                                <table
                                        class="table table-primary"
                                >
                                        <thead>
                                                <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Acciones</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr class="">
                                                        <td scope="row"></td>
                                                        <td></td>
                                                        <td></td>
                                                </tr>
                                                <tr class="">
                                                        <td scope="row"></td>
                                                        <td></td>
                                                        <td></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                        

                </div>
        </div>
        
    
<?php include('../template/pie.php'); ?>
