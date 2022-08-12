<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
<style>
.main_marmita img{
    width: 30%;
}

.main_marmita p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_marmita h3{
    font-size: 0.9em;
}

.main_marmita article{
    flex-basis: 100%;
    margin-bottom: 10px;
}
</style>
</head>
<body>
	<?php include 'header.php';?>
	
	<main>	
		<section class="main_marmita">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($marmitas as $key => $value){
						if($value['id'] == $id){
					?>
						<header class="main_marmita_header">
							<h1><?=$value['nome'];?></h1>
							<!--alterei aqui-->
							<h2>Ingredientes: <?=$value['ingredientes'];?></h2>
							<h2>Preço: <?=$value['valor'];?></h2>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['nome'];?>" alt="<?=$value['nome'];?>">
						<span><p><?=$value['descricao'];?></p></span>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_marmita">
			<header class="main_marmita_header">
				<h1>Ver mais Tutoriais</h1>
			</header>
			<?php
			$id = 0;
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
					<article>
						<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['nome'];?></a></h2>
					</article>
					<?php
                    }
				}
			?>
		</section>
	</main>
	<?php include 'footer.php';?>
</body>
</html>