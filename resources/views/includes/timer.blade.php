

<link rel="stylesheet" href="/css/timer.css">



<section id="sticky-banner" class="permanent-stick sticky green-countdown timer"  >
    <div class="content-container">
      <h3 class="header">
        2 semaines pour devenir comptable professionnel. Rejoins nous vite.
      </h3>
        <div  id="sticky-banner-countdown" class="countdown-timer-component" data-on-end="">
    <div class="data-payload" data-end="2020-08-03T23:59:00-05:00"></div>
    <div class="days-container">
      <p class="countdown-number days" id="days"></p>
      <p class="countdown-label days-label">JOURS</p>
    </div>
    <div class="hours-container">
      <p class="countdown-number hours" id="hours"></p>
      <p class="countdown-label hours-label">HEURES</p>
    </div>
    <div class="minutes-container">
      <p class="countdown-number minutes" id="mins"></p>
      <p class="countdown-label minutes-label">MINS</p>
    </div>
    <div class="seconds-container">
      <p class="countdown-number seconds" id="secs"></p>
      <p class="countdown-label seconds-label">SECS</p>
    </div>
  </div>

      <a class="desktop btn  register-button sticky-banner-button" href="https://oschoolelearning.com/course/formation-pratique-au-metier-de-comptable-professionnel">
        Profitez de l'offre
      </a>
      <a class="mobile btn  register-button sticky-banner-button" href="https://oschoolelearning.com/schools">
        Go
      </a>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/countdown/2.6.0/countdown.min.js" integrity="sha256-SECU2CXX/L0UAxX9pvFJ6cs1qiGsPEFDmVSGndEJRsE=" crossorigin="anonymous"></script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("August 10, 2020 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("mins").innerHTML = minutes;
  document.getElementById("secs").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("sticky-banner").innerHTML = "<h3 style='padding-top: 10px;text-align: center';>FINI...</h3>";
  }
}, 1000);
</script>
