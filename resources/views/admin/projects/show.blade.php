<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-title fw-bold p-3">
                {{ $project->title }}
            </div>
            <div class="card-body p-3 m-3">
                <div>
                    {{$project->thumb}}
                </div>
                <div>
                    <p class="card-text mb-4">
                        {{ $project->description }}
                    </p>
                    <p class="card-text mb-4">
                        {{ $project->author }}
                    </p>
                </div>
                
                <a href="#" class="btn btn-success">
                    Edit
                </a>
                <a href="#" class="btn btn-danger">
                    Delete                
                </a>
            </div>
            
          </div>
    </div>
</body>
</html>