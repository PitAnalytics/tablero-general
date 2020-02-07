
{% extends 'templates/main.php' %}

{% block breadcrumb %}

    <div class="row">
      <div class="col">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{ base_url() }}/user">Usuarios</a></li>
              <li class="breadcrumb-item">Agregar</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

{% endblock %}

{% block content %}

    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="card-box">

          <h4 class="card-title">Registro de Usuarios</h4>

          <form action="{{ base_url() }}/user/signup" method="POST">
            <div class="row">

              <div class="form-group col-lg-2">
                <div class="input-group{{errors.user ? ' has-error' : ''}}">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" id="example-input1-group1" name="user" class="form-control" placeholder="usuario" required>
                </div>
                {% for error in errors.user %}
                <span class="text-danger">{{error}}</span><br>
                {% endfor %}
              </div>

              <div class="form-group col-lg-2">
                <div class="input-group{{errors.password ? ' has-error' : ''}}">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="password" id="example-input1-group1" name="password" class="form-control" placeholder="password" required>
                </div>
                {% for error in errors.password %}
                <span class="text-danger">{{error}}</span><br>
                {% endfor %}
              </div>

              <div class="form-group col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                  <select name="idLevel" type="text" class="form-control">
                    <option value="1">Superadmin</option>
                    <option value="2">Admin</option>
                    <option value="3">Usuario</option>
                    <option value="4">Visitante</option>
                    <option value="5" selected>Inactivo</option>
                  </select>
                </div>                
              </div>

              <div class="form-group col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-building"></i></span>
                  <select name="idEnterprise" type="text" class="form-control">
                    <option value="1" selected>Pit Sistemas</option>
                    <option value="2">Multiva</option>
                  </select>
                </div>                
              </div>

              <div class="form-group col-lg-2">
                <button type="submit" class="btn btn-success btn-block">REGISTRAR</button>
              </div>
            
            </div>
          </form>

        </div>
      </div>
    </div>

  {% include 'templates/partials/user/user-table.php' %}


  {% endblock %}
