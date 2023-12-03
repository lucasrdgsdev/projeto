   <!-- JQUERY -->
   <script type="text/javascript" src="jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- INICIALIZAÇÃO JQUERY -->
    <script type="text/javascript">
       document.addEventListener('DOMContentLoaded', function() {
       var elems = document.querySelectorAll('.modal');
       var instances = M.Modal.init(elems, options);
        });

      $(document).ready(function(){
      $('.modal').modal();
      });
    </script>

   <footer class="page-footer red darken-4" style="margin-top:10em;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sistema </h5>
                <p class="grey-text text-lighten-4">Desenvolvido por <b>Grupo de projeto UNINOVE</b>.</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            ©2023 Start.Truck 
            <a class="grey-text text-lighten-4 right" target="_BLANK" href="https://start-truck.vercel.app/">Site</a>
            </div>
          </div>
        </footer>
   </footer>
    </body>
</html>