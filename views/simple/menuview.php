
</br>
<h4>	<p style="text-indent: 90px;" > Меню </p></h4>


<?php
//
//foreach($itogov_massiv as $key=>$value) {
//	print_r('<p style="text-indent: 90px;" >');
//	print_r('<p style="text-indent: 90px;" >');
//	print_r('<button type="button" class="btn btn-primary">Коктейль</button>');
//    foreach($value as $key=>$value1) {
//		foreach($value1 as $w=>$c) {
//		//	print_r($c);
//			foreach($c as $q=>$q1) {
//				print_r('  ');
//				print_r('<p style="text-indent: 90px;" >');
//				print_r('<button type="button" class="btn btn-outline-success">');
//				print_r($q1);
//				print_r('</button>');
//			}
//		}
//    }
//	print_r('</div>');
//}




 ?>
<p style="text-indent: 90px;" > </br> </p>


<p style="text-indent: 90px;" >
<div class="card-body">
	<? foreach($itogov_massiv as $key=>$value):?>
		<div class="card border-primary mb-3" style="max-width: 20rem;">
		<div class="card-header"> <? print_r($value[0][0]['price'] . ' руб') ?></div>
		<div class="card-body">
			<h6 class="card-title"><?  print_r($value[0][0]['cocktail_name']) ?></h6>
			<? foreach($value as $key=>$value1):?>
			<?php endforeach; ?></div>
			<? foreach($value1 as $w=>$c):?>
			<? foreach($c as $q=>$q1):?>
					<p style="text-indent: 90px;" >
			<class="card-text"> <? print_r('<p style="text-indent: 90px;" >' . $q1) ?>
			<?php endforeach; ?>
		<?php endforeach; ?></div>
<?php endforeach; ?>
		</div>
	</div>




</p>

</div>
</div>
</body>
</html>


