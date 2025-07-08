<?php
$project_name = 'Simple<br>project.';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Welcome to <b>{!! $project_name !!}</b> </h1>
    <p> Welcome to home of this project!</p>
    <hr>
    <p><b>NAME: </b> {{ $name }} </p>
    <p><b>SEX: </b> {{ $sex }} </p>
    <?php
    print_r($colors);
    ?>

    @if (1 < 2)
        <p> One is less than 2</p>
    @else
        <p> One is not less than 2</p>
    @endif
    @for ($i = 0; $i < 100; $i++)
        <p> {{ $i }} </p>
    @endfor

    @foreach ($colors as $item)
        <p> {{ $item }} </p>
        <?php
        print_r($item);
        ?>
    @endforeach

</body>

</html>
