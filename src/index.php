<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	 <?php include 'header.php';?>
	<main>	
		<div class="main_cta" style="color=#252629;">
			<article class="main_cta_content">
				<div class="main_cta_content_spacer">
					<header>
						<h1>Marmitas da Rita</h1>
					</header>
					<p>Comida saudável e saborosa para o seu dia a dia.</p>
					<p><a href="#" class="btn">Saiba Mais</a></p>
				</div>
			</article>
		</div>

	<section class="main_marmita">
		<header class="main_marmita_header">
			<!-- //alterei aqui -->
			<h1><a name="marmita">Conheça nossas delícias!</h1></a>
			<p>Entregamos nos bairros de Copacabana e Leme de 2a a sábado das 11h às 16h</p>
		</header>
		<?php
		//validar se array existe e se não está vazio
		if(is_array($marmitas) && !empty($marmitas)){
			foreach($marmitas as $key => $value){
				?>
				<article>
					<!-- passar o titulo da noticia para ser impresso no title da página -->
					<a href="pagina2.php?id=<?=$value['id'];?>">
					<!-- //alterei aqui -->
					<img src=<?=$value['imagem'];?> title="<?=$value['nome'];?>" alt="<?=$value['nome'];?>"></a>
					<h3><?=$value['nome'];?></h3>
					
					<h2><?=($value['valor']);?></h2>
				</article>
				<?php
		}
		}else{
			echo "Hoje não temos opções disponíveis!";
		}
			?>
			
		</section>
		<!--suport -->
	</main>
	<?php include 'footer.php';?>
</body>
</html>