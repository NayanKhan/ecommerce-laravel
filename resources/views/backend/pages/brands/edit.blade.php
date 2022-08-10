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
        
              <form action="{{ route('brand.update', $brand->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-6">

                    <div class="form-group">
                      <label>Brand Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $brand->name }}" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description" value="{{ $brand->description }}" class="form-control" autocomplete="off" required="required">
                    </div>

                  </div>

                  <div class="col-lg-6">

                  <div class="form-group">
                      <label>Brand Thumbnail</label>
                      <br>
                      @if ( $brand->image == NULL)
                             <img src="{{ asset('backend/img/brand/avater.png') }}" width="40" alt="">

                      @else 
                          <img src="{{ asset('backend/img/brand/'. $brand->image) }}" width="40" alt="">
                      @endif
                      <input type="file" name="image" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if( $brand->status == 1) selected @endif>Active</option>
                        <option value="2" @if( $brand->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="addBrand" class="btn btn-teal m-b-10" value="Add New Brand">
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
