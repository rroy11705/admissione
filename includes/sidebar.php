<div class="right">
	<?php
		if(isset($_GET['id'])){
	?>
	<div class="card mb-3 p-0">
		<h5 class="card-header">Discussion</h5>
		<?php
			$comments = getComments($db,$post_id);
			if(count($comments)<1){
			  echo '<div class="card-body"><p class="text-center card-text">No Comments..</p></div>';
			}
			foreach($comments as $comment){
			  ?>
		<div class="card-body">
			<h5 class="" style="margin-bottom: 0;"><?=$comment['name']?></h5>
			<span class="text-secondary"> <small><?=date('F jS, Y',strtotime($comment['created_at']))?></small></span>
			<p class="card-text"><?=$comment['comment']?></p>
		</div>
		<?php } ?>
	</div>

	<div class="related-posts mt-5">
		<h4>Related Posts</h4>

		<?php
			$pquery="SELECT * FROM posts WHERE category_id={$post['category_id']} ORDER BY id DESC";
			$prun=mysqli_query($db,$pquery);
			while($rpost=mysqli_fetch_assoc($prun)) {
				if($rpost['id']==$post_id) {
				continue;
			}
		?>
			<div class="card p-3 mb-3">
				<div onclick="location.href = '<?=$base_url?>/post.php?id=<?=$rpost['id']?>'">
					<div class="card-content">
						<div class="card-image" style="background-image: url('images/<?=getPostThumb($db,$rpost['id'])?>');"></div>
						<div class="card-body">
							<h5 class="heading-3 m-0 text-dark"><?=$rpost['title']?></h5>
							<hr class="border border-large bg-danger">
							
							<div class="small-text m-0 text-gray">
								<div class="card-text">
									<?=$rpost['content']?>
								</div>
								<a class="link m-0 text-gray" href="post.php?id=<?=$rpost['id']?>">Read More</a>
							</div>
							<div class="text m-0 text-dark"><small class="text-muted">Posted on <?=date('F jS, Y',strtotime($rpost['created_at']))?></small></div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
	<?php } ?>
</div>