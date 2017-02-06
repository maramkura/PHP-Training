<?php
include 'data.php';
?>
<ul>
    <?php foreach ($nav as $v): ?>
    <li><a href="index.php?page=<?=$v['id']?>"><?=$v['name']?></a></li>
    <?php endforeach;?>
</ul>



<?php

if (isset($_GET['page']) && isset($content[$_GET['page']])):
?>
    <h1><?=$content[$_GET['page']]['title']?></h1>

    <?php if ($content[$_GET['page']]['type'] == 'text') :?>
    	 <p><?=$content[$_GET['page']]['body']?></p>

    <?php elseif ($content[$_GET['page']]['type'] == 'list') :?>
    	<ul>
    	 	<?php foreach ($content[$_GET['page']]['sia']  as $item) : ?>
    	 		<li><?=$item['title']?></li>

    	 <?php endforeach; ?>

    	 </ul>

	<?php endif;?>

<?php endif;?>


	