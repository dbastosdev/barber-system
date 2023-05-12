@extends('site.layouts.layout')

@section('content')
<section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
        <div class="col-lg-12 ftco-animate d-flex align-items-center">
            <div class="text text-center">
                <span class="subheading">Bem-vindo ao nosso Barber Shop</span>
                        <h1 class="mb-4">profissionais cuidando do seu estilo</h1>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">Agende</a></p>
                          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid px-0">
              <div class="row no-gutters">
                  <div class="col-md text-center d-flex align-items-stretch">
                      <div class="services-wrap d-flex align-items-center img" style="background-image: url(images/formen.jpg);">
                          <div class="text">
                              <h3>Homens</h3>
                              <p><a href="#" class="btn-custom">Ver preços <span class="ion-ios-arrow-round-forward"></span></a></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 text-center d-flex align-items-stretch">
                      <div class="text-about py-5 px-4">
                          <h1 class="logo">
                              <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Haircare</a>
                          </h1>
                          <h2>Bem-vindo ao nosso salão</h2>
                          <p>Bem-vindo ao nosso salão de cabelo unissex! Localizado ao lado do pacífico rio Duden, nosso salão oferece uma atmosfera serena para aprimorar sua experiência de cuidados com o cabelo. Nossa equipe de estilistas habilidosos está dedicada a fornecer a regelialia necessária para garantir que seu cabelo fique saudável e bonito. Enquanto você relaxa, deixe o aroma do nosso café torrado despertar seus sentidos. Nosso salão é um oásis paradisíaco onde você pode escapar do estresse da vida cotidiana. Estamos localizados longe do mundano, atrás das majestosas montanhas de palavras e distantes dos países Vokalia e Consonantia. Venha nos visitar hoje e deixe-nos ajudá-lo a alcançar o cabelo dos seus sonhos!.</p>
                          <p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
                      </div>
                  </div>
                  <div class="col-md text-center d-flex align-items-stretch">
                      <div class="services-wrap d-flex align-items-center img" style="background-image: url(images/forwomen.jpg);">
                          <div class="text">
                              <h3>Mulheres</h3>
                              <p><a href="#" class="btn-custom">Ver preços  <span class="ion-ios-arrow-round-forward"></span></a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="services-section ftco-section" id="servicos">
    <div class="container">
        <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Serviços</span>
          <h2 class="mb-4">Carta de Serviços</h2>
          <p>Aqui, você encontrará uma variedade de opções para cuidar de si mesmo e melhorar sua aparência.</p>
        </div>
      </div>
      <div class="row no-gutters d-flex">
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Corte &amp; Estilo</h3>
              <p>Corte de cabelo profissional para homens, mulheres e crianças de todas as idades. Traga sua família</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon"><span class="flaticon-beard"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Barba</h3>
              <p>Corte ou desenho de barbas. Desde a aparagem e desenho de barbas curtas até barbas longas e elaboradas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon"><span class="flaticon-beauty-products"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Maquiagem</h3>
              <p>Você escolhe. maquiagem para o dia a dia até maquiagem para eventos especiais. Nós te ajudamos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon"><span class="flaticon-healthy-lifestyle-logo"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Ambiente</h3>
              <p>Valorizamos a experiência de nossos clientes, por isso, oferecemos um serviço diferenciado. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-booking bg-light" id="contato">
      <div class="container ftco-relative">
          <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Agende</span>
          <h2 class="mb-4">Faça agora mesmo seu agendamento</h2>
          <p>Deixe aqui a sua mensagem e responderemos o mais breve possível.</p>
        </div>
      </div>
      <h3 class="vr">Call Us: 012-3456-7890</h3>
          <div class="row justify-content-center">
              <div class="col-md-10 ftco-animate">
                  <form action="#" class="appointment-form">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                        <input type="text" class="form-control" id="appointment_name" placeholder="Nome">
                      </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                        <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                      </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control appointment_date" placeholder="Data">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control appointment_time" placeholder="Horário">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                        <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                        <option value="" selected>Profissional</option>
                        <option value="">Maquiagem</option>
                      <option value="">Manicure</option>
                      <option value="">Massagem</option>
                      <option value="">Corte de cabelo ou barba</option>
                    </select>
                  </div>
                      </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" placeholder="Telefone">
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <input type="submit" value="Faça seu agendamento" class="btn btn-primary">
              </div>
            </form>
              </div>
          </div>
      </div>
  </section>


  <section class="ftco-section ftco-team">
      <div class="container-fluid px-md-5">
          <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Artistic Director</span>
          <h2 class="mb-4">Nossos profissionais</h2>
          <p>Mais que profissionais. Uma equipe de artistas.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12 ftco-animate">
              <div class="carousel-team owl-carousel">
                  <div class="item">
                      <a href="#" class="team text-center">
                          <div class="img" style="background-image: url(images/stylist-1.jpg);"></div>
                          <h2>Daiana Gonçalves</h2>
                          <span class="position">Estilista de corte</span>
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" class="team text-center">
                          <div class="img" style="background-image: url(images/stylist-2.jpg);"></div>
                          <h2>Nicole Lima</h2>
                          <span class="position">Artista de unhas</span>
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" class="team text-center">
                          <div class="img" style="background-image: url(images/stylist-3.jpg);"></div>
                          <h2>Cleo Santos</h2>
                          <span class="position">CEO</span>
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" class="team text-center">
                          <div class="img" style="background-image: url(images/stylist-4.jpg);"></div>
                          <h2>Raquel Moraes</h2>
                          <span class="position">Estilista de corte</span>
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" class="team text-center">
                          <div class="img" style="background-image: url(images/stylist-5.jpg);"></div>
                          <h2>Daniel Borges</h2>
                          <span class="position">Barbeiro</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb" id="galeria">
      <div class="container">
          <div class="row no-gutters justify-content-center mb-5 pb-2">
        <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Galeria</span>
          <h2 class="mb-4">Nossa galeria</h2>
          <p>Deixamos aqui uma breve amostra do nosso trabalho.</p>
        </div>
      </div>
      </div>
          <div class="container-fluid p-0">
          <div class="row no-gutters">
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Cortes</span>
                          <h3><a href="#galeria">Barba</a></h3>
                      </div>
                      <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Cortes</span>
                          <h3><a href="#galeria">Cabelo</a></h3>
                      </div>
                      <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Estilo</span>
                          <h3><a href="#galeria">Cabelo</a></h3>
                      </div>
                      <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Cortes</span>
                          <h3><a href="#galeria">Cabelo</a></h3>
                      </div>
                      <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Estilo</span>
                          <h3><a href="#galeria">Maquiagem</a></h3>
                      </div>
                      <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Moda</span>
                          <h3><a href="#galeria">Modelos</a></h3>
                      </div>
                      <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Maquiagem</span>
                          <h3><a href="#galeria">Maquiagem</a></h3>
                      </div>
                      <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Maquiagem</span>
                          <h3><a href="#galeria">Maquiagem</a></h3>
                      </div>
                      <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      </section>

      <section class="ftco-section ftco-pricing" id="precos">
          <div class="container">
              <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Preços</span>
          <h2 class="mb-4">Nossos preços</h2>
          <p>Aqui você encontra transparência. Saiba antes de entrar.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3 ftco-animate">
              <div class="pricing-entry pb-5 text-center">
                  <div>
                      <h3 class="mb-4">Cabelo A partir de</h3>
                      <p><span class="price">R$30.00</span> <span class="per">/ sessão</span></p>
                  </div>
                  <ul>
                      <li>Lavagem</li>
                      <li>Pitura</li>
                      <li>Corte</li>
                      <li>Tratamento</li>
                      <li>Spa</li>
                  </ul>
                  <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">garantir</a></p>
              </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="pricing-entry pb-5 text-center">
                  <div>
                      <h3 class="mb-4">Unhas a partir</h3>
                      <p><span class="price">R$34.50</span> <span class="per">/ sessão</span></p>
                  </div>
                  <ul>
                      <li>Manicure</li>
                      <li>Pedicure</li>
                      <li>Pintura</li>
                      <li>Corte</li>
                      <li>Tratamento</li>
                  </ul>
                  <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Ggarantir</a></p>
              </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="pricing-entry active pb-5 text-center">
                  <div>
                      <h3 class="mb-4">Maquiagem a partir</h3>
                      <p><span class="price">R$54.50</span> <span class="per">/ sessão</span></p>
                  </div>
                  <ul>
                      <li>Maquiagem</li>
                      <li>Corpo</li>
                      <li>Olhos</li>
                      <li>Face</li>
                      <li>Facial Spa</li>
                  </ul>
                  <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">garantir</a></p>
              </div>
          </div>
          <div class="col-md-3 ftco-animate">
              <div class="pricing-entry pb-5 text-center">
                  <div>
                      <h3 class="mb-4">Tratamentos especiais</h3>
                      <p><span class="price">R$89.50</span> <span class="per">/ sessão</span></p>
                  </div>
                  <ul>
                      <li>Massagem</li>
                              <li>massagem geral</li>
                              <li>massagem nos pés</li>
                              <li>Spa do corpo</li>
                              <li>massagem relaxante</li>
                  </ul>
                  <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
              </div>
          </div>
      </div>
          </div>
      </section>

      <section class="testimony-section bg-light">
    <div class="container">
      <div class="row ftco-animate justify-content-center">
          <div class="col-md-6 col-lg-5 d-flex">
              <div class="testimony-img" style="background-image: url(images/testimony-img.jpg);"></div>
          </div>
        <div class="col-md-6 col-lg-7 py-5 pl-md-5">
            <div class="py-md-5">
                <div class="heading-section ftco-animate">
                    <span class="subheading">Quem nos recomenda</span>
                    <h2 class="mb-0">Clientes felizes</h2>
                  </div>
              <div class="carousel-testimony owl-carousel ftco-animate">
                <div class="item">
                  <div class="testimony-wrap pb-4">
                    <div class="text">
                      <p class="mb-4">Se você procura um lugar que proporcione um corte de cabelo único e diferenciado, recomendo a barbearia.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url(images/stylist-1.jpg)">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jenifer Oliveira</p>
                          <span class="position">Empreendedora</span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap pb-4">
                    <div class="text">
                      <p class="mb-4">Se você deseja cuidar da sua aparência em um lugar tranquilo e acolhedor, recomendo o salão de beleza.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url(images/stylist-2.jpg)">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Daiana Silva</p>
                          <span class="position">Uber</span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap pb-4">
                    <div class="text">
                      <p class="mb-4">Se você procura um espaço de beleza que atenda a todos os gêneros, recomendo este salão.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url(images/stylist-3.jpg)">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Aline Santos</p>
                          <span class="position">Servidora pública</span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap pb-4">
                    <div class="text">
                      <p class="mb-4">Se você procura um espaço de beleza sofisticado e exclusivo, recomendo o salão.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url(images/stylist-4.jpg)">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Bela Nucci</p>
                          <span class="position">Empreendedora</span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap pb-4">
                    <div class="text">
                      <p class="mb-4">Se você é fã da estética vintage e busca um corte de cabelo clássico, recomendo a barbearia.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url(images/stylist-5.jpg)">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jefferson Oliveira</p>
                          <span class="position">Empreendedor</span>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

@endsection
