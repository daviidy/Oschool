@foreach($lesson->quizzes as $quiz)




<div class="lecture-attachment lecture-attachment-type-quiz" id="{{$quiz->id}}">
    <div class="attachment-data" data-data="{&quot;answerKey&quot;:{&quot;answer-1&quot;:[&quot;oschool&quot;]}}"
      data-schema="{&quot;type&quot;:&quot;object&quot;,&quot;required&quot;:[&quot;answer-1&quot;],&quot;properties&quot;:{&quot;answer-1&quot;:{&quot;enum&quot;:[&quot;oschool&quot;,&quot;elavoo&quot;],&quot;type&quot;:&quot;string&quot;,&quot;title&quot;:&quot;david&quot;,&quot;description&quot;:&quot;single&quot;}}}"
      data-content-type="null" data-id="24323873" data-is-published="true" data-graded="null">
        <div class="quiz-content">
            <div id="quiz-app">
                <div class="quiz-wrapper attachment-block-wrapper">
                    <div class="attachment-block-label">Quiz</div>
                    @if(Auth::user()->results->where('quiz_id', $quiz->id)->first())
                    <div class="quiz Quiz answered finished single">
                      <div class="quiz-finished Quiz-complete"><i class="fa fa-check success"></i>
                          <div class="quiz-finished-text">
                              Votre note est {{ number_format(Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result, 2, ",",".") }} %
                          </div>
                          <!--
                          <button class="btn btn-primary ng-scope">
                              Retake Quiz
                          </button>
                      -->
                      </div>
                    </div>
                   @endif

                   @if(session('status'))
                   <div class="alert alert-success">
                     {{session('status')}}
                    </div>
                   @endif


                    @foreach($quiz->questions->sortBy('position') as $question)
                    <div style="margin-top: 6rem; {{$loop->last ? 'margin-bottom: 10rem;' : ''}}" class="quiz Quiz single">
                        <div class="quiz-progress">{{$question->position}} / {{count($quiz->questions)}}</div>
                        <div class="quiz-question-outer" style="height: 168px;">
                            <div>
                                <article class="Quiz-item">
                                    <div class="quiz-question">{{$question->text}}</div>
                                    <div class="quiz-answer-container">
                                        @foreach($question->options as $option)
                                          @if(Auth::user()->answers->where('option_id', $option->id)->first())
                                        <div class="quiz-answer-container">
                                            <div style="border: {{$option->correct == 1 ? '1px solid #2ecc71 !important' : '1px solid #e74c3c !important'}}" role="button" class="quiz-answer">
                                                <span id="option{{$option->id}}" class="quiz-answer-text">{{$option->text}}</span>
                                            </div>
                                            <div class="quiz-answer-icon">
                                                <i style="display: {{$option->correct == 1 ? 'block' : 'none'}}" class="quiz-answer-icon-correct fa fa-check"></i>
                                                <i style="display: {{$option->correct == 0 ? 'block' : 'none'}}" class="quiz-answer-icon-incorrect fa fa-times"></i>
                                                <i class="quiz-answer-icon-missed fa fa-circle-o"></i>
                                            </div>
                                        </div>
                                        @else
                                        <div class="quiz-answer-container">
                                            <div role="button" class="quiz-answer">
                                                <span id="option{{$option->id}}" class="quiz-answer-text">{{$option->text}}</span>
                                            </div>
                                            <div class="quiz-answer-icon">
                                                <i class="quiz-answer-icon-correct fa fa-check"></i>
                                                <i class="quiz-answer-icon-incorrect fa fa-times"></i>
                                                <i class="quiz-answer-icon-missed fa fa-circle-o"></i>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        <div class="quiz-answer-icon"><i class="quiz-answer-icon-correct fa fa-check"></i><i class="quiz-answer-icon-incorrect fa fa-times"></i><i class="quiz-answer-icon-missed fa fa-circle-o"></i></div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="quiz-controls">
                        <button class="btn btn-primary pull-left">
                        ‹ Retour
                        </button>
                        @if(!Auth::user()->results->where('quiz_id', $quiz->id)->first() || Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result !== '0')
                        <button id="check" class="btn btn-primary pull-right check-answer-button is-visible">
                            Soumettre
                        </button>
                        @endif
                        <button id="continue-button" class="btn btn-primary pull-right">
                            Continuer ›
                        </button>
                        @if(Auth::user()->results->where('quiz_id', $quiz->id)->first() && Auth::user()->results->where('quiz_id', $quiz->id)->first()->restart < 3)
                        <a href="/restartQuiz/{{$quiz->id}}/{{Auth::user()->results->where('quiz_id', $quiz->id)->first()->id}}/{{Auth::user()->id}}">
                        <button class="btn btn-primary pull-left check-answer-button is-visible">
                            Reprendre
                        </button>
                        </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Quiz attachment -->


</div>


@if(!Auth::user()->results->where('quiz_id', $quiz->id)->first() || Auth::user()->results->where('quiz_id', $quiz->id)->first()->quiz_result !== '0')
<script type="text/javascript">

$('.quiz-answer').on('click', function(){

    $(this).parent().toggleClass('selected');

});

$('#continue-button').click(function() {
    location.reload();
});


$("#check").on('click', function(event) {
    event.preventDefault();
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
            $("#continue-button").addClass('is-visible');
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
                        option.find('.quiz-answer').css('border', '1px solid #2ecc71');
                        option.find('.quiz-answer-icon-correct').css('display', 'block');
                    }
                    //sinon on met cet element en rouge
                    else {
                        option.addClass('incorrect');
                        option.find('.quiz-answer').css('border', '1px solid #e74c3c !important')
                        option.find('.quiz-answer-icon-incorrect').css('display', 'block');
                    }
                }
                //si il n'est pas sélectionné on check si il est correct
                else {
                    //si il est correct on le met en vert sans la coche
                    if (value.correct == 1) {
                        option.addClass('correct');
                        option.find('.quiz-answer').css('border', '1px solid #2ecc71');
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
