<?php get_header(); ?>
<body id="top" class="page-home">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_template_part('inc/header'); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
		<div class="main_visual">
			<img src="/img/home/img01_pc.png" alt="" class="image-switch">
		</div>
		<section class="section01 section_news" id="section_news">
			<div class="inner">
				<h3 class="title_mini font-en bold">NEWS</h3>
                <div class="newsboxes">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <dl>
                        <dt class="font-en bold"><?php echo get_the_date('Y.m.d'); ?></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <?php endwhile; endif; ?>
                </div>
			</div>
		</section>
		<section class="section02 section_message">
			<div class="inner">
                <a href="/message/"><img src="/img/home/bnr01_pc.jpg" alt="" class="image-switch"></a>
			</div>
		</section>
		<section class="section03 section_voice">
			<div class="inner">
				<h2 class="title font-en bold">VOICE<span>社員の声</span></h2>
                <div class="voiceboxes">
                    <div class="voicebox voicebox1 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                    <div class="voicebox voicebox2 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                    <div class="voicebox voicebox3 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                    <div class="voicebox voicebox4 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                    <div class="voicebox voicebox5 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                    <div class="voicebox voicebox6 wow fadeInUp">
                        <a href="#">
                            <img src="img/home/voice01.jpg" alt="">
                            <ul>
                                <li class="year">2010年 新卒入社</li>
                                <li class="name">鈴木 一朗</li>
                                <li class="name_en font-en bold">ICHIRO SUZUKI</li>
                                <li class="dep">営業部／課長</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="btn01">
                    <a href="/voice/" class="arrow font-en">VIEW MORE</a>
                </div>
			</div>
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
