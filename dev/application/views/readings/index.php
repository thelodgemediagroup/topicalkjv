<div class="page-header">
	<h1><?php echo $readings[0]['topic_name'] ?></h1>
	<hr />
</div>

<?php foreach ($readings as $reading): ?>
	
	<div class="list-verse">
		<?php echo $reading['text'] ?>
		<a href="<?php echo 'view/'.$reading['reading_id']; ?>" title="<?php echo $reading['book_name'].' '.$reading['chapter'].':'.$reading['verse']; ?>">
			<p><b><?php echo $reading['book_name']. ' ' . $reading['chapter'].':'. $reading['verse'] ?></b></p>
		</a>	
	</div>

<?php endforeach ?>