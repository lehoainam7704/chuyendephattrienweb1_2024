<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3025">
<div class="container">
    <h2 class="text-center my-5">Testimonials</h2>
    <div class="row">
      <!-- Testimonial -->
      <div class="testimonial-group active">
        <div class="col-md-4">
          <div class="testimonial">
            <img src="pngtree-user-cartoon-girl-avatar-png-image_4492903.jpg" alt="Avatar">
            <h3 class="testimonial-title">Water Damage Repair</h3>
            <p>Excellent service and swift repair and I get to keep my Phone. I feel Really great.</p>
            <div class="testimonial-footer">
              <div>
                <h3>John Williamson</h3>
                <p class="testimonial-location">New York City</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="testimonial">
            <img src="users-vector-icon-png_260862.jpg" alt="Avatar">
            <h3 class="testimonial-title">Broken Glass Repair</h3>
            <p>Great service as this was 2nd repair with Mr. Foxit, excellent communication.</p>
            <div class="testimonial-footer">
              <div>
                <h3>Astley Fletcher</h3>
                <p class="testimonial-location">Los Angeles</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="testimonial">
            <img src="pngtree-user-cartoon-girl-avatar-png-image_4492903.jpg" alt="Avatar">
            <h3 class="testimonial-title">Water Damage Repair</h3>
            <p>Repaired my iPhone 13 through thorough examination, updated at all times.</p>
            <div class="testimonial-footer">
              <div>
                <h3>Mitchell Starc</h3>
                <p class="testimonial-location">California</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-group">
        <div class="col-md-4">
          <div class="testimonial">
            <img src="users-vector-icon-png_260862.jpg" alt="Avatar">
            <h3 class="testimonial-title">Battery Replacement</h3>
            <p>Quick and professional battery replacement for my iPhone 12. Highly recommend!</p>
            <div class="testimonial-footer">
              <div>
                <h3>Jane Doe</h3>
                <p class="testimonial-location">Boston</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="testimonial">
            <img src="pngtree-user-cartoon-girl-avatar-png-image_4492903.jpg" alt="Avatar">
            <h3 class="testimonial-title">Screen Replacement</h3>
            <p>Screen replacement was done perfectly and quickly. My phone looks brand new.</p>
            <div class="testimonial-footer">
              <div>
                <h3>Mike Ross</h3>
                <p class="testimonial-location">Chicago</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="testimonial">
            <img src="users-vector-icon-png_260862.jpg" alt="Avatar">
            <h3 class="testimonial-title">Charging Port Repair</h3>
            <p>Had my charging port repaired. Works like new now!</p>
            <div class="testimonial-footer">
              <div>
                <h3>Samantha Jones</h3>
                <p class="testimonial-location">Houston</p>
              </div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Nút chuyển -->
    <div class="carousel-controls">
      <button id="prevBtn"><</button>
      <button id="nextBtn">></button>
    </div>

  </div>
</div>
