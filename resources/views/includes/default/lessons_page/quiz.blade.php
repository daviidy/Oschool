@foreach($lesson->quizzes as $quiz)

<style media="screen">
    .selected {
        border: 2px solid #4D90CC;
        margin-top: 2px;
        margin-bottom: 2px;
        background-color: #F8F9FA;
    }

    .quiz-answer:hover {
        background-color: #F8F9FA;
    }

    .is-visible {
        display: block;
    }

    .correct {
        border: 2px solid #2ecc71 !important;
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .incorrect {
        border: 2px solid #e74c3c !important;
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }
</style>

<div class="row">
    <div class="col-12">
        <h4>Quiz</h4>
    </div>
    <div class="pt-3 col-md-12 lecture-attachment-type-quiz" id="{{$quiz->id}}">
        <div class="border rounded-lg">
            @foreach($quiz->questions->sortBy('position') as $question)
                <!--QUIZ-QUESTION -->
                <div class="p-4">
                    <div class="d-md-flex">
                        <div class="bg-dark text-white p-3 rounded-lg shadow h-25">
                            <span class="p-2">{{$loop->index + 1}} / {{count($quiz->questions)}}</span>
                        </div>
                        <div class="">
                            <p class="p-3">{{$question->text}}</p>
                            <div class="p-3">

                            </div>
                        </div>
                    </div>
                </div>
                <!--END QUIZ-QUESTION -->
                <!--QUIZ REPONSE-->
                <div class="pb-3">
                    @foreach($question->options as $option)
                    @if(Auth::user()->answers->where('option_id', $option->id)->first())
                    <div class="">
                        <div class="bg-light quiz-answer d-flex pointer custom-control custom-radio px-5 py-4 border-bottom border-top {{$option->correct == 1 ? 'correct' : 'incorrect'}}">
                            <i class="fas fa-square mr-4 blue-oschool"></i>
                            <p id="option{{$option->id}}" class="quiz-answer-text"> {{$option->text}}</p>
                        </div>
                    </div>
                    @else
                    <div class="">
                        <div class="quiz-answer d-flex pointer custom-control custom-radio px-5 py-4 border-bottom border-top">
                            <i class="far fa-square mr-4"></i>
                            <p id="option{{$option->id}}" class="quiz-answer-text"> {{$option->text}}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            @endforeach

            <div class="bg-light d-flex justify-content-between quiz-controls">
                @if(!session('status'))
                @if(Auth::user()->results->where('quiz_id', $quiz->id)->first() && Auth::user()->results->where('quiz_id', $quiz->id)->first()->restart <= $quiz->attempts && Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result < $quiz->course->result)
                <div class="p-4">
                    <a href="/restartQuiz/{{$quiz->id}}/{{Auth::user()->results->where('quiz_id', $quiz->id)->first()->id}}/{{Auth::user()->id}}" class="btn bg-dark border btn-md text-white" role="button" aria-pressed="true">Reprendre le quiz</a>
                </div>
                @endif
                @endif
                <div class="p-4">
                    @if(!Auth::user()->results->where('quiz_id', $quiz->id)->first() || Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result < $quiz->course->result && Auth::user()->results->where('quiz_id', $quiz->id)->first()->restart <= $quiz->attempts)
                    <a id="check" class="btn bg-oschool text-white border btn-md" role="button" aria-pressed="true">Soumettre</a>
                    @endif
                    <a id="continue-button" class="d-none btn bg-oschool text-white border btn-md" role="button" aria-pressed="true">Continuer</a>
                </div>
            </div>
            @if(Auth::user()->results->where('quiz_id', $quiz->id)->first())
            <!--VOIR LES RESULTAT-->
            <div class="mt-5" id="verifyAnswer">
                <div class="d-flex p-4">
                    <hr class="w-25 mr-0">
                    <p class="border bg-light w-md-25 h-md-25 p-3 text-center rounded-lg">
                        @if(Auth::user()->results->where('quiz_id', $quiz->id)->first() && Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result < $quiz->course->result)
                        <i class="fa fa-times text-danger"></i>
                        <span class="text-danger font-weight-bold">Désolé !</span>
                        @else
                        <i class="fa fa-check green"></i>
                        <span class="green font-weight-bold">Félicitations !</span>
                        @endif
                    </p>
                    <hr class="w-25 ml-0">
                </div>
                <div class="">
                    <p class="text-center">
                        Votre note est: {{ number_format(Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result, 2, ",",".") }} %
                    </p>
                </div>
                <div class="row mt-3 p-1 p-md-5">
                    <div class=" col-md-6 p-3">
                        <div class="p-3">
                            <div class="border border-success rounded-lg p-3 text-success font-weight-bold">
                                <p class="d-inline">Réponses correctes</p>
                                @php
                                $correct = 0;
                                $incorrect = 0;
                                foreach($quiz->options as $option){
                                    foreach($option->answers->where('user_id', Auth::user()->id) as $answer)
                                    if($answer->correct == 1){
                                        $correct += 1;
                                    }
                                    else if($answer->incorrect == 0){
                                        $incorrect += 1;
                                    }
                                }
                                @endphp
                                <span class="float-right d-inline">{{$correct}}</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="border border-danger rounded-lg p-3 text-danger font-weight-bold">
                                <p class="d-inline">Réponses incorrectes</p>
                                <span class="float-right d-inline">{{$incorrect}}</span>
                            </div>
                        </div>
                        <!-- <div class="p-3">
                            <div class="border border-secondary rounded-lg p-3 text-secondary font-weight-bold">
                                <p class="d-inline">Sans réponse</p>
                                <span class="float-right d-inline">0</span>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/images/reponse.png" alt="" class="img-fluid p-3 w-100">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <p class="h5 p-3 ont-weight-light">On dirait que vous avez sauté quelques questions. Voulez-vous essayer à nouveau? Reprendre le quiz Retour</p>
                    </div>
                </div> -->
                @if(!session('status'))
                @if(Auth::user()->results->where('quiz_id', $quiz->id)->first() && Auth::user()->results->where('quiz_id', $quiz->id)->first()->restart <= $quiz->attempts && Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result < $quiz->course->result)
                <div class="p-4 text-center bg-light">
                    <a href="/restartQuiz/{{$quiz->id}}/{{Auth::user()->results->where('quiz_id', $quiz->id)->first()->id}}/{{Auth::user()->id}}" class="btn bg-dark text-white border btn-md active" role="button" aria-pressed="true">Reprendre le quiz</a>
                </div>
                @endif
                @endif
            </div>
            <!-- FIN VOIR LES RESULTAT-->
            @endif
        </div>
    </div>
</div>


<!-- <script>
$(document).ready(function() {
  $("#viewAnswer").click(function() {
    $(this).addClass("d-none");
    $("#verifyAnswer").removeClass("d-none")
  });

  $("#restartQuiz").click(function() {
    $("#verifyAnswer").addClass("d-none");
    $("#viewAnswer").removeClass("d-none")
  });
});
</script> -->

<!-- si l'utilisateur n'a pas de result relatif au quiz ou la note de l'utilisateur
est inférieur à la note requise et qu'il a le droit de recommencer -->
@if(!Auth::user()->results->where('quiz_id', $quiz->id)->first() || Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result < $quiz->course->result && Auth::user()->results->where('quiz_id', $quiz->id)->first()->restart <= $quiz->attempts)
<script type="text/javascript">

$('.quiz-answer').on('click', function(){

    $(this).parent().toggleClass('selected');
    $(this).parent().find('i').toggleClass('fas');
    $(this).parent().find('i').toggleClass('blue-oschool');
    $(this).parent().find('i').toggleClass('far');

});

$('#continue-button').click(function() {
    location.reload();
});


$("#check").on('click', function(event) {
    event.preventDefault();
    $(this).addClass('d-none');
    $('.quiz-controls').append('<p id="loading">\
    <strong>Chargement du résultat...</strong>\
    </p>');
    var tab = [];
    var quiz = $('.lecture-attachment-type-quiz').attr('id');
    console.log(quiz);
    var selected_options = $(".selected .quiz-answer-text");
    $.each(selected_options, function(index, value){
    tab.push(value.textContent);
    });
    console.log(JSON.stringify(tab));


    // ajax post
    $.ajax({
        type: "post",
        url: "/check",
        dataType: "json",
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'options': JSON.stringify(tab),
            'quiz': quiz,
        },
        cache: false,
        success: function (data){
            console.log(data.options);
            console.log(data.result);

            $("#check").remove();
            $('#loading').remove();
            $("#continue-button").removeClass('d-none');
            //pour chaque options du quiz
            $.each(data.options, function(index, value){

                //on sélectionne l'élément HTML
                //correspondant
                var option = $('#option'+value.id).parents().eq(1);
                //on check si cet élément est sélectionné
                if (option.hasClass("selected")) {
                //si il est sélectionné, on check si
                //s'il est correct on met cet element en vert avec la coche
                    if (value.correct == 1) {
                        option.addClass('correct');
                        // option.find('.quiz-answer').css('border', '1px solid #2ecc71');
                        // option.find('.quiz-answer-icon-correct').css('display', 'block');
                    }
                    //sinon on met cet element en rouge
                    else {
                        option.addClass('incorrect');
                        // option.find('.quiz-answer').css('border', '1px solid #e74c3c !important')
                        // option.find('.quiz-answer-icon-incorrect').css('display', 'block');
                    }
                }
                //si il n'est pas sélectionné on check si il est correct
                else {
                    //si il est correct on le met en vert sans la coche
                    if (value.correct == 1) {
                        option.addClass('correct');
                        //option.find('.quiz-answer').css('border', '1px solid #2ecc71');
                    }

                }



            });

        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
    // this make sure the form doesn't load
    // a form pause
    return false;
});


</script>

@endif






@endforeach
