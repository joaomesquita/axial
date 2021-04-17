<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<h1 class="font-primary font-bold color-black">Parceiros</h1>
        		<p class="font-paragraph color-black">A Axial Investimentos é uma assessoria financeira que está pronta para oferecer as melhores soluções.</p>
        	</div>
        </div>

        <div class="row mt-5">
        	<?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="col-md-4 mb-4">
        		<a href="#">
        			<img src="img/parceiro1.png" alt="" class="img-fluid w-100 rounded-3 mb-3">
        		</a>
        		<h2 class="font-default font-bold color-black">Diagnósticos clínicos: obtendo respostas rápidas</h2>
        	</div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>