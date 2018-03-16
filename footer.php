</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){ $('.border_box').addClass('fullwidth_animate_top') }, 1500);
		setTimeout(function(){ $('.border_box_2').addClass('fullwidth_animate_right') }, 1800);
		setTimeout(function(){ $('.border_box').addClass('fullwidth_animate_bottom') }, 2000);
		setTimeout(function(){ $('.border_box_2').addClass('fullwidth_animate_left') }, 2300);
		setTimeout(function(){ $('.navigation').addClass('showborder') }, 4500);
		

		$('nav ul li a').click(function(){
			$('body').addClass('gojump');
		});

	});
</script>
</html>