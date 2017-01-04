<?php theme_include('header'); ?>


<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="content">
                <!-- start blog_left -->
                <div class="blog_left">

                    <?php if (has_posts()): ?>
                        <?php posts(); ?>
                        <div class="blog_main">
                            <div class="b_left">
                                <span class="bg"><img src="<?php echo theme_url("/img/tab_pic3.jpg") ?>" alt=""/></span>
                            </div>
                            <div class="b_right">
                                <div class="tab-text">
                                    <p><a href="#"><?php echo article_author('real_name'); ?></a></p>
                                    <div class="post-meta">
                                        <a href="#" class="date">
                                            <time
                                                datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <img src="<?php echo theme_url('images/blog_pic1.jpg') ?>" alt=""/>
                            <div class="b_left">
                                <h4 class="bg"><img src="<?php echo theme_url("img/note.jpg") ?>" alt=""/></h4>
                            </div>
                            <div class="b_right">
                                <h4><a href="<?php echo article_url(); ?>"
                                       title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h4>
                                <div class="blog_list">
                                    <ul>
                                        <li>
                                            <a href="#"> <i class="date"> </i><span>June 3, 2013</span></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="comment"> </i> <span>Comments</span></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="news"> </i><span>Public, News</span></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="views"> </i><span>124 views</span></a>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="blog_art">
                                    <ul>
                                        <li>
                                            <a href="#"> <i> </i><span>18</span></a>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <p><?php echo article_html(); ?></p>
                            <a class="btn" href="<?php echo article_url(); ?>">read more</a>
                        </div>

                        <?php $i = 0;
                        while (posts()): ?>
                            <div class="blog_main">
                                <div class="b_left">
                                    <span class="bg"><img src="<?php echo theme_url("/img/tab_pic3.jpg") ?>"
                                                          alt=""/></span>
                                </div>
                                <div class="b_right">
                                    <div class="tab-text">
                                        <p><a href="#"><?php echo article_author('real_name'); ?></a></p>
                                        <div class="post-meta">
                                            <a href="#" class="date">
                                                <time
                                                    datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <img src="<?php echo theme_url('images/blog_pic1.jpg') ?>" alt=""/>
                                <div class="b_left">
                                    <h4 class="bg"><img src="<?php echo theme_url("img/note.jpg") ?>" alt=""/></h4>
                                </div>
                                <div class="b_right">
                                    <h4><a href="<?php echo article_url(); ?>"
                                           title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                                    </h4>
                                    <div class="blog_list">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="date"> </i><span>June 3, 2013</span></a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="comment"> </i> <span>Comments</span></a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="news"> </i><span>Public, News</span></a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="views"> </i><span>124 views</span></a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="blog_art">
                                        <ul>
                                            <li>
                                                <a href="#"> <i> </i><span>18</span></a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <p><?php echo article_html(); ?></p>
                                <a class="btn" href="<?php echo article_url(); ?>">read more</a>
                            </div>
                        <?php endwhile; ?>

                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>

                    <?php else: ?>
                        <div class="wrap">
                            <h1>No posts yet!</h1>
                            <p>Looks like you have some writing to do!</p>
                        </div>
                    <?php endif; ?>





                </div>
                <!-- start blog_sidebar -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

        <?php if (has_pagination()): ?>
            <nav class="pagination">
                <div class="wrap">
                    <div class="previous">
                        <?php echo posts_prev(); ?>
                    </div>
                    <div class="next">
                        <?php echo posts_next(); ?>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

<?php theme_include('footer'); ?>
