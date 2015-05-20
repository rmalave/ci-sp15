<?php

$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?= $title ?></h2>

<? foreach($query as $startup): ?>

<?php echo '<h2>Full Name:</h2><h3>'.$startup['LastName'] ." ". $startup['FirstName'].'</h3>';
      echo '<h2>Email:</h2> <h3>'.$startup['Email'].'</h3>';
?>

<? endforeach ?>

<? $this->load->view($this->config->item('theme') . 'footer'); ?>
