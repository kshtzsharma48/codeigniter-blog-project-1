<?php include('public_header.php'); ?>
<div class="container">
	<h1>All Article</h1>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<td>Sr. No.</td>
				<td>Article TItle</td>
				<td>Published on</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		if($articles):
		$count = $this->uri->segment(3);
			foreach($articles as $article): 
		?>
			<tr>
				<td><?= ++$count ?></td>
				<td>
				<?= anchor("user/article_details/{$article->id}",$article->title) ?>
				</td>
				<td><?= date('d M y H:i:s', strtotime($article->created_dt))?></td>
			</tr>
		<?php
			endforeach;
		else:
		?>
			<tr>
				<td colspan="3">No record added</td>
			</tr>
		<?php 
		endif;
		?>
		</tbody>
	</table>
	<?=  $this->pagination->create_links(); ?>
</div>
<?php include('public_footer.php'); ?>