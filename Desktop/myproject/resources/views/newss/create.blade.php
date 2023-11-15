
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
    <form action=" {{ route('newss.store') }}" method="POST">
        @csrf
        <input type="text" name="desc" placeholder="enter the desc" id="">
        <input type="date" name="desc" placeholder="enter the date" id="">
        <br>
        <br>
       
    

        <input type="submit">
    </form>
</body>
</html>




