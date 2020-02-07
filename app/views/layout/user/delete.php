{% extends 'templates/main.php' %}

{% block breadcrumb %}
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{ base_url() }}/user">Usuarios</a></li>
              <li class="breadcrumb-item">Eliminar Usuario</li>
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

        <h4 class="card-title">Eliminar Usuario</h4>

        <form action="{{ base_url() }}/user/delete" method="POST">

          <!--fila -->
          <div class="row" id="formRegister">

            <!--campo de id de usuario bloqueado por default-->
            <div class="form-group col-lg-3">
              <div class="input-group">
                <span class="input-group-addon">#</span>
                <input type="text" name="id" class="form-control" value="{{delete.id}}" required readonly>
              </div>
            </div>

            <!--campo de usuario bloqueado por default-->
            <div class="form-group col-lg-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="user" class="form-control" value="{{delete.user}}" required dissabeled>
              </div>
            </div>

            <!--campo de usuario bloqueado por default-->
            <div class="form-group col-lg-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" name="enterprise" class="form-control" value="{{delete.enterprise}}" required dissabeled>
              </div>
            </div>

            <!--pre confirmacion-->
            <div class="form-group col-lg-3">
              <button type="button" class="btn btn-danger btn-block" id="btnShow">ELIMINAR</button>
            </div>

          </div>

          <div class="row" id="formConfirm" hidden>
            <!--mensaje de confirmacion-->
            <div class="form-group col-lg-8">
              <h4 class="text-danger text-center">Desea eliminar al usuario {{delete.user}}?</h4>
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

