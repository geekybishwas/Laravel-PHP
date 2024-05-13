<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('file.upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">File</label>
            <input type="file" id="file" class="" name='file'>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>