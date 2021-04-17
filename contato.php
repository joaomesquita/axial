<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-primary font-bold color-black">Contato</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-5">
                <p class="font-paragraph color-black w-75">R. dos Vendas, 618 - Itanhangá Park Campo Grande - MS, CEP: 79003-040</p>
                <p class="font-paragraph color-black">Telefone: 67 3023 5689</p>
                <p class="font-paragraph color-black">E-mail: contato@contato.com.br</p>
                <div class="mt-4">
                    <iframe width="90%" height="350" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=rosana%2Fsp+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <p class="font-default font-bold color-black">Dúvidas? Envie uma mensagem</p>
                <form action="">
                    <div class="mb-3 shadow-sm">
                        <input type="text" class="form-control" id="nome" placeholder="* Nome">
                    </div>
                    <div class="mb-3 shadow-sm">
                        <input type="email" class="form-control" id="email" placeholder="* E-mail">
                    </div>
                    <div class="mb-3 shadow-sm">
                        <input type="text" class="form-control" id="telefone" placeholder="* Telefone">
                    </div>
                    <div class="mb-3 shadow-sm">
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="* Mensagem"></textarea>
                    </div>
                    <a href="" class="btn btn-secondary font-uppercase w-100">Enviar</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>