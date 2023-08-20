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
    <link rel="stylesheet" href="./welcome.css">
    
<body>
    <nav>
      @include("navbar")
    </nav>
       
       <div class="container-tasks">  
        <div class="filters">
        </select> 
        <select class="user-filter" name="formal" onchange="javascript:handleUser(this)">
          <option value="">All Users</option>
          <?php foreach ($users as $user):  ?>
          
          <option value="{{$user->id}}">{{$user->name}}</option>
          <?php endforeach ?>
          </select>
          
          <script type="text/javascript">
            function handleUser(elm)
            {
               window.location = "users/"+elm.value;
            }
          </script>
                 <select class="user-filter" name="formal" onchange="javascript:handleTask(this)">
                  <option value="">All Tasks</option> 
                  <option value="todo">To do</option>
                  <option value="onprogress">On Progress</option>
                  <option value="done">Done</option>
                  </select>
                  
                  <script type="text/javascript">
                    function handleTask(elm)
                    {
                       window.location = "tasks/"+elm.value;
                    }
                  </script>
        </div>
        
        
        <div class="task-button">
           @include('Task')
           </div>
           <div class="create-user">
            @include("CreateUser")
           </div>
          </div>

          <div class="tasks-table">
            @include("table")
          </div>
            <script src="https://kit.fontawesome.com/ebc4f6914b.js" crossorigin="anonymous"></script>
            <footer>
              <!-- Step 4 - Add a dynamic year to the footer using JS. -->
            
                <div class="bottom-container">
                    <a style="color: white;" class="footer-link" href="https://www.linkedin.com/in/hamad-almuhaimeed-0a40a826a/" target="_blank">LinkedIn |</a>
                    <a style="color: white;" class="footer-link" href="https://twitter.com/7mdDev" target="_blank">Twitter</a>

                    <p>Copyright Hamad © {{date("Y")}}</p>
                  </div>
            
            
            </footer>
</body>
</html>
