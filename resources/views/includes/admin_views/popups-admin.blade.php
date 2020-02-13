<!--popup-->
<div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>

<div id="popup-delete" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog" ng-class="size ? 'modal-' + size : ''">
    <div class="modal-content" modal-transclude="">
        <div what="confirm modal" class="confirm-modal" style="text-align: center;">
          <!--  <div class="modal-body angular-confirm-text">

                <h4 ng-if="data.title" ng-bind="::data.title" class="angular-confirm-title" trackid="1804" style="">Confirmer</h4>
                <!----
                <p what="text" ng-bind="::data.text" class="angular-confirm-copy" trackid="1805">Êtes-vous vraiment sûr de vouloir supprimer ce cours? Cette action est irréversible.</p>
            </div>
            <div class="modal-footer center angular-confirm-footer" trackid="1787">
                <!----<button what="cancel button" ng-if="data.cancel" ng-click="cancel()" ng-bind="::data.cancel || 'Cancel'" class="tch-btn-header-secondary fastclickable" trackid="1806" style="">Annuler</button>
                <!----<button what="ok button" ng-click="ok()" ng-bind="::data.ok || 'OK'" class="tch-btn-header-primary fastclickable" trackid="1789">OK</button></div>
                -->
                <h4 ng-if="data.title" ng-bind="::data.title" class="angular-confirm-title" style="">Confirmer</h4>
                <!---->
                <p what="text" ng-bind="::data.text" class="angular-confirm-copy">Êtes-vous vraiment sûr de vouloir supprimer ce cours? Cette action est irréversible.</p>
            </div>
            <div class="modal-footer center angular-confirm-footer">
                <!----><button id="cancel" what="cancel button" ng-if="data.cancel" ng-click="cancel()" ng-bind="::data.cancel || 'Cancel'" class="tch-btn-header-secondary fastclickable" style="">Annuler</button>
                <form action="{{ route('courses.destroy', $course) }}" method="post" style="margin-bottom: inherit;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                <!----><button what="ok button" ng-click="ok()" ng-bind="::data.ok || 'OK'" class="tch-btn-header-primary fastclickable">OK</button>
            </form>
            </div>

        </div>
    </div>
</div>
</div>






<div id="popup-preview" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4><span ng-bind="modalTitle">Voir un aperçu du cours</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
            -->
            </h4><br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <center>
                <div class="row">
                    <div class="tch-section-content tch-thumbnail-link-wrapper col-md-5 col-sm-5 col-xs-5 col-md-offset-1">
                        <a href="{{$course->type == 'mooc' ? route('course.slug', $course->slug) : route('path.slug', $course->slug)}}" target="_blank" rel="noopener"
                          class="tch-thumbnail-link text-center fastclickable">
                          <img src="https://david-yao-s-school.teachable.com/admin/assets/images/preview-as-visitor.svg" id="test-id-preview-sales-page"><i class="fa fa-external-link"></i><br><strong>Page de vente&nbsp;</strong>
                            <div class="muted">en tant que visiteur</div>
                        </a></div>
                    <div class="tch-section-content tch-thumbnail-link-wrapper col-md-5 col-sm-5 col-xs-5 shift-right">
                        <a href="{{$course->type == 'mooc' ? route('enrolled.slug', $course->slug) : route('path.slug', $course->slug)}}" target="_blank" rel="noopener"
                          class="tch-thumbnail-link text-center fastclickable"><img src="https://david-yao-s-school.teachable.com/admin/assets/images/preview-as-enrolled-student.svg"><i class="fa fa-external-link"></i><br><strong>Programme du cours&nbsp;</strong>
                            <div class="muted">en tant qu'étudiant inscrit</div>
                        </a></div>
                </div><br>
            </center>
        </div>
        <div class="modal-footer"><button id="cancel-preview" ng-bind="modalButton" class="tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>


<script type="text/javascript">

$("#delete").on('click', function(){

$('#popup-background').css('display', 'block');
$('#popup-delete').css('display', 'block');

});

$("#cancel").on('click', function(){

$('#popup-background').css('display', 'none');
$('#popup-delete').css('display', 'none');

});

</script>


<script type="text/javascript">

$("#preview").on('click', function(){

$('#popup-background').css('display', 'block');
$('#popup-preview').css('display', 'block');

});

$("#cancel-preview").on('click', function(){

$('#popup-background').css('display', 'none');
$('#popup-preview').css('display', 'none');

});

</script>
