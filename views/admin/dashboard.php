<?php
// Check admin authentication (in real app, this would be session validation)
$is_admin = true; // Would come from session in real implementation

if (!$is_admin) {
    header('Location: /login.php');
    exit;
}

$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">Admin Dashboard</h1>
                <p class="text-muted mb-0">Sports Center Management System</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-danger">3</span>
                </button>
                <button class="btn btn-outline-primary">
                    <i class="bi bi-person-circle"></i> Admin User
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats -->
<div class="row mb-4">
    <div class="col-6 col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="mb-0">42</h4>
                        <p class="mb-0 small">Active Reservations</p>
                    </div>
                    <i class="bi bi-calendar-check fs-1 opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="mb-0">128</h4>
                        <p class="mb-0 small">Available Items</p>
                    </div>
                    <i class="bi bi-check-circle fs-1 opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="mb-0">7</h4>
                        <p class="mb-0 small">Maintenance Needed</p>
                    </div>
                    <i class="bi bi-tools fs-1 opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="mb-0">15</h4>
                        <p class="mb-0 small">Today\'s Checkouts</p>
                    </div>
                    <i class="bi bi-arrow-up-circle fs-1 opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="row">
    <!-- Left Column - Management Tools -->
    <div class="col-12 col-md-8">
        <!-- Quick Actions -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <a href="/admin/equipment.php" class="btn btn-outline-primary w-100">
                            <i class="bi bi-plus-circle d-block fs-2 mb-2"></i>
                            Add Equipment
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="/admin/users.php" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-people d-block fs-2 mb-2"></i>
                            Manage Users
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="/admin/reports.php" class="btn btn-outline-success w-100">
                            <i class="bi bi-graph-up d-block fs-2 mb-2"></i>
                            Generate Reports
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="/admin/maintenance.php" class="btn btn-outline-warning w-100">
                            <i class="bi bi-tools d-block fs-2 mb-2"></i>
                            Maintenance
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Activity</h5>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-success me-2">CHECKOUT</span>
                                John Doe borrowed Basketball #BKT001
                            </div>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-info me-2">RETURN</span>
                                Jane Smith returned Soccer Ball #SOC002
                            </div>
                            <small class="text-muted">15 minutes ago</small>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-warning me-2">MAINTENANCE</span>
                                Tennis Racket #TEN003 marked for repair
                            </div>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-primary me-2">RESERVATION</span>
                                New reservation for Volleyball #VOL004
                            </div>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Equipment Status Overview -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Equipment Status</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="h3 text-success">128</div>
                        <small class="text-muted">Available</small>
                    </div>
                    <div class="col-4">
                        <div class="h3 text-warning">42</div>
                        <small class="text-muted">Reserved</small>
                    </div>
                    <div class="col-4">
                        <div class="h3 text-danger">7</div>
                        <small class="text-muted">Maintenance</small>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 20px;">
                    <div class="progress-bar bg-success" style="width: 72%">72%</div>
                    <div class="progress-bar bg-warning" style="width: 24%">24%</div>
                    <div class="progress-bar bg-danger" style="width: 4%">4%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Notifications & Tools -->
    <div class="col-12 col-md-4">
        <!-- System Alerts -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">System Alerts</h5>
            </div>
            <div class="card-body">
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <strong>3 items</strong> need maintenance
                </div>
                <div class="alert alert-info">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>5 reservations</strong> pending for tomorrow
                </div>
                <div class="alert alert-success">
                    <i class="bi bi-check-circle me-2"></i>
                    System running smoothly
                </div>
            </div>
        </div>

        <!-- Quick Reports -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Reports</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-download me-2"></i>Daily Usage Report
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-calendar me-2"></i>Weekly Summary
                    </button>
                    <button class="btn btn-outline-success">
                        <i class="bi bi-graph-up me-2"></i>Monthly Analytics
                    </button>
                </div>
            </div>
        </div>

        <!-- System Info -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">System Information</h5>
            </div>
            <div class="card-body">
                <div class="row small">
                    <div class="col-6">
                        <strong>PHP Version:</strong>
                    </div>
                    <div class="col-6 text-end">
                        ' . phpversion() . '
                    </div>
                </div>
                <div class="row small">
                    <div class="col-6">
                        <strong>Database:</strong>
                    </div>
                    <div class="col-6 text-end">
                        MySQL 8.0
                    </div>
                </div>
                <div class="row small">
                    <div class="col-6">
                        <strong>Users Online:</strong>
                    </div>
                    <div class="col-6 text-end">
                        12
                    </div>
                </div>
                <div class="row small">
                    <div class="col-6">
                        <strong>Last Backup:</strong>
                    </div>
                    <div class="col-6 text-end">
                        Today, 02:00
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Dashboard -->
<script>
$(document).ready(function() {
    // Real-time updates simulation
    function updateStats() {
        // Simulate real-time data updates
        const randomIncrement = Math.floor(Math.random() * 3) + 1;
        const reservations = parseInt($(".card.bg-primary h4").text());
        $(".card.bg-primary h4").text(reservations + randomIncrement);
        
        // Update activity feed periodically
        setTimeout(updateStats, 30000); // Every 30 seconds
    }

    // Initialize real-time updates
    updateStats();

    // Quick action handlers
    $(".quick-action-btn").click(function(e) {
        e.preventDefault();
        const action = $(this).data("action");
        console.log("Quick action:", action);
        // Implement quick actions here
    });

    // Export functionality
    $(".export-btn").click(function() {
        const reportType = $(this).data("report");
        alert("Generating " + reportType + " report...");
        // Implement export functionality here
    });
});
</script>
';

// Include the base layout
include '../layouts/base.php';
?>