<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

    <h1>Projects</h1>

    @foreach ($projects as $project)
        <a href="/projects/{{ $project->id }}">
            <li>{{ $project->title }}</li>
        </a>
    @endforeach

    <a href="/projects/create">Add a project</a>

</body>


</html>