<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./components/head.php');?>
</head>

<body style="background-image: url('image/img-1.webp');">

  <div class="site-wrap">
    <?php include('./components/header.php');?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div style="max-height:90vh;display:flex;justify-content:center;align-icons:center;background-color:#000">
            <img src="/image/header1.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: #fff;">...</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
          <div style="max-height:90vh;display:flex;justify-content:center;align-icons:center;background-color:#000">
            <img src="/image/hands_on.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: #fff;">...</h5>
            <p>...</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="icon-angle-left" style="color:orange; font-size: 60px;" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="icon-angle-right" style="color:orange; font-size: 60px;" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div id="sobre" class="site-half">
      <div class="img-bg-1" id="site-half-2"></div>
        <div class="container">
          <div class="row no-gutters align-items-stretch">
            <div class="col-md-5 ml-md-auto py-5">
              <span class="caption d-block mb-2 font-secondary font-weight-bold">Sobre a get track</span>
              <h2 class="site-section-heading text-uppercase font-secondary mb-5">Quem somos?</h2>
              <p>A GetTrack é uma empresa de rastreamento de veículos, motos e cargas que combina segurança, facilidade de uso,
                qualidade e tecnologias de última geração no serviço de localização, bloqueio total e telemetria dos veículos. Tudo isso
                aliando o melhor equipamento à melhor tecnologia e infra-estrutura de rastreamento.</p>
            </div>
          </div>
      </div>
    </div>

    <div class="site-half">
      <div class="img-bg-1 right" id="site-half-1"></div>
        <div class="container">
          <div class="row no-gutters align-items-stretch">
            <div class="col-md-5 mr-md-auto py-5">
              <span class="caption d-block mb-2 font-secondary font-weight-bold">Sobre a get track</span>
              <h2 class="site-section-heading text-uppercase font-secondary mb-5">Tecnologia</h2>
              <p>Um aplicativo fácil de usar apresenta na palma de sua mão, pelo celular ou
                tablet, todo descolamento de seu veículo ou carga. Apresenta também
                relatórios de eficiência, checagem de itinerários, velocidade controlada,
                tempo de parada ou desvio de rotas previamente traçadas. 
                Você também poderá programar avisos ou alertas para qualquer alteração de rota..</p>
            </div>
          </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right">
            <div class="text-center">
              <i class="gt-safe" style="font-size: 120px; color: dodgerblue"></i>
              <h3 class="text-uppercase h4 mb-3">Segurança</h3>
              <p> Monitoramento, Rastreamento e Bloqueio 24h </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right">
            <div class="text-center">
              <i class="gt-eletric_mauer" style="font-size: 120px; color: green"></i>
              <h3 class="text-uppercase h4 mb-3">Cobertura</h3>
              <p>Abrangência em toda América Latina, integrado a aplicativo de acompanhamento</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="text-center">
              <i class="gt-in_your_hand" style="font-size: 120px; color: orange"></i>
              <h3 class="text-uppercase h4 mb-3">Agilidade</h3>
              <p> Tenha tudo na palma da mão pelo app de instalação fácil e rápida</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="produtos">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold"></span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Nossos Produtos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="row justify-content-center">
              <div class="col-10 col-sm-10 col-md-5">
                <img src="./image/car2-min.jpg" alt="image" title="VEICULO" class="img-fluid">
                <div class="media-image-body pt-2">
                  <h2 class="font-secondary text-uppercase text-center">Para você</h2>
                  <p class="text-justify">Monitoramento, rastreamento e bloqueio do seu veículo, em caso de roubo ou furto.
                  Você aciona o serviço de busca...</p>
                  <p>
                    <a href="/produtos/personal" class="btn btn-primary text-white px-4" style="width:100%;">
                      <span class="caption">Saiba Mais</span>
                    </a>
                  </p>
                </div>
              </div>
              <div class="col-10 col-sm-10 col-md-5">
                <img src="image/charge-min.jpg" alt="image" title="CARGA" class="img-fluid">
                <div class="media-image-body pt-2">
                  <h2 class="font-secondary text-uppercase text-center">Para seu negócio</h2>
                  <p class="text-justify">A Get Track chegou ao mercado com um sistema exclusivo de rastreamento, em tempo real, 
                    até em área de sombra...</p>
                  <p>
                    <a href="/produtos/business" style="width:100%;" class="btn btn-primary text-white px-4">
                      <span class="caption">Saiba Mais</span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="precos">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Assinatura Mensal para Serviços Get Track<br>Para Você ou seu Negócio.</span>
            <!--h2 class="site-section-heading text-uppercase text-center font-secondary"></h2-->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5 m-auto">
            <div class="card">
              <div class="card-head p-2">
                <h3 class="text-center">Safe</h3>
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <i data-toggle="tooltip" title="Seu Carro" class="gt-car" style="color: dodgerblue;"></i>
                      </td>
                      <td>Seu carro</td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <i data-toggle="tooltip" title="Sua Moto" class="gt-bike" style="color: dodgerblue;"></i>
                      </td>
                      <td>Sua moto</td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <i data-toggle="tooltip" title="Sua Frota" class="gt-fleet" style="color: dodgerblue;"></i>
                      </td>
                      <td>Sua frota</td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <i data-toggle="tooltip" title="Sua Carga" class="gt-charge" style="color: dodgerblue;"></i>
                      </td>
                      <td>Sua carga</td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <i data-toggle="tooltip" title="Autônomos" class="gt-car" style="color: dodgerblue;"></i>
                      </td>
                      <td>Autônomos</td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3'>
                        <a href="contact" class="btn btn-success block">R$69,90</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!--div class="col-md-4">
            <div class="card">
              <div class="card-head p-2">
                <h3 class="text-center">Safe Plus</h3>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><b>Carros</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Motos</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Frota</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Carga</b></td>
                      <td>
                        <i class="icon-remove"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Autônomo</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan='2'>
                        <button class="btn btn-success block">R$000,00</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-head p-2">
                <h3 class="text-center">Safe Ultra</h3>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><b>Carros</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Motos</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Frota</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Carga</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Autônomo</b></td>
                      <td>
                        <i class="icon-check"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan='2'>
                        <button class="btn btn-success block">R$000,00</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div-->
        </div>
      </div>
    </div>

    <!--div class="site-section" id="app">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="http://via.placeholder.com/250x450" alt="APP">
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-center">
                <span class="caption d-block mb-2 font-secondary font-weight-bold">EXPERIMENTE</span>
                <h3 class="site-section-heading text-uppercase text-center font-secondary">App Get Track</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p></p>
              </div>
            </div>
            <div>
              <a href="#">
                <img src="" alt="">
              </a>
              <a href="#">
                <img src="" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div-->

    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center" style="justify-content: space-between;">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-0">Tecnologia para sua empresa</h2>
          </div>
          <div class="col-md-3 text-center text-md-left">
            <a href="/contact" class="btn btn-bg-primary d-inline-block d-md-block font-secondary text-uppercase">Contato</a>
          </div>
        </div>
      </div>
    </div>

    <?php include('./components/footer.php')?>
  </div>
  <?php include('./components/scripts.php')?>
</body>

</html>