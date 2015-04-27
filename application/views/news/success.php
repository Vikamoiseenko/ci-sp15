<?php
//$this->load->view('themes/bootswatch/header');
$this->load->view($this->config->item('theme') . 'header');
?>

<p>You are successful log in</p>
<p><a href="http://mykhabarovsk.com/ci/index.php/news/create"</a>Go back add new item</p>
<p><a href="http://mykhabarovsk.com/ci/index.php/news"</a>Go back News Archive</p>

  <?php
  //$this->load->view('themes/bootswatch/footer');
  $this->load->view($this->config->item('theme') . 'footer');

  ?>
