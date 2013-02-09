<div class="page-header">
	<h1>King James Bible Verses By Topic</h1>
	<hr />
</div>
<?php foreach ($links as $link): ?>

	<a href="/index.php/readings/<?php echo $link['topic_id']; ?>" title="<?php echo $link['topic_name']; ?>"><?php echo $link['topic_name'] ?></a><br />

<?php endforeach ?>