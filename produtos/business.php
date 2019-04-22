<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./../components/head.php') ?>
</head>
<body>
  <?php include('./../components/header.php') ?>
  <div class="site-wrap">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="car-bg">
                    <img src="/image/bike_fleet-min.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="carousel-caption">
                    <p>Motos</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carbg">
                    <img src="/image/car_fleet-min.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="carousel-caption">
                    <p>Carros</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carbg">
                    <img src="/image/truck_fleet-min.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="carousel-caption">
                    <p>Caminhões</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="icon-angle-left" style="color:orange; font-size: 30px;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="icon-angle-right" style="color:orange; font-size: 30px;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-5">
            <h4 class="text-uppercase">Sua frota</h4>
            <p>Controle sua frota e otimize recursos gerando mais resultados.
              A Get Track chegou ao mercado com um sistema exclusivo de
              rastreamento, em tempo real, até em área de sombra, oferecendo aos
              seus clientes uma ferramenta completa, com relatórios, para gestão
              eficiente de sua frota:</p>
            <ul>
              <li>planejar suas operações otimizando itinerários</li>
              <li>aumentar sua segurança</li>
              <li>redução de custos com manutenção e combustível</li>
              <li>otimização de rotas</li>
              <li>conservação do patrimônio</li>
              <li>Tempo de parada e padrões de dirigibilidade</li>
              <li>Jornada de Trabalho dos seus motoristas</li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-3">
            <h5>
              Funções: <i class="gt-fleet" data-toggle="tooltip" title="Frota"></i>
            </h5>
            <table>
              <tbody>
                <tr>
                  <td><i title="Seguir meu carro" data-toggle="tooltip" class="gt-follow_fleet gr"></i></td>
                  <td class="gr">Seguir meu carro</td>
                </tr>
                <tr>
                  <td><i title="Seguir meu carro" data-toggle="tooltip" class="gt-eletric_mauer gr"></i></td>
                  <td class="gr">Cerca eletronica</td>
                </tr>
                <tr>
                  <td><i title="Seguir meu carro" data-toggle="tooltip" class="gt-denied_path gr"></i></td>
                  <td class="gr">Movimento não permitido</td>
                </tr>
                <tr title="Combustível e manutenção" data-toggle="tooltip">
                  <td><i class="gt-fuel_man gr"></i></td>
                  <td class="gr">Combustível e manutenção</td>
                </tr>
                <tr title="Velocidade controlada" data-toggle="tooltip">
                  <td><i  class="gt-control_vel gr"></i></td>
                  <td class="gr">Velocidade controlada</td>
                </tr>
                <tr title="Condutores autorizados" data-toggle="tooltip">
                  <td><i class="gt-allowed_cond gr"></i></td>
                  <td class="gr">Condutores autorizados</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./../components/footer.php') ?>
  <?php include('./../components/scripts.php')?>
</body>
</html>