<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
    <!-- Add any additional CSS or scripts here -->
</head>
<body>
    <h1>About Me - {{ $name }}</h1>
    <p>Age: {{ $age }}</p>
    <p>Description: {{ $description }}</p>

    <!-- Navigation Buttons -->
    <a href="{{ route('about') }}" class="btn btn-primary">About Me</a>
    <a href="{{ route('skills') }}" class="btn btn-primary">Skills</a>
    <a href="{{ route('hobbies') }}" class="btn btn-primary">Hobbies</a>

    <!-- Add any additional content here -->

    <!-- Add any additional scripts or footer content here -->
</body>
</html>
