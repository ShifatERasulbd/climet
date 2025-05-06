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
                                    <h4>Edit Methodology</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('methodology.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $methodology->id }}">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Methodology</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="about">{!! $methodology->details !!}</textarea>
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