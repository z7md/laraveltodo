<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../profile.css">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Noto+Serif:wght@100&family=Oswald:wght@600&family=Tsukimi+Rounded:wght@700&family=Ubuntu:ital,wght@1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/welcome.css">
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Noto+Serif:wght@100&family=Oswald:wght@600&family=Tsukimi+Rounded:wght@700&family=Ubuntu:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <title>Users</title>
</head>
<body>

    <div class="container" >
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4" style="color: white"><h1>To Do App</h1></span>
          </a>
          <ul class="nav nav-pills">
          </ul>
        </header>
      </div>
      <div class="mb-5" style="color: white">
        {{-- <h1>{{$tasks->status}} Tasks</h1> --}}
    </div>
      
      <div class="tasks-table">
<?php foreach ($tasks as $item): ?> 
<div class="tasks-container a" style="color: white">  
  <div class="card text-center">
    <div class="card-header">
      <?php if($item->status == "done"):  ?>
      <span class="text-done">Done</span>
      <?php endif?>
      <?php if($item->status == "onprogress"):  ?>
      <span class="text-onprogress">On Progress</span>
      <?php endif?>
      <?php if($item->status == "todo"):  ?>
      <span class="text-todo">To Do</span>
      <?php endif?>
    </div>
    <div class="card-body">
      {{$item->title}}
      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

     <h5>  {{$item->due_date}}</h5>
    </div>
  </div>
</div>
<?php endforeach ?> 
</div>

</div>
<footer>
    <a href="/">Go back</a>
</footer>


</div>

</body>
</html>
