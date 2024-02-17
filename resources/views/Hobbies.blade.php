<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies</h1>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    <!-- Navigation Buttons -->
    <a href="{{ route('about_me') }}" class="btn btn-primary">About Me</a>
    <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
    <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>
</body>
</html>
