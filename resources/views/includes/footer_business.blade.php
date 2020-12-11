<!--oschool business footer-->

<footer class="container-fluid" style="background: #{{$school->color->navbar_footer}}; color: #{{$school->color->body_text}};">
  <div class="row align-items-center">

    <div class="col-md-8">
      <div class="p-4">
        <p class="font-weight-light">© <span id="year2">2010</span> {{$school->name}}. TOUS DROITS RÉSERVÉS.</p>
      </div>
    </div>
    @if($school->user->offer->name == 'FREE')
    <div class="col-md-4">
      <div class="p-4">
        <ul class="list-group">
          <li>
            <a style="color:#{{$school->color->navbar_links}} !important;" href="https://oschoolelearning.com">
              Créez aussi votre plateforme de formation en ligne avec
            </a>
          </li>
          <li class="bg-transparent border-0 font-weight-bold h4 list-group-item d-flex justify-content-between align-items-center">
            <a href="https://oschoolelearning.com">
              <img width="100" class="img-fluid" src="/images/schools/logos/oschool.png" alt="Oschool E-learning">
            </a>
          </li>

        </ul>
      </div>
    </div>
    @endif
  </div>
</footer>

<script type="text/javascript">
    var date = new Date();
    var annee = date.getFullYear();
    document.getElementById('year2').innerHTML = annee;
</script>
