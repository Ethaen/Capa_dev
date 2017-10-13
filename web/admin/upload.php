<?php

if (!( 0 < $_FILES['file']['error'] )) {
  move_uploaded_file($_FILES['file']['tmp_name'], $_POST['path'] . $_POST['name']);
}

?>
