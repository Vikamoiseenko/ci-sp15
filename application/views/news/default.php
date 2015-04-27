<?php
//news/default.php
$this->load->view($this->config->item('theme') . 'header');
  echo '<h1>' . $xml->channel->title . '</h1>';
  echo '<h3>' . $xml->channel->title . '</h3>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />';
    echo '<p>' . $story->description . '</p><br /><br />';
  }

?>
