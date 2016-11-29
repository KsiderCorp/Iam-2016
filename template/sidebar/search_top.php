

 <div class="search_io"> 
   <div class="block">

<div class="search_line">
 
   <form method="post" id="searchform" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return(false)">
   
<label for="search_i"><h2>Поиск</h2></label><input type="text" id="search_i" name="s" placeholder="ввести запрос">

<input type="checkbox" name="advance" id="advance"><label for="advance">Настройка</label>

<div class="advanced">
    <label for="employees"><input type="checkbox" name="post_type[]" id="employees" value="employees"> Люди</label>   
    <label for="post"><input type="checkbox" name="post_type[]" id="post" value="post"> Новости</label>
    <label for="conference"><input type="checkbox" name="post_type[]" id="conference" value="conference"> Конференции</label><br>
    
    <input type="submit" value="искать">
</div>
  
   </form>
</div>
   
   
<div class="search_response"></div>
</div>
</div>

