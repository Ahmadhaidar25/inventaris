 @extends('main.utama_layout')
 @section('title')
 Bantuan
 @endsection
 @section('content1')
 <h2 class="text-center py-3">Bantuan</h2>

 <div class="container py-2 mt-4 mb-4">
  <!-- timeline item 1 -->
  <div class="row no-gutters">
    <div class="col-sm"> <!--spacer--> </div>
    <!-- timeline item 1 center dot -->
    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
      <div class="row h-50">
        <div class="col">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
      <h5 class="m-2">
        <span class="badge badge-pill border" style="background: #800000">&nbsp;</span>
      </h5>
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
    </div>
    <!-- timeline item 1 event content -->
    <div class="col-sm py-2">
      <img src="{{url('utama/bantuan/1.png')}}" class="img-thumbnail" alt="...">
    </div>
  </div>
  <!--/row-->
  <!-- timeline item 2 -->
  <div class="row no-gutters">
    <div class="col-sm py-2">
      <img src="{{url('utama/bantuan/2.png')}}" class="img-thumbnail" alt="...">
    </div>
    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
      <h5 class="m-2">
        <span class="badge badge-pill bg-light border">&nbsp;</span>
      </h5>
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
    </div>
    <div class="col-sm"> <!--spacer--> </div>
  </div>
  <!--/row-->
  <!-- timeline item 3 -->
  <div class="row no-gutters">
    <div class="col-sm"> <!--spacer--> </div>
    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
      <h5 class="m-2">
        <span class="badge badge-pill bg-light border">&nbsp;</span>
      </h5>
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
    </div>
    <div class="col-sm py-2">
      <img src="{{url('utama/bantuan/3.png')}}" class="img-thumbnail" alt="...">
    </div>
  </div>
  <!--/row-->
  <!-- timeline item 4 -->
  <div class="row no-gutters">
    <div class="col-sm py-2">

      <img src="{{url('utama/bantuan/4.png')}}" class="img-thumbnail" alt="...">

    </div>
    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
      <div class="row h-50">
        <div class="col border-right">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
      <h5 class="m-2">
        <span class="badge badge-pill bg-light border">&nbsp;</span>
      </h5>
      <div class="row h-50">
        <div class="col">&nbsp;</div>
        <div class="col">&nbsp;</div>
      </div>
    </div>
    <div class="col-sm"> <!--spacer--> </div>
  </div>
  <!--/row-->
</div>

<hr>


<!--container-->
@endsection