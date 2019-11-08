<?php get_header(); ?>
<?php
// 投稿のスラッグを取得
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<body id="top" class="page-<?php echo $slug; ?>">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_template_part('inc/header'); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <!-- ***** Start recruit Area ***** -->
        <?php get_template_part('inc/recruit'); ?>
        <!-- ***** //End recruit Area ***** -->
	</article>
	<!-- ***** Start footer Area ***** -->
	<?php get_template_part('inc/footer'); ?>
	<!-- ***** //End footer Area ***** -->
</div>
</body>
</html>
