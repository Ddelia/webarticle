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
                        <h4 class="text-white">All articles tadada. You can edit/remove your own articles.</h4>
                    </div>
                    <div class="card-body">
                        @if(!$articles->isEmpty())
                            <div class="list-group">
                                @foreach($articles as $article)
                                    <a @if(auth()->user()->id === $article->user_id) href="{{ route('edit.article', $article->id) }}" @endif class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                        <h3 class="mb-1">{{$article->title}}</h3>
                                        <small>By {{strtoupper($article->author)}}</small>
                                        </div>
                                        
                                        <div class="mb-1">{!! $article->description !!}</div>
                                        @if(auth()->user()->id === $article->user_id) <small>Click to edit.</small> @endif
                                    </a>
                                    @if(auth()->user()->id === $article->user_id)
                                        <form method="post" action="{{ route('remove.article', array('id' => $article->id)) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" style="float: right">Remove</button>
                                        </form>
                                    @endif
                                    <br>
                                @endforeach
                            </div>
                        @else
                           <div>
                                You don't have any alrticle yet. Go an create one, tadada.
                           </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
