<h2>Articles</h2> 

<div class="ui buttons">
    <?php echo $links; ?>
</div>
<div class="ui divided items">
<?php if($results): ?>
<?php foreach($results as $row): ?>
    <div class="item">
        <div class="image">
            <img src="<?php echo base_url()?>uploads/thumb/<?php echo $row->thumbnail ?>" alt="article image">
        </div>
        <div class="content">
            <a class="header"><?php echo $row->title ?></a>
            <div class="meta">
                <?php $date = $row->date; ?>
                <span class="date">Date Created: <?php echo date_format(new DateTime($date), 'l F jS Y'); ?></span>
                <div class="divider"></div>
            </div>
            <div class="description">
                <p><?php echo substr($row->description, 0, 350). " . . . . ." ?></p>
            </div>
            <div class="extra">
                <a href="<?php echo base_url(); ?>article/detail/<?php echo $row->id ?>" class="ui tiny blue button">Read more</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>
