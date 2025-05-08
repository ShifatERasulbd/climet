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
                                    <h4>Edit Team Category</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('team_category.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $team_category->id}}" class="form-control">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="category_name" value="{{ $team_category->category_name}}" class="form-control">
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