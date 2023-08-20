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
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModa" >
        Create User
      </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade button" id="exampleModa" tabindex="-1" aria-labelledby="exampleModalLabe" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabe">New User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/create/user" method="POST">
            {{csrf_field()}}
        <div class="modal-body">
                

            <label for="Username">Username</label>
          <input type="text"  name="Username" class="input1">
          <label for="Email">Email</label>
          <input type="email"  name="Email" class="input1">
          <label for="Password">Password</label>
          <input type="password"  name="Password" class="input1">
          
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </div>
                </form>
        </div>
        
  
      </div>
    </div>
  </div>


</body>
</html>
