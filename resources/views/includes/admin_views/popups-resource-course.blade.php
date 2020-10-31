<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

<!--popup-->
<div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>


<div id="popup-resource-course" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4><span ng-bind="modalTitle">Ajouter un nouveau cours</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
            -->
            </h4><br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <form action="{{route('resources.store')}}" method="post" style="margin-bottom: inherit;">
                {{ csrf_field() }}
                <div>
                  <select class="js-example-basic-multiple" name="course_id" style="width:250px;">
                    @foreach($school->courses->where('type', 'mooc') as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                 </select>
                </div>
                <input hidden type="text" name="path_id" value="{{$course->id}}">
                <input hidden type="text" name="school_id" value="{{$school->id}}">
                <input hidden type="text" name="type" value="course">
                <button type="submit" class="tch-btn-header-primary fastclickable">Valider</button>
            </form>
        </div>
        <div class="modal-footer"><button ng-bind="modalButton" class="cancel-preview tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>


<!--popup modification resource cours-->
@if(count($course->resources->where('type', 'course')) > 0)
@foreach($course->resources->where('type', 'course') as $resource)
<div id="edit-resource-course-preview{{$resource->id}}" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4>
                <span ng-bind="modalTitle">Modifier le cours</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
                -->
            </h4>
            <br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <form action="{{url('resources', $resource)}}" method="post" style="margin-bottom: inherit;">
                {{ csrf_field() }}
                {{method_field('patch')}}
            <div>
              <select class="js-example-basic-multiple" name="course_id" style="width:250px;">
                @foreach($school->courses->where('type', 'mooc') as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
             </select>
            </div>
            <button type="submit" class="tch-btn-header-primary fastclickable">Valider</button>
        </form>
        </div>
        <div class="modal-footer"><button id="{{$resource->id}}" class="cancel-edit-resource-preview tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>
@endforeach
@endif



<script type="text/javascript">

$(".new-resource-course").on('click', function(){
$('#popup-background').css('display', 'block');
$('#popup-resource-course').css('display', 'block');

});

$(".cancel-preview").on('click', function(){
$('#popup-background').css('display', 'none');
$('#popup-resource-course').css('display', 'none');

});

$(".edit-resource-course").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'block');
$('#edit-resource-course-preview'+id).css('display', 'block');

});

$(".cancel-edit-resource-preview").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'none');
$('#edit-resource-course-preview'+id).css('display', 'none');
});


</script>


<!--pour le multiple select-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
