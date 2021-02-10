	<footer class="">
		<hr>
		<div class="container">
			<div class=" row">
				<div class="col-sm"><?php dynamic_sidebar('sidebar_1');?></div>
			    <div class="col-sm "><?php dynamic_sidebar('sidebar_2');?></div>
			    <div class="col-sm ">
			    	<?php dynamic_sidebar('redes_sidebar');?>
			    </div>
				
			</div>
		</div>
		<div class="row sub-footer">
			<span class="container align-middle">
				<p class="text-center card-text">Todos los derechos reservados © .<?php echo get_bloginfo('name') ." ". date('Y');  ?>	</p>
			</span>
		</div>
	</footer>		
	</body>
</html>