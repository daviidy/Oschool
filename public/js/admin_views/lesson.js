$(document).ready(function(){

    $('.tab a').on('click', function (event) {
        event.preventDefault();

        $('.active').removeClass('active');
        $(this).parent().addClass('active');
        $('ui-view.tab-container').hide();
        $($(this).attr('href')).show();
    });

    $('#category-tabs a:first').trigger('click'); // Default


//logique quiz

    $('#add-option').on('click', function(){
      $('.multiple-choice').append("<div>\
                            <div class='input-group'>\
                                <div id='checkbox-correct' class='input-group-addon'>\
                                    <div class='checkbox checkbox-primary'>\
                                      <input type='checkbox' name='correct' class='ng-pristine ng-untouched ng-valid ng-not-empty'>\
                                          <label for='new-answer-0'></label></div></div>\
                                <input placeholder='Choix de réponse' name='text_question' class='text_question_quiz form-control multiple-choice-answer-input ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched' style=''>\
                                <div ng-if='newQuestion.answers.length > 1' class='input-group-btn left-10' style=''>\
                                    <button id='answer-remove' type='button' tabindex='-1' class='tch-btn-content-danger fastclickable'><i class='fa fa-remove'></i></button>\
                                  </div>\
                            </div>\
                            <p></p>\
                        </div>\
      ");
    });





});
