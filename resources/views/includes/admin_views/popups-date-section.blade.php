<!--popup-->
<div style="display: none;" id="popup-background" class="modal-backdrop fade in" modal-animation-class="fade" modal-in-class="in" modal-backdrop="modal-backdrop" modal-animation="true" style="z-index: 1040;"></div>

@if(count($course->sections) > 0)
@foreach($course->sections->sortBy('position') as $section)

<div id="popup-date-preview{{$section->id}}" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4><span ng-bind="modalTitle">Publier la section "{{$section->title}}" à une date précise</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
            -->
            </h4><br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <form action="{{route('drips.store')}}" method="post" style="margin-bottom: inherit;">
                {{ csrf_field() }}
                <bootstrap-decorator form="schemaForm.form[0]">
                    <div ng-class="{'has-error': form.disableErrorState !== true &amp;&amp; hasError(), 'has-success': form.disableSuccessState !== true &amp;&amp; hasSuccess(), 'has-feedback': form.feedback !== false}"
                      class="form-group schema-form-select  has-feedback"><label ng-show="showTitle()" class="control-label">Date et heure</label>
                      <input type="date" name="date">
                      <input hidden type="text" name="section_id" value="{{$section->id}}">

                      </div>
                </bootstrap-decorator>
            <!----><button type="submit" class="tch-btn-header-primary fastclickable">Valider</button>
        </form>
        </div>
        <div class="modal-footer"><button id="{{$section->id}}" ng-bind="modalButton" class="cancel-preview tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>

@if($section->drip)
<div id="edit-date-preview{{$section->id}}" modal-render="true" tabindex="-1" role="dialog" class="modal fade fastclickable in" modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" ng-click="close($event)" modal-window="modal-window"
size="md" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: none;">
<div class="modal-dialog modal-md" ng-class="size ? 'modal-' + size : ''" style="">
    <div class="modal-content" modal-transclude="">
        <div class="modal-header text-center">
            <h4><span ng-bind="modalTitle">Modifier la date de publication de la section "{{$section->title}}"</span>
                <!--
                <button type="button" ng-click="cancel()" class="close fastclickable">×</button>
            -->
            </h4><br>
            <p><strong ng-bind="modalDescription"></strong></p>
        </div>
        <div class="modal-body">
            <form action="{{url('drips', $section->drip)}}" method="post" style="margin-bottom: inherit;">
                {{ csrf_field() }}
                {{method_field('patch')}}
                <bootstrap-decorator form="schemaForm.form[0]">
                    <div ng-class="{'has-error': form.disableErrorState !== true &amp;&amp; hasError(), 'has-success': form.disableSuccessState !== true &amp;&amp; hasSuccess(), 'has-feedback': form.feedback !== false}"
                      class="form-group schema-form-select  has-feedback"><label ng-show="showTitle()" class="control-label">Date et heure</label>
                      <input type="date" name="date">
                      </div>
                </bootstrap-decorator>
            <!----><button type="submit" class="tch-btn-header-primary fastclickable">Valider</button>
        </form>
        </div>
        <div class="modal-footer"><button id="{{$section->id}}" ng-bind="modalButton" class="cancel-edit-preview tch-btn-header-primary fastclickable">Annuler</button></div>
    </div>
</div>
</div>
@endif

@endforeach
@endif


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

$(".show-date-section").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'block');
$('#popup-date-preview'+id).css('display', 'block');

});

$(".cancel-preview").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'none');
$('#popup-date-preview'+id).css('display', 'none');

});

$(".edit-date-section").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'block');
$('#edit-date-preview'+id).css('display', 'block');

});

$(".cancel-edit-preview").on('click', function(){
let id = $(this).attr('id');
$('#popup-background').css('display', 'none');
$('#edit-date-preview'+id).css('display', 'none');

});


</script>
