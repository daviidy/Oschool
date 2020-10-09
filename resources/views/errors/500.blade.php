<!DOCTYPE html>
<html>
<head>
    <title>500 Internal Error</title>
    <style media="screen">
    #particles-js {
position: absolute;
width: 100%;
height: 100%;
}

body {
background: #97cfca;
overflow: hidden;
}

.terminal-window {
text-align: left;
width: 37.5rem;
height: 22.5rem;
border-radius: .625rem;
margin: auto;
position: relative;
top: 10.5rem;
}

.terminal-window header {
background: #E0E8F0;
height: 1.875rem;
border-radius: .5rem .5rem 0 0;
padding-left: .625rem;
}

.terminal-window header .button {
width: .75rem;
height: .75rem;
margin: .625rem .25rem 0 0;
display: inline-block;
border-radius: .5rem;
}

.terminal-window header .button.green {
background: #3BB662;
}

.terminal-window header .button.yellow {
background: #E5C30F;
}

.terminal-window header .button.red {
background: #E75448;
}

.terminal-window section.terminal {
color: white;
font-family: Menlo, Monaco, "Consolas", "Courier New", "Courier";
font-size: 11pt;
background: #30353A;
padding: .625rem;
box-sizing: border-box;
position: absolute;
width: 100%;
top: 1.875rem;
bottom: 0;
overflow: auto;
}

.terminal-window section.terminal .typed-cursor {
opacity: 1;
-webkit-animation: blink 0.7s infinite;
-moz-animation: blink 0.7s infinite;
animation: blink 0.7s infinite;
}
@keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}
@-webkit-keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}
@-moz-keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}

.terminal-data { display: none; }
.terminal-window .gray { color: gray; }
.terminal-window .green { color: green;}

/*Media for mobile responsive viewing*/
@media only screen and (max-width: 600px) {
.terminal-window {
text-align: left;
width: 37.5vmin;
height: 22.5vmin;
border-radius: .625vmin;
margin: auto;
position: relative;
top: 30.5vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header {
background: #E0E8F0;
height: 1.875vmin;
border-radius: .5vmin .5vmin 0 0;
padding-left: 1vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button {
width: .75vmin;
height: .75vmin;
margin: .625vmin .25vmin 0 0;
display: inline-block;
border-radius: .5vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.green {
background: #3BB662;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.yellow {
background: #E5C30F;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.red {
background: #E75448;
}
}
@media only screen and (max-width: 600px) {
.terminal-window section.terminal {
color: white;
font-family: Menlo, Monaco, "Consolas", "Courier New", "Courier";
font-size: .6875vmin;
background: #30353A;
padding: .625vmin;
box-sizing: border-box;
position: absolute;
width: 100%;
top: 1.875vmin;
bottom: 0;
overflow: auto;
}
}
.terminal-window section.terminal .typed-cursor {
opacity: 1;
-webkit-animation: blink 0.7s infinite;
-moz-animation: blink 0.7s infinite;
animation: blink 0.7s infinite;
}
@keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}
@-webkit-keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}
@-moz-keyframes blink{
0% { opacity:1; }
50% { opacity:0; }
100% { opacity:1; }
}

.terminal-data { display: none; }
.terminal-window .gray { color: gray; }
.terminal-window .green { color: green;}
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <div class="terminal-window">
      <header>
        <div class="button green"></div>
        <div class="button yellow"></div>
        <div class="button red"></div>
      </header>
      <section class="terminal">
        <div class="history"></div>
        $&nbsp;<span class="prompt"></span>
        <span class="typed-cursor"></span>

      </section>
    </div>
    <!-- data -->
      <div class="terminal-data mimik-run-output">
     <br>Found 1 feature<br>
     ----------------------------------------------<br>
     Feature: Bottles  <span class="gray"># ./features/bottles.feature</span><br><br>

     &nbsp;&nbsp;Scenario: A bottle falls from the wall<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">Given 100 green bottles are standing</span><br>
     &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">when 1 green bottle accidentally falls</span><br>
     &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">then there are 99 green bottles standing</span><br>
     <br>
        <span class="gray">&nbsp;---------- ----------- ------- -------- --------</span><br>
    &nbsp;&nbsp;Features&nbsp;&nbsp;&nbsp;Scenarios&nbsp;&nbsp;&nbsp;Steps&nbsp;&nbsp;&nbsp;Passed&nbsp;&nbsp;&nbsp;Failed<br>
        <span class="gray">&nbsp;---------- ----------- ------- -------- --------</span><br>
    &nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓ 4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0      <br>
      <br>
    &nbsp;&nbsp;Completed 1 feature in 0.01s<br>
      <br>
    </div>

    <script type="text/javascript">
    particlesJS("particles-js", {
"particles": {
"number": {
  "value": 155,
  "density": {
    "enable": true,
    "value_area": 789.1476416322727
  }
},
"color": {
  "value": "#ffffff"
},
"shape": {
  "type": "circle",
  "stroke": {
    "width": 0,
    "color": "#000000"
  },
  "polygon": {
    "nb_sides": 5
  },
  "image": {
    "src": "img/github.svg",
    "width": 100,
    "height": 100
  }
},
"opacity": {
  "value": 0.48927153781200905,
  "random": false,
  "anim": {
    "enable": true,
    "speed": 1,
    "opacity_min": 0,
    "sync": false
  }
},
"size": {
  "value": 2,
  "random": true,
  "anim": {
    "enable": true,
    "speed": 2,
    "size_min": 0,
    "sync": false
  }
},
"line_linked": {
  "enable": true,
  "distance": 150,
  "color": "#ffffff",
  "opacity": 0.4,
  "width": 1
},
"move": {
  "enable": true,
  "speed": 0.2,
  "direction": "none",
  "random": true,
  "straight": false,
  "out_mode": "out",
  "bounce": false,
  "attract": {
    "enable": false,
    "rotateX": 600,
    "rotateY": 1200
  }
}
},
"interactivity": {
"detect_on": "canvas",
"events": {
  "onhover": {
    "enable": true,
    "mode": "bubble"
  },
  "onclick": {
    "enable": true,
    "mode": "push"
  },
  "resize": true
},
"modes": {
  "grab": {
    "distance": 400,
    "line_linked": {
      "opacity": 1
    }
  },
  "bubble": {
    "distance": 83.91608391608392,
    "size": 1,
    "duration": 3,
    "opacity": 1,
    "speed": 3
  },
  "repulse": {
    "distance": 200,
    "duration": 0.4
  },
  "push": {
    "particles_nb": 4
  },
  "remove": {
    "particles_nb": 2
  }
}
},
"retina_detect": true
});

$(function() {
var data = [
{
  action: 'type',
  strings: ["Accès aux fichiers du serveur.."],
  output: 'récupération des fichiers..<br><br>',
  postDelay: 1000
},
{
action: 'type',
strings: ["Erreur 500"],
output: '<span class="gray">Oops, il semble qu\'un de nos développeurs se soit endormi</><br>&nbsp;',
postDelay: 1000
},
{
action: 'type',
strings: ["Oops, il semble qu'un de nos développeurs se soit endormi", 'S\'il vous plaît, remontez l\'erreur à david@oschool.ci ou revenez en arrière.'],
postDelay: 2000
}

];
runScripts(data, 0);
});

function runScripts(data, pos) {
var prompt = $('.prompt'),
    script = data[pos];
if(script.clear === true) {
  $('.history').html('');
}
switch(script.action) {
    case 'type':
      // cleanup for next execution
      prompt.removeData();
      $('.typed-cursor').text('');
      prompt.typed({
        strings: script.strings,
        typeSpeed: 30,
        callback: function() {
          var history = $('.history').html();
          history = history ? [history] : [];
          history.push('$ ' + prompt.text());
          if(script.output) {
            history.push(script.output);
            prompt.html('');
            $('.history').html(history.join('<br>'));
          }
          // scroll to bottom of screen
          $('section.terminal').scrollTop($('section.terminal').height());
          // Run next script
          pos++;
          if(pos < data.length) {
            setTimeout(function() {
              runScripts(data, pos);
            }, script.postDelay || 1000);
          }
        }
      });
      break;
    case 'view':

      break;
}
}

    </script>

</body>
</html>
