<footer>
    
<?php include(TEMPLATEPATH . '/template/footer-template.php'); ?>    
</footer>


<?php wp_footer(); ?>
<script>
WebFont.load({
    google: {
    families: ['PT Sans:400,700,400italic,700italic', 'PT Mono:400', 'PT Serif:400,700,400italic,700italic',]
    },
	timeout: 1000
  });

var reffer = document.referrer;
if (reffer.indexOf('iprim-energy.ru') != -1)  {
     $('body').prepend('<div class="iam_energy"><div class="message"><h3>Осторожно!</h3><p>Извещаем, что сайт предприятия «ИПРИМ-ЭНЕРГИЯ» содержит ложную информацию о сотрудничестве с <a href="/">ИПРИМ РАН</a>. Извещаем, что ИПРИМ РАН не ведет каких-либо совместных работ с указанным предприятием! Это предприятие не имеет также никакого отношения к научным результатам, перечисленным на страницах сайта.</p></div></div>')   
    }
 $(document).on("click", ".iam_energy", function(event){
 
     window.location.href = 'https://iam.ras.ru/news/attention/';
     
 });   
    
</script>

<?php $metrika = get_option('option_name');
      echo $metrika['metrika'];
?> 
  
   </body>
</html>

