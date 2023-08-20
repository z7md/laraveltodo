

<?php foreach ($task as $item): ?> 
<div class="tasks-container a" style="color: white">
    <a href="/users/{{$item->user_id}}" style="color: white">{{$users[$item->user_id -1]->name}}</a>
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
    <div class="card-footer text-body-secondary">  
          <div class="edit">
        <div class="done">
          Done
          <a href="./task/{{$item->id}}/done">
            <svg width="100" height="50" viewBox="0 -1 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#22c55e" d="M13 2.03v2.02c4.39.54 7.5 4.53 6.96 8.92c-.46 3.64-3.32 6.53-6.96 6.96v2c5.5-.55 9.5-5.43 8.95-10.93c-.45-4.75-4.22-8.5-8.95-8.97m-2 .03c-1.95.19-3.81.94-5.33 2.2L7.1 5.74c1.12-.9 2.47-1.48 3.9-1.68v-2M4.26 5.67A9.885 9.885 0 0 0 2.05 11h2c.19-1.42.75-2.77 1.64-3.9L4.26 5.67M15.5 8.5l-4.88 4.88l-2.12-2.12l-1.06 1.06l3.18 3.18l5.94-5.94L15.5 8.5M2.06 13c.2 1.96.97 3.81 2.21 5.33l1.42-1.43A8.002 8.002 0 0 1 4.06 13h-2m5.04 5.37l-1.43 1.37A9.994 9.994 0 0 0 11 22v-2a8.002 8.002 0 0 1-3.9-1.63Z"/>
          </svg>
        </a>
        </div>
        <div class="on-progress">
          On Progress
          <a href="./task/{{$item->id}}/onprogress">
            <svg width="100" height="50" viewBox="0 -1 14 14" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="m10 6.5l-3 5m6 0a6.5 6.5 0 1 0-12 0Z"/>
          </svg>
        </a>
         
        </div>
        <div class="delete">
          Delete 
           <a href="./task/{{$item->id}}/delete" class="btn px-3"><svg width="100" height="50" viewBox="0 1 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ef4444" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12Z"/>
        </svg></a></div>
        </div>
     
    </div>
  </div>

</div>



<?php endforeach ?> 
</div>
