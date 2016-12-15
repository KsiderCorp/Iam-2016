<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<div class="block">
<div class="editors_wrap"> 
    <div class="editors_content center">
       <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    
    <div class="the_editors-list">
     
<?php 
$editors = get_users('blog_id=1&orderby=nicename&order=DESC&role=iam-editors'); 

foreach($editors as $user) :
    $user_pic = $user->user_login;
    $the_user = get_user_by('login', $user_pic);
    $the_user_id = $the_user->ID;
    $the_user_url = $the_user->user_url;
    $avatar = get_wp_user_avatar_src($the_user_id, 'full'); ?> 

<div class="editor editor-block">

<div class="editor-pic id<?php echo $the_user_id; ?>">
<style>   
.editor-pic.id<?php echo $the_user_id; ?>
    {background-image:url('<?php echo $avatar;?>' );}          
</style>  
<?php if ($the_user_url) { ?> 
<a href="<?php echo $the_user_url; ?>" class="edlink"><i class="icon-link-streamline"></i></a>
<?php } ?>                 
</div>
   
    <div class="editor-name">
 
 <?php 
    $string = $user->display_name;
    $tok = strtok($string, " ");
    $cunt=0;                     
while ($tok) {
    $cunt++;
echo "<span class='id-".$cunt."'>".$tok."</span>";
    $tok = strtok(" ");} ?>               
               
    </div>
    
    <div class="editor-position">
        <?php echo get_user_meta($the_user_id, 'position', true); ?>
    </div>
</div>

<?php endforeach;?>           
    </div>
  

<div class="editors_contacts">
<span>
<i class="icon-android-call"></i> +7 495 946-18-05
</span>

<span>
<i class="icon-email-mail-streamline"></i> <a href="mailto:iam@iam.ras.ru"> info@iam.ras.ru</a>
</span>           
</div>            
 </div>     
</div>