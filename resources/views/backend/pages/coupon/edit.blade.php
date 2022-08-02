@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update the Coupon Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
        
              <form action="{{ route('coupon.update', $coupon->id) }}" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-4">

                    <div class="form-group">
                      <label>Coupon Code</label>
                      <input type="text" name="code" value="{{$coupon->code}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Fixed Value [BDT / Taka]</label>
                      <input type="text" name="fixed_value" value="{{$coupon->fixed_value}}" class="form-control">
                    </div>


                  </div>

                  <div class="col-lg-4">
                    
                    <div class="form-group">
                      <label>Discount Type</label>
                      <select name="discount_type" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if($coupon->discount_type == 1 ) selected @endif>Fixed Value</option>
                        <option value="2" @if($coupon->discount_type == 2 ) selected @endif>Percentage Off</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Percentage Value [%]</label>
                      <input type="text" name="percent_value" value="{{$coupon->percent_value}}" class="form-control">
                    </div>
                  </div>
                  

                  <div class="col-lg-4">

                    <div class="form-group">
                      <label>Course Type</label>
                      <select name="course_type" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if($coupon->course_type == 1 ) selected @endif>Online Course</option>
                        <option value="2" @if($coupon->course_type == 2 ) selected @endif>Offline Course</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if($coupon->status == 1 ) selected @endif>Active</option>
                        <option value="2" @if($coupon->status == 2 ) selected @endif>Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="updateCoupon" class="btn btn-teal m-b-10" value="Save Changes">
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
