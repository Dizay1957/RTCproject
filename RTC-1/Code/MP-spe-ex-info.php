<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['2']['subjects'] . " " . $row['3']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable information." />

</head>


	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
							   <h1 class="heading-section"><?php echo '2-MP ' . $row['3']['page_header'] ?></h1>
							   <h2  style="font-size: smaller;"><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div class="container">
   		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">2-MP</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex.php?language=" . $language ?>"><?php echo '2-MP ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex-info.php?language=" . $language ?>"><?php echo $row['2']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-ex/info/2-MP Info Ex.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['3']['page_header'] ?></td>
							<td style="text-align: center;">Correction</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/mysql.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/info/TD Conception schéma des bases de données.pdf" target="_blank">TD Conception schéma des bases de données</a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD Algebre relationnel.pdf" target="_blank">TD Algebre relationnel</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD Algebre relationnel.pdf" target="_blank">Correction TD Algebre relationnel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD SQL.pdf" target="_blank">TD SQL</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD SQL.pdf" target="_blank">Correction TD SQL</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/python.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/info/TD Rappel Fonction.pdf" target="_blank">TD Rappel Fonction</a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD Récursivité.pdf" target="_blank">TD Récursivité</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD Récursivité.py" target="_blank">Correction TD Récursivité</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD Graphs.pdf" target="_blank">TD Graphs</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD Graphs.pdf" target="_blank">Correction TD Graphs</a></td>
						</tr>

							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/cs.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/info/TD Résolution numérique des équations différentielles ordinaires.pdf" target="_blank">TD Résolution numérique des équations différentielles ordinaires</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD Résolution numérique des équations différentielles ordinaires.pdf" target="_blank">Correction TD Résolution numérique des équations différentielles ordinaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD Résolution systèmes linéaires.pdf" target="_blank">TD Résolution systèmes linéaires</a></td>
							<td><a href="pdfs/MP/spe-ex/info/Correction TD Résolution systèmes linéaires.pdf" target="_blank">Correction TD Résolution systèmes linéaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/info/TD Pivot de Gauss.pdf" target="_blank">TD Pivot de Gauss</a></td>
							<td>-</td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>