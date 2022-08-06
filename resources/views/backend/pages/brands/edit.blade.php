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
        
              <form action="{{ route('branch.update', $branch->id) }}" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-4">

                    <div class="form-group">
                      <label>Branch Name</label>
                      <input type="text" name="name" value="{{ $branch->name }}" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Address Line 1</label>
                      <input type="text" name="address1" value="{{ $branch->address_line1 }}" class="form-control" autocomplete="off" required="required">
                    </div>

                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Branch Name in Bangla</label>
                      <input type="text" name="bangla_name" value="{{ $branch->bangla_name }}" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Address Line 2</label>
                      <input type="text" name="address2" value="{{ $branch->address_line2 }}" class="form-control" autocomplete="off" required="required">
                    </div>
                  </div>

                  <div class="col-lg-4">

                    <div class="form-group">
                      <label>Phone [Use comma (,) To Set Multiple Number]</label>
                      <input type="phone" name="phone" value="{{ $branch->phone }}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if( $branch->status == 1) selected @endif >Active</option>
                        <option value="2" @if( $branch->status == 2) selected @endif >Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="updateBranch" class="btn btn-teal m-b-10" value="Save Changes">
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
