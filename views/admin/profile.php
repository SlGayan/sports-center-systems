<?php
$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">Admin Profile</h1>
                <p class="text-muted mb-0">System administration and management</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#systemSettingsModal">
                    <i class="bi bi-gear me-2"></i>System Settings
                </button>
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editAdminProfileModal">
                    <i class="bi bi-pencil me-2"></i>Edit Profile
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Left Column - Admin Info -->
    <div class="col-12 col-md-4">
        <!-- Admin Card -->
        <div class="card">
            <div class="card-body text-center">
                <!-- Admin Badge -->
                <div class="mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="/assets/images/avatars/admin-avatar.jpg" 
                             alt="Admin" 
                             class="rounded-circle" 
                             width="120" 
                             height="120"
                             style="object-fit: cover;">
                        <span class="position-absolute bottom-0 end-0 badge bg-danger p-2">
                            <i class="bi bi-shield-check"></i>
                        </span>
                    </div>
                </div>

                <!-- Admin Info -->
                <h4 class="mb-1">Admin User</h4>
                <p class="text-muted mb-2">NIC: 123456789V</p>
                <p class="text-muted mb-3">System Administrator</p>

                <!-- Admin Stats -->
                <div class="row text-center">
                    <div class="col-4">
                        <div class="h5 text-primary">156</div>
                        <small class="text-muted">Users</small>
                    </div>
                    <div class="col-4">
                        <div class="h5 text-success">42</div>
                        <small class="text-muted">Active</small>
                    </div>
                    <div class="col-4">
                        <div class="h5 text-warning">7</div>
                        <small class="text-muted">Pending</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Status -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="card-title mb-0">System Status</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="small">Database</span>
                        <span class="badge bg-success">Online</span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="small">Storage</span>
                        <span class="badge bg-warning">75%</span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="small">Uptime</span>
                        <span class="badge bg-info">99.9%</span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-info" style="width: 99%"></div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-clockwise me-1"></i>Refresh Status
                    </button>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-database me-2"></i>Database Backup
                    </button>
                    <button class="btn btn-outline-success">
                        <i class="bi bi-file-earmark-text me-2"></i>Generate Reports
                    </button>
                    <button class="btn btn-outline-warning">
                        <i class="bi bi-tools me-2"></i>Maintenance Mode
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-shield-exclamation me-2"></i>Security Scan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Admin Tools -->
    <div class="col-12 col-md-8">
        <!-- System Overview -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">System Overview</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="border rounded p-3">
                            <div class="h3 text-primary mb-1">42</div>
                            <small class="text-muted">Active Reservations</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="border rounded p-3">
                            <div class="h3 text-success mb-1">128</div>
                            <small class="text-muted">Available Items</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="border rounded p-3">
                            <div class="h3 text-warning mb-1">7</div>
                            <small class="text-muted">Maintenance Needed</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="border rounded p-3">
                            <div class="h3 text-info mb-1">15</div>
                            <small class="text-muted">Today\'s Checkouts</small>
                        </div>
                    </div>
                </div>

                <!-- Usage Chart -->
                <div class="mt-4">
                    <h6 class="mb-3">Weekly Usage Trend</h6>
                    <div class="usage-chart" style="height: 200px; background: linear-gradient(90deg, #4CAF50 60%, #FFC107 25%, #F44336 15%); border-radius: 8px;">
                        <div class="d-flex justify-content-around align-items-end h-100 p-3 text-white">
                            <div class="text-center">
                                <div style="height: 60%;"></div>
                                <small>Mon</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 80%;"></div>
                                <small>Tue</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 45%;"></div>
                                <small>Wed</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 90%;"></div>
                                <small>Thu</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 75%;"></div>
                                <small>Fri</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 30%;"></div>
                                <small>Sat</small>
                            </div>
                            <div class="text-center">
                                <div style="height: 20%;"></div>
                                <small>Sun</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent System Activity -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent System Activity</h5>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-badge bg-success">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>System Backup Completed</h6>
                            <small class="text-muted">Today, 02:00 AM</small>
                            <p class="mb-0">Daily database backup completed successfully</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge bg-info">
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>New User Registration</h6>
                            <small class="text-muted">Today, 01:30 PM</small>
                            <p class="mb-0">Student ST2024156 registered successfully</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge bg-warning">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>Maintenance Alert</h6>
                            <small class="text-muted">Today, 10:45 AM</small>
                            <p class="mb-0">Tennis racket #TEN007 requires maintenance</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge bg-primary">
                            <i class="bi bi-arrow-up-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6>System Update</h6>
                            <small class="text-muted">Yesterday, 11:00 PM</small>
                            <p class="mb-0">Application updated to version 2.1.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Tools -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Administration Tools</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-people display-4 text-primary mb-2"></i>
                            <div class="small">User Management</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-clipboard-data display-4 text-success mb-2"></i>
                            <div class="small">Reports</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-shield-check display-4 text-warning mb-2"></i>
                            <div class="small">Security</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-gear display-4 text-info mb-2"></i>
                            <div class="small">Settings</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-database display-4 text-secondary mb-2"></i>
                            <div class="small">Backup</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <i class="bi bi-graph-up display-4 text-danger mb-2"></i>
                            <div class="small">Analytics</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Admin Profile Modal -->
<div class="modal fade" id="editAdminProfileModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Admin Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editAdminProfileForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="Admin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="User">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="admin@sports.edu">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" value="+94 77 123 4567">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Admin Role</label>
                        <select class="form-select">
                            <option selected>System Administrator</option>
                            <option>Sports Center Manager</option>
                            <option>Support Staff</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NIC Number</label>
                        <input type="text" class="form-control" value="123456789V" disabled>
                        <div class="form-text">NIC number cannot be changed</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="editAdminProfileForm" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- System Settings Modal -->
<div class="modal fade" id="systemSettingsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">System Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="systemSettingsForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Business Hours - Open</label>
                                <input type="time" class="form-control" value="08:00">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Business Hours - Close</label>
                                <input type="time" class="form-control" value="20:00">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Max Reservations per User</label>
                        <input type="number" class="form-control" value="3" min="1" max="10">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Late Fee per Hour ($)</label>
                        <input type="number" class="form-control" value="5.00" step="0.50" min="0">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Reservation Advance Days</label>
                        <input type="number" class="form-control" value="7" min="1" max="30">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Maintenance Reminder Days</label>
                        <input type="number" class="form-control" value="30" min="1" max="90">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="enableEmailNotifications" checked>
                        <label class="form-check-label" for="enableEmailNotifications">Enable Email Notifications</label>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="enableSMSNotifications">
                        <label class="form-check-label" for="enableSMSNotifications">Enable SMS Notifications</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="systemSettingsForm" class="btn btn-primary">Save Settings</button>
            </div>
        </div>
    </div>
</div>

<style>
.admin-stats .col-4 {
    border-right: 1px solid var(--bs-border-color);
}

.admin-stats .col-4:last-child {
    border-right: none;
}

.usage-chart {
    background: linear-gradient(90deg, 
        #4CAF50 60%, 
        #FFC107 25%, 
        #F44336 15%);
    border-radius: 8px;
}

.tool-card {
    transition: all 0.3s ease;
}

.tool-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>

<script>
$(document).ready(function() {
    // Edit admin profile form
    $("#editAdminProfileForm").on("submit", function(e) {
        e.preventDefault();
        
        const submitBtn = $(this).find("button[type=\'submit\']");
        submitBtn.prop("disabled", true).html(\'<span class="spinner-border spinner-border-sm" role="status"></span> Saving...\');

        setTimeout(() => {
            alert("Admin profile updated successfully!");
            $("#editAdminProfileModal").modal("hide");
            submitBtn.prop("disabled", false).html("Save Changes");
        }, 1000);
    });

    // System settings form
    $("#systemSettingsForm").on("submit", function(e) {
        e.preventDefault();
        
        const submitBtn = $(this).find("button[type=\'submit\']");
        submitBtn.prop("disabled", true).html(\'<span class="spinner-border spinner-border-sm" role="status"></span> Saving...\');

        setTimeout(() => {
            alert("System settings updated successfully!");
            $("#systemSettingsModal").modal("hide");
            submitBtn.prop("disabled", false).html("Save Settings");
        }, 1000);
    });

    // Quick actions
    $(".btn-outline-primary, .btn-outline-success, .btn-outline-warning, .btn-outline-danger").click(function() {
        const action = $(this).text().trim();
        alert(`Action: ${action}\nThis would perform the actual system action in production.`);
    });
});
</script>
';

include '../layouts/base.php';
?>