


    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Se connectez</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="" action="index.html" method="post">

              <div class="modal-body mx-3">

                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                  <input type="email" id="orangeForm-email" class="form-control validate">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Mot de pass</label>
                  <input type="password" id="orangeForm-pass" class="form-control validate">
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Se connecter</button>
              </div>
          </form>
          <div class="modal-footer d-flex justify-content-center">
            <p>Pas de compte
              <a href="#" class="log" data-toggle="modal" data-target="#modalRegisterForm" data-dismiss="modal" aria-label="Close">s'inscrire</a>
            </p>
          </div>
        </div>
      </div>
    </div>
                      <!--===== END LOGIN FORM   =======-->

                      <!--===== REGISTER FORM   =======-->

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">S'inscrire</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="" action="index.html" method="post">
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-name">Nom et Prénoms</label>
                  <input type="text" id="orangeForm-name" class="form-control validate">
                </div>
                <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                  <input type="email" id="orangeForm-email" class="form-control validate">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Mot de pass </label>
                  <input type="password" id="orangeForm-pass" class="form-control validate">
                </div>

                <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Vérification du Mot de pass </label>
                  <input type="password" id="orangeForm-pass" class="form-control validate">
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">S'inscrire</button>
              </div>
          </form>
        </div>
      </div>
    </div>

                        <!--===== END REGISTER FORM   =======-->
