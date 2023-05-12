<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- css customizado -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<body>

    <!-- header menu -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Haircare</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Início</a></li>
	        	<li class="nav-item"><a href="#servicos" class="nav-link">Serviços</a></li>
	        	<li class="nav-item"><a href="#galeria" class="nav-link">Fotos</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">Sobre nós</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- end header menu -->

    <!-- dynamic content -->
    <div class="container">
        @yield('content')
    </div>
    <!-- end dynamic content -->

    <!-- footer menu -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo">Haircare</h2>
                <p>Um lugar para que você possa ampliar a sua beleza. Venha nos conhecer, satisfação garantida.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Perguntas frequêntes</a></li>
                  <li><a href="#" class="py-2 d-block">Termos de uso</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Início</a></li>
                  <li><a href="#" class="py-2 d-block">Sobre</a></li>
                  <li><a href="#" class="py-2 d-block">Serviços</a></li>
                  <li><a href="#" class="py-2 d-block">Galeria</a></li>
                  <li><a href="#" class="py-2 d-block">Blog</a></li>
                  <li><a href="#" class="py-2 d-block">Contato</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">Rio de Janeiro, Brasil</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+21 0056-5688</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contato@haircare.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">Studio Pitaya</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
    <!-- end footer -->

</body>
</html>
