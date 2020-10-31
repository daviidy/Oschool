<!--popup-->
<div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>


<div id="popup-resource-project" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4><span ng-bind="modalTitle">Ajouter un nouveau projet ou exercice</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
            -->
            </h4><br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <form action="{{route('projects.store')}}" method="post" style="margin-bottom: inherit;">
                {{ csrf_field() }}
                <div>
                  <input type="text" name="title" value="" placeholder="Titre du projet ou exercice">
                </div>
                <input hidden type="text" name="path_id" value="{{$course->id}}">
                <input hidden type="text" name="school_id" value="{{$school->id}}">
                <input hidden type="text" name="type" value="project">
                <button type="submit" class="tch-btn-header-primary fastclickable">Valider</button>
            </form>
        </div>
        <div class="modal-footer"><button ng-bind="modalButton" class="cancel-preview tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>



<script type="text/javascript">

$(".new-resource-project").on('click', function(){
$('#popup-background').css('display', 'block');
$('#popup-resource-project').css('display', 'block');

});

$(".cancel-preview").on('click', function(){
$('#popup-background').css('display', 'none');
$('#popup-resource-project').css('display', 'none');

});


</script>
