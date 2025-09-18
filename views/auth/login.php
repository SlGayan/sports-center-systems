<?php
$content = <<<HTML
<div class="row justify-content-center">
    <div class="col-12 col-md-5 col-lg-4">
        <div class="card">
            <div class="card-body p-5">
                <!-- Header -->
                <div class="text-center mb-4">
                    <h2 class="h3">Welcome Back</h2>
                    <p class="text-muted">Sign in to your account</p>
                </div>

                <!-- Login Form -->
                <form id="loginForm">
                    <!-- Role Selection -->
                    <div class="mb-3">
                        <label class="form-label">I am a:</label>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary role-btn active" data-role="student">
                                <i class="bi bi-person me-2"></i>Student
                            </button>
                            <button type="button" class="btn btn-outline-secondary role-btn" data-role="admin">
                                <i class="bi bi-gear me-2"></i>Administrator
                            </button>
                        </div>
                    </div>

                    <!-- Student Login -->
                    <div id="studentLogin">
                        <div class="mb-3">
                            <label for="studentRegNumber" class="form-label">Registration Number</label>
                            <input type="text" class="form-control" id="studentRegNumber" 
                                   placeholder="Enter your student ID" required>
                        </div>
                    </div>

                    <!-- Admin Login -->
                    <div id="adminLogin" style="display: none;">
                        <div class="mb-3">
                            <label for="adminNicNumber" class="form-label">NIC Number</label>
                            <input type="text" class="form-control" id="adminNicNumber" 
                                   placeholder="Enter your NIC number">
                        </div>
                    </div>

                    <!-- Common Fields -->
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                        </button>
                    </div>
                </form>

                <!-- Help Links -->
                <div class="text-center mt-4">
                    <p class="mb-1">
                        <a href="../../commingSoon.php" class="text-decoration-none">Forgot password?</a>
                    </p>
                    <p class="mb-0">
                        Don’t have an account? <a href="./register.php" class="text-decoration-none">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Role selection
    $(".role-btn").click(function() {
        $(".role-btn").removeClass("active");
        $(this).addClass("active");
        
        const role = $(this).data("role");
        if (role === "student") {
            $("#studentLogin").show();
            $("#adminLogin").hide();
            $("#studentRegNumber").prop("required", true);
            $("#adminNicNumber").prop("required", false);
        } else {
            $("#studentLogin").hide();
            $("#adminLogin").show();
            $("#studentRegNumber").prop("required", false);
            $("#adminNicNumber").prop("required", true);
        }
    });

    // Form submission
    $("#loginForm").on("submit", function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = $(this).find("button[type='submit']");
        submitBtn.prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status"></span> Signing in...');

        // Simulate login
        setTimeout(() => {
            const role = $(".role-btn.active").data("role");
            if (role === "student") {
                window.location.href = "/dashboard.php";
            } else {
                window.location.href = "/admin/dashboard.php";
            }
        }, 1500);
    });
});
</script>
HTML;

include '../layouts/base.php';
?>
