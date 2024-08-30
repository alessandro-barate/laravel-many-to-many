@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="mb-5">
                <h1>{{ $post->title }}</h1>
                <p>Created by: {{ $post->user?->name ?: 'Capitan Tuta' }}</p>
            </div>
            {{-- FINE Intestazione --}}

            {{-- Contenuto del post --}}
            <div class="mb-4">
                <p>{{ $post->content }}</p>
            </div>

            <div class="img-container">
                <img src="{{ asset('storage/' . $post->cover_image) }}" alt="">
            </div>
            {{-- FINE contenuto del post --}}

            <hr>

            {{-- Argomenti del post --}}
            <div>
                <span>Argomento: {{ $post->type?->title ?: 'Argomento non definito' }}</span>
            </div>
            {{-- FINE argomenti del post --}}

            <hr>

            {{-- Tags del post --}}
            <div>
                <span>Tag:</span>
                <ul>
                    @foreach ($post->tags as $tag)
                    <li>{{ $tag?->title ?: 'Tag non definito' }}</li>
                    @endforeach
                </ul> 
            </div>
            {{-- FINE tags del post --}}

            <hr>

            {{-- Commenti del post --}}
            <div>
                <h3>Commenti</h3>
                @if ($post->comments()->count())
                <ul>
                    @foreach ($post->comments as $comment)
                    <li>
                        <h5>{{ $comment->author ?: 'Commento anonimo'}}</h5>
                        <p>{{ $comment->content }}</p>
                    </li>           
                    @endforeach
                    
                </ul>

                @else
                    <div class="alert alert-info" role="alert">
                        Nessun commento
                    </div>
                @endif
            </div>
            {{-- FINE commenti del post --}}

            {{-- Bottone per tornare alla lista dei post --}}
            <div class="my-5">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to the posts list</a>
            </div>
            {{-- FINE bottone per tornare alla lista dei post --}}

        </div>
    </div>
</div>
@endsection