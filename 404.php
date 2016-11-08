<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo("html_type"); ?> />
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
404
</title>

<link rel="alternate" type="application/rss+xml" title="<?php get_bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/img/favicon.png" />

<?php wp_head(); ?>




</head>
<body>
<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg', 'bg-10.jpg', 'bg-11.jpg', 'bg-12.jpg' ); // array of filenames
  $ic = array('war', 'body-cut', 'unicorn', 'body-overlay', 'car-burn', 'death-boiling', 'electrical-shock', 'execute-hanging', 'fell-down', 'garbage', 'head-shot-arrow', 'head-shot', 'hippie', 'nuclear', 'frankenstein', 'skull', 'zynga', 'head-stab-1', 'head-cut' ); // array of filenames

  $i = rand(0, count($bg)-1); 
  $z = rand(0, count($ic)-1); 
  $selectedBg = "$bg[$i]"; 
  $selectedIc = "$ic[$z]"; 
?>

<style>
 
.page404 {
	position:relative;
	overflow:hidden;
	height:100%;
    
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-image: url('<?php bloginfo("template_url"); ?>/img/bc/<?php echo $selectedBg; ?>');
  /*background-image: url('https://source.unsplash.com/1600x900/?patterns');
    background-image: url('https://source.unsplash.com/category/technology/1600x900');
    */
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    
    }
    
.p404p {
        background-color: rgba(49,49,49,0.6);
        padding:1em 2em;
        padding-bottom: 0.5em;
        font-size: 4em; 
        font-weight: bold;
        color: #fff;
        text-align: center;
    
       /* background-image: url('https://c2.staticflickr.com/2/1495/26405211772_d299c54ee0.jpg');*/
        background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    } 
    
.navigator {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap; 
    background-color: rgba(49, 49, 49,0.8);
    
    } 
.navigator > a {
    color: #fff;
    text-align: center;
    width: 50%;
    padding: 1.3em 0;
    display: block;
    position: relative;
    text-decoration: none;
    }
    .navigator > a:hover {
    background-color: rgba(241, 196, 15,0.2);  
    }    
.navigator a span{
    font-size: 1em;
    
    letter-spacing: 0.3em;
    text-transform: uppercase;
    } 
    
.underirght {
    text-align: center;
    color: #fff; 
    padding: 0.2em 0;
    }
.underirght a{
    color: #fff;    
    }
</style>
	
<div class="page404" id="rand">

    <div class="bigttl">
        <div class="p404p">
            Оп-па&#8230;
        </div>


        <div class="navigator">


            <a href="/?from=404">
                <span>Главная</span>
            </a>

            <a href="<?php echo home_url('/category/news/?from=404'); ?>">
                <span>Новости</span>
            </a>              
            <a href="<?php echo home_url("/science/?from=404"); ?>">
                <span>Поп-наука</span>
            </a>            
            <a href="<?php echo home_url('/index.php?s='); ?>">
                <span>Поиск</span>
            </a>

        
        </div>
    <div class="underirght">
    <a href="/webinfo/?from=404">info</a> &middot; <a href="http://nikolaysemenov.ru/?from=iam404">nikolaysemenov.ru</a></div>
    </div>

</div>
		
		

<?php wp_footer(); ?>
     
    </body>
</html>
