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
                                    <h4>Team</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Details</th>
                                               
                                            
                                                <th>Action</th>
                                            </tr>
                                            @foreach($team as $team)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->position }}</td>
                                                <td>{!! $team->details !!}</td>
                                               
                                                
                                                <td><a href="{{ route('team.edit', $team->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('team.delete', $team->id) }}" onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-danger">Delete</a>
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