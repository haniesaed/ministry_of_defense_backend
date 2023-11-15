
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happens</title>
</head>
<body>
    <form action=" {{ route('happens.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="enter the title" id="">
        <input type="text" name="desc" placeholder="enter the desc" id="">
        <input type="date" name="date" placeholder="enter the date" id="">
        <br>
        <br>
       
    





        <input type="submit">
    </form>
</body>
</html>




