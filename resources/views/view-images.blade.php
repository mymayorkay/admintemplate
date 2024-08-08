<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Uploaded Images</title>
</head>
<body>
    @foreach ($images as $image)
        <div>
            <p>{{ $image->fullname }}</p>  <!-- Display the user's full name -->
            <img src="{{ asset('storage/' . $image->filename) }}" alt="Image" width="300">
        </div>
    @endforeach


    <div class="container-fluid mt-3">
        @foreach ($images->chunk(3) as $chunk)
            <div class="row">
                @foreach ($chunk as $image)
                    <div class="col-md-4">
                        <p>{{ $image->fullname }}</p> <!-- Display the user's full name -->
                        <img src="{{ asset('storage/' . $image->filename) }}" alt="Image" class="img-fluid">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</body>
</html>
