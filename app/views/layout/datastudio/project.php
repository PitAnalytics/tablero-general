{% extends 'templates/main.php' %}

{% block breadcrumb %}
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ base_url() }}">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{ base_url() }}">Data Studio</a></li>
              <li class="breadcrumb-item"><a href="{{ base_url() }}/data-studio/project">Proyectos</a></li>
              <li class="breadcrumb-item">{{project.project}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
{% endblock %}

{% block content %}
<div class="row">
  <iframe class="col-lg-12" width="{{project.width}}" height="{{project.height}}" src="{{project.url}}" frameborder="0" style="border:0" allowfullscreen></iframe></body>
</div>
{% endblock %}