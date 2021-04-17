<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<h1 class="font-primary font-bold color-black mt-3">Artigos</h1>
        		<p class="font-paragraph color-black mt-4 mb-4">A Axial Investimentos é uma assessoria financeira que está pronta para oferecer as melhores soluções do mercado para investimentos, financiamentos e o que mais você ou sua empresa precisar para prosperar.</p>
        	</div>
        </div>

        <div class="row mt-5">
            <?php for ($i = 0; $i < 9; $i++) { ?>
            <div class="col-md-4 mb-4">
        		<a href="artigo.php">
        			<img src="img/artigos.png" alt="" class="img-fluid w-100 rounded-3 mb-3">
        		</a>
                <p class="font-paragraph color-black mb-2">24.03.2015 - Curiosidades</p>
        		<h2 class="font-default font-bold">A Importância da Gestão Financeira nas empresas em tempos de pandemia</h2>
        		<p class="font-paragraph">O engenheiro mecânico George fez uma transfusão de sangue em 1976 [...]</p>
        	</div>
            <?php } ?>
        </div>

        <div class="row mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>