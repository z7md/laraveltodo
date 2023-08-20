<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./create.css">
    <title>Document</title>

</head>
<body>

<!-- Button trigger modal -->
<div class="AddButton">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        Add New Task !
      </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade button" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/create/task" method="POST">
             {{csrf_field()}} 
        <div class="modal-body">
                

            <label for="TaskName">Task Name</label>
          <input type="text"  name="TaskName" class="input1">
          <label for="Status">Status</label>
          <select name="Status" class="drop-down">
            <option value="todo">Todo</option>
            <option value="onprogress">OnProgress</option>
            <option value="done">Done</option>
          </select>
          <label for="assigned-to">Assigned to </label>
          <select name="id" class="drop-down">

            <?php foreach ($users as $user): ?>
            
              <option value="{{$user->id}}">{{$user->name}}</option>
            <?php endforeach ?>
          </select>
          <label for="DueDate">Due Date</label>
            <input type="datetime-local" name="DueDate" class="input1">             
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </div>
                </form>
        </div>
        
  
      </div>
    </div>
  </div>


</body>
</html>

 