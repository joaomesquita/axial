<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
    	<div class="row d-flex align-items-center">
    		<?php for ($i = 0; $i < 3; $i++) { ?>
    		<div class="col-md-6 mt-5 mb-4">
    			<h4 class="font-secondary color-black">Essencial <span class="font-bold"> 
    				<?php if ($i==0) {
    					echo 'para Você';
    				} elseif ($i==1) {
    					echo 'para Sua Empresa';
    				} else {
    					echo 'para o Agronegócio';
    				} ?>
    				
    			</span></h4>
        		<p>A Axial Investimentos está pronta para entender qual é seu perfil como investidor e te assessorar com as melhores opções de investimento do mercado, visando maximizar seus ganhos.</p>
    		</div>
    		<div class="col-md-6 mt-5 mb-4">&nbsp;</div>

    		<?php for ($a = 0; $a < 6; $a++) { ?>
	    		<div class="col-md-6 mb-4">
					<div class="d-flex align-items-center">
						<div class="flex-shrink-0">
							<a href="solucao.php">
								<img src="img/placeholder-solucao.png" alt="...">
							</a>
						</div>
						<div class="flex-grow-1 ms-3">
							<h2 class="font-default font-bold">Renda Fixa</h2>
							<p class="paragraph mb-0">A Axial Investimentos está pronta para entender qual é seu perfil como investidor lorem [...]</p>
							<a class="color-secondary font-bold" href="solucao.php">Continue Lendo</a>
						</div>
					</div>
	    		</div>
    		<?php } ?>
    		

    		<?php } ?>

    	</div>
    </div>
</div>

<?php include 'footer.php'; ?>