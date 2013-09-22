<?php
 require_once "/config/config.php";
 require_once "/config/db.php";
?>
<div  class="kanban">kanban</div>
    <p class="success"  style="display:none;">Atividade atualizada</p>
    
    <ul id="sortable1" class="connectedSortable"> <h3>Not Starded</h3> <?php echo $column1; ?> </ul>
    <ul id="sortable2" class="connectedSortable"> <h3>In progress</h3> <?php echo $column2; ?> </ul>
    <ul id="sortable3" class="connectedSortable"> <h3>To Verify</h3> <?php echo $column3; ?> </ul>
    <ul id="sortable4" class="connectedSortable"> <h3>Done</h3> <?php echo $column4 ?> </ul>
    