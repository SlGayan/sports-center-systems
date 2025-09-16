<?php
$content = '
<div class="row">
    <div class="col-12">
        <h1 class="h2 mb-4">Sports Equipment Dashboard</h1>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mb-4">
    <div class="col-12">
        <div class="d-grid gap-2 d-md-flex">
            <a href="/scan.php" class="btn btn-scan me-md-2">
                <i class="bi bi-upc-scan me-2"></i>Scan QR Code
            </a>
            <a href="/equipment.php" class="btn btn-primary">
                <i class="bi bi-search me-2"></i>Browse Equipment
            </a>
        </div>
    </div>
</div>

<!-- Upcoming Reservations -->
<div class="row">
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Upcoming Reservations</h5>
            </div>
            <div class="card-body">
                ' . ($upcoming_reservations ? renderReservations($upcoming_reservations) : '
                <p class="text-muted">No upcoming reservations</p>
                <a href="/equipment.php" class="btn btn-sm btn-outline-primary">Make a Reservation</a>
                ') . '
            </div>
        </div>
    </div>
    
    <!-- Available Equipment Quick View -->
    <div class="col-12 col-md-6 mt-3 mt-md-0">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available Now</h5>
            </div>
            <div class="card-body">
                ' . renderAvailableEquipment($available_equipment) . '
            </div>
        </div>
    </div>
</div>
';

// Include the base layout
include 'layouts/base.php';
?>