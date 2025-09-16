<?php
$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">Equipment Management</h1>
                <p class="text-muted mb-0">Manage sports equipment inventory</p>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEquipmentModal">
                <i class="bi bi-plus-circle me-2"></i>Add Equipment
            </button>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="row mb-4">
    <div class="col-12 col-md-6">
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0">
                <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search equipment...">
        </div>
    </div>
    <div class="col-12 col-md-6 mt-2 mt-md-0">
        <div class="d-flex gap-2">
            <select class="form-select">
                <option value="">All Categories</option>
                <option value="basketball">Basketball</option>
                <option value="soccer">Soccer</option>
                <option value="tennis">Tennis</option>
            </select>
            <select class="form-select">
                <option value="">All Status</option>
                <option value="available">Available</option>
                <option value="reserved">Reserved</option>
                <option value="maintenance">Maintenance</option>
            </select>
        </div>
    </div>
</div>

<!-- Equipment Table -->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Equipment</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BKT001</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/equipment/basketball.jpg" 
                                     alt="Basketball" 
                                     class="rounded me-3" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <div class="fw-semibold">Basketball</div>
                                    <small class="text-muted">Official size</small>
                                </div>
                            </div>
                        </td>
                        <td>Basketball</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td><span class="badge bg-success">Excellent</span></td>
                        <td>Storage A</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>SOC002</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/equipment/soccer.jpg" 
                                     alt="Soccer Ball" 
                                     class="rounded me-3" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <div class="fw-semibold">Soccer Ball</div>
                                    <small class="text-muted">Size 5</small>
                                </div>
                            </div>
                        </td>
                        <td>Soccer</td>
                        <td><span class="badge bg-warning">Reserved</span></td>
                        <td><span class="badge bg-success">Good</span></td>
                        <td>Storage B</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>TEN003</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/equipment/tennis.jpg" 
                                     alt="Tennis Racket" 
                                     class="rounded me-3" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <div class="fw-semibold">Tennis Racket</div>
                                    <small class="text-muted">Professional</small>
                                </div>
                            </div>
                        </td>
                        <td>Tennis</td>
                        <td><span class="badge bg-danger">Maintenance</span></td>
                        <td><span class="badge bg-warning">Fair</span></td>
                        <td>Repair Room</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Equipment pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Add Equipment Modal -->
<div class="modal fade" id="addEquipmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Equipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addEquipmentForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Equipment Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" required>
                                    <option value="">Select Category</option>
                                    <option value="basketball">Basketball</option>
                                    <option value="soccer">Soccer</option>
                                    <option value="tennis">Tennis</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Equipment Code</label>
                                <input type="text" class="form-control" placeholder="e.g., BKT001" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">QR Code</label>
                                <input type="text" class="form-control" placeholder="Auto-generated">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Model</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Size</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Storage Location</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Initial Condition</label>
                                <select class="form-select">
                                    <option value="excellent">Excellent</option>
                                    <option value="good" selected>Good</option>
                                    <option value="fair">Fair</option>
                                    <option value="poor">Poor</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Equipment Image</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addEquipmentForm" class="btn btn-primary">Add Equipment</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Equipment search and filter functionality would go here
    // This is frontend-only for now
});
</script>
';

include '../layouts/base.php';
?>