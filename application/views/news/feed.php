<h2><?php echo $title ?></h2>
<?php
	/*
	echo $rss->channel->item->title;
	die();
	*/

	foreach ($rss->channel->item as $rss_item): ?>

        <h3><?php echo $rss_item->title ?></h3>
        <div class="main">
                <?php echo $rss_item->description ?>
        </div>
        <p><a href="<?php echo $rss_item->link ?>">View article</a></p>

<?php endforeach ?>
