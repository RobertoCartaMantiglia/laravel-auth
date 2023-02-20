<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    
<div class="container">
    <table class="table table-striped table-borderless table-hover mt-5">
        <thead class="table">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Used Technology</th>
                <th scope="col">
                    <a href="" class="btn btn-sm btn-primary">
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
                    <a href="{{ route('admin.posts.show', $project->id) }}" class="btn btn-sm btn-primary">
                        Show
                    </a>

                    <a href="" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <a href="" class="btn btn-sm btn-danger">
                        Delete
                      
                    </a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>