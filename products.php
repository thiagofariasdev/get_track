<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./components/head.php');?>
</head>
<body style="background-image: url('image/img-1.webp');">
  <div class="site-wrap">
    <?php include('./components/header.php');?>
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