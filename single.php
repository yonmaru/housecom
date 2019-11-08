<?php get_header(); ?>
<?php
// 投稿のスラッグを取得
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<body id="top" class="single-<?php echo $slug; ?>">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_template_part('inc/header'); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
        <section class="section_single">
            <?php if(have_posts()): the_post(); ?>
            <div <?php post_class( 'kiji inner' ); ?>>
                <div class="kiji-info">
                    <span class="kiji-date">
                        <i class="fas fa-pencil-alt"></i>
                        <time
                        datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                        <?php echo get_the_date(); ?>
                        </time>
                    </span>
                </div>
                <!--タイトル-->
                <h1 class="title font-ja bold"><?php the_title(); ?></h1>
                <!--アイキャッチ取得-->
                <?php if( has_post_thumbnail() ): ?>
                <div class="kiji-img">
                <?php the_post_thumbnail( 'large' ); ?>
                </div>
                <?php endif; ?>
                <!--本文取得-->
                <?php the_content(); ?>
                <div class="btn01">
                    <a href="/#section_news" class="font-en arrow-back">BACK</a>
                </div>
            </div>
            <?php endif; ?>
        </section>
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
