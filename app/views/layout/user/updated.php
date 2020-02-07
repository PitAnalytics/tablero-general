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
          <h4 class="text-success text-center">Privilegios de usuario actualizados satisfactoriamente</h4>
          <h4 class="text-primary text-center">Usuario: {{update.user}}</h4>
          <h4 class="text-warning text-center">Privilegios: {{update.level}}</h4>
        </div>
      </div>
    </div>

{% include 'templates/partials/user/user-table.php' %}


{% endblock %}


{% block extras %}

<script src="{{ base_url() }}/extra/js/formdump.js"></script>

{% endblock %}