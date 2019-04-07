<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<a href="<?php echo base_url()."birds/loon";?>" class="ui inverted blue button">Loon</a>
<a href="<?php echo base_url()."birds/owl" ?>" class="ui inverted blue button">Owl</a>
<a href="<?php echo base_url(); ?>birds/falcon" class="ui inverted blue button">Falcon</a>
<a href="<?php echo base_url(); ?>birds/sparrow" class="ui inverted blue button">Sparrow</a>

<div class="ui segment">
  <img class="ui small left floated image" src="<?php echo base_url() ?>img/<?php echo $bird_1 ?>">
  <h1><?php echo $heading ?></h1>
  <p><?php echo $content_1 ?></p>