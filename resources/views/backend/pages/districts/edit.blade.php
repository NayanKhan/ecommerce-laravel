@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update the Branch Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
        
              <form action="{{ route('district.update', $district->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-12">

                    <div class="form-group">
                      <label>District Name</label>
                      <input type="text" name="name" value="{{$district->name}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                        <label>Division Name</label>
                        <select name="division_id" class="form-control">
                          <option value="0">Please Selcet the Division</option>
                          @foreach ($divisions as $division)
                            <option value="{{$division->id}}" @if( $district->division_id == $division->id ) selected @endif >{{$division->name}}</option>
                          @endforeach
                        </select>
                    </div>

                  </div>


                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="updateDistrict" class="btn btn-teal m-b-10" value="Update Division">
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
