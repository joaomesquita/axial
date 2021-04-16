<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<h1 class="font-primary font-bold color-black mt-3">Artigos</h1>
        		<p class="font-paragraph color-black mt-4 mb-4">A Axial Investimentos é uma assessoria financeira que está pronta para oferecer as melhores soluções do mercado para investimentos, financiamentos e o que mais você ou sua empresa precisar para prosperar.</p>
        	</div>

        	<?php for ($i = 0; $i < 9; $i++) { ?>
        	<div class="col-md-4 mb-4">
        		<a href="artigo.php" class="d-block mb-2">
        			<img class="img-fluid" src="img/blog1.png" alt="">
        		</a>
        		<span>24.03.2015 - Curiosidades</span>
        		<h2 class="font-default font-bold">A Importância da Gestão Financeira nas empresas em tempos de pandemia</h2>
        		<p class="font-paragraph">O engenheiro mecânico George fez uma transfusão de sangue em 1976 [...]</p>
        	</div>
        	<?php //echo (($i+1)%3==0)?'<hr class="space" />':'';?>
        	<?php } ?>

        	<div class="col-md-12 mt-4">
				<nav aria-label="Page navigation example ">
					<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">...</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">10</a>
					</li>
					<li class="page-item">
					<a class="page-link" href="#">Próximo</a>
						</li>
					</ul>
				</nav>
			</div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>