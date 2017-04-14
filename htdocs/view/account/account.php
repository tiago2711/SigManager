<div class="modal fade" id="confirmModal">
    <div class="modal-dialog" role="document" id="myInput">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmação do Plano</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Confirmar aquisição deste plano?</p><br>
                <span>Caso confirme, você será direcionado para área de pagamento.</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="confirmChoice(Plano);">Confirmar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="pricing-grids cards_price">
    <div class="pricing-grid1">
        <div class="price-value">
            <h2><a id="plano1">BÁSICO</a></h2>
            <h5><span>R$</span><span id="valor1">19.90</span><lable> / Mês</lable></h5>
        </div>
        <div class="price-bg">
            <ul>
                <li class="whyt"><a href="#">5GB Disco Rígido </a></li>
                <li><a href="#">2 Domínios</a></li>
                <li class="whyt"><a href="#">2 E-Mail Address </a></li>
                <li><a href="#">25GB Tráfego de dados/Mês</a></li>
                <li class="whyt"><a href="#">Suporte 24 Horas</a></li>
            </ul>
            <div class="cart1">
                <a class="popup-with-zoom-anim" data-toggle="modal" onclick="showModal('1')">Escolher Plano</a>
            </div>
        </div>
    </div>
    <div class="pricing-grid2">
        <div class="price-value two">
            <h3><a id="plano2">PREMIUM</a></h3>
            <h5><span>R$</span><span id="valor2"> 59.90</span><lable> / Mês</lable></h5>
        </div>
        <div class="price-bg">
            <ul>
                <li class="whyt"><a href="#">50GB Disco Rígido</a></li>
                <li><a href="#">10 Dóminios</a></li>
                <li class="whyt"><a href="#">8 Contas de E-mail </a></li>
                <li><a href="#">150GB Tráfego de dados/Mês </a></li>
                <li class="whyt"><a href="#">Suporte 24 Horas</a></li>
            </ul>
            <div class="cart2">
                <a class="popup-with-zoom-anim"  data-toggle="modal" onclick="showModal('2')">Plano Atual</a>
            </div>
        </div>
    </div>
    <div class="pricing-grid3">
        <div class="price-value three">
            <h4><a id="plano3">BUSINESS</a></h4>
            <h5><span>R$</span><span id="valor3"> 99.90</span><lable> / Mês</lable></h5>
            <div class="sale-box three">
                <span class="on_sale title_shop">Novo</span>
            </div>

        </div>
        <div class="price-bg">
            <ul>
                <li class="whyt"><a href="#">Disco Rígido Ilimitado</a></li>
                <li><a href="#">50 Domínios</a></li>
                <li class="whyt"><a href="#">20 Contas de E-mail</a></li>
                <li><a href="#">Banda Ilimitada</a></li>
                <li class="whyt"><a href="#">Suporte 24 Horas</a></li>
            </ul>
            <div class="cart3">
                <a class="popup-with-zoom-anim" data-toggle="modal" plano="3" onclick="showModal('3')">Escolher Plano</a>
            </div>
        </div>
    </div>


    <script>
        function showModal(plano){
            $("#confirmModal").modal();
            
            Plano = plano;
        }
    </script>

    <script src='http://preview.w3layouts.com/demos/flat_pricing_tables_design/web/js/jquery.magnific-popup.js'></script>
    <script src='http://preview.w3layouts.com/demos/flat_pricing_tables_design/web/js/modernizr.custom.53451.js'></script>