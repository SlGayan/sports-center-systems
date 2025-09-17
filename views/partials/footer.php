<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Brand Section -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-trophy-fill fs-2 text-primary me-2"></i>
                    <h5 class="mb-0 fw-bold">Campus Sports Center</h5>
                </div>
                <p class="text-muted mb-3">
                    Empowering students with easy access to sports equipment and facilities. 
                    Streamlining sports center management for a better campus experience.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted hover-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="#" class="text-muted hover-primary">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                    <a href="#" class="text-muted hover-primary">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" class="text-muted hover-primary">
                        <i class="bi bi-linkedin fs-5"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-semibold mb-3">For Students</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/equipment.php" class="text-muted text-decoration-none hover-primary">Browse Equipment</a></li>
                    <li class="mb-2"><a href="/reservations.php" class="text-muted text-decoration-none hover-primary">My Reservations</a></li>
                    <li class="mb-2"><a href="/profile.php" class="text-muted text-decoration-none hover-primary">Profile</a></li>
                    <li class="mb-2"><a href="/scan.php" class="text-muted text-decoration-none hover-primary">QR Scanner</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-semibold mb-3">Support</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/help.php" class="text-muted text-decoration-none hover-primary">Help Center</a></li>
                    <li class="mb-2"><a href="/faq.php" class="text-muted text-decoration-none hover-primary">FAQ</a></li>
                    <li class="mb-2"><a href="/contact.php" class="text-muted text-decoration-none hover-primary">Contact Us</a></li>
                    <li class="mb-2"><a href="/terms.php" class="text-muted text-decoration-none hover-primary">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-12 col-md-4">
                <h6 class="text-uppercase fw-semibold mb-3">Contact Information</h6>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <span class="text-muted">Sports Center Building, Campus University</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <span class="text-muted">+94 11 234 5678</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope text-primary me-2"></i>
                        <span class="text-muted">sports@campus.edu</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-clock text-primary me-2"></i>
                        <span class="text-muted">Mon-Fri: 8:00 AM - 8:00 PM</span>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="mt-4">
                    <h6 class="text-uppercase fw-semibold mb-2">Stay Updated</h6>
                    <div class="input-group">
                        <input type="email" class="form-control form-control-sm" placeholder="Your email">
                        <button class="btn btn-primary btn-sm" type="button">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <!-- Bottom Bar -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-muted mb-0">
                    &copy; 2024 Campus Sports Center. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="d-flex gap-3 justify-content-md-end">
                    <a href="/privacy.php" class="text-muted text-decoration-none small hover-primary">Privacy Policy</a>
                    <a href="/terms.php" class="text-muted text-decoration-none small hover-primary">Terms of Service</a>
                    <a href="/sitemap.php" class="text-muted text-decoration-none small hover-primary">Sitemap</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle shadow" 
            id="backToTop"
            style="width: 50px; height: 50px; display: none;">
        <i class="bi bi-arrow-up"></i>
    </button>
</footer>

<style>
footer {
    background: linear-gradient(135deg, var(--bs-dark) 0%, #1a1a1a 100%);
}

.hover-primary {
    transition: color 0.3s ease;
}

.hover-primary:hover {
    color: var(--bs-primary) !important;
    transform: translateY(-1px);
}

/* Back to top button */
#backToTop {
    z-index: 1000;
    transition: all 0.3s ease;
}

#backToTop:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

/* Social icons */
footer a.text-muted:hover {
    color: var(--bs-primary) !important;
    transform: translateY(-2px);
}

/* Newsletter input */
footer .form-control {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #495057;
    color: white;
}

footer .form-control:focus {
    background-color: rgba(255, 255, 255, 0.15);
    border-color: var(--bs-primary);
    color: white;
    box-shadow: 0 0 0 0.2rem rgba(26, 79, 140, 0.25);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    footer .col-6 {
        margin-bottom: 2rem;
    }
    
    footer .text-md-end {
        text-align: left !important;
        margin-top: 1rem;
    }
    
    #backToTop {
        bottom: 1rem;
        right: 1rem;
        width: 45px;
        height: 45px;
    }
}
</style>

<script>
$(document).ready(function() {
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });

    $('#backToTop').click(function() {
        $('html, body').animate({scrollTop: 0}, 300);
        return false;
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = this.hash;
        const $target = $(target);
        $('html, body').animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing');
    });

    // Newsletter form handling
    $('footer .btn').click(function() {
        const email = $(this).siblings('input').val();
        if (email && isValidEmail(email)) {
            alert('Thank you for subscribing to our newsletter!');
            $(this).siblings('input').val('');
        } else {
            alert('Please enter a valid email address.');
        }
    });

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>