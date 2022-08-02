@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Manage All The Branch Information</h4>
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
                        <th scope="col">Branch Name</th>
                        <th scope="col">Bengali Name</th>
                        <th scope="col">Address Line 1</th>
                        <th scope="col">Address Line 1</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @php
                           $i=0; 
                        @endphp
                        @foreach ($branches as $branch)
                            
                        @php
                           $i++;
                        @endphp
                        <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $branch->name}}</td>
                        <td>{{ $branch->bangla_name}}</td>
                        <td>{{ $branch->address_line1}}</td>
                        <td>{{ $branch->address_line2}}</td>
                        <td>{{ $branch->phone}}</td>
                        <td>
                            @if ($branch->status == 1)
                                <span class="badge badge-success">Active</span>
                            @elseif ($branch->status == 2)
                                <span class="badge badge-danger">Inactive</span>
                            @endif    
                        </td>
                        <td>
                            <ul class="custom-action">
                                <li><a href="{{ route ('branch.edit', $branch->id ) }}"><i class="fa fa-edit"></i></a></li>
                                <li><a href="" data-toggle="modal" data-target="#branch{{ $branch->id }}"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <!-- Delete Modal Start -->
                            <div class="modal fade" id="branch{{ $branch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Do You Confirm to Delete This Branch?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        <form action="{{route ('branch.destroy', $branch->id) }}" method="POST">
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
                @if ($branches->count()== 0 )
                    <div class="alert alert-info">
                        No. Branches Added Yet. Please Add a Branch First.
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
