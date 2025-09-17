<?php
// Determine current user role and active page
$current_role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'guest';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-campus navbar-dark sticky-top">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <i class="bi bi-trophy-fill me-2"></i>
            <span class="fw-bold">Campus Sports Center</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <!-- Student Navigation -->
            <?php if ($current_role === 'student'): ?>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'dashboard.php' ? 'active' : '' ?>" href="../students/dashboard.php">
                        <i class="bi bi-house me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'equipment.php' ? 'active' : '' ?>" href="/equipment.php">
                        <i class="bi bi-search me-1"></i>Browse Equipment
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'reservations.php' ? 'active' : '' ?>" href="/reservations.php">
                        <i class="bi bi-calendar me-1"></i>My Reservations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'scan.php' ? 'active' : '' ?>" href="/scan.php">
                        <i class="bi bi-upc-scan me-1"></i>Scan QR
                    </a>
                </li>
            </ul>

            <!-- Admin Navigation -->
            <?php elseif ($current_role === 'admin' || $current_role === 'super_admin'): ?>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'dashboard.php' ? 'active' : '' ?>" href="/admin/dashboard.php">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'equipment.php' ? 'active' : '' ?>" href="/admin/equipment.php">
                        <i class="bi bi-tools me-1"></i>Equipment
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'users.php' ? 'active' : '' ?>" href="/admin/users.php">
                        <i class="bi bi-people me-1"></i>Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'reports.php' ? 'active' : '' ?>" href="/admin/reports.php">
                        <i class="bi bi-graph-up me-1"></i>Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'maintenance.php' ? 'active' : '' ?>" href="/admin/maintenance.php">
                        <i class="bi bi-wrench me-1"></i>Maintenance
                    </a>
                </li>
            </ul>

            <!-- Guest Navigation -->
            <?php else: ?>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $current_page === 'index.php' ? 'active' : '' ?>" href="/">
                        <i class="bi bi-house me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">
                        <i class="bi bi-star me-1"></i>Features
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <i class="bi bi-info-circle me-1"></i>About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        <i class="bi bi-telephone me-1"></i>Contact
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <!-- Right-side Items -->
            <ul class="navbar-nav ms-auto">
                <?php if ($current_role !== 'guest'): ?>
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">Notifications</h6></li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-calendar-check text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="small">Reservation confirmed</div>
                                        <small class="text-muted">2 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="small">Maintenance reminder</div>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center small" href="#">View all notifications</a></li>
                    </ul>
                </li>

                <!-- User Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-1"></i>
                        <?= $current_role === 'student' ? 'Student' : 'Admin' ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="<?= $current_role === 'student' ? '/profile.php' : '/admin/profile.php' ?>">
                                <i class="bi bi-person me-2"></i>Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= $current_role === 'student' ? '/reservations.php' : '/admin/reports.php' ?>">
                                <i class="bi bi-clock-history me-2"></i>Activity
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout.php">
                                <i class="bi bi-box-arrow-right me-2"></i>Sign Out
                            </a>
                        </li>
                    </ul>
                </li>

                <?php else: ?>
                <!-- Guest User Actions -->
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Sign In
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light ms-2" href="/register.php">
                        <i class="bi bi-person-plus me-1"></i>Sign Up
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar-campus {
    background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-dark) 100%);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 0.75rem 1rem;
}

.navbar-brand {
    font-size: 1.25rem;
}

.navbar-nav .nav-link {
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    margin: 0 0.125rem;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-1px);
}

.navbar-nav .nav-link i {
    width: 1.25rem;
    text-align: center;
}

/* Dropdown styles */
.dropdown-menu {
    border: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    border-radius: 0.5rem;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background-color: var(--bs-primary);
    color: white;
}

/* Notification badge */
.navbar .badge {
    font-size: 0.6rem;
    padding: 0.25rem 0.4rem;
}

/* Mobile responsiveness */
@media (max-width: 991.98px) {
    .navbar-nav {
        padding: 1rem 0;
    }
    
    .navbar-nav .nav-link {
        margin: 0.125rem 0;
        padding: 0.75rem 1rem;
    }
    
    .navbar-nav .btn {
        margin: 0.5rem 0;
        width: 100%;
    }
}
</style>

<script>
$(document).ready(function() {
    // Highlight active navigation item
    const currentPage = '<?= $current_page ?>';
    $(`a[href*="${currentPage}"]`).addClass('active');
    
    // Mobile menu close on click
    $('.navbar-nav .nav-link').click(function() {
        $('.navbar-collapse').collapse('hide');
    });
    
    // Notification bell animation
    $('.nav-link[data-bs-toggle="dropdown"]').hover(function() {
        $(this).find('i').addClass('animate__animated animate__swing');
    }, function() {
        $(this).find('i').removeClass('animate__animated animate__swing');
    });
});
</script>