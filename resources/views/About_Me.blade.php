<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me - {{ $name }}</h1>
    <p>Age: {{ $age }}</p>
    <p>Major: {{ $major }}</p>

    <!-- Navigation Buttons -->
    <a href="{{ route('about_me') }}" class="btn btn-primary">About Me</a>
    <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
    <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>


</body>
</html>
