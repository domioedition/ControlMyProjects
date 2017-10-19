<?php

include_once 'header.php';



 ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Adding new task</h1>
            <form action="/task/add" method="post">
                <input type="text" name="task_name" placeholder="Task name"><br><br>
                <textarea name="task_description" id="" cols="30" rows="10"
                          placeholder="Task description"></textarea><br>
                <input type="submit" value="Add new task">
            </form>
        </div>
    </div>


</div>


<?php 

include_once 'footer.php';

 ?>
