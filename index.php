<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/tema.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/menu-navbar.css">

    <title>Home</title>
 </head>

<body> 
  <section class="div-sup">
      <div class="container">
          <div class="row">
              <div class="col-lg-2 mb-2">
                <a class="logo" href="home.html"><img src="assets/vidro.gif"></a>
              </div>

              <div class="col-lg-8 offset-md-2">
                  <ul class="lista">
                      <li>                    
                        <img src="assets/tel_icon.png" width="35px" height="35px" alt="Telefone">                    
                          <p>
                            <span> + 123456789 </span>
                            <br>
                            Telefone para contato
                          </p>
                      </li>
                      <li>
                        <img src="assets/posicao_icon.png" width="35px" height="35px" alt="Endereço">
                          <p>
                            <span> Jequié - BA </span>
                            <br>
                            Rua X, próximo a praça
                          </p>
                      </li>
                      <li>
                        <img src="assets/relogio_icon.png" width="35px" height="35px" alt="Horário">
                          <p>
                            <span> 8:00 - 19:00 </span>
                            <br>
                            Seg à Sab
                          </p>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>  

  <section class="menu-nav">
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
   
     <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>

            <li><a href="#sobre"> Sobre </a></li>

            <li>
                <a href="#"> Serviços <i class="fas fa-sort-down"></i></a> 
                    <ul>
                        <li><a href="#">Montagem</a></li>
                        <li><a href="#">Limpeza</a></li>
                        <li><a href="#">Manutenção</a></li>
                    </ul>
            </li>
       
            <li><a href="#galeria">Galeria</a></li>

            <li><a href="#orcamento">Orçamento</a></li>        

            <li><a href="#mapa">Endereço</a></li>

            <li><a href="#contato">Contato</a></li>
        </ul>
     </nav>
  </section>

  <div class="carousel_principal">
    <div class="container">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           <img class="d-block w-100" src="assets/imagens/Frente-loja.jpeg" alt="Primeiro Slide">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="assets/imagens/Frente-loja2.jpeg" alt="Segundo Slide">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="assets/imagens/Frente-loja3.jpeg" alt="Terceiro Slide">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sobre_empresa">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg mb-2">
          <img src="assets/imagens/sobre.jpeg" alt="Sobre Nós" width="100%" height="350px">
        </div>

        <div class="col-lg" id="sobre">
          <h3> SOBRE NÓS </h3> <hr>
            <br>

          <p>
            This is Photoshop's version of Lorem Ipsum. 
            Proin gravida nibh vel velit auctor aliquet. 
            Aenean sollicn, lorem quis bibendum auctor. 
            Proin gravida nibh vel velit auctor aliquet. 
            Aenean sollicitudin, lorem quis bibendum auctor,
            nisi elit consequat.
          </p>  
         
        </div>
      </div>
    </div>
  </div>

  <div class="servicos">
    <h3 align="center"> SERVIÇOS </h3>     
    <hr>
    <div class="container" id="carousel2">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/imagens/mesa2.jpeg" alt="First slide" height="435px">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="assets/imagens/Pia-Box2.jpeg" alt="Second slide" height="435px">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="assets/imagens/prateleiras2.jpeg" alt="Third slide" height="435px">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="assets/imagens/sacada2.jpeg" alt="Third slide" height="435px">
            </div>
          </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
      </div>
    </div>
  </div>

  <div id="orcamento">
    <div class="container">
      <h3 align="center"> ORÇAMENTO </h3>
      <h5 align="center"> Solicite aqui o seu orçamento. É gratis! </h5>
        <hr>
        <form action="dados.php" method="POST" id="form-orcamento">
          <div class="row mb-3">
            <div class="col-lg-4">
                <div class="mais-serv">
                  <h3>Deseja multiplos serviços? Quais?</h3>
                    <div class="row" style="background-color: #e4e7ee; border: #e4e7ee 1px solid;">
                      <input type="radio" name="vidraceiro" value="Vidraceiro">
                      <label>Vidraceiro</label>
                    </div>

                    <div class="row" style="border: #e4e7ee 1px solid;">
                     <input type="radio" name="instal_janela" value="Instalar janelas de vidro">
                     <label>Instalação de Janelas</label>
                    </div>

                    <div class="row" style="background-color: #e4e7ee; border: #e4e7ee 1px solid;">
                     <input type="radio" name="instal_espelho" value="Instalação de espelhos">
                     <label>Instalação de Espelhos</label>
                    </div>

                    <div class="row" style="border: #e4e7ee 1px solid;">
                     <input type="radio" name="porta_vidro" value="Portas de Vidro">
                     <label>Instalação de Portas</label>
                    </div>

                    <div class="row" style="background-color: #e4e7ee; border: #e4e7ee 1px solid;">
                     <input type="radio" name="mesa_vidro" value="Mesas de Vidro">
                     <label>Mesas de Vidro</label>
                    </div>

                    <div class="row" style="border: #e4e7ee 1px solid;">
                     <input type="radio" name="instal_box" value="Instalação de Box">
                     <label>Instalação de Box de Pias e Banheiros</label>
                    </div>

                    <div class="row" style="background-color: #e4e7ee; border: #e4e7ee 1px solid;">
                     <input type="radio" name="instal_sacada" value="Instalação de Sacadas">
                     <label>Instalação de Sacadas</label>
                    </div>

                    <div class="row" style="border: #e4e7ee 1px solid;">
                     <input type="radio" name="vidros_blin" value="Vidros Blindados e Temperados">
                     <label>Vidros Blindados e Temperados</label>
                    </div>

                    <div class="row" style="background-color: #e4e7ee; border: #e4e7ee 1px solid;">
                     <input type="radio" name="limpeza" value="Limpeza e Manutenção">
                     <label>Limpeza e Manutenção</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3 offset-1">
              <!form>
                <label id="proc-serv" for="orcamentos_serv">Procura um serviço especifico? Qual?</label>
                <br>

                <select id="orcamentos_serv" name="tipos_servicos">
                  <option value="vidraceiro">Vidraceiro</option>
                  <option value="Instalação de Janelas">Instalação de Janelas</option>
                  <option value="Instalação de Espelhos">Instalação de Espelhos</option>
                  <option value="Instalação de Portas">Instalação de Portas</option>
                  <option value="Mesas de Vidro">Mesas de Vidro</option>
                  <option value="instal-box">Instalação de Box de Pias e Banheiros</option>
                  <option value="Instalação de Sacadas">Instalação de Sacadas</option>
                  <option value="Vidros Blindados e Temperados">Vidros Blindados e Temperados</option>
                  <option value="limpeza">Limpeza e Manutenção</option>
                </select>
              <!/form>

              <div class="row mt-3 mb-2">
                <div class="col-md-6" id="cep">
                  <h3> Onde você mora? </h3>
                  <h5> Informe abaixo o seu CEP </h5> <br>
                    <div style="display: flex; flex-direction: row;">
                      <input type="text" placeholder="Informe o CEP" name="cep">
                      <button><i class="fas fa-search"></i></button>
                    </div>
                        <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank"><p>Não sabe o seu CEP? Clique aqui!</p></a>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-5" id="quantidade">
                  <h3>Quantas unidades?</h3>
                  <select id="qtd-prd" name="qtd-prd">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="mais">Mais</option>
                  </select>
                </div>
              </div>

              <div class="dimensao">
                <h3>Informe-nos sobre as dimensões do local</h3>
                  <input type="text" id="altura" name="altura">
                  <label class="height" for="altura">Altura</label>                
                  <input type="text" id="largura" name="largura">
                  <label for="largura">Largura</label>
              </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-lg-5 mr-1 mb-3">
              <div class="descricao">
                <h3>Pode nos contar mais detalhadamente o que procura? (OPICIONAL)</h3>
                  <textarea name="desc-orcamento" id="desc-orcamento" cols="45" rows="5"></textarea>
              </div>             
            </div>

            <div class="col-lg-5 mb-3">
              <div class="tempo">
                <h3>Para quando você deseja obter o serviço?</h3>
                <select id="tempo-serv" name="periodo_espera">
                  <option value="1 a 3 dias">1 a 3 dias</option>
                  <option value="4 a 7 dias">4 a 7 dias</option>
                  <option value="8 a 15 dias">8 a 15 dias</option>
                  <option value="Em até 30 dias">Em até 30 dias</option>
                  <option value="mais que 30 dias">Mais</option>
                </select>
              </div>
            </div>
          </div>

            <h3 align="center">Como quer receber o seu orçamento?</h3>

          <div class="row">          
            <div class="col-lg-5 mb-3" id="Nome-Email">
              <label for="nome">Nome</label> <br>
              <input type="text" id="nome" name="nome"> <br><br>
               
              <label for="nome">Email</label> <br>
              <input type="email" id="email" name="email">
            </div>

            <div class="col-lg-6" id="Tel-Operadora">
              <label for="num"> Telefone</label> <br>
              <input type="tel" id="num" name="telefone"> <br><br>
               
              <label for="operadora">Operadora</label> <br>
              <select id="operadora" name="operadora">
                  <option value="oi">Oi</option>
                  <option value="claro">Claro</option>
                  <option value="vivo">Vivo</option>
                  <option value="tim">Tim</option>
                  <option value="nextel">Nextel</option>
                  <option value="fixo">Fixo</option>
                  <option value="outro">Outro</option>
                </select>
            </div>
          </div>
            <input class="offset-4 mt-4" type="submit" value="Pedir orçamento" id="env-form" name="enviar">
        </form>
    </div>
  </div>

  <div class="container" id="galeria">
    <h3 align="center">GALERIA</h3>
      <hr>
    <div id="galeriaOverflow">
      <div class="row mb-4">
        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>      
      </div>

      <div class="row">
        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>

        <div class="col-lg-3">
          <img src="assets/imagens/mesa.jpeg">
        </div>      
      </div>
    </div>
  </div>

  <div id="mapa">
    <div class="container">
      <h3 align="center">Onde estamos</h3>
        <hr>
          <p align="left">Av. Tote Lomanto, S/N Joaquim Romão - Jequié-BA (Prox. SUPERGASBRAS E L.E.C ANDAIMES)</p>
          <div class="col-12" id="localizacao">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.731702527756!2d-40.09119368575777!3d-13.855136881936524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x740af7d148a4f7f%3A0xbeecce50ebd31b40!2sAv.%20Tote%20Lomanto%20-%20Centro%2C%20Jequi%C3%A9%20-%20BA!5e0!3m2!1spt-BR!2sbr!4v1584734840659!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
    </div>
  </div>

  <div id="contato">
    <div class="container">
      <h3 align="center">Contato</h3>
        <hr>
        <div class="row">
          <div class="col-lg-3">
            <i class="fab fa-whatsapp-square"></i> <br>
            <p align="center" >(73) 9 8851-9416 <br> (73) 9 8881-1988</p>
          </div>

          <div class="col-lg-3">
            <i class="fas fa-envelope"></i> <br>
            <p align="center">vidracaria@email.com</p>
          </div>

          <div class="col-lg-3">
            <i class="fab fa-facebook-square"></i> <br>
            <p align="center">Vidraçaria Bulhõe Correia</p>
          </div>

          <div class="col-lg-3">
            <i class="fab fa-instagram"></i> <br>
            <p align="center">@vidracariabulhoescorreia</p>
          </div>
        </div>
    </div>
  </div>

  <div id="rodape-inf">
    <div class="container">
      <article class="inf-text">
        <h1>Loja do SidSan</h1>
        <p>Sidnei Santiago - Todos os direitos reservados</p>
        <p>Salvador, 06/03/2019</p>
        <p><i class="far fa-envelope" style="font-size: 14pt; color:white;"></i> sidnei1.8santiago@hotmail.com </p> 
      </article>
    </div> 
  </div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>