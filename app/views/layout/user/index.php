{% extends 'templates/main.php' %}

{% block breadcrumb %}

    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
              <li class="breadcrumb-item">Usuarios</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

{% endblock %}

{% block content %}

  {% include 'templates/partials/user/user-table.php' %}

{% endblock %}