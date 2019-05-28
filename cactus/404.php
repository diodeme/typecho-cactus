<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <body>
        <div class="content index width mx-auto px3 my4" style="
    margin-left: 298.196;
    margin-top: 32px;
">
            <header id="header">
                <a href="<?php $this->options->siteUrl();?>">
                     <div id="logo" style="background-image: url(<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>);"></div>
					</a>
                    <div id="title">
                        <h1><?php $this->options->title(); ?></h1>
                    </div>

                <div id="nav">
                    <ul>
                        <li class="icon">
                            <a href="#">
                                <i class="fa fa-bars fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $this->options->siteUrl();?>">主页</a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                        <?php if($this->options->github): ?>
						<li>
                         <a href="<?php $this->options->github();?>" target="_blank">Github</a>
                        </li><?php endif; ?>
                    </ul>
                </div>
            </header>
            <section id="wrapper" class="home" style="
    padding-left: 10px;
">
                <section id="about">
                    <div class="description coding">
                        <span class="typed prompt">[<?php $this->options->title(); ?>]# <br/>> 404 - <?php _e('页面没找到，但你仍可以在电路板到处逛逛'); ?> </span>
                    </div>
                </section>       
            </section>
        </div>
		
 <?php $this->need('footer.php'); ?>