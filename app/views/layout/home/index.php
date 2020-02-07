{% extends 'templates/main.php' %}

{% block breadcrumb %}
    <link href="assets/css/parallax.css" rel="stylesheet" type="text/css" />
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Inicio</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
{% endblock %}

{% block content %}
<div class="wrapper">         
  <section id="parallax1">
    <h1>Business Analytics</h1>
  </section>
  <section id="parallax2">
  </section>
  <section id="parallax3">
    <h1>Business Inteligence</h1>
  </section>
</div>
{% endblock %}