@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Be creative tadada</h4>
                    </div>
                    <div class="card-body">
                        <form class="image-upload" method="post" action="{{ route('store.article') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control"/>

                                @error('title')
                                    <br>
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" rows="5" cols="40" class="@error('description') is-invalid @enderror form-control tinymce-editor"></textarea>

                                @error('description')
                                    <br>
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Author Name</label>
                                <input type="text" name="author_name" class="@error('author_name') is-invalid @enderror form-control"/>

                                @error('author_name')
                                    <br>
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                        @if(session('article_created'))
                            <br>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('article_created')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 200,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection