<div class="row">
      <div class="col-lg-12">
        <div class="card-box">

          <div class="dropdown pull-right">
            <a href="{{ base_url() ~ '/user/signup' }}" class="btn btn-success">Agregar</a>
          </div>

          <h4 class="card-title">Lista de Usuarios Registrados</h4>
          <!-- Fila principal -->
          <div class="row">
            <!-- Columna principal -->
            <div class="col-lg-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Fecha de Registro</th>
                    <th>Usuario</th>
                    <th>Empresa</th>
                    <th>Nivel de acceso</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                {% for user in users %}
                  <tr>
                    <td>{{ user.dateTime }}</td>
                    <td>{{ user.user }}</td>
                    <td>{{ user.enterprise }}</td>
                    <td>{{ user.level }}</td>
                    <td class="actions">
                      <a href="{{ base_url() }}/user/update/{{ user.id }}" class="text-warning"><i class="fa fa-pencil"></i></a>
                      <a href="{{ base_url() }}/user/delete/{{ user.id }}" class="text-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                {% endfor %}
                </tbody>
              </table>
            </div>
            <!-- Fin de columna -->
          </div>
          <!-- Fin de fila -->
        </div>
      </div>
    </div>