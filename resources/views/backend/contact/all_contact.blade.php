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
                                    <h4>Contact</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Contact</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                            @foreach($contact as $contact)
                                            <tr>
                                                <td>1</td>
                                                <td>{!!$contact->details!!}</td>
                                                
                                                <td><a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('contact.delete', $contact->id) }}" onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-danger">Delete</a>
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