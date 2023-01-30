<?php
require('includes/db.php');
include('includes/function.php');

if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$post_per_page=2;
$result=($page-1)*$post_per_page;

// $result = 0
// $result = 5;
// $result = 10

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>admissione | Archive</title>
		<link rel="stylesheet" href="./assets/css/common.css">
		<style>
			.main {
				align-items: flex-start;
				margin-bottom: 100px !important;
			}
			.cibertix_input {
				grid-column: 3/11;
				margin-top: 150px;
				display: grid;
				grid-template-columns: 5fr 1fr;
				grid-gap: 30px;
			}
			.sidebar {
				grid-column: 1/4;
				display: grid;
				grid-row-gap: 30px;
				margin-top: 50px;
			}
			.cards {
				grid-column: 4/13;
				display: grid;
				grid-row-gap: 30px;
				margin-top: 50px;
			}
			.card {
				padding: 0;
				border-radius: 20px;
				cursor: pointer;
			}
			.card .card-content {
				display: grid;
				grid-template-columns: 1fr 2fr;
			}
			.card .card-image {
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				border-radius: 20px 0 0 20px;
			}
			.card .card-body {
				padding: 20px;
				display: grid;
				grid-gap: 30px;
				overflow: hidden;
				width: max-content;
				max-width: 550px;
			}

			.card .card-body .card-text {
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 3; /* number of lines to show */
						line-clamp: 3; 
				-webkit-box-orient: vertical;
			}
			.pagination {
				display: grid;
				grid-template-columns: auto auto auto auto auto auto;
				grid-template-rows: 1fr;
				grid-column-gap: 25px;
				margin: 50px auto;
				padding: 20px;
				list-style-type: none;
				width: fit-content;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	<body>
		<?php include_once('includes/navbar.php'); ?>

		<div class="main container m-auto mt-3 row">
			<form class="cibertix_input">
              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
              <input class="button opaque" type="button" value="Submit">
            </form>
			<div class="sidebar">
				<div class="card">
					<div class="card-content">
						<div class="card-body">
							<h5 class="heading-3 m-0 text-dark">Categories</h5>
							<hr class="border border-large bg-danger">
								<?php 
									$sql = "SELECT * FROM category";
									$runPQ=mysqli_query($db,$sql);
									while($category = mysqli_fetch_assoc($runPQ)) {
										echo '<a class="text-gray" href="archive.php?category='.$category['name'].'">'.$category['name'].'</a>';
									}
								?>
							<div class="small-text m-0 text-gray">
								<div class="card-text">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cards">
				<?php
				if (isset($_GET['search'])){
					$keyword = $_GET['search'];
					$postQuery="SELECT * FROM posts WHERE title LIKE '%$keyword%' OR category_id = (SELECT id FROM category WHERE name = '$keyword') ORDER BY id DESC LIMIT $result,$post_per_page";
				} else if (isset($_GET['category'])) {
					$keyword = $_GET['category'];
					$postQuery="SELECT * FROM posts WHERE category_id = (SELECT id FROM category WHERE name = '$keyword') ORDER BY id DESC LIMIT $result,$post_per_page";
				} else {
					$postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
				}
				
				$runPQ=mysqli_query($db,$postQuery);
				while($post=mysqli_fetch_assoc($runPQ)) {
					?>
					<div class="card">
						<div onclick="location.href = '<?=$base_url?>/post.php?id=<?=$post['id']?>'">
							<div class="card-content">
								<div class="card-image" style="background-image: url('images/<?=getPostThumb($db,$post['id'])?>');"></div>
								<div class="card-body">
									<h5 class="heading-3 m-0 text-dark"><?=$post['title']?></h5>
                    				<hr class="border border-large bg-danger">
									
									<div class="small-text m-0 text-gray">
										<div class="card-text">
											<?=$post['content']?>
										</div>
										<a class="link m-0 text-gray" href="post.php?id=<?=$post['id']?>">Read More</a>
									</div>
									<div class="text m-0 text-dark"><small class="text-muted">Posted on <?=date('F jS, Y',strtotime($post['created_at']))?></small></div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			
			</div>
			<?php include_once('includes/sidebar.php'); ?>
		</div>
		<?php
			if (isset($_GET['search'])){
				$keyword = $_GET['search'];
				$q="SELECT * FROM posts WHERE title LIKE '%$keyword%' OR category_id = (SELECT id FROM category WHERE name = '$keyword')";
			} else if (isset($_GET['category'])) {
				$keyword = $_GET['category'];
				$q="SELECT * FROM posts WHERE category_id = (SELECT id FROM category WHERE name = '$keyword')";
			} else {
			$q="SELECT * FROM posts";

			}
			$r=mysqli_query($db,$q);
			$total_posts=mysqli_num_rows($r);
			$total_pages=ceil($total_posts/$post_per_page);
		?>
		<?php 
		if ($total_pages > 1) {
		?>
			<nav aria-label="Page navigation example">
				<ul class="pagination card justify-content-center">
				<?php
					if($page>1){
					$switch="";
					}else{
					$switch="disabled";
					}
					if($page<$total_pages){
					$nswitch="";
					}else{
					$nswitch="disabled";
					}
				?>
					<li class="page-item <?=$switch?>" style="grid-column: 1/2">
						<a 
							class="link text-dark" 
							href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?><?php if(isset($_GET['category'])){echo "category=$keyword&";}?>page=<?=$page-1?>" 
							tabindex="-1" 
							aria-disabled="true"
						>Previous</a>
					</li>
					<?php
						if ($page != $total_pages) {
							$start = $page - 2 > 0 ? $page - 2 : 1;
							if ($start + 3 < $total_pages) {
								$end = $start + 3;
							} else {
								$end = $total_pages;
							}
						} else {
							$start = $page - 3 > 0 ? $page - 3 : 1;
							$end = $total_pages;
						}
						for($opage=$start;$opage<=$end;$opage++) {
					?>
						<li class="page-item">
							<a 
								class="link <?php if($opage==$page) { ?>text-dark<?php } else { ?>text-gray<?php } ?>" 
								href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?><?php if(isset($_GET['category'])){echo "category=$keyword&";}?>page=<?=$opage?>"
							>
								<?=$opage?>
							</a>
						</li>
					<?php } ?>
			
					<li class="page-item <?=$nswitch?>" style="grid-column: 6/7">
						<a 
							class="link text-dark" 
							href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?><?php if(isset($_GET['category'])){echo "category=$keyword&";}?>page=<?=$page+1?>"
						>Next</a>
					</li>
				</ul>
			</nav>
		<?php } ?>
		
		<?php include_once('./includes/footer.php'); ?>    

        <script src="./assets/js/common.js"></script>
		
	</body>
</html>