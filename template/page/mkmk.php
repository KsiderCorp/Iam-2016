<?php
/*
Template Name: Механика сплошных сред
*/
get_header(); ?>

<script language = 'javascript'>
  var delay = 100;
  setTimeout("document.location.href='http://mkmk.ras.ru'", delay);
</script>
<style>
    #mkmk {
        padding: 20% 0;
    }
    
.loader1{
	position: relative;
	height: 80px;
	width: 80px;
	border-radius: 80px;
	border: 3px solid #e74c3c;

	top: 28%;
	top: -webkit-calc(50% - 43px);
	top: calc(50% - 43px);
	left: 35%;
	left: -webkit-calc(50% - 43px);
	left: calc(50% - 43px);

	-webkit-transform-origin: 50% 50%;
			transform-origin: 50% 50%;
	-webkit-animation: loader1 3s linear infinite;
			animation: loader1 3s linear infinite;
}

.loader1:after{
	content: "";
	position: absolute;
	top: -5px;
	left: 20px;
	width: 11px;
	height: 11px;
	border-radius: 10px;
	background-color: #e74c3c;
}

@-webkit-keyframes loader1{
    0%{-webkit-transform:rotate(0deg);}
    100%{-webkit-transform:rotate(360deg);}
}

@keyframes loader1{
    0%{transform:rotate(0deg);}
    100%{transform:rotate(360deg);}
}
	

	
</style>
<div id="mkmk">


<div class="ttll">
	
		<div class="box">
			<div class="loader1"></div>
		</div>
	
</div>

</div>

<?php get_footer(); ?>