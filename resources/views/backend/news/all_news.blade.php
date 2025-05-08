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
                                    <h4>News</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Publish Date</th>
                                                <th>Short Description</th>
                                                <th>Redirect Link</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                            @foreach($news as $news)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $news->title }}</td>
                                                <td>{{ $news->publish_date }}</td>
                                                <td>{!! $news->short_description !!}</td>
                                                <td><a href="{{ $news->redirect_link }}">{{ $news->redirect_link }}</a></td>
                                                
                                                <td><a href="{{ route('news.edit', $news->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route ('news.delete',$news->id)}}" class="btn btn-danger">Delete</a>
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