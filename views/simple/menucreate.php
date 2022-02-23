<?php
require 'application/config/config.php';
?>

<h4>	<p style="text-indent: 90px;" > Меню бара</p></h4>
    <p style="text-indent: 90px;" > Для маленького бара необходимо создать электронное меню  с рецептами и стоимостью коктейлей. </br> </p>


		<p style="text-indent: 80px;" >
		<div class="card-body">

			<class="card-text">
			<li>	Коктейль всегда состоит из трех ингредиентов.</br></li>
			<li>	Коктейль не может стоить меньше одного рубля и больше тысячи рублей</br></li>
			<li>	Цена всегда целое число без копеек</br></li>
			<li>	Коктейль можно удалить из меню.</br></li>
			<li>	Коктейли могут повторяться по составу, но не по названию.</br></li>
        	<li>	В названии могут быть только буквы кириллического алфавита, без спецсимволов и не более 20 знаков</br></li>
			<li>	Список ингредиентов всегда соответствует тому, что есть на складе, и не может изменяться.</br></li>
			</p>	</div>
	</div> </p>


	</p>
	<p style="text-indent: 90px;" ><a href="http://127.0.0.1/igniter/index.php/simple/menuview"'><button type="button"  class="btn btn-primary btn-lg">Открыть меню</button></a>
		<? print_r('<p style="text-indent: 90px;" ><a href="' . $config['base_url'] . '/simple/menuview"'); ?>

	</p> </br>


<?php echo form_open('simple/menucreate') ?>
<div class="container-fluid">
	<div  align="left">
		<div   class="form-group">
			<form>
				<legend>Создание Коктейля</legend>
				<label for="title">Название</label><br />

				<input type="text" required pattern="[а-яА-Я]+" name="cocktail_name" style="width: 20%;" class="form-control" required  minlength="1" maxlength="20" /></textarea><br /><br />
				<label for="title">Цена</label><br />
				<input type="number" name="cocktail_price" style="width: 20%;" class="form-control" required value="1" min="1" max="1000"> </textarea><br /><br />


				<label for="title">Состав</label><br />


			</form>

				<label for="exampleSelect1">Ингредиент 1</label><br />
				<select class="form-select" id="ingredient1" name="ingredient1">
					<? foreach($inglist as $key=>$value):?>
						<? print_r('<option>' . $value['ingredient_name'] . '</option>'); ?>
					<?php endforeach; ?>
				</select>
				<br />
				<label for="exampleSelect1">Ингредиент 2</label><br />
				<select class="form-select" id="ingredient2" name="ingredient2">
					<? foreach($inglist as $key=>$value):?>
						<? print_r('<option>' . $value['ingredient_name'] . '</option>'); ?>
					<?php endforeach; ?>
				</select>
				<br />
				<label for="exampleSelect1">Ингредиент 3</label><br />
				<select class="form-select" id="ingredient3" name="ingredient3">
						<? foreach($inglist as $key=>$value):?>
							<? print_r('<option>' . $value['ingredient_name'] . '</option>'); ?>
						<?php endforeach; ?>
					</select>

			</div>
				<br />
				<br />
				<button type="submit" name="submit" class="btn btn-primary" value="create menu"  >Создать</button>

		</div>
	</div>

</div>
</head>


