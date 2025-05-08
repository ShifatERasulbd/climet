@extends('backend.master')
@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Investigation</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('investigation.update', $investigation->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control" value="{{ old('title', $investigation->title) }}">
                                    </div>
                                </div>

                                <!-- Product Images Repeater -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="image-repeater-wrapper">
                                            @foreach($investigation->subtitles as $index => $subtitle)
                                            <div class="row control-group input-group mb-2">
                                          
                                                <div class="col-sm-12">
                                                
                                                    <input type="text" name="sub_title[]" class="form-control" value="{{ $subtitle }}">
                                                </div>
                                              
                                                <div class="col-sm-12">
                                                
                                                    <textarea class="summernote" name="details[]">{{ $investigation->details[$index] ?? '' }}</textarea>
                                                </div>
                                                <div class="col-sm-2">
                                                  
                                                    @if($index > 0)
                                                    <button class="btn btn-danger remove-btn" type="button">Delete</button>
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <!-- Hidden clone template -->
                                        <div class="clone d-none">
                                            <div class="row control-group input-group mb-2">
                                          
                                                <div class="col-sm-12">
                                               
                                                    <input type="text" name="sub_title[]" class="form-control" placeholder="Add Subtitle Here" />
                                                </div>
                                              
                                                <div class="col-sm-12">
                                                    
                                                    <textarea class="summernote" name="details[]" class="form-control" placeholder="Add Details Here"></textarea>
                                                </div>
                                                <div class="col-sm-2">
                                                    <!-- <button class="btn btn-success btn-increment" type="button">Add More</button> -->
                                                    <button class="btn btn-danger remove-btn" type="button">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7 offset-md-3">
                                    <button class="btn btn-success btn-increment" type="button">Add More</button>
                                        <input type="submit" class="btn btn-primary px-4" value="Update Investigation" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote();

        $('body').on('click', '.btn-increment', function () {
            var html = $('.clone').html();
            var newElement = $(html);
            newElement.find('.note-editor').remove();
            newElement.find('textarea').val('');
            $('.image-repeater-wrapper').append(newElement);
            newElement.find('.summernote').summernote();
        });

        $('body').on('click', '.remove-btn', function () {
            $(this).closest('.control-group').remove();
        });
    });
</script>
@endsection