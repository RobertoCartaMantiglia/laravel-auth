<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <form action="{{route('admin.projects.store')}}" method="POST">
                    @csrf
                    @method('POST')
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
                        <input type="text" name="title" value="{{old('title', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione
                        </label>
                        <textarea class="form-control" name="description" value="{{old('description', "")}}" rows="3"></textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Immagine
                        </label>
                        <input type="text" name="thumb" value="{{old('thumb', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">
                            Autore
                        </label>
                        <input type="text" name="author" value="{{old('author', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="used_technology" class="form-label">
                            Tecnologia Utilizzata
                        </label>
                        <input type="text" name="used_technology" value="{{old('used_technology', "")}}" class="form-control">
                    </div>
                    <button class="btn btn-success">Aggiungi Progetto</button>
                </form>
                            
            </div>
        </div>
    </div>
</body>
</html>