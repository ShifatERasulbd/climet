@extends('backend.master')
@section('main')
        <!-- Start app main Content -->
        <div class="main-content">
        <section class="section">
                

                <div class="section-body">
                    
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Investigation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Details</th>
                                              
                                                <th>Action</th>
                                            </tr>
                                            @foreach($investigation as $investigation)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $investigation->title }}</td>
                                                <td>
                                                @foreach($investigation->investigation_contents as $c_investigation)
                                                <b>{{$c_investigation->sub_title}}</b>
                                                {!! $c_investigation->description  !!}
                                               @endforeach
                                               </td>
                                                <td><a href="{{ route('investigation.edit', $investigation->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('investigation.delete', $investigation->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                          
                                        </table> 
                                    </div>
                                </div>
                                <!-- <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                 
                    
                </div>
            </section>
        </div>
@endsection