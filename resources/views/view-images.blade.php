<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Images</title>
</head>
<body>
    @foreach ($images as $image)
        <div>
            <p>{{ $image->fullname }}</p>  <!-- Display the user's full name -->
            <img src="{{ asset('storage/' . $image->filename) }}" alt="Image" width="300">
        </div>
    @endforeach
</body>
</html>
