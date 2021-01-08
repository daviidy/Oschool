<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/oschool.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d86848cfe0.js"></script>
  </head>
  <body>
    <section class="hero-bg">
      <div class="container-fluid p-md-4 p-3">
        <div class="row p-md-5 p-3 justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="text-white pb-4 pb-md-3">
              <h1>Apprends ce que tu veux</h1>
              <h2 class="font-weight-light">Apprenez à votre rythme Étudiez n'importe quel sujet, à tout moment. Choisissez dès maintenant parmi les nombreux cours dirigés par nos experts.</h2>
              <div class="pt-md-3">
                <a href="https://oschoolelearning.com/schools" class="text-decoration-none">
                  <button class="btn w-100 p-3 text-white bg-oschool btn-size" type="button" name="button">Commencez MAINTENANT !</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="">
              <div class="card">
                <div class="card-header p-md-3 p-1">
                  <p class="text-center">Commencez dès maintenant <span>et sans engagement</span> </p>
                </div>
                <div class="card-body">
                  <img style="border-radius: 8px;width:100%;" src="/images/divers/osch.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid p-md-5">
        <div class="p-3 p-md-3">
          <div class="font-weight-light h2">
            <svg width="40px" height="40px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-194.000000, -781.000000)" stroke="#5B5B6A">
                          <g transform="translate(195.000000, 782.000000)">
                              <path
                                d="M6.44650411,0.834509391 L19.5184532,0.834509391 C20.6230227,0.834509391 21.5184532,1.72993989 21.5184532,2.83450939 C21.5184532,3.01518473 21.493971,3.19502692 21.4456749,3.36912764 L16.6163664,20.7780879 C16.3211049,21.8424631 15.2189017,22.4659529 14.1545265,22.1706913 C14.0633879,22.1454092 13.9741575,22.1136939 13.8875071,22.0757844 L1.66779836,16.7296618 C0.722421453,16.3160594 0.246903478,15.2511175 0.570006905,14.2711131 L4.54707498,2.20827541 C4.81738074,1.38841153 5.58323012,0.834509391 6.44650411,0.834509391 Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M5.5,9.5 L16.5,11.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                              <path d="M4.5,11.5 L15.5,13.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                              <path d="M3.5,13.5 L14.5,15.5" id="Line-2" stroke-linecap="square" fill-rule="nonzero"></path>
                              <circle fill-rule="nonzero" cx="8" cy="5" r="1"></circle>
                          </g>
                      </g>
                  </g>
              </svg>
              Nos écoles
          </div>
          <div class="search py-3">
            <input class="form-control" id="schoolSearch" type="text" placeholder="Filtrer par école">
          </div>
        </div>
        <div class="row p-md-4" id="school-box">
          @foreach($schools as $school)
          @if($school->status == 'active' && $school->user->isAdmin())
            <div class="col-md-4 p-4 filter">
              <div class="school-img shadow rounded-lg text-white" style="background-image:url('/images/schools/logos/{{$school->logo}}') ">
                <div class="overlay rounded-lg w-100">
                <div class="position-absolute p-2 h6 before-green pt-md-4">
                  <p class="before-green-dot p-2 text-center rounded-lg">{{count($school->courses)}} cours</p>
                </div>
                <div class="text-center position-relative school-text">
                  <h4 class="h3 p-md-3 p-2">{{$school->name}}</h4>
                  <p class="h3">
                    <span class="btn bg-oschool rounded-pill btn-lg px-md-5 px-3">
                      <a href="{{url('schools', $school)}}" class="text-decoration-none text-white">
                        Voir l'école
                      </a>
                    </span>
                  </p>
                </div>
              </div>
              </div>
            </div>

        @endif
        @endforeach

          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){
          $("#schoolSearch").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
              count = 0;

            // Loop through the comment list
            $('#school-box .filter').each(function() {


              // If the list item does not contain the text phrase fade it out
              if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).hide();

                // Show the list item if the phrase matches and increase the count by 1
              } else {
                $(this).show();
                count++;
              }

            });

          });

        });
    </script>

  </body>
</html>
