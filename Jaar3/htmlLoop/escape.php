<form action="" method="post">
  <input type='text' name='text'/>
  <input type='submit' name='submit' />
</form>

<?php
if(ISSET($_POST['submit'])){
    echo htmlspecialchars($_POST['text']);
}

 ?>
