@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <h1>Update your post</h1>
            </div>
            {{-- FINE Intestazione --}}

            {{-- Gestione errori --}}
            @include('shared.errors')
            {{-- FINE Gestione errori --}}

            {{-- Form --}}
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                {{-- Titolo del post --}}
                <div class="mb-5">
                    <label for="post-title" class="form-label">Post title</label>
                    <input type="text" class="form-control" id="post-title" name="title" value="{{ old('title', $post->title) }}">
                </div>
                {{-- FINE titolo del post --}}

                {{-- Contenuto del post --}}
                <div class="mb-4">
                    <label for="post-content" class="form-label">Post content</label>
                    <textarea class="form-control" id="post-content" rows="6" cols="100" name="content">{{ old('content', $post->content) }}</textarea>
                </div>
                {{-- FINE contenuto del post --}}

                {{-- Creazione argomento del post --}}
                <div class="mb-3">
                    <label for="post-content" class="form-label">Post argument</label>
                    <select class="form-select" aria-label="Default select example" name="type_id">
                        <option value="" selected>-- Seleziona l'argomento --</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}" @if (old('type_id', $post->type?->id) == $type->id) selected @endif>{{ $type->title }}</option>      
                        @endforeach
                    </select>
                </div>
                {{-- FINE creazione argomento del post --}}

                {{-- Aggiunta dei tag --}}
                <div class="mb-3">
                    <label for="post-content" class="form-label">Post tag</label>
                    <div>
                        @foreach ($tags as $tag)
                        <div class="form-check form-check-inline">

                            @if ($errors->any())
                                <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]" 
                                    {{ in_array($tag->id, old('tags', $post->tags)) ? 'checked' : 'a' }}>
                                <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->title }}</label>
                            @else
                                <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]"
                                    {{ $post->tags->contains($tag) ? 'checked' : 'a'  }}>
                                <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->title }}</label>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                  {{-- FINE aggiunta dei tag --}}

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover image</label>
                    <input class="form-control" type="file" id="cover_image" name="cover_image">
                </div>
                
                <button type="submit" class="btn btn-primary">Update post</button>
            </form>
            {{-- FINE Form --}}

            <hr>

            {{-- Bottone all'index --}}
            <div class="mt-5">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to the posts list</a>
            </div>
            {{-- FINE Bottone all'index --}}

        </div>
    </div>
</div>
@endsection