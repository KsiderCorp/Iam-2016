<div class="getmail">
    <div class="block">

<div class="select_menu">
    
<div class="select_item">         
<input type="radio" name="select_item" id="request" checked>
<label for="request" class="select_label"><span>Заявка</span></label>

<div class="fromblock">
 
<form action="<?php the_permalink(); ?>" method="post"  class="confirmer">

<label for="">Имя</label>
<input id="fio" name="fio" type="text" class="requiredField getfio"  placeholder="ФИО">

<label for="">Ваша почта <span>(на нее придет пароль)</span></label>
<input id="mail" name="email" type="text" class="requiredField email getfio"  placeholder="Email">

<label for="">Отдел</label>
<select id="otdely" name="otdely" class="field select medium"> 
    <option value="Отдел механики структурированной и гетерогенной среды">Отдел механики структурированной и гетерогенной среды</option>
    <option value="Отдел механики адаптивных композиционных материалов">Отдел механики адаптивных композиционных материалов</option>
    <option value="Лаборатория физико-химической механики">Лаборатория физико-химической механики</option>
    <option value="Лаборатория физико-химической механики перспективных технологий">Лаборатория физико-химической механики перспективных технологий</option>
    <option value="Лаборатория неклассических моделей механики композиционных материалов">Лаборатория неклассических моделей механики композиционных материалов</option>
</select>

<label for="">Логин почты:</label>
<input id="getmailinput" name="getmail" type="text" class="requiredField getmailinput" tabindex="1" placeholder="login"><span>@iam.ras.ru</span>



<input type="hidden" name="sub"  value="sub" />
<input type="submit" name="submited" class="button" value="Отправить" id="reqsent"/>
</form>
 
     <div class="mail_content">
        
<h3><?php the_title(); ?></h3>
<?php the_content(); ?>
        
    </div>
 </div> 
</div> 
 
<div class="select_item">
<input type="radio" name="select_item" id="enter" checked>
 <label for="enter"  class="select_label"><span>Войти</span></label>    
    <div class="fromblock">
   
<form method="post" action="https://passport.yandex.ru/for/iam.ras.ru?mode=auth"> 

<div class="label">Логин:</div>
<input type="text" name="login" value="" tabindex="1"/>
<div class="label">Пароль:</div>
<input type="hidden" name="retpath" value="http://mail.yandex.ru/for/iam.ras.ru">
<input type="password" name="passwd" value="" maxlength="100" tabindex="2"/> <br>

<label for="a"><input type="checkbox" name="twoweeks" id="a" value="no" tabindex="4"/>чужой компьютер (<a href="https://yandex.ru/support/passport/#foreign-pc">что это</a>)</label> 

<input type="submit" name="In" value="Войти" tabindex="5"/> </form>
         
    </div>
</div> 

</div>
    
   
    </div>   
</div>




