<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
</head>
<body>
    <div>
        {!! QrCode::size(250)->generate(url('/upload')) !!}
    </div>
</body>
</html>
