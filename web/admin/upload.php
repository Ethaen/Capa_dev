<?php

if (!( 0 < $_FILES['file']['error'] )) {
  move_uploaded_file($_FILES['file']['tmp_name'], 'img/actuality/' . $_POST['image_id']);
}

move_uploaded_file(

  // this is where the file is temporarily stored on the server when uploaded
  // do not change this
  $_FILES['file']['tmp_name'],

  // this is where you want to put the file and what you want to name it
  // in this case we are putting in a directory called "uploads"
  // and giving it the original filename
  'img/actuality/' . $_POST['image_id']
);

?>
