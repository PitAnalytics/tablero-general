{% extends 'templates/main.php' %}

{% block breadcrumb %}
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ base_url() }}">Inicio</a></li>
              <li class="breadcrumb-item">Data Studio</li>
              <li class="breadcrumb-item">Proyectos</li>
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
      <h4 class="card-title">Projectos</h4>
      <table class="table">
        <thead>
          <tr>
            <th>Proyecto</th>
            <th>Empresa</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
          {% for project in projects %}
          <tr>
            <td>{{project.project}}</td>
            <td>{{project.enterprise}}</td>
            <td><a href="{{ base_url() }}/data-studio/project/{{ project.id }}" class="btn btn-primary btn-block" >ABRIR</a></td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</div>
{% endblock %}