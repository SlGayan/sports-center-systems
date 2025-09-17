<?php
$content = '
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <!-- Header -->
            <div class="dashboard-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="h2 mb-1"><i class="bi bi-graph-up me-2"></i>Reports & Analytics</h1>
                        <p class="mb-0 opacity-75">System performance and usage reports</p>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light">
                            <i class="bi bi-download me-2"></i>Export All
                        </button>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#generateReportModal">
                            <i class="bi bi-plus-circle me-2"></i>Generate Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Cards -->
    <div class="row mb-4">
        <div class="col-6 col-md-3 mb-3">
            <div class="card stat-card bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="h4 mb-1">42</div>
                            <div class="small">Active Reservations</div>
                        </div>
                        <div class="icon-container">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="card stat-card bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="h4 mb-1">128</div>
                            <div class="small">Available Items</div>
                        </div>
                        <div class="icon-container">
                            <i class="bi bi-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="card stat-card bg-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="h4 mb-1">7</div>
                            <div class="small">Maintenance Needed</div>
                        </div>
                        <div class="icon-container">
                            <i class="bi bi-tools"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="card stat-card bg-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="h4 mb-1">15</div>
                            <div class="small">Today\'s Checkouts</div>
                        </div>
                        <div class="icon-container">
                            <i class="bi bi-arrow-up-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Tabs -->
    <ul class="nav nav-tabs mb-4" id="reportTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="usage-tab" data-bs-toggle="tab" data-bs-target="#usage">
                <i class="bi bi-graph-up me-2"></i>Usage Analytics
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="equipment-tab" data-bs-toggle="tab" data-bs-target="#equipment">
                <i class="bi bi-tools me-2"></i>Equipment Reports
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="user-tab" data-bs-toggle="tab" data-bs-target="#user">
                <i class="bi bi-people me-2"></i>User Activity
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="financial-tab" data-bs-toggle="tab" data-bs-target="#financial">
                <i class="bi bi-cash-coin me-2"></i>Financial Reports
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="reportTabContent">
        <!-- Usage Analytics -->
        <div class="tab-pane fade show active" id="usage">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Usage Analytics</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <h6>Weekly Reservation Trend</h6>
                            <div class="chart-container">
                                <canvas id="weeklyReservationChart"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h6>Popular Equipment</h6>
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Basketball
                                    <span class="badge bg-primary rounded-pill">42 uses</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Soccer Ball
                                    <span class="badge bg-primary rounded-pill">38 uses</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Tennis Racket
                                    <span class="badge bg-primary rounded-pill">25 uses</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Yoga Mat
                                    <span class="badge bg-primary rounded-pill">18 uses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6>Peak Usage Hours</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Time Slot</th>
                                            <th>Reservations</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2:00 PM - 4:00 PM</td>
                                            <td>45</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" style="width: 75%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4:00 PM - 6:00 PM</td>
                                            <td>38</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-primary" style="width: 63%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10:00 AM - 12:00 PM</td>
                                            <td>28</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-info" style="width: 47%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Department Usage</h6>
                            <div class="chart-container">
                                <canvas id="departmentUsageChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Equipment Reports -->
        <div class="tab-pane fade" id="equipment">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Equipment Reports</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Equipment Utilization</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Total Items</th>
                                            <th>In Use</th>
                                            <th>Utilization</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basketball</td>
                                            <td>15</td>
                                            <td>12</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" style="width: 80%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Soccer</td>
                                            <td>10</td>
                                            <td>8</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tennis</td>
                                            <td>8</td>
                                            <td>5</td>
                                            <td>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-info" style="width: 63%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Maintenance Status</h6>
                            <div class="chart-container">
                                <canvas id="maintenanceStatusChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h6>Equipment Performance</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Equipment</th>
                                            <th>Total Uses</th>
                                            <th>Avg. Rating</th>
                                            <th>Maintenance</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basketball #BKT001</td>
                                            <td>142</td>
                                            <td>4.5/5</td>
                                            <td>2 weeks ago</td>
                                            <td><span class="badge bg-success">Excellent</span></td>
                                        </tr>
                                        <tr>
                                            <td>Soccer Ball #SOC002</td>
                                            <td>98</td>
                                            <td>4.2/5</td>
                                            <td>1 month ago</td>
                                            <td><span class="badge bg-success">Good</span></td>
                                        </tr>
                                        <tr>
                                            <td>Tennis Racket #TEN003</td>
                                            <td>65</td>
                                            <td>3.8/5</td>
                                            <td>3 days ago</td>
                                            <td><span class="badge bg-warning">Needs Check</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- User Activity -->
        <div class="tab-pane fade" id="user">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">User Activity Reports</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Top Users by Activity</h6>
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-semibold">John Doe</div>
                                        <small class="text-muted">ST2024001</small>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">42 reservations</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-semibold">Jane Smith</div>
                                        <small class="text-muted">ST2024002</small>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">38 reservations</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-semibold">Mike Johnson</div>
                                        <small class="text-muted">ST2024003</small>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">25 reservations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>User Engagement</h6>
                            <div class="chart-container">
                                <canvas id="userEngagementChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h6>Recent User Activity</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Activity</th>
                                            <th>Time</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Equipment Return</td>
                                            <td>2:30 PM</td>
                                            <td>Basketball #BKT001</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>New Reservation</td>
                                            <td>1:45 PM</td>
                                            <td>Tennis Racket #TEN003</td>
                                        </tr>
                                        <tr>
                                            <td>Mike Johnson</td>
                                            <td>Equipment Checkout</td>
                                            <td>12:15 PM</td>
                                            <td>Soccer Ball #SOC002</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Reports -->
        <div class="tab-pane fade" id="financial">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Financial Reports</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Revenue Overview</h6>
                            <div class="chart-container">
                                <canvas id="revenueOverviewChart"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Monthly Financials</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Revenue</th>
                                            <th>Expenses</th>
                                            <th>Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>December</td>
                                            <td>$1,250.00</td>
                                            <td>$350.00</td>
                                            <td class="text-success">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td>November</td>
                                            <td>$980.00</td>
                                            <td>$420.00</td>
                                            <td class="text-success">$560.00</td>
                                        </tr>
                                        <tr>
                                            <td>October</td>
                                            <td>$1,150.00</td>
                                            <td>$380.00</td>
                                            <td class="text-success">$770.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h6>Fee Collection Details</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Today</td>
                                            <td>John Doe</td>
                                            <td>Late Fee</td>
                                            <td>$15.00</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>Yesterday</td>
                                            <td>Jane Smith</td>
                                            <td>Damage Fee</td>
                                            <td>$25.00</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dec 14</td>
                                            <td>Mike Johnson</td>
                                            <td>Membership</td>
                                            <td>$50.00</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Initialize charts when the page loads
document.addEventListener(\'DOMContentLoaded\', function() {
    // Weekly Reservation Chart
    const weeklyReservationCtx = document.getElementById(\'weeklyReservationChart\').getContext(\'2d\');
    const weeklyReservationChart = new Chart(weeklyReservationCtx, {
        type: \'line\',
        data: {
            labels: [\'Mon\', \'Tue\', \'Wed\', \'Thu\', \'Fri\', \'Sat\', \'Sun\'],
            datasets: [{
                label: \'Reservations\',
                data: [32, 45, 28, 51, 38, 62, 45],
                backgroundColor: \'rgba(67, 97, 238, 0.1)\',
                borderColor: \'#4361ee\',
                borderWidth: 2,
                tension: 0.3,
                fill: true,
                pointBackgroundColor: \'#4361ee\',
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Department Usage Chart
    const departmentUsageCtx = document.getElementById(\'departmentUsageChart\').getContext(\'2d\');
    const departmentUsageChart = new Chart(departmentUsageCtx, {
        type: \'bar\',
        data: {
            labels: [\'CS\', \'Eng\', \'Bus\', \'Arts\'],
            datasets: [{
                label: \'Usage %\',
                data: [40, 25, 20, 15],
                backgroundColor: [
                    \'rgba(76, 175, 80, 0.8)\',
                    \'rgba(33, 150, 243, 0.8)\',
                    \'rgba(255, 193, 7, 0.8)\',
                    \'rgba(244, 67, 54, 0.8)\'
                ],
                borderColor: [
                    \'rgba(76, 175, 80, 1)\',
                    \'rgba(33, 150, 243, 1)\',
                    \'rgba(255, 193, 7, 1)\',
                    \'rgba(244, 67, 54, 1)\'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Maintenance Status Chart
    const maintenanceStatusCtx = document.getElementById(\'maintenanceStatusChart\').getContext(\'2d\');
    const maintenanceStatusChart = new Chart(maintenanceStatusCtx, {
        type: \'doughnut\',
        data: {
            labels: [\'Good\', \'Fair\', \'Poor\'],
            datasets: [{
                data: [70, 20, 10],
                backgroundColor: [
                    \'rgba(76, 175, 80, 0.8)\',
                    \'rgba(255, 193, 7, 0.8)\',
                    \'rgba(244, 67, 54, 0.8)\'
                ],
                borderColor: [
                    \'rgba(76, 175, 80, 1)\',
                    \'rgba(255, 193, 7, 1)\',
                    \'rgba(244, 67, 54, 1)\'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: \'bottom\'
                }
            },
            cutout: \'70%\'
        }
    });

    // User Engagement Chart
    const userEngagementCtx = document.getElementById(\'userEngagementChart\').getContext(\'2d\');
    const userEngagementChart = new Chart(userEngagementCtx, {
        type: \'pie\',
        data: {
            labels: [\'Active\', \'Regular\', \'Occasional\', \'Inactive\'],
            datasets: [{
                data: [60, 25, 10, 5],
                backgroundColor: [
                    \'rgba(76, 175, 80, 0.8)\',
                    \'rgba(33, 150, 243, 0.8)\',
                    \'rgba(255, 193, 7, 0.8)\',
                    \'rgba(158, 158, 158, 0.8)\'
                ],
                borderColor: [
                    \'rgba(76, 175, 80, 1)\',
                    \'rgba(33, 150, 243, 1)\',
                    \'rgba(255, 193, 7, 1)\',
                    \'rgba(158, 158, 158, 1)\'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: \'bottom\'
                }
            }
        }
    });

    // Revenue Overview Chart
    const revenueOverviewCtx = document.getElementById(\'revenueOverviewChart\').getContext(\'2d\');
    const revenueOverviewChart = new Chart(revenueOverviewCtx, {
        type: \'doughnut\',
        data: {
            labels: [\'Fees\', \'Rentals\', \'Other\'],
            datasets: [{
                data: [70, 20, 10],
                backgroundColor: [
                    \'rgba(76, 175, 80, 0.8)\',
                    \'rgba(255, 193, 7, 0.8)\',
                    \'rgba(244, 67, 54, 0.8)\'
                ],
                borderColor: [
                    \'rgba(76, 175, 80, 1)\',
                    \'rgba(255, 193, 7, 1)\',
                    \'rgba(244, 67, 54, 1)\'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: \'bottom\'
                }
            },
            cutout: \'70%\'
        }
    });

    // Add animation to cards when they come into view
    const cards = document.querySelectorAll(\'.card\');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = \'fadeIn 0.5s ease-out forwards\';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    cards.forEach(card => {
        observer.observe(card);
    });

    // Add tab switching animation
    const tabLinks = document.querySelectorAll(\'[data-bs-toggle="tab"]\');
    tabLinks.forEach(link => {
        link.addEventListener(\'click\', function() {
            const target = document.querySelector(this.getAttribute(\'data-bs-target\'));
            target.querySelectorAll(\'.card\').forEach(card => {
                card.style.animation = \'none\';
                setTimeout(() => {
                    card.style.animation = \'fadeIn 0.5s ease-out forwards\';
                }, 50);
            });
        });
    });
});
</script>
';

// Include your layout file
include '../layouts/base.php';
?>