@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Create a New Mentor</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              @include('backend.flash-message')
              <form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" name="fullname" class="form-control" autocomplete="off" required="required">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" name="designation" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="phone" name="phone" class="form-control" required="required" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Fiverr Image</label>
                      <input type="file" name="fiver_img" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Fiverr Url</label>
                      <input type="text" name="fiver_url" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Upwork Image</label>
                      <input type="file" name="upwork_img" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Upwork Url</label>
                      <input type="text" name="upwork_url" class="form-control" autocomplete="off">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Profile Pic</label>
                      <input type="file" name="image" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Overview</label>
                      <textarea name="overview" class="form-control" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="addMentor" class="btn btn-teal m-b-10" value="Add New Mentor">
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
