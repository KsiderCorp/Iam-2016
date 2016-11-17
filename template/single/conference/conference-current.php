<div class="block">
    <div class="single_header">
        <h1><?php the_title(); ?></h1>
    </div>
    
    
  <div class="pure-g">
      <div class="pure-u-2-3">
          

    <div class="conferense_d">
       
        <?php if( get_field('dates') ): the_field('dates');  else : endif; ?>
        
        <a href="<?php if( get_field('info') ): the_field('info'); else : endif; ?>">Информация</a>
        
    </div>
    
    <div class="curent_conference-content">
        <?php the_content(); ?>
    </div>
  
<?php if ( get_field('regopen') == true )  { ?>    
    <div class="registration">
<?php include(TEMPLATEPATH . '/template/single/conference/registration.php'); ?>
    </div>
<?php } else { ?>  

<div class="registration">
    Регистрация закрыта
</div>
  
<?php } ?> 
   
      </div>
      <div class="pure-u-1-3">
          
          <div class="single_side">
              	<div class="timeline">
		<?php the_field('download'); ?>
				</div>
          </div>
          
      </div>
  </div>       
    
</div>




<script> 
function generatePassword(length) {
    var length,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}  
  
var date = new Date();

var numLow = date.getHours();
var numHigh = date.getMinutes();
var adjustedHigh = (parseFloat(numHigh) - parseFloat(numLow)) + 1;
// var numRand = Math.floor(Math.random()*adjustedHigh) + parseFloat(numLow);
var numRand = numHigh+''+numLow;

 
document.getElementById('passgen').value = generatePassword(25); 
document.getElementById('gen').value = generatePassword(2)+numRand;     
 
</script>