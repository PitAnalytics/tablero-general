{% extends 'templates/main.php' %}

{% block breadcrumb %}

    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ base_url() }}/user">Usuarios</a></li>
                <li class="breadcrumb-item">Actualizar Privilegios</li>
              </ol>
            </nav>
        </div>
      </div>
    </div>

{% endblock %}

{% block content %}

    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">

        <h4 class="card-title">Actalizar Privilegio de Usuario</h4>

        <form action="{{ base_url() }}/user/update" method="POST">

          <div class="row" id="formRegister">

            <!--campo de usuario bloqueado por default-->
            <div class="form-group col-lg-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" id="example-input1-group1" name="user" class="form-control" value="{{update.user}}" required readonly>
              </div>
            </div>

            <!--privilegios a actualizar-->
            <div class="form-group col-lg-4">
              <div class="input-group has-success">
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                <select name="idLevel" type="text" class="form-control" required>
                  <option value="1">Superadmin</option>
                  <option value="2">Admin</option>
                  <option value="3">Usuario</option>
                  <option value="4" selected>Visitante</option>
                  <option value="5">Inactivo</option>
                </select>
              </div>    
            </div>

            <!--pre confirmacion-->
            <div class="form-group col-lg-">
              <button type="button" class="btn btn-success" id="btnShow">ACTUALIZAR</button>
            </div>

          </div>

          <div class="row" id="formConfirm" hidden>

            <div class="form-group col-lg-8">
              <h4 class="text-warning text-center">Desea actualizar privilegios de usuario {{update.user}}?</h4>
            </div>

            <!--boton cancelar-->
            <div class="form-group col-lg-2">
              <button type="button" class="btn btn-danger btn-block" id="btnHide">CANCELAR</button>
            </div>

            <!--confirmacion y submit-->
            <div class="form-group col-lg-2">
              <button type="submit" class="btn btn-success btn-block">CONFIRMAR</button>
            </div>

          </div>
      
        </form>

        </div>
      </div>
    </div>

{% include 'templates/partials/user/user-table.php' %}


{% endblock %}


{% block extras %}

<script src="{{ base_url() }}/extra/js/formdump.js"></script>

{% endblock %}