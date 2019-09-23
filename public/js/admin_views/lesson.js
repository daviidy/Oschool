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

    $('.add-option').on('click', function(){
      $(this).parents('.multiple-choice').append("<div class='reponses'>\
                            <div class='input-group'>\
                                <div id='checkbox-correct' class='input-group-addon'>\
                                    <div class='checkbox checkbox-primary'>\
                                      <input type='checkbox' name='correct' class='ng-pristine ng-untouched ng-valid ng-not-empty'>\
                                          <label for='new-answer-0'></label></div></div>\
                                <input placeholder='Choix de réponse' name='text_question' class='text_question_quiz form-control multiple-choice-answer-input ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched' style=''>\
                                <input type='hidden' name='option_id' value = ''>\
                                <div ng-if='newQuestion.answers.length > 1' class='input-group-btn left-10' style=''>\
                                    <button type='button' tabindex='-1' class='answer-remove tch-btn-content-danger fastclickable'><i class='fa fa-remove'></i></button>\
                                  </div>\
                            </div>\
                            <p></p>\
                        </div>\
      ");
    });

    $('.edit-option').on('click', function(){
      $(this).parents('.multiple-choice').append("<div class='reponses'>\
                            <div class='input-group'>\
                                <div id='checkbox-correct' class='input-group-addon'>\
                                    <div class='checkbox checkbox-primary'>\
                                      <input type='checkbox' name='correct' class='ng-pristine ng-untouched ng-valid ng-not-empty'>\
                                          <label for='new-answer-0'></label></div></div>\
                                <input placeholder='Choix de réponse' name='text_question' class='text_question_quiz_edit form-control multiple-choice-answer-input ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched' style=''>\
                                <input type='hidden' name='option_id' value = ''>\
                                <div ng-if='newQuestion.answers.length > 1' class='input-group-btn left-10' style=''>\
                                    <button type='button' tabindex='-1' class='answer-remove tch-btn-content-danger fastclickable'><i class='fa fa-remove'></i></button>\
                                  </div>\
                            </div>\
                            <p></p>\
                        </div>\
      ");
    });






//si on clique sur edit, on cache le bloc de
//présentaiton d'une question et
//on affiche son bloc d'édition
    $('.edit_quiz').on('click', function(){
      $(this).parents().eq(1).find('.quiz-question').removeClass('ng-hide');
      $(this).parents().eq(1).find('.quiz-question').addClass('ng-valid');
      $(this).parents().eq(1).find('.question').removeClass('ng-valid');
      $(this).parents().eq(1).find('.question').addClass('ng-hide');
      $(this).parents().eq(1).find('.question-save-2').removeClass('ng-hide');
      $(this).parents().eq(1).find('.question-save-2').addClass('ng-valid');
      $(this).parents().eq(1).find('.edit-question').removeClass('ng-hide');
      $(this).parents().eq(1).find('.edit-question').addClass('ng-valid');
      $(this).parents().eq(1).find('#question-save-1').css('display', 'none');
    });









});
