
<body>
    <?php
    $cabecalho_css = '<link rel="stylesheet" href="css/produto-pagina.css">';
    $cabecalho_title = "Produtos da Mirror Fashion"; 
    include("cabecalho.php"); ?>
 
<!-- adicionar conteúdo da página-->
         
    <div class="produto-back">
        <div class="container">
           <div class="produto">
            <h1>Fuzzy Cardigan</h1>
             <p>por apenas R$129,90</p>
        

         <form action="checkout.php" method="POST">
              <input	type="hidden" name="nome" value="Fuzzy	Cardigan">
              <input	type="hidden" name="preco" value="129,00">
             <fieldset class="cores">
                 <legend>Escolha a cor:</legend>
                 
                 <input type="radio" name="cor" value="verde" id="verde" checked>
                 <label for="verde">
                        <img src="img/produtos/foto1-verde.png" alt="Produto na cor verde">
                 </label>

                 <input type="radio" name="cor" value="rosa" id="rosa">
                 <label for="rosa">
                     <img src="img/produtos/foto1-rosa.png" alt="Produto na cor rosa">
                 </label>
                 
                 <input type="radio" name="cor" value="azul" id="azul">
                 <label for="azul">
                     <img src="img/produtos/foto1-azul.png" alt="Produto na cor azul">
                 </label>
             </fieldset>

        <fieldset class="tamanho">
            <legend>Escolha seu tamanho:</legend>
            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
            <output for="tamanho" name="valortamanho">42</output>
        </fieldset>

             <button class="comprar">Comprar</button>

         </form>
          </div>

          <div class="detalhes">
              <h2>Detalhes do produto</h2>

              
              <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa
                  desenhada pelos artesões da comunidade Krator na ilhas gregas. Compre já e receba hoje
                  mesmo pela nossa entrega a jato.
              </p>
              
              <table>
                  <thead>
                      <tr>
                          <th>Características</th>
                          <th>Detalhes</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Modelo</td>
                          <td>Cardigã 7845</td>
                      </tr>
                      <tr>
                          <td>Material</td>
                          <td>Algodão e poliester</td>
                      </tr>
                      <tr>
                          <td>cores</td>
                          <td>Azul, Rosa e verde</td>
                      </tr>
                      <tr>
                          <td>Lavagem</td>
                          <td>Lavar a mão</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>    
        
        
        <footer>
                <div class="container">
                    <img src="img/logo-rodape.png" alt="Logo da Mirror Fashion">
                    
                    <ul class="social">
                        <li><a href="http://facebook.com/mirrofashion">Facebook</a></li>
                        <li><a href="http://twitter.com/mirrofashion">Twitter</a></li>
                        <li><a href="http://plus.google.com/mirrofashion">Google+</a></li>
                    </ul>
                </div>
        </footer>

       




        <script type="text/javascript" src="js/produtos-pagina.js"></script>
</body>
</html>