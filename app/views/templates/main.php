<!DOCTYPE html>
<html>

  {% include 'templates/partials/main/head.php' %}

    <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">

        {% include 'templates/partials/main/topbar.php' %}

        {% include 'templates/partials/main/leftbar.php' %}
            <!-- ============================================================== -->
            <!-- Start main Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                      {% block breadcrumb %}



                      {% endblock %}

                      {% block content %}

    

                      {% endblock %}
                    </div> 
                </div>
                <footer class="footer">2019 © Pit Sistemas.</footer>
            </div>
            <!-- ============================================================== -->
            <!-- End main content here -->
            <!-- ============================================================== -->

          <!--RIGHTBAR-->

        </div>
        <!-- END wrapper -->
        {% include 'templates/partials/main/feet.php' %}


        {% block extras %}


        {% endblock %}


  </body>
</html>