<?php
$content = '
<div class="row">
    <div class="col-12">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 mb-1">User Management</h1>
                <p class="text-muted mb-0">Manage students and administrators</p>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi bi-person-plus me-2"></i>Add User
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
            <input type="text" class="form-control border-start-0" placeholder="Search users..." id="userSearch">
        </div>
    </div>
    <div class="col-12 col-md-6 mt-2 mt-md-0">
        <div class="d-flex gap-2">
            <select class="form-select" id="roleFilter">
                <option value="">All Roles</option>
                <option value="student">Students</option>
                <option value="admin">Administrators</option>
                <option value="super_admin">Super Admins</option>
            </select>
            <select class="form-select" id="statusFilter">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="pending">Pending</option>
            </select>
        </div>
    </div>
</div>

<!-- Users Table -->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Last Login</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Student Users -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/avatars/student1.jpg" 
                                     alt="John Doe" 
                                     class="rounded-circle me-3" 
                                     width="40" 
                                     height="40"
                                     style="object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">John Doe</div>
                                    <small class="text-muted">ST2024001</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Student</span></td>
                        <td>
                            <div>john.doe@student.edu</div>
                            <small class="text-muted">+94 77 123 4567</small>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>Today, 2:30 PM</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/avatars/student2.jpg" 
                                     alt="Jane Smith" 
                                     class="rounded-circle me-3" 
                                     width="40" 
                                     height="40"
                                     style="object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Jane Smith</div>
                                    <small class="text-muted">ST2024002</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Student</span></td>
                        <td>
                            <div>jane.smith@student.edu</div>
                            <small class="text-muted">+94 77 234 5678</small>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>Yesterday, 4:15 PM</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Admin Users -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/assets/images/avatars/admin-avatar.jpg" 
                                     alt="Admin User" 
                                     class="rounded-circle me-3" 
                                     width="40" 
                                     height="40"
                                     style="object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Admin User</div>
                                    <small class="text-muted">NIC: 123456789V</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">Super Admin</span></td>
                        <td>
                            <div>admin@sports.edu</div>
                            <small class="text-muted">+94 11 234 5678</small>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>Today, 9:00 AM</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-secondary" disabled>
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="User pagination">
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

<!-- User Statistics -->
<div class="row mt-4">
    <div class="col-6 col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body text-center">
                <div class="h4 mb-1">156</div>
                <div class="small">Total Users</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body text-center">
                <div class="h4 mb-1">142</div>
                <div class="small">Active Users</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body text-center">
                <div class="h4 mb-1">8</div>
                <div class="small">Pending</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body text-center">
                <div class="h4 mb-1">6</div>
                <div class="small">Admins</div>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <!-- Role Selection -->
                    <div class="mb-3">
                        <label class="form-label">User Type</label>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary role-btn active" data-role="student">
                                <i class="bi bi-person me-2"></i>Student
                            </button>
                            <button type="button" class="btn btn-outline-secondary role-btn" data-role="admin">
                                <i class="bi bi-gear me-2"></i>Administrator
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Student Fields -->
                            <div id="studentFields">
                                <div class="mb-3">
                                    <label class="form-label">Registration Number</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>

                            <!-- Admin Fields -->
                            <div id="adminFields" style="display: none;">
                                <div class="mb-3">
                                    <label class="form-label">NIC Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">User Role</label>
                                <select class="form-select" id="userRole">
                                    <option value="student">Student</option>
                                    <option value="admin">Administrator</option>
                                    <option value="super_admin">Super Administrator</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option value="">Select Department</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="engineering">Engineering</option>
                            <option value="business">Business</option>
                            <option value="arts">Arts</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="sendWelcomeEmail" checked>
                        <label class="form-check-label" for="sendWelcomeEmail">Send welcome email</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addUserForm" class="btn btn-primary">Add User</button>
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
        } else {
            $("#studentFields").hide();
            $("#adminFields").show();
        }
    });

    // User search and filter
    $("#userSearch").on("keyup", function() {
        const searchText = $(this).val().toLowerCase();
        $("tbody tr").each(function() {
            const text = $(this).text().toLowerCase();
            $(this).toggle(text.includes(searchText));
        });
    });

    $("#roleFilter, #statusFilter").on("change", function() {
        // Filter logic would be implemented here
        console.log("Filter changed");
    });

    // Add user form
    $("#addUserForm").on("submit", function(e) {
        e.preventDefault();
        
        const submitBtn = $(this).find("button[type=\'submit\']");
        submitBtn.prop("disabled", true).html(\'<span class="spinner-border spinner-border-sm" role="status"></span> Adding...\');

        setTimeout(() => {
            alert("User added successfully!");
            $("#addUserModal").modal("hide");
            submitBtn.prop("disabled", false).html("Add User");
        }, 1500);
    });
});
</script>
';

include '../layouts/base.php';
?>