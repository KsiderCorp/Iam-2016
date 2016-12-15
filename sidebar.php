<nav>
    <div class="block">
        <div class="navigation vertical">

            <div class="logotype">
            <?php if ( !is_front_page() ) : ?>
            <a href="/">ИПРИМ</a><span>РАН</span>
            <?php else : ?>&nbsp;<?php endif ; ?>
            </div>
            
           <div class="top_menu">
                <ul>
                    <li><a href="/en/">en</a></li>
                    
                    <li>
                    
<input type="checkbox" name="" id="search">   
<label for="search" class="submenu"><i class="icon-search-1"></i></label>

   <div class="navigation_advance">
<?php include(TEMPLATEPATH . '/template/sidebar/search_top.php'); ?>                      </div>
                   </li>
                    
  
                   <li>
<input type="checkbox" name="" id="sitemap">                    
<label for="sitemap" class="submenu"><i class="icon-grid"></i></label>                

   
    <div class="navigation_advance">
<?php include(TEMPLATEPATH . '/template/sidebar/sitemap.php'); ?>              
    </div>
                  </li>
                
                </ul>
            </div>
            
        </div>
    </div>
</nav>