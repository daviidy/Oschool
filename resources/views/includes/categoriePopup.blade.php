<!-- Modal-->
<div  class="modal fade" id="category" tabindex="-1" aria-labelledby="categoryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content bg-transparent border-0">
      <div class=" rounded-lg popup-shadow">
        <div class="bg-white" style="border-radius: 7px 7px 0 0;">
          <span class="float-right position-absolute rounded-circle svg-delete close" data-dismiss="modal" aria-label="Close"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg></span>
          <div class="text-center p-3" style="bottom:30px">
              <div class="">
                <p class="w-75 mx-auto mb-0 text-center h4 pt-3 font-weight-bold ">Tous nos catégories</p>
              </div>
          </div>
        </div>
        @if(count($school->categories) > 0)

        <section class="container-fluid bg-white py-3">
          <div class="row">
            <div class="col-md-12">
              <div class="row" id="scrolling-wrapper">
                  @foreach($school->categories as $category)
                  @if(count($category->courses) > 0)
                <div class="col-md-4 pb-3">
                  <div class=" border p-0 shadow-sm">
                    <a href="/school/{{$school->id}}/categories/{{$category->id}}" class="text-decoration-none">
                      <img src="/images/categories/{{$category->image}}" alt="" class="img-fluid w-100">
                      <p class="p-3 font-weight-bold h6">{{$category->name}}</p>
                    </a>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </section>
        @endif
      </div>
    </div>
  </div>
</div>
