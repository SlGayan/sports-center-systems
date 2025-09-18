<?php
// Set the page title
$page_title = "Under Development";

// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .construction-icon {
            width: 120px;
            margin: 0 auto 20px;
            display: block;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
        }
        .progress {
            height: 8px;
            margin: 25px 0;
            border-radius: 4px;
        }
        .countdown {
            font-size: 1.2rem;
            font-weight: 600;
            color: #6c757d;
            margin: 20px 0;
        }
        .social-links {
            margin-top: 25px;
        }
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: #f8f9fa;
            color: #6c757d;
            border-radius: 50%;
            margin: 0 5px;
            transition: all 0.3s;
        }
        .social-links a:hover {
            background: #0d6efd;
            color: white;
            transform: translateY(-3px);
        }
        .notify-btn {
            position: relative;
            overflow: hidden;
        }
        .notify-btn:after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
            animation: shine 3s infinite ease-in-out;
        }
        @keyframes shine {
            0% {
                transform: translateX(-100%) rotate(30deg);
            }
            100% {
                transform: translateX(100%) rotate(30deg);
            }
        }
        .animate-icon {
            animation: bounce 2s infinite ease-in-out;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body p-5 text-center">
                        <!-- Header -->
                        <div class="mb-4">
                            <h2 class="h1 text-primary mb-3"><i class="fas fa-tools me-2"></i>Under Development</h2>
                            <p class="text-muted">We're working hard to bring you an amazing experience. Please check back soon!</p>
                        </div>
                        
                        <!-- Illustration -->
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzBkNmVmZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxjaXJjbGUgY3g9IjEyIiBjeT0iMTIiIHI9IjEwIj48L2NpcmNsZT48cGF0aCBkPSJNOS4wOSA5YTMgMyAwIDAgMSA1LjgzIDFjMCAyLTMgMy0zIDNNMjIgMTJoLTYiPjwvcGF0aD48L3N2Zz4=" alt="Under Construction" class="construction-icon animate-icon">
                        
                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                        <!-- Countdown -->
                        <div class="countdown">
                            <i class="far fa-clock me-2"></i>Estimated launch: <span id="countdown">14 days</span>
                        </div>
                        
                        <!-- Description -->
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>We're adding exciting new features to serve you better. Thank you for your patience!
                        </div>
                        
                        <!-- Back to Home Button -->
                        <a href="./index.php" class="btn btn-primary btn-lg w-100 mb-3 notify-btn">
                            <i class="fas fa-home me-2"></i>Go to Homepage
                        </a>
                        
                        <!-- Contact Button -->
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope me-2"></i>Contact Us
                        </a>
                        
                        <!-- Social Links -->
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="text-center mt-4 text-muted">
                    <p>&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple countdown animation
        document.addEventListener('DOMContentLoaded', function() {
            const countdownElement = document.getElementById('countdown');
            let days = 14;
            
            const countdownInterval = setInterval(function() {
                if (days > 0) {
                    days--;
                    countdownElement.textContent = days + ' day' + (days !== 1 ? 's' : '');
                    
                    // Update progress bar
                    const progress = 100 - (days / 14 * 100);
                    document.querySelector('.progress-bar').style.width = progress + '%';
                } else {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = 'Today!';
                }
            }, 2000); // Update every 2 seconds for demonstration
        });
    </script>
</body>
</html>
<?php
// Get the contents of the output buffer and end buffering
$content = ob_get_clean();

// Output the content
echo $content;
?>