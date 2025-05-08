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
                                    <h4>Methodology</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Methodology</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                            @foreach($methodology as $methodology)
                                            <tr>
                                                <td>1</td>
                                                <td>{!!$methodology->details!!}</td>
                                                
                                                <td><a href="{{ route('methodology.Edit', $methodology->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('methodology.delete', $methodology->id) }}" onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                          
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                 
                    
                </div>
            </section>
        </div>
@endsection