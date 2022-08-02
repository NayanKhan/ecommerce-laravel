@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Manage All The Batch Addmission Going On</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="d-md-flex justify-content-between pd-25">
            
            <!-- Table Content Start -->
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    @include('backend.flash-message')
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Sl. No</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Mentor Name</th>
                        <th scope="col">Batches Type</th>
                        <th scope="col">Addmission Status</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @php
                           $i=0; 
                        @endphp
                        @foreach ($batches as $batch)
                            
                        @php
                           $i++;
                        @endphp
                        <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $batch->batch_name}}</td>
                        <td>{{ $batch->course->english_title}}</td>
                        <td>{{ $batch->branch->name}}</td>
                        <td>{{ $batch->mentor->fullname}}</td>
                        <td>
                            @if ($batch->batch_type == 1)
                                <span class="badge badge-dark">Online</span>
                            @elseif ($batch->batch_type == 2)
                                <span class="badge badge-primary">Offline</span>
                            @endif    
                        </td>
                        <td>
                            @if ($batch->addmission_status == 1)
                                <span class="badge badge-warning">Active</span>
                            @elseif ($batch->addmission_status == 2)
                                <span class="badge badge-info">Inactive</span>
                            @endif    
                        </td>
                        <td>{{ $batch->starting_date}}</td>
                        <td>
                            @if ($batch->status == 1)
                                <span class="badge badge-success">Active</span>
                            @elseif ($batch->status == 2)
                                <span class="badge badge-danger">Inactive</span>
                            @endif    
                        </td>
                        <td>
                            <ul class="custom-action">
                                <li><a href="{{ route ('batch.edit', $batch->id ) }}"><i class="fa fa-edit"></i></a></li>
                                <li><a href="" data-toggle="modal" data-target="#batch{{ $batch->id }}"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <!-- Delete Modal Start -->
                            <div class="modal fade" id="batch{{ $batch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Do You Confirm to Delete This Batch?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        <form action="{{route ('batch.destroy', $batch->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                    </li>
                                    <li><button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button></li>
                                </ul>
                            </div>
                            </div>
                            </div>
                            </div>
                        <!-- Delete Modal Start -->
                        </tr>

                        @endforeach

                       
                    </tbody>
                </table>
                @if ($batches->count()== 0 )
                    <div class="alert alert-info">
                        No. Batches Added Yet. Please Add a Batch First.
                    </div>
                @endif
            </div>
            
            <!-- Table Content End -->
          </div>
        </div><!-- card -->


      </div>
      
    </div><!-- row -->

  </div><!-- br-pagebody -->
    
@endsection
