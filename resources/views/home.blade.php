@extends('layouts.page')

 

@section('container')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{ asset('images/carousel/slide-1.jpg') }})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Abastecimiento de <span>Combustible</span></h2>
                <p class="animate__animated animate__fadeInUp">Nuestras soluciones se adaptan a las necesidades de nuestros clientes.</p>
					<!--
                <a href="{{ route('servicios') }}" class="btn-get-started animate__animated animate__fadeInUp">Más información</a>
					-->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
		 
          <div class="carousel-item" style="background: url({{ asset('images/carousel/foto_01.JPG') }})">
            <div class="carousel-container">
              <div class="carousel-content">
               
              </div>
            </div>
          </div>
	 
          <!-- Slide 3 -->
		  <!--
			<div class="carousel-item" style="background: url({{ asset('images/carousel/foto_07.JPG') }})">
				<div class="carousel-container">
					<div class="carousel-content">
						<p class="animate__animated animate__fadeInUp">Brindamos soluciones integrales para la distribución y comercializacóin de combustibles. 
							Nuestras soluciones se adaptan a las necesidades de nuestros clientes.</p>
					</div>
				</div>
			</div>
			-->
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

 
<main id="main">
    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
		<div class="container">
		</div>
	</section>
	<!--
    <section id="featured" class="featured">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="icon-box">
            <i class="bi bi-ui-checks"></i>
            <h3><a href="">Soluciones Integrales</a></h3>
            <p>Implemetamos soluciones a tus necesidades para el abastecimiento de combustibles.</p>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
            <i class="bi bi-ui-checks-grid"></i>
            <h3><a href="">Fabricacion</a></h3>
            <p>Nuestros productos son de gran calidad, usamos materia prima de calidad.</p>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-diagram-3"></i>
            <h3><a href="">Tecnologia en ERP</a></h3>
            <p>Nuestras operaciones se gestiona con un ERP a nuestra medida para cumplir con nuestros clientes</p>
            </div>
        </div>
        </div>

    </div>
    </section>
  -->
    <!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <!--
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    </p>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section>
    -->
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <!--
    <section id="services" class="services">
        <div class="container">

            <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Sed ut perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">Dele cardo</a></h4>
                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Divera don</a></h4>
                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

            </div>

        </div>
    </section>
    -->
    <!-- End Services Section -->

 

</main><!-- End #main -->


@endsection


@section('script')
<script>
$('#myCarousel').carousel({
    interval: 3000,
 })
</script>
@endsection