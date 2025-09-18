<?php
$content = <<<HTML
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-5">
        <div class="card">
            <div class="card-body p-5">
                <!-- Header -->
                <div class="text-center mb-4">
                    <h2 class="h3">Create Account</h2>
                    <p class="text-muted">Join the sports center system</p>
                </div>

                <!-- Registration Form -->
                <form id="registrationForm">
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

                    <!-- Common Fields -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>

                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="form-text">Your campus email address</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="form-text">Minimum 8 characters with letters and numbers</div>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">
                            I agree to the <a href="../../commingSoon.php" target="_blank">terms and conditions</a>
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
                    <p class="mb-0">Already have an account? <a href="./login.php" class="text-decoration-none">Sign in</a></p>
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

        // Show loading state
        const submitBtn = $(this).find("button[type='submit']");
        submitBtn.prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status"></span> Creating account...');

        // Simulate registration
        setTimeout(() => {
            alert("Account created successfully! Please check your email for verification.");
            window.location.href = "/login.php";
        }, 2000);
    });
});
</script>
HTML;
include '../layouts/base.php';
?>
