@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Create a New Divisions</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              <form action="{{ route('division.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  <div class="col-lg-12">

                    <div class="form-group">
                      <label>Division Name</label>
                      <input type="text" name="name" class="form-control" autocomplete="off" required="required">
                    </div>

                  </div>

                  <div class="col-lg-12">

                    <div class="form-group">
                      <label>Division Priority Number</label>
                      <input type="text" name="priority" class="form-control" autocomplete="off" required="required">
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="addDivision" class="btn btn-teal m-b-10" value="Add New Division">
                    </div>
                  </div>
                </div>

                </div>
              </form>

          </div><!-- d-flex -->
        </div><!-- card -->


      </div>
      
    </div><!-- row -->

  </div><!-- br-pagebody -->
    
@endsection
