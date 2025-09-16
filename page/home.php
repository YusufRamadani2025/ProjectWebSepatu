<?php include 'komponen/carousel.php'; ?>

<!-- Jenis Sepatu / Merek -->
<section class="brands-section">
  <!-- Container fluid supaya full width -->
  <div class="container-fluid text-center p-0">
    <!-- Header -->
    <div class="brands-header py-2">
      <h5 class="fw-bold mb-0">Jenis Sepatu/Merek</h5>
    </div>

    <!-- Logo brand -->
    <div class="row justify-content-center align-items-center g-4 py-3 bg-white m-0 brands-logos">
      <div class="col-6 col-md-2">
        <img src="Image/Group 131.png" alt="Nike" class="brand-logo">
      </div>
      <div class="col-6 col-md-2">
        <img src="Image/Group 132.png" alt="Puma" class="brand-logo">
      </div>
      <div class="col-6 col-md-2">
        <img src="Image/Group 133.png" alt="Adidas" class="brand-logo">
      </div>
      <div class="col-6 col-md-2">
        <img src="Image/anta.png" alt="Anta" class="brand-logo">
      </div>
      <div class="col-6 col-md-2">
        <img src="Image/Group 134.png" alt="Converse" class="brand-logo">
      </div>
      <div class="col-6 col-md-2">
        <img src="Image/vans.png" alt="Vans" class="brand-logo">
      </div>
      <hr>
    </div>
  </div>
</section>

 <!-- WHAT'S NEW Section -->
<section class="whats-new py-4">
  <div class="container-fluid text-center">
    <h3 class="fw-bold mb-4">WHAT’S NEW</h3>

    <div id="whatsNewCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center g-3">
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18.png" alt="Nike V2K" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>V2K Run Women's Sneakers Shoes - Photon Dust</p>
                  <span class="price">Rp. 1.145.400</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (1).png" alt="Vans Old Skool" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>VANS</h6>
                  <p>Old Skool Unisex Sneakers Shoes - BLACK</p>
                  <span class="price">Rp. 999.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (2).png" alt="Nike Vomero" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>Vomero 5 Boys’ Grade School Sneakers Shoes</p>
                  <span class="price">Rp. 1.499.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (3).png" alt="Adidas Samba" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>ADIDAS</h6>
                  <p>Samba OG Kids Play Sneakers Shoes - Preloved Brown</p>
                  <span class="price">Rp. 850.000</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center g-3">
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18.png" alt="Nike V2K" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>V2K Run Women's Sneakers Shoes - Photon Dust</p>
                  <span class="price">Rp. 1.145.400</span>
                </div>
              </div>
            </div>
            
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (1).png" alt="Vans Old Skool" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>VANS</h6>
                  <p>Old Skool Unisex Sneakers Shoes - BLACK</p>
                  <span class="price">Rp. 999.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (2).png" alt="Nike Vomero" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>Vomero 5 Boys’ Grade School Sneakers Shoes</p>
                  <span class="price">Rp. 1.499.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (3).png" alt="Adidas Samba" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>ADIDAS</h6>
                  <p>Samba OG Kids Play Sneakers Shoes - Preloved Brown</p>
                  <span class="price">Rp. 850.000</span>
                </div>
              </div>
          </div>
        </div>
      </div>
        
      <!-- Controls arah panah -->
      <button class="carousel-control-prev" type="button" data-bs-target="#whatsNewCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#whatsNewCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
      </button>
    </div>
  </div>
</section>

<!-- SHOP BY SPORT Section -->
<section class="shop-sport py-5">
  <div class="container-fluid text-center">
    <h3 class="fw-bold mb-4 text-primary">SHOP BY SPORT</h3>
    <div class="row g-0">
      <div class="col-6 col-md">
        <div class="sport-card">
          <img src="Image/Rectangle 47.png" alt="Basketball">
          <div class="sport-overlay">BASKETBALL</div>
        </div>
      </div>
      <div class="col-6 col-md">
        <div class="sport-card">
          <img src="Image/Rectangle 48.png" alt="Tennis">
          <div class="sport-overlay">TENIS</div>
        </div>
      </div>
      <div class="col-6 col-md">
        <div class="sport-card">
          <img src="Image/Rectangle 49.png" alt="Running">
          <div class="sport-overlay">RUNNING</div>
        </div>
      </div>
      <div class="col-6 col-md">
        <div class="sport-card">
          <img src="Image/Rectangle 50.png" alt="Volley">
          <div class="sport-overlay">VOLEY</div>
        </div>
      </div>
      <div class="col-12 col-md">
        <div class="sport-card">
          <img src="Image/Rectangle 51.png" alt="Style">
          <div class="sport-overlay">STYLE</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Brand row -->
<div class="brand-row">
   <img src="Image/Rectangle 53.png" alt="">
   <img src="Image/Rectangle 54.png" alt="">
   <img src="Image/Rectangle 55.png" alt="">
   <img src="Image/Rectangle 56.png" alt="">
   <img src="Image/Rectangle 57.png" alt="">
   <img src="Image/download__14_-removebg-preview.png" alt="">
</div>

<!-- Foto besar -->
<div class="poster-besar">
  <img src="Image/on_desktop_6.webp" alt="">
</div>

 <!-- Rekomended for you Section -->
<section class="rekomended py-4">
  <div class="container-fluid text-center">
    <h3 class="fw-bold mb-4">Rekomended for you</h3>

    <div id="rekomendedCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center g-3">
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18.png" alt="Nike V2K" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>V2K Run Women's Sneakers Shoes - Photon Dust</p>
                  <span class="price">Rp. 1.145.400</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (1).png" alt="Vans Old Skool" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>VANS</h6>
                  <p>Old Skool Unisex Sneakers Shoes - BLACK</p>
                  <span class="price">Rp. 999.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (2).png" alt="Nike Vomero" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>Vomero 5 Boys’ Grade School Sneakers Shoes</p>
                  <span class="price">Rp. 1.499.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (3).png" alt="Adidas Samba" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>ADIDAS</h6>
                  <p>Samba OG Kids Play Sneakers Shoes - Preloved Brown</p>
                  <span class="price">Rp. 850.000</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center g-3">
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18.png" alt="Nike V2K" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>V2K Run Women's Sneakers Shoes - Photon Dust</p>
                  <span class="price">Rp. 1.145.400</span>
                </div>
              </div>
            </div>
            
            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (1).png" alt="Vans Old Skool" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>VANS</h6>
                  <p>Old Skool Unisex Sneakers Shoes - BLACK</p>
                  <span class="price">Rp. 999.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (2).png" alt="Nike Vomero" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>NIKE</h6>
                  <p>Vomero 5 Boys’ Grade School Sneakers Shoes</p>
                  <span class="price">Rp. 1.499.000</span>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-3">
              <div class="card product-card">
                <img src="Image/Rectangle 18 (3).png" alt="Adidas Samba" class="card-img-top">
                <div class="card-body product-info">
                  <hr>
                  <h6>ADIDAS</h6>
                  <p>Samba OG Kids Play Sneakers Shoes - Preloved Brown</p>
                  <span class="price">Rp. 850.000</span>
                </div>
              </div>
          </div>
        </div>
      </div>
        
      <!-- Controls arah panah -->
      <button class="carousel-control-prev" type="button" data-bs-target="#rekomendedCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#rekomendedCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
      </button>
    </div>
  </div>
</section>