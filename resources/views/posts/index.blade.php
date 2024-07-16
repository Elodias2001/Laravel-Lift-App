@extends('layouts.base')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-header">
        <h4>
          Posts List
          <a href="{{route('posts.create')}}" class="btn btn-success float-end"
            >Add Post</a
          >
        </h4>
      </div>
      <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success">
           <h4>{{Session::get('message')}}</h4>
        </div>
        @endif
        <div>
          <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Mise à Jour du titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Création</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $value => $item)
                <tr>
                  <th scope="row">{{ $value + 1 }}</th>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->published_at->format('d/m/Y à H:i:s') }}</td>
                  <td>{{ $item->is_title_updated ? 'Oui' : 'Non' }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <a href="{{route('posts.update',['post'=>$item])}}" class="btn btn-info btn-sm mx-2">MAJ</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
