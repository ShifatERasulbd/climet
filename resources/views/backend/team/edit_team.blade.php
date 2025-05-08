@extends('backend.master')
@section('main')
        <!-- Start app main Content -->
        <div class="main-content">
        <section class="section">
                
                <div class="section-body">
                  
                 
                  
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Team</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('team.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $team->id }}" class="form-control">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="name" value="{{ $team->name }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="position" value="{{$team->position}}" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Details</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="details">{{$team->details}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Team</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" name="category_name">
                                            <option value="{{$team->category_name}}">{{$team->category_name}}</option>
                                             @foreach($team_category as $team_category)
                                                    <option value="{{ $team_category->category_name }}">{{ $team_category->category_name }}</option>
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection