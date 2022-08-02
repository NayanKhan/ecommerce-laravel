@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update the mentor Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
        
              <form action="{{ route('mentor.update', $mentor->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" name="fullname" value="{{ $mentor->fullname }}" class="form-control" autocomplete="off" required="required">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" name="designation" value="{{ $mentor->designation }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="phone" name="phone" value="{{ $mentor->phone }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" value="{{ $mentor->email }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" value="{{ $mentor->address }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Fiverr Image</label>
                      <br>
                      @if ( $mentor->fiver_img == NULL)
                             <img src="{{ asset('backend/img/mentor/default.png') }}" width="40" alt="">

                      @else 
                          <img src="{{ asset('backend/img/mentor/badge/'. $mentor->fiver_img) }}" width="40" alt="">
                      @endif
                      <input type="file" name="fiver_img" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Fiverr Url</label>
                      <input type="text" name="fiver_url" value="{{ $mentor->fiver_url }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Upwork Image</label>
                      <br>
                      @if ( $mentor->upwork_img == NULL)
                             <img src="{{ asset('backend/img/mentor/default.png') }}" width="40" alt="">

                      @else 
                          <img src="{{ asset('backend/img/mentor/badge/'. $mentor->upwork_img) }}" width="40" alt="">
                      @endif
                      <input type="file" name="upwork_img" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Upwork Url</label>
                      <input type="text" name="upwork_url" value="{{ $mentor->upwork_url }}" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Profile Pic</label>
                      <br>
                      @if ( $mentor->profile_pic == NULL)
                             <img src="{{ asset('backend/img/mentor/default.png') }}" width="40" alt="">

                      @else 
                          <img src="{{ asset('backend/img/mentor/'. $mentor->profile_pic) }}" width="40" alt="">
                      @endif
                      <input type="file" name="image" value="{{ $mentor->image }}" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if( $mentor->status == 1) selected @endif>Active</option>
                        <option value="2" @if( $mentor->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Overview</label>
                      <textarea name="overview" class="form-control" cols="30" rows="4">{{ $mentor->overview }}</textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="updateMentor" class="btn btn-teal m-b-10" value="Save Changes">
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
