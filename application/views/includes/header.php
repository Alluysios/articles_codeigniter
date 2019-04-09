<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Articles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url()."css/semantic.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url()."css/icon.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url()."css/style.css" ?>">
        <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."js/bootbox.js" ?>"></script>
    </head>
    <body>
    <div class="ui container">
        <div class="ui secondary pointing menu">
             <a href="<?php echo base_url() ?>" class="item">
                Home
            </a>
            <div class="ui dropdown link item">
                <span class="text">Birds</span><i class="dropdown icon"></i>
                <div class="menu">
                    <a href="<?php echo base_url()."birds/loon";?>" class="item">Loon</a>
                    <a href="<?php echo base_url()."birds/owl" ?>" class="item">Owl</a>
                    <a href="<?php echo base_url(); ?>birds/falcon" class="item">Falcon</a>
                    <a href="<?php echo base_url(); ?>birds/sparrow" class="item">Sparrow</a>
                </div>
            </div>
            <div class="ui dropdown link item">
                <span class="text">Articles</span><i class="dropdown icon"></i>
                <div class="menu">
                    <a href="<?php echo base_url() ?>article/read" class="item"> Read Articles</a>
                    <div class="divider"></div>
                    <a href="<?php echo base_url() ?>article/create" class="item"> Write an Article </a>
                </div>
            </div>
            <div class="right menu">
            <?php if($this->tank_auth->is_logged_in()) : ?>
            <div class="ui blue button ccbtn">
                <div class="ui dropdown link item">
                    <div class="text log">
                        Welcome: <strong><?php echo $this->tank_auth->get_username() ?></strong>
                    </div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="<?php echo base_url()."auth/change_password" ?>" class="ui item log">Change Password</a>
                        <a href="<?php echo base_url()."auth/change_email" ?>" class="ui item log">Change Email</a>
                        <div class="divider"></div>
                        <a href="<?php echo base_url()."auth/logout" ?>" class="ui item log">Logout</a>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div class="ui blue button ccbtn">
                    <a href="<?php echo base_url()."auth/login" ?>" class="ui item log">Login</a>
                </div>
            <?php endif; ?>
            </div>
        </div>

        <?php 
  $message = $this->session->flashdata('message');
    if($message) {
      echo "<h3 class='ui green message' id='message'> $message </h3>";
    }

 ?>