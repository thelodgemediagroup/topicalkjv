<div class="page-header">
	<h1><?php echo $reading[0]['book_name']. ' ' . $reading[0]['chapter'].':'. $reading[0]['verse']; ?></h1>
	<hr />
</div>
<div class="single-verse">
	<?php echo $reading[0]['text']; ?>
	<p><b><?php echo $reading[0]['book_name']. ' ' . $reading[0]['chapter'].':'. $reading[0]['verse']; ?></b></p>
</div>
<br />
<a href="<?php echo base_url().'index.php/readings/'.$reading[0]['topic_id']; ?>">Back to <?php echo $reading[0]['topic_name']; ?></a>