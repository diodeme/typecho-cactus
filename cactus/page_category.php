<?php 
/**
* 文章分类
*
* @package custom
*/
header("content-type:text/html;charset=utf-8");  
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
   <body>
        <div class="content index width mx-auto px3 my4" style="
    margin-left: 298.196;
    margin-top: 32px;
">
            <header id="header">
                <a href="<?php $this->options->siteUrl();?>">
                    <div id="logo" style="background-image: url(<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>);"></div>
                   <div id="title">
                        <h1>分类</h1>
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
	    <section id="wrapper" class="home" style="
    padding-left: 20px;
">
                    <?php $this->widget('Widget_Metas_Category_List')->parse('<div class="col-md-3 categary-item-wrapper"><div class="categary-item" ><a class="categary-item-link" href="{permalink}"> {name} ({count})</a></div></div>'); ?>
                </section>
</div>

            <?php $this->need('footer.php'); ?>
