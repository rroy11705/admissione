<?php
require('includes/db.php');
require('includes/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/common.css">
    <title>admissione | Archive</title>
	<style>
		.left {
			grid-column: 1/9;
			margin-top: 150px;
		}
		.right {
			grid-column: 9/13;
			margin-top: 150px;
		}
		.card {
			padding: 0;
			border-radius: 20px;
			cursor: pointer;
		}
		.card-header {
			border-radius: 20px 20px 0 0 !important;
		}
		.related-posts .card .card-body .card-text {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
			-webkit-line-clamp: 3; /* number of lines to show */
					line-clamp: 3; 
			-webkit-box-orient: vertical;
		}
	</style>
</head>

<body>
    <?php include_once('includes/navbar.php'); ?>
    <div>
        <div class="container m-auto align-items-start">
            <div class="left">
                <?php
					$post_id=$_GET['id'];
					$postQuery="SELECT * FROM posts WHERE id=$post_id";
					$runPQ=mysqli_query($db,$postQuery);
					$post=mysqli_fetch_assoc($runPQ);
				?>
                <div class="card mb-5 p-5">

                    <div class="card-body">
                        <h5 class="card-title"><?=$post['title']?></h5>
                        <span class="badge bg-primary ">Posted on <?=date('F jS, Y',strtotime($post['created_at']))?></span>
                        <span class="badge bg-danger"><?=getCategory($db,$post['category_id'])?></span>
                        <div class="border-bottom mt-3"></div>
                        <?php $post_images=getImagesByPost($db,$post['id']); ?>

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
									$c=1;
									foreach($post_images as $image){
									if($c>1){
										$sw = "";
									}else{
										$sw = "active";

									}
								?>
                                <div class="carousel-item <?=$sw?>">
                                    <img src="images/<?=$image['image']?>" class="d-block w-100" alt="...">
                                </div>
                                <?php
									$c++;
									}
								?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image"> -->

                        <p class="card-text"><?=$post['content']?>
                        </p>
                        <div class="addthis_inline_share_toolbox"></div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Comment on this
                        </button>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Your Comment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4 pb-4">
                                <form action="includes/add_comment.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Comment</label>
                                        <input type="text" class="form-control" name="comment" id="exampleInputPassword1" required>
                                    </div>
                                    <input type="hidden" name="post_id" value="<?=$post_id?>">
                                    <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <?php include_once('includes/sidebar.php'); ?>

        </div>




        <?php include_once('includes/footer.php'); ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="./assets/js/common.js"></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60315b469e32d063"></script>
</body>

</html>