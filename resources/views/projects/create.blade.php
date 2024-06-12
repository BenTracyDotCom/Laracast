<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" required>
        </div>

        <div>
            <textarea name="description" placeholder="Project description" value="{{ old('description') }}" required></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
       @include('errors')
    </form>

</body>


</html>