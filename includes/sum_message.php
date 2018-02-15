<?php
  if (isset($_GET['errors'])){
    $errors=$_GET['errors'];
  ?>
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Error!</strong>
      <?php
            echo $errors;
        ?>
  </div>
  <?php
  }
  if (isset($_GET['messages'])){
    $messages=$_GET['messages'];
    ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien hecho!</strong>
        <?php
              echo $messages;
          ?>
    </div>
    <?php
  }
?>
