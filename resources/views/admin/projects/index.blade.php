<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    
<div class="container">
    <table class="table table-striped table-borderless table-hover mt-5">
        <thead class="table">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Technology</th>
                <th scope="col">
                    <a href="#" class="btn  bg-info">
                        Create new project
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->author }}</td>
                <td>{{ $project->used_technology }}</td>
                <td>
                   <div class="d-flex justify-content-around">
                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-xs btn-primary m-1">
                        Show
                    </a>

                    <a href="#" class="btn btn-xs btn-warning m-1">
                        Edit
                    </a>

                    <a href="#" class="btn btn-xs btn-danger m-1">
                        Delete                      
                    </a>
                   </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>