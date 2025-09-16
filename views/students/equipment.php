<?php
$content = '
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2">Browse Equipment</h1>
            <div class="d-none d-md-block">
                <a href="/dashboard.php" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search and Filters -->
<div class="row mb-4">
    <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0">
                <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search equipment..." id="equipmentSearch">
        </div>
    </div>
    <div class="col-12 col-md-6">
        <select class="form-select" id="categoryFilter">
            <option value="">All Categories</option>
            <option value="basketball">Basketball</option>
            <option value="soccer">Soccer</option>
            <option value="tennis">Tennis</option>
            <option value="fitness">Fitness</option>
            <option value="outdoor">Outdoor</option>
        </select>
    </div>
</div>

<!-- Equipment Grid -->
<div class="row" id="equipmentGrid">
';

// Sample equipment data - will be replaced with MySQL query
$equipment = [
    ['id' => 1, 'name' => 'Basketball', 'category' => 'basketball', 'status' => 'available', 'image' => 'basketball.jpg'],
    ['id' => 2, 'name' => 'Soccer Ball', 'category' => 'soccer', 'status' => 'available', 'image' => 'soccer.jpg'],
    ['id' => 3, 'name' => 'Tennis Racket', 'category' => 'tennis', 'status' => 'maintenance', 'image' => 'tennis.jpg'],
    ['id' => 4, 'name' => 'Yoga Mat', 'category' => 'fitness', 'status' => 'available', 'image' => 'yoga.jpg'],
    ['id' => 5, 'name' => 'Volleyball', 'category' => 'outdoor', 'status' => 'reserved', 'image' => 'volleyball.jpg'],
    ['id' => 6, 'name' => 'Badminton Set', 'category' => 'outdoor', 'status' => 'available', 'image' => 'badminton.jpg']
];

foreach ($equipment as $item) {
    $statusClass = [
        'available' => 'success',
        'reserved' => 'warning', 
        'maintenance' => 'danger',
        'unavailable' => 'secondary'
    ][$item['status']];
    
    $statusText = ucfirst($item['status']);
    
    $content .= '
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 equipment-item" data-category="' . $item['category'] . '">
        <div class="card equipment-card h-100">
            <div class="position-relative">
                <img src="/assets/images/equipment/' . $item['image'] . '" 
                     class="card-img-top" 
                     alt="' . $item['name'] . '"
                     style="height: 200px; object-fit: cover;">
                <span class="position-absolute top-0 end-0 m-2 badge bg-' . $statusClass . '">
                    ' . $statusText . '
                </span>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">' . $item['name'] . '</h5>
                <p class="card-text text-muted small">' . ucfirst($item['category']) . ' Equipment</p>
                <div class="mt-auto">
                    ' . ($item['status'] == 'available' ? '
                    <a href="/reserve.php?id=' . $item['id'] . '" class="btn btn-primary w-100">
                        <i class="bi bi-calendar-plus me-2"></i>Reserve
                    </a>
                    ' : '
                    <button class="btn btn-outline-secondary w-100" disabled>
                        ' . ($item['status'] == 'reserved' ? 'Reserved' : 'Unavailable') . '
                    </button>
                    ') . '
                </div>
            </div>
        </div>
    </div>
    ';
}

$content .= '
</div>

<!-- No Results Message (hidden by default) -->
<div class="row d-none" id="noResults">
    <div class="col-12 text-center py-5">
        <i class="bi bi-search display-1 text-muted mb-3"></i>
        <h4 class="text-muted">No equipment found</h4>
        <p class="text-muted">Try adjusting your search or filters</p>
    </div>
</div>
';

// Include the base layout
include '../layouts/base.php';
?>

<!-- JavaScript for Search and Filter -->
<script>
$(document).ready(function() {
    // Search functionality
    $("#equipmentSearch").on("keyup", function() {
        filterEquipment();
    });

    // Category filter
    $("#categoryFilter").on("change", function() {
        filterEquipment();
    });

    function filterEquipment() {
        var searchText = $("#equipmentSearch").val().toLowerCase();
        var category = $("#categoryFilter").val();
        
        var visibleItems = 0;
        
        $(".equipment-item").each(function() {
            var itemText = $(this).text().toLowerCase();
            var itemCategory = $(this).data("category");
            
            var matchesSearch = searchText === "" || itemText.includes(searchText);
            var matchesCategory = category === "" || itemCategory === category;
            
            if (matchesSearch && matchesCategory) {
                $(this).show();
                visibleItems++;
            } else {
                $(this).hide();
            }
        });
        
        // Show/hide no results message
        if (visibleItems === 0) {
            $("#noResults").removeClass("d-none");
        } else {
            $("#noResults").addClass("d-none");
        }
    }
});
</script>