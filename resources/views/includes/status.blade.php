<div class="row">
    <div class="col-12">
        @if(session('status'))
        <div class="card-body">

          <div class="status alert alert-success" role="alert">
              {{session('status')}}
          </div>


        </div>
        @endif
        @if(session('status_error'))
        <div class="card-body">

          <div class="status alert alert-danger" role="alert">
              {{session('status_error')}}
          </div>


        </div>
        @endif
    </div>

</div>
