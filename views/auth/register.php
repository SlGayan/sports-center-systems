<?php
$content = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sports Center System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-body {
            padding: 2rem;
        }
        .btn-role {
            padding: 12px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .btn-role.active {
            font-weight: 600;
            transform: scale(1.02);
        }
        .form-control {
            padding: 12px;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }
        .header-text {
            color: #2c3e50;
        }
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, #dee2e6, transparent);
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body p-4 p-md-5">
                        <!-- Header -->
                        <div class="text-center mb-4">
                            <h2 class="h3 header-text">Create Account</h2>
                            <p class="text-muted">Join the sports center system</p>
                        </div>

                        <!-- Registration Form -->
                        <form id="registrationForm">
                            <!-- Role Selection -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">I am a:</label>
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-role active" data-role="student">
                                        <i class="bi bi-person me-2"></i>Student
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-role" data-role="admin">
                                        <i class="bi bi-gear me-2"></i>Administrator
                                    </button>
                                </div>
                            </div>

                            <!-- Student Registration Fields -->
                            <div id="studentFields">
                                <div class="mb-3">
                                    <label for="regNumber" class="form-label">Registration Number</label>
                                    <input type="text" class="form-control" id="regNumber" 
                                           placeholder="Enter your student ID" required>
                                    <div class="form-text">Your campus registration number</div>
                                </div>
                            </div>

                            <!-- Admin Registration Fields -->
                            <div id="adminFields" style="display: none;">
                                <div class="mb-3">
                                    <label for="nicNumber" class="form-label">NIC Number</label>
                                    <input type="text" class="form-control" id="nicNumber" 
                                           placeholder="Enter your NIC number">
                                    <div class="form-text">Your national identification number</div>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <!-- Common Fields -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                                <div class="form-text">Your campus email address</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="form-text">Minimum 8 characters with letters and numbers</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    I agree to the <a href="../../commingSoon.php" class="text-decoration-none">terms and conditions</a>
                                </label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-person-plus me-2"></i>Create Account
                                </button>
                            </div>
                        </form>

                        <!-- Login Link -->
                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? <a href="../auth/login.php" class="text-decoration-none">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    $(document).ready(function() {
        // Role selection
        $(".btn-role").click(function() {
            $(".btn-role").removeClass("active");
            $(this).addClass("active");
            
            const role = $(this).data("role");
            if (role === "student") {
                $("#studentFields").show();
                $("#adminFields").hide();
                $("#regNumber").prop("required", true);
                $("#nicNumber").prop("required", false);
            } else {
                $("#studentFields").hide();
                $("#adminFields").show();
                $("#regNumber").prop("required", false);
                $("#nicNumber").prop("required", true);
            }
        });

        // Form validation
        $("#registrationForm").on("submit", function(e) {
            e.preventDefault();
            
            // Basic validation
            const password = $("#password").val();
            const confirmPassword = $("#confirmPassword").val();
            
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }

            if (password.length < 8) {
                alert("Password must be at least 8 characters long!");
                return false;
            }

            // Check if it contains letters and numbers
            if (!/[a-zA-Z]/.test(password) || !/[0-9]/.test(password)) {
                alert("Password must contain both letters and numbers!");
                return false;
            }

            // Show loading state
            const submitBtn = $(this).find("button[type='submit']");
            const originalText = submitBtn.html();
            submitBtn.prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status"></span> Creating account...');

            // Simulate registration process
            setTimeout(() => {
                alert("Account created successfully! Please check your email for verification.");
                submitBtn.prop("disabled", false).html(originalText);
            }, 2000);
        });
    });
    </script>
</body>
</html>
HTML;
echo $content;


?>
