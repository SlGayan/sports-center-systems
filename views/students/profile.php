<?php
$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">My Profile</h1>
                <p class="text-muted mb-0">Manage your account and view activity</p>
            </div>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                <i class="bi bi-pencil me-2"></i>Edit Profile
            </button>
        </div>
    </div>
</div>

<div class="row">
    <!-- Left Column - Profile Info -->
    <div class="col-12 col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <!-- Profile Picture -->
                <div class="mb-3">
                    <img src="/assets/images/avatars/default-avatar.jpg" 
                         alt="Profile" 
                         class="rounded-circle" 
                         width="120" 
                         height="120"
                         style="object-fit: cover;">
                    <div class="mt-2">
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-camera me-1"></i>Change Photo
                        </button>
                    </div>
                </div>

                <!-- User Info -->
                <h4 class="mb-1">John Doe</h4>
                <p class="text-muted mb-2">ST2024001</p>
                <p class="text-muted mb-3">Computer Science Department</p>

                <!-- Stats -->
                <div class="row text-center">
                    <div class="col-4">
                        <div class="h5 text-primary">42</div>
                        <small class="text-muted">Reservations</small>
                    </div>
                    <div class="col-4">
                        <div class="h5 text-success">38</div>
                        <small class="text-muted">Completed</small>
                    </div>
                    <div class="col-4">
                        <div class="h5 text-warning">2</div>
                        <small class="text-muted">Upcoming</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Contact Information</h6>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <small class="text-muted">Email</small>
                    <div>john.doe@student.edu</div>
                </div>
                <div class="mb-2">
                    <small class="text-muted">Phone</small>
                    <div>+94 77 123 4567</div>
                </div>
                <div>
                    <small class="text-muted">Member Since</small>
                    <div>January 15, 2024</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Activity & History -->
    <div class="col-12 col-md-8">
        <!-- Current Reservations -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Upcoming Reservations</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Basketball #BKT001</h6>
                                <small class="text-muted">Tomorrow, 2:00 PM - 4:00 PM</small>
                            </div>
                            <span class="badge bg-warning">Upcoming</span>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Tennis Racket #TEN003</h6>
                                <small class="text-muted">Dec 18, 10:00 AM - 12:00 PM</small>
                            </div>
                            <span class="badge bg-warning">Upcoming</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/reservations.php" class="btn btn-sm btn-outline-primary">View All Reservations</a>
                </div>
            </div>
        </div>

        <!-- Reservation History -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Activity</h5>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-badge bg-success">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>Returned Soccer Ball</h6>
                            <small class="text-muted">Today, 3:45 PM</small>
                            <p class="mb-0">Soccer Ball #SOC002 returned in good condition</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge bg-primary">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>New Reservation</h6>
                            <small class="text-muted">Today, 2:30 PM</small>
                            <p class="mb-0">Reserved Tennis Racket #TEN003 for Dec 18</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge bg-info">
                            <i class="bi bi-arrow-up-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>Checked Out Basketball</h6>
                            <small class="text-muted">Yesterday, 4:15 PM</small>
                            <p class="mb-0">Borrowed Basketball #BKT001 for practice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Favorite Equipment -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Frequently Used Equipment</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-md-4 text-center mb-3">
                        <img src="/assets/images/equipment/basketball.jpg" 
                             alt="Basketball" 
                             class="rounded mb-2" 
                             width="80" 
                             height="80"
                             style="object-fit: cover;">
                        <div class="small">Basketball</div>
                        <small class="text-muted">12 times</small>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <img src="/assets/images/equipment/soccer.jpg" 
                             alt="Soccer Ball" 
                             class="rounded mb-2" 
                             width="80" 
                             height="80"
                             style="object-fit: cover;">
                        <div class="small">Soccer Ball</div>
                        <small class="text-muted">8 times</small>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <img src="/assets/images/equipment/tennis.jpg" 
                             alt="Tennis Racket" 
                             class="rounded mb-2" 
                             width="80" 
                             height="80"
                             style="object-fit: cover;">
                        <div class="small">Tennis Racket</div>
                        <small class="text-muted">5 times</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editProfileForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="Doe">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="john.doe@student.edu">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" value="+94 77 123 4567">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option selected>Computer Science</option>
                            <option>Engineering</option>
                            <option>Business</option>
                            <option>Arts</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="editProfileForm" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<style>
.timeline {
    position: relative;
    padding-left: 2rem;
}

.timeline-item {
    position: relative;
    padding-bottom: 2rem;
}

.timeline-item:last-child {
    padding-bottom: 0;
}

.timeline-badge {
    position: absolute;
    left: -2rem;
    top: 0;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.timeline-content {
    margin-left: 1rem;
}

.timeline-item::before {
    content: "";
    position: absolute;
    left: -1.6rem;
    top: 2rem;
    bottom: 0;
    width: 2px;
    background-color: var(--bs-border-color);
}

.timeline-item:last-child::before {
    display: none;
}
</style>

<script>
$(document).ready(function() {
    // Edit profile form handling
    $("#editProfileForm").on("submit", function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = $(this).find("button[type=\'submit\']");
        submitBtn.prop("disabled", true).html(\'<span class="spinner-border spinner-border-sm" role="status"></span> Saving...\');

        // Simulate save
        setTimeout(() => {
            alert("Profile updated successfully!");
            $("#editProfileModal").modal("hide");
            submitBtn.prop("disabled", false).html("Save Changes");
        }, 1000);
    });
});
</script>
';

include '../layouts/base.php';
?>