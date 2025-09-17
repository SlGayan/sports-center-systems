<?php
// Dummy data (replace with DB queries)
$upcoming_reservations = [
    ['equipment_name' => 'Basketball', 'date' => '2025-09-20'],
    ['equipment_name' => 'Tennis Racket', 'date' => '2025-09-21']
];

$available_equipment = [
    ['name' => 'Football', 'category' => 'Outdoor'],
    ['name' => 'Yoga Mat', 'category' => 'Indoor']
];

// Render reservations
function renderReservations($reservations) {
    if (empty($reservations)) {
        return '<p class="text-muted">No upcoming reservations</p>';
    }
    $html = '<ul class="list-group">';
    foreach ($reservations as $r) {
        $html .= "<li class='list-group-item'>{$r['equipment_name']} - {$r['date']}</li>";
    }
    $html .= '</ul>';
    return $html;
}

// Render equipment
function renderAvailableEquipment($equipment) {
    if (empty($equipment)) {
        return '<p class="text-muted">No equipment available right now</p>';
    }
    $html = '<div class="row">';
    foreach ($equipment as $e) {
        $html .= "
        <div class='col-6 mb-2'>
            <div class='border rounded p-2 text-center'>
                <strong>{$e['name']}</strong><br>
                <span class='text-muted small'>{$e['category']}</span>
            </div>
        </div>";
    }
    $html .= '</div>';
    return $html;
}

// Page Content
$content = <<<HTML
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
                <!-- Render Reservations -->
                {RESERVATIONS}
            </div>
        </div>
    </div>
    
    <!-- Available Equipment -->
    <div class="col-12 col-md-6 mt-3 mt-md-0">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available Now</h5>
            </div>
            <div class="card-body">
                <!-- Render Equipment -->
                {EQUIPMENT}
            </div>
        </div>
    </div>
</div>
HTML;

// Replace placeholders with PHP functions
$content = str_replace('{RESERVATIONS}', renderReservations($upcoming_reservations), $content);
$content = str_replace('{EQUIPMENT}', renderAvailableEquipment($available_equipment), $content);

// Include base layout
include '../layouts/base.php';
?>
