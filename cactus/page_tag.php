<?php 
/**
* æ ç­¾
*
* @package custom
*/
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
                    <div id="title">
                        <h1>标签</h1>
                    </div>
                </a>
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
            <div id="theme-tagcloud" class="tagcloud-wrap" style="
    padding-left: 10px;
">
			<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
			<?php while($tags->next()): ?>
			<a style="font-size:<?php echo(rand(10, 24)); ?>px; text-transform:capitalize;" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
			<?php endwhile; ?>
            </div>
                   </div>
 <?php $this->need('footer.php'); ?>
