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
          <h4 class="text-success text-center">Usuario Eliminado</h4>
        </div>
      </div>
    </div>

{% include 'templates/partials/user/user-table.php' %}


{% endblock %}