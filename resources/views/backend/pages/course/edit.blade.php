@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update the Course Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
        
              <form action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Course Name [ English ]</label>
                      <input type="text" name="english_title" value="{{ $course->english_title}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Intro Video URL</label>
                      <input type="text" name="intro_video" value="{{ $course->intro_video}}" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" name="course_duration" value="{{ $course->course_duration}}" class="form-control" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                      <label>Course Motivation</label>
                      <textarea name="motiv_content" id="" class="form-control" rows="3">{{ $course->motiv_content }}</textarea>
                    </div>


                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Course Name [ Bangla ]</label>
                      <input type="text" name="bangla_title" value="{{ $course->bangla_title}}" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Total Graduate Number</label>
                      <input type="text" name="graduate_number" value="{{ $course->graduate_number}}" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Cupon Status</label>
                      <select name="coupon_status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if( $course->coupon_status == 1) selected @endif>Active</option>
                        <option value="2" @if( $course->coupon_status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Course Opportunity</label>
                      <textarea name="course_opportunity" id="" class="form-control" rows="3">{{ $course->course_opportunity }}</textarea>
                    </div>
                  </div>

                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Price In [ English ]</label>
                      <input type="text" name="price" value="{{ $course->price}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Total Lecture</label>
                      <input type="text" name="total_lecture" value="{{ $course->total_lecture}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if( $course->status == 1) selected @endif>Active</option>
                        <option value="2" @if( $course->status == 2) selected @endif>Inactive</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Course Description</label>
                      <textarea name="curriculum_desc" id="" class="form-control" rows="3">{{ $course->curriculum_desc }}</textarea>
                    </div>

                  </div>


                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Price In [ Bangla ]</label>
                      <input type="text" name="bangla_price" value="{{ $course->bangla_price}}" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Class Hour</label>
                      <input type="text" name="class_hour" value="{{ $course->class_hour}}" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label>Course Thumbnail</label>
                      <br>
                      @if ( $course->image == NULL)
                             <img src="{{ asset('backend/img/course/default.png') }}" width="40" alt="">

                      @else 
                          <img src="{{ asset('backend/img/course/'. $course->image) }}" width="40" alt="">
                      @endif
                      <br>
                      <input type="file" name="image" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Course Requirement</label>
                      <textarea name="course_reqirement" id="" class="form-control" rows="3">{{ $course->course_reqirement }}</textarea>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="updateCourse" class="btn btn-teal m-b-10" value="Save Changes">
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
