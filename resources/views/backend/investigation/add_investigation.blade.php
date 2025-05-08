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
                            <h4>Add Investigation</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('investigation.store') }}" method="POST">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>

                                <!-- Product Images Repeater -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                                    <div class="col-sm-12 col-md-7">
                                        <!-- Wrapper for all image inputs -->
                                        <div class="image-repeater-wrapper">
                                            <div class="row control-group input-group mb-2">
                                                <div class="col-sm-5">
                                                <input type="text" name="sub_title[]" class="form-control" placeholder="Add Subtitle Here" />
                                                </div>
                                                <div class="col-sm-12">


                                              
                                            <textarea class="summernote" name="details[]" class="form-control" placeholder="Add Details Here"></textarea>
                                       
                                    </div>




                                                    
                                                <div class="col-sm-2">
                                                  
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Hidden clone template -->
                                        <div class="clone d-none">
                                            <div class="row control-group input-group mb-2">
                                                <div class="col-sm-5">
                                                <input type="text" name="sub_title[]" class="form-control" placeholder="Add Subtitle Here" />
                                                </div>
                                                <div class="col-sm-12">
                                                <textarea class="summernote test" name="details[]" class="form-control" placeholder="Add Details Here"></textarea>
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-success btn-increment" type="button">Add More</button>
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
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

<!-- Repeater Script -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize Summernote on existing fields
        $('.summernote').summernote();

        // On Add More
        $('body').on('click', '.btn-increment', function () {
            // Get the HTML from the .clone div
            var html = $('.clone').html();
            var newElement = $(html);

            // Remove any pre-initialized Summernote artifacts
            newElement.find('.note-editor').remove();

            // Replace the textarea with a fresh clone
            newElement.find('textarea').val('');

            // Append the cleaned-up element
            $('.image-repeater-wrapper').append(newElement);

            // Initialize Summernote only now
            newElement.find('.summernote').summernote();
        });

        // Remove row
        $('body').on('click', '.remove-btn', function () {
            $(this).closest('.control-group').remove();
        });
    });
</script>
@endsection
