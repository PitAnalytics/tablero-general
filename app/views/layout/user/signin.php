
{% extends 'templates/sign.php' %}

{% block breadcrumb %}



{% endblock %}

{% block content %}

    <div class="row">
      <div class="col-md-12 col-lg-6 mx-auto my-auto">

        <div class="card">

          <div class="card-image px-4 py-4">
            <img src="{{ base_url() }}/extra/img/multiva.jpg" class="card-img-top">
          </div>

          <div class="card-body">

            <form action="{{ base_url() }}/user/signin" method="POST">

              <div class="input-group my-4">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control{{errors.user ? ' is-invalid' : ''}}" name="user" placeholder="usuario" required>
              </div>

                {% for error in errors.user %}
                  <span class="text-danger">{{error}}</span><br>
                {% endfor %}

                <div class="input-group my-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                  </div>
                  <input type="password" class="form-control{{errors.password ? ' is-invalid' : ''}}" name="password" placeholder="password" required>
                </div>

                {% for error in errors.password %}
                  <span class="text-danger">{{error}}</span><br>
                {% endfor %}

              <div class="form-group">
                <button class="btn btn-block" type="submit">ACCEDER</button>
              </div>

            </form>

          </div>

        </div>

      </div>
    </div>

{% endblock %}
