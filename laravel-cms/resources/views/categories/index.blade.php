@extends  ("layouts.app")


@section("content")



<div class="d-flex justify-content-end mb-2">
        <a href=" {{ route('categories.create')}}" class="btn btn-primary">Ajouter une catégorie</a>

        </div>
        <div class="card card-default">
            <div class="card-header">Categories</div>
        </div>


@endsection
