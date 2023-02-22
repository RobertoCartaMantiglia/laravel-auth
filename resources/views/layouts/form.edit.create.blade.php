<form action="{{route($route, $comic->id)}}" method="POST">
    @csrf
    @method($method)
    @if($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">
            Titolo
        </label>
        <input type="text" name="title" value="{{old('title') ?? $comic->title}}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" rows="3">
            {{ old('description') ?? $comic->description}}
        </textarea>
    </div> 
    <div class="mb-3">
        <label for="thumb" class="form-label">
            Immagine
        </label>
        <input type="text" name="thumb" value="{{old('thumb') ?? $comic->thumb}}"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">
            Prezzo
        </label>
        <input type="number" name="price" value="{{old('price') ?? $comic->price}}"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">
            Serie
        </label>
        <input type="text" name="series" value="{{old('series') ?? $comic->series}}"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">
            Data di Vendita
        </label>
        <input type="date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}"  class="form-control">
    </div> 
    <div class="mb-3">
        <label for="type" class="form-label">
            Tipologia
        </label>
        <input type="text" name="type" value="{{old('type') ?? $comic->type}}" class="form-control">
    </div> 
    <button>Aggiungi</button>
</form>