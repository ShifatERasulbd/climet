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
                            <form action="{{route('investigation.update')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" class="form-control" value="{{ $investigation->id }}">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control" value="{{ $investigation->title }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="submit" class="btn btn-primary px-4" value="Update Investigation" />
                                    </div>
                                </div>
                            </form>
                        </div>

                        @foreach($investigation_content as $investigation_content)
                            <div class="card-body">
                                <form action="{{route('investigationContent.update')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="content_id" class="form-control" value="{{ $investigation_content->id }}">
                                   
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="subtitle" class="form-control" value="{{ $investigation_content->sub_title }}">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Details</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="details">{{ $investigation_content->description }}</textarea>
                                        </div>
                                    </div>



                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="submit" class="btn btn-primary px-4" value="Update Content" />
                                            <a href="{{ route('investigationContent.delete', $investigation_content->id) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach


                        
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
