
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/addImage" method="post" enctype="multipart/form-data">
    @csrf
        Image<input type="file" accept="image/*" name="upload"><br />
        <input type="submit">
    </form>
</body>
<div>
    <img src="{{ URL::to('/') }}/uploads/1648816107.png">
</div>
</html>