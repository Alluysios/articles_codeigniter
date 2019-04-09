<?php if($results): ?>
<?php foreach($results as $row): ?>
    <h1 class="ui huge header"><?php echo $row->title ?></h1>
    <div class="ui brown piled segment">
        <div class="ui image">
            <img src="<?php echo base_url()?>uploads/<?php echo $row->img ?>" alt="article image">
        </div>
        <div class="extra">
            <?php if($this->tank_auth->get_user_id() === $row->author_id) :?>
                <a href="<?php echo base_url(); ?>article/edit/<?php echo $row->id?>" class="ui blue button" id="edit"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?php echo base_url(); ?>article/delete/<?php echo $row->id?>" class="confirm ui red button" id="delete"><i class="fa fa-trash"></i> Delete</a>
            <?php endif; ?>
        </div>
        <h4 class="header">
            Author: <?php echo ($row->username) ?> , <?php echo $row->email ?>
            <div class="grey-text meta">
                <?php $date = $row->date; ?>
                <p class="date">Created: <?php echo date_format(new DateTime($date), 'l F jS Y'); ?></p>
            </div>
        </h4>
        <p><?php echo nl2br_except_pre($row->description) ?></p>

        <a class="ui button blue" href="<?php echo base_url() ?>article/read">&larr; Read More Articles</a>
    </div>
<?php endforeach; ?>
<?php endif; ?>