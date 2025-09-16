<?php
$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">My Reservations</h1>
                <p class="text-muted mb-0">View and manage your equipment reservations</p>
            </div>
            <a href="/equipment.php" class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i>New Reservation
            </a>
        </div>
    </div>
</div>

<!-- Filter Tabs -->
<ul class="nav nav-tabs mb-4" id="reservationTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button">
            <i class="bi bi-clock me-2"></i>Upcoming
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button">
            <i class="bi bi-history me-2"></i>History
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab" data-bs-target="#cancelled" type="button">
            <i class="bi bi-x-circle me-2"></i>Cancelled
        </button>
    </li>
</ul>

<!-- Tab Content -->
<div class="tab-content" id="reservationTabContent">
    <!-- Upcoming Reservations -->
    <div class="tab-pane fade show active" id="upcoming">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Date & Time</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/images/equipment/basketball.jpg" 
                                             alt="Basketball" 
                                             class="rounded me-3" 
                                             width="40" 
                                             height="40">
                                        <div>
                                            <div class="fw-semibold">Basketball</div>
                                            <small class="text-muted">#BKT001</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>Tomorrow</div>
                                    <small class="text-muted">2:00 PM - 4:00 PM</small>
                                </td>
                                <td>2 hours</td>
                                <td><span class="badge bg-warning">Confirmed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-x-circle me-1"></i>Cancel
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/images/equipment/tennis.jpg" 
                                             alt="Tennis Racket" 
                                             class="rounded me-3" 
                                             width="40" 
                                             height="40">
                                        <div>
                                            <div class="fw-semibold">Tennis Racket</div>
                                            <small class="text-muted">#TEN003</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>Dec 18, 2024</div>
                                    <small class="text-muted">10:00 AM - 12:00 PM</small>
                                </td>
                                <td>2 hours</td>
                                <td><span class="badge bg-success">Ready</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-x-circle me-1"></i>Cancel
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- History -->
    <div class="tab-pane fade" id="history">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/images/equipment/soccer.jpg" 
                                             alt="Soccer Ball" 
                                             class="rounded me-3" 
                                             width="40" 
                                             height="40">
                                        <div>
                                            <div class="fw-semibold">Soccer Ball</div>
                                            <small class="text-muted">#SOC002</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>Today</div>
                                    <small class="text-muted">1:00 PM - 3:00 PM</small>
                                </td>
                                <td>2 hours</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/images/equipment/basketball.jpg" 
                                             alt="Basketball" 
                                             class="rounded me-3" 
                                             width="40" 
                                             height="40">
                                        <div>
                                            <div class="fw-semibold">Basketball</div>
                                            <small class="text-muted">#BKT001</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>Dec 14, 2024</div>
                                    <small class="text-muted">4:00 PM - 6:00 PM</small>
                                </td>
                                <td>2 hours</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancelled -->
    <div class="tab-pane fade" id="cancelled">
        <div class="card">
            <div class="card-body">
                <div class="text-center py-5">
                    <i class="bi bi-check-circle display-1 text-muted mb-3"></i>
                    <h4 class="text-muted">No Cancelled Reservations</h4>
                    <p class="text-muted">You haven\'t cancelled any reservations yet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cancel Reservation Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancel Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to cancel this reservation?</p>
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Cancellations within 24 hours may be subject to penalties.
                </div>
                <div class="mb-3">
                    <label class="form-label">Reason for cancellation (optional)</label>
                    <textarea class="form-control" rows="3" placeholder="Why are you cancelling?"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keep Reservation</button>
                <button type="button" class="btn btn-danger">Confirm Cancellation</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Cancel reservation handling
    $(".btn-outline-danger").click(function() {
        $("#cancelModal").modal("show");
    });

    // Tab functionality
    $("#reservationTabs button").click(function() {
        // This would load appropriate data for each tab
        console.log("Tab changed:", $(this).attr("id"));
    });
});
</script>
';

include '../layouts/base.php';
?>