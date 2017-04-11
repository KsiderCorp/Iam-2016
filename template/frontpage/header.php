<div class="front_header">
    <div class="block">
        
        <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-2-3">
                
        <div class="header-ras_name">
             <a href="http://fano.gov.ru/ru/about/sub_organizations/?id_4=2045">ФАНО России</a> 
        </div>
                
           <div class="header-ras_iam">
               <span>Институт</span>
                   <span>прикладной</span>
               <span>механики</span>
           </div>  
                  
   <?php $set = get_option('option_name'); ?>              
                  
           <div class="header-ras_adress">
<?php echo $set['adress']; ?>  
<i class="icon-android-call"></i> <?php echo $set['phone']; ?>,<br>
<i class="icon-email-mail-streamline"></i> <a href="mailto:<?php echo $set['mail']; ?>"> <?php echo $set['mail']; ?></a>
           </div> 
               
 <div class="front_menu">

        
    <ul class="nav hide">
        <li><a href="#header" class="scrollto"><i class="icon-ios-home-outline"></i></a></li>
        <li><a href="#news" class="scrollto">Новости</a></li>
        <li><a href="#about" class="scrollto">Об Институте</a></li>
		<li><a href="#administration" class="scrollto">Администрация</a></li>
     </ul>

<ul>
 <?php $kinde = array(  
		'container' => false,
		'theme_location'  => 'head_nav', 
		'items_wrap' => '%3$s'		);  
wp_nav_menu($kinde);  
?>
</ul>
</div>              
               
                
            </div>
            
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-3">
                
<div class="header-department">
<?php 
$omsgs = "521";
$omakm = "102";
$lpcm = "48";
$lpcmpt = "23";
$lncmmcm = "109";
$lamimpncag = "2962";
    
?>


<ul class="header-department_main">
    <li>
    <a href="/units/omsgtm/" class="fplab">Отдел механики структурированной и гетерогенной среды</a>
    <span class="front_boss-name">Руководитель отдела <?php echo do_shortcode("[pep id='".$omsgs."' pp='omsgs']Власов А.Н.[/pep]"); ?></span>
    </li>
    
    <li>
    <a href="/units/omakm/" class="fplab">Отдел механики адаптивных композиционных материалов</a>
    <span class="front_boss-name">Руководитель отдела <?php echo do_shortcode("[pep id='".$omakm."' pp='omakm']Мовчан А.А.[/pep]"); ?></span>
    </li>
    <li>
    <a href="/units/lfhm/"  class="fplab">Лаборатория физико-химической механики</a>
     <span class="front_boss-name">Руководитель лаборатории <?php echo do_shortcode("[pep id='".$lpcm."' pp='lpcm']Мягков Н.Н.[/pep]"); ?></span>
    </li>
    <li>
    <a href="/units/lpcmpt/"  class="fplab">Лаборатория физико-химической механики перспективных технологий</a>
    <span class="front_boss-name">Руководитель лаборатории <?php echo do_shortcode("[pep id='".$lpcmpt."' pp='lpcmpt']Левин Ю.К.[/pep]"); ?></span>
    </li>
    <li>
    <a href="/units/lnmmk/" class="fplab">Лаборатория неклассических моделей механики композиционных материалов</a>
    <span class="front_boss-name">Руководитель лаборатории <?php echo do_shortcode("[pep id='".$lncmmcm."' pp='lncmmcm']Лурье С.А.[/pep]"); ?></span>
    </li>    
    <li>
    <a href="/units/lamimpncag/" class="fplab">Лаборатория перспективных методов исследования механических свойств природных композитов и геотехнологий</a>
    <span class="front_boss-name">Руководитель лаборатории <?php echo do_shortcode("[pep id='".$lamimpncag."' pp='lncmmcm']Королев М.В.[/pep]"); ?></span>
    </li>
</ul>

      <div class="banner-seminars">
<span>Семинары:</span> <a href="/continuum_mechanics/"  class="">Механика сплошных сред</a>
   </div>
</div>
                
            </div>
        </div>
        
        
    </div>
</div>


