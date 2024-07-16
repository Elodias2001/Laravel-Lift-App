@extends('layouts.base')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>
                Formulaire de création
                <a href="{{route('posts.index')}}" class="btn btn-danger float-end">Back</a>
            </h4>
            <p>Ajouter un article</p>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Il y a eu {{ $errors->count() }} d'erreurs
            </div>
            @endif
            <div>
                <form method="POST" action="{{route('posts.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" autocomplete="title" id="title" placeholder="John Doe" />
                        @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                        @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
