<?php
// Get equipment ID from URL
$equipment_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// In real implementation, this would come from MySQL
$equipment = [
    'id' => $equipment_id,
    'name' => 'Basketball',
    'category' => 'basketball',
    'description' => 'Official size basketball for indoor/outdoor use',
    'image' => 'basketball.jpg',
    'max_borrow_hours' => 4
];

$content = '
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2">Reserve Equipment</h1>
            <a href="./equipment.php" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i>Back to Browse
            </a>
        </div>

        <!-- Equipment Summary -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="/assets/images/equipment/' . $equipment['image'] . '" 
                             alt="' . $equipment['name'] . '" 
                             class="img-fluid rounded">
                    </div>
                    <div class="col-9">
                        <h5 class="card-title">' . $equipment['name'] . '</h5>
                        <p class="card-text text-muted">' . $equipment['description'] . '</p>
                        <span class="badge bg-primary">' . ucfirst($equipment['category']) . '</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Form -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Reservation Details</h5>
            </div>
            <div class="card-body">
                <form id="reservationForm" action="./reservations.php" method="POST">
                    <input type="hidden" name="equipment_id" value="' . $equipment_id . '">
                    
                    <!-- Date Selection -->
                    <div class="mb-3">
                        <label for="reservationDate" class="form-label">Date</label>
                        <input type="date" 
                               class="form-control" 
                               id="reservationDate" 
                               name="reservation_date"
                               min="' . date('Y-m-d') . '"
                               required>
                        <div class="form-text">Select the date you want to borrow the equipment</div>
                    </div>

                    <!-- Time Slot Selection -->
                    <div class="mb-3">
                        <label class="form-label">Time Slot</label>
                        <div class="row" id="timeSlots">
                            <!-- Time slots will be populated by JavaScript -->
                        </div>
                        <div class="form-text">Select ' . $equipment['max_borrow_hours'] . ' hour time slot</div>
                    </div>

                    <!-- Duration Selection -->
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <select class="form-select" id="duration" name="duration" required>
                            <option value="1">1 hour</option>
                            <option value="2" selected>2 hours</option>
                            <option value="4">4 hours</option>
                        </select>
                    </div>

                    <!-- Purpose Field -->
                    <div class="mb-3">
                        <label for="purpose" class="form-label">Purpose (Optional)</label>
                        <textarea class="form-control" 
                                  id="purpose" 
                                  name="purpose" 
                                  rows="2"
                                  placeholder="What will you be using this for? (e.g., practice, game, class)"></textarea>
                    </div>

                    <!-- Terms Agreement -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms" name="agree_terms" required>
                        <label class="form-check-label" for="agreeTerms">
                            I agree to the <a href="../../commingSoon.php" target="_blank">terms and conditions</a> and 
                            understand that I am responsible for this equipment
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-calendar-check me-2"></i>Confirm Reservation
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Availability Calendar Preview -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Availability This Week</h6>
            </div>
            <div class="card-body">
                <div class="row text-center small">
                    <div class="col">
                        <div>Mon</div>
                        <div class="badge bg-success">Available</div>
                    </div>
                    <div class="col">
                        <div>Tue</div>
                        <div class="badge bg-warning">Limited</div>
                    </div>
                    <div class="col">
                        <div>Wed</div>
                        <div class="badge bg-success">Available</div>
                    </div>
                    <div class="col">
                        <div>Thu</div>
                        <div class="badge bg-danger">Full</div>
                    </div>
                    <div class="col">
                        <div>Fri</div>
                        <div class="badge bg-success">Available</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';

// Include the base layout
include '../layouts/base.php';
?>

<!-- JavaScript for Time Slot Selection -->
<script>
$(document).ready(function() {
    // Generate time slots (8 AM to 8 PM)
    function generateTimeSlots() {
        const slotsContainer = $("#timeSlots");
        slotsContainer.empty();
        
        for (let hour = 8; hour <= 20; hour++) {
            const startTime = hour.toString().padStart(2, '0') + ':00';
            const endTime = (hour + 2).toString().padStart(2, '0') + ':00';
            
            const slotHtml = `
            <div class="col-6 col-md-4 mb-2">
                <input type="radio" 
                       class="btn-check" 
                       name="time_slot" 
                       id="slot${hour}" 
                       value="${startTime}"
                       required>
                <label class="btn btn-outline-primary w-100" for="slot${hour}">
                    ${startTime} - ${endTime}
                </label>
            </div>
            `;
            
            slotsContainer.append(slotHtml);
        }
    }

    // Initialize time slots
    generateTimeSlots();

    // Date validation
    $("#reservationDate").on("change", function() {
        const selectedDate = new Date($(this).val());
        const today = new Date();
        
        if (selectedDate < today) {
            alert("Please select a future date");
            $(this).val("");
        }
        
        // In real implementation: Check availability for selected date
        // and disable unavailable time slots
    });

    // Form submission handling
    $("#reservationForm").on("submit", function(e) {
        e.preventDefault();
        
        // Basic validation
        const date = $("#reservationDate").val();
        const timeSlot = $("input[name='time_slot']:checked").val();
        
        if (!date || !timeSlot) {
            alert("Please select both date and time slot");
            return false;
        }

        // Show loading state
        const submitBtn = $(this).find("button[type='submit']");
        submitBtn.prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...');

        // Simulate form submission
        setTimeout(() => {
            alert("Reservation successful! You will receive a confirmation email.");
            window.location.href = "./dashboard.php";
        }, 1500);
    });
});
</script>