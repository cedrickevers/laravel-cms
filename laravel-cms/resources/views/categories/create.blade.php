@extends  ("layouts.app")


@section("content")



<div class="card card-default">
    <div class="card-header">Créer une catégorie</div>
    <div class="card-body">
     @if($errors->any())

     <div class="alert alert-danger">
         <ul class="form-group">
             @foreach($errors->all() as $error)

                <li class="list-group-item-text-danger">
                    {{$error}}
                </li>
             @endforeach
         </ul>
     </div>
     @endif

    <form action="{{ route("categories.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name ="name" id="name" >
            </div>
            <div class="form-group">
                <button class="btn btn-success"> Ajouter une catégorie</button>
            </div>
        </form>

    </div>

</div>


@endsection
