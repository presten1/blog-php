<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://fonts.google.com/specimen/Averia+Serif+Libre?query=Averia+Serif+Libre">
<link rel="stylesheet" href="static/css/styling.css">
<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/function.php') ?>

<?php require_once( ROOT_PATH . '/includes/reglogin.php') ?>

<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/headsec.php') ?>



<title >lifeblog</title>
<meta charset="uft-8">
    </head>

    <body>
        <div class="container">
        <?php include( ROOT_PATH . '/includes/navbar.php') ?>
        
        <?php include( ROOT_PATH . '/includes/banner.php') ?>
        
            <div class="content">
                    <h2 class="content-title">Recent Articles</h2>
                    <hr>
                    <?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/imagess/' . $post['image']; ?>" class="post_image" alt="">

        <?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>



		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
                    </div>
            </div>

            <?php include( ROOT_PATH . '/includes/footer.php') ?>


        </div>
    </body>
</html>