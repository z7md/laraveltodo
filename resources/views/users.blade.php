<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Noto+Serif:wght@100&family=Oswald:wght@600&family=Tsukimi+Rounded:wght@700&family=Ubuntu:ital,wght@1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/users.css">
</head>
<body>
    <div class="bd-example m-0 border-0">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Id</th>
                </tr>

                </thead>
             <?php foreach ($user as $item): ?>
             <thead>
                <tr>

                  <th scope="col"><a href="/users/{{$item->id}}">{{$item->name}}</a></th>
               <th scope="col" > {{$item->id}}</th>

                </tr>
                </thead>

    <?php endforeach ?>  
        </table>
        </div>
</body>
</html>

