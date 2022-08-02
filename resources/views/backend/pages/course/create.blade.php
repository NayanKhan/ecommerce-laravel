@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Create a New Course</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              @include('backend.flash-message')
              <form action="{{ route('course.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Course Name [ English ]</label>
                      <input type="text" name="english_title" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Intro Video URL</label>
                      <input type="text" name="intro_video" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" name="course_duration" class="form-control" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                      <label>Course Motivation</label>
                      <textarea name="motiv_content" id="" class="form-control" rows="3"></textarea>
                    </div>


                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Course Name [ Bangla ]</label>
                      <input type="text" name="bangla_title" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Total Graduate Number</label>
                      <input type="text" name="graduate_number" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Cupon Status</label>
                      <select name="coupon_status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Course Opportunity</label>
                      <textarea name="course_opportunity" id="" class="form-control" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Price In [ English ]</label>
                      <input type="text" name="price" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Total Lecture</label>
                      <input type="text" name="total_lecture" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Course Description</label>
                      <textarea name="curriculum_desc" id="" class="form-control" rows="3"></textarea>
                    </div>

                  </div>


                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Price In [ Bangla ]</label>
                      <input type="text" name="bangla_price" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Class Hour</label>
                      <input type="text" name="class_hour" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Course Thumbnail</label>
                      <input type="file" name="image" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Course Requirement</label>
                      <textarea name="course_reqirement" id="" class="form-control" rows="3"></textarea>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="addBranch" class="btn btn-teal m-b-10" value="Add New Course">
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
