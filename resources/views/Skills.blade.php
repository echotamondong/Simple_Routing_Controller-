<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body>
    <h1>Skills</h1>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>

    <!-- Navigation Buttons -->
    <a href="{{ route('about_me') }}" class="btn btn-primary">About Me</a>
    <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
    <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>
</body>
</html>
