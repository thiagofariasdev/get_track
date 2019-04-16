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
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Segurança e rastreamento</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Nossos Produtos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="row justify-content-center">
              <div class="col-10 col-sm-6 col-md-4">
                <picture>
                  <source src="image/img-4.webp" type="image/webp">
                  <source src="image/img-4.jpg" type="image/jpeg"/>
                  <img src="image/img-4.jpg" alt="Image" class="img-fluid">
                </picture>
                
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Para você</h2>
                  <p>Monitoramento, rastreamento e bloqueio do seu veículo, em caso de roubo ou furto.
                  Você aciona o serviço de busca...</p>
                  <p>
                    <a href="/produtos/personal" class="btn btn-primary text-white px-4">
                      <span class="caption">Saiba Mais</span>
                    </a>
                  </p>
                </div>
              </div>
              <div class="col-10 col-sm-6 col-md-4">
                <picture>
                  <source src="image/img-3.webp" type="image/webp">
                  <source src="image/img-3.jpg" type="image/jpeg"/>
                  <img src="image/img-3.jpg" alt="Image" class="img-fluid">
                </picture>
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Para seu negócio</h2>
                  <p>A Get Track chegou ao mercado com um sistema exclusivo de rastreamento, em tempo real, 
                    até em área de sombra...</p>
                  <p><a href="/produtos/business" class="btn btn-primary text-white px-4"><span class="caption">Saiba Mais</span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('./components/footer.php')?>
  </div>
  <?php include('./components/scripts.php')?>
</body>
</html>