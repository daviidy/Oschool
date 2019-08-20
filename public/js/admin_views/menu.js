
$('#addAuthor').on('click', function() {


                  $('#authorBlock').append("<div label='Select Author'><div class='form-group'><label-block required-label='requiredLabel'><label for='author' ng-if='label' class='control-label'><span ng-bind='label'>Ajouter nouvel auteur</span><a style='cursor: pointer;' id='cancelAddAuthor'>Annuler</a></label></label-block><div ng-transclude=''><input id='course-name' what='name' ng-model='course.name' type='text' name='name' maxlength='100' placeholder='Nom complet du prof' autofocus='true'required='' class='form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength'></div></div></div>");
console.log('dave');

});
