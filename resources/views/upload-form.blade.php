<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
