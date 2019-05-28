<?php 
/**
* 文章归档
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
                        <h1>归档</h1>
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
			<?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;  
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('m',$archives->created);   
        $y=$year; $m=$mon;   
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            @$output .= '<h3>'. $year .'</h3><ul class="post-list" id="post-list">'; //输出年份   
        }    
        $output .= '<li class="post-item"><div class="meta"><time datetime="'.date('Y-m-d ',$archives->created).'" itemprop="datePublished">'.date('Y-m-d ',$archives->created).'</time></div><span><a href="'.$archives->permalink .'">'. $archives->title .'</a></span></li>'; //输出文章日期和标题   
    endwhile;   
    $output .= '</ul>';
    echo $output;
?>

            </section>
        </div>
 <?php $this->need('footer.php'); ?>