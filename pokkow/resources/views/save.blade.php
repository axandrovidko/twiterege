<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#222244">
    <h1>Dashboard</h1>

    <?php
        echo $users[0]["name"];
        foreach($users as $er){
            echo $er["name"];
            echo "\t";
            echo $er["age"];
            echo "<br>";
        }
    ?>
    @foreach ($users as $er)
        <h1>{{$er["name"]}} ma {{$er["age"]}} rokov</h1>
    @endforeach
</body>
</html>