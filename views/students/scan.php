<?php
$content = '
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="h2 mb-2">QR Scanner</h1>
            <p class="text-muted">Scan equipment QR codes to checkout or return items</p>
        </div>

        <!-- Scanner Container -->
        <div class="card">
            <div class="card-body text-center p-4">
                <!-- Scanner Viewport -->
                <div id="scanner-container" class="position-relative">
                    <video id="qr-video" class="rounded w-100" style="max-width: 400px; height: 300px; object-fit: cover;" playsinline></video>
                    
                    <!-- Scanner Overlay -->
                    <div class="scanner-overlay position-absolute top-0 start-0 w-100 h-100">
                        <div class="scanner-frame position-absolute"></div>
                        <div class="scanner-laser position-absolute"></div>
                    </div>
                    
                    <!-- Permission Message -->
                    <div id="permission-message" class="alert alert-info mt-3 d-none">
                        <i class="bi bi-camera-video me-2"></i>
                        Please allow camera access to use the scanner
                    </div>
                </div>

                <!-- Manual Entry Fallback -->
                <div class="mt-4">
                    <button id="manual-entry-btn" class="btn btn-outline-secondary">
                        <i class="bi bi-keyboard me-2"></i>Enter Code Manually
                    </button>
                </div>

                <!-- Manual Entry Modal (Hidden) -->
                <div class="modal fade" id="manualEntryModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Enter QR Code Manually</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="manualCode" class="form-label">QR Code</label>
                                    <input type="text" class="form-control" id="manualCode" 
                                           placeholder="Enter the 6-digit code" maxlength="6">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="submitManualCode">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Recent Transactions</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge bg-success me-2">CHECKOUT</span>
                            Basketball #BKT001
                        </div>
                        <small class="text-muted">2 hours ago</small>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge bg-info me-2">RETURN</span>
                            Soccer Ball #SOC002
                        </div>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Section -->
        <div class="text-center mt-4">
            <button class="btn btn-outline-info btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#helpSection">
                <i class="bi bi-question-circle me-2"></i>Need Help?
            </button>
            
            <div class="collapse mt-2" id="helpSection">
                <div class="card card-body">
                    <h6>How to use the QR scanner:</h6>
                    <ul class="text-start small">
                        <li>Ensure good lighting on the QR code</li>
                        <li>Hold steady about 6-12 inches from the code</li>
                        <li>Allow camera access when prompted</li>
                        <li>Use manual entry if scanning fails</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
';

// Include the base layout
include '../layouts/base.php';
?>

<!-- QR Scanner JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@ericblade/quagga2@1.8.1/dist/quagga.min.js"></script>
<script>
$(document).ready(function() {
    const video = document.getElementById('qr-video');
    let scanner = null;
    let isScanning = false;

    // Initialize scanner
    async function initScanner() {
        try {
            // Check camera permissions
            const stream = await navigator.mediaDevices.getUserMedia({ 
                video: { 
                    facingMode: 'environment' 
                } 
            });
            
            video.srcObject = stream;
            video.play();
            
            // Hide permission message
            $('#permission-message').addClass('d-none');
            
            // Initialize Quagga QR scanner
            scanner = Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: video,
                    constraints: {
                        width: 400,
                        height: 300,
                        facingMode: "environment"
                    }
                },
                decoder: {
                    readers: ["qr_code_reader"]
                }
            }, function(err) {
                if (err) {
                    console.error('Scanner init error:', err);
                    showError('Scanner initialization failed');
                    return;
                }
                
                Quagga.start();
                isScanning = true;
                
                // Handle successful scans
                Quagga.onDetected(function(result) {
                    if (result.codeResult) {
                        handleScannedCode(result.codeResult.code);
                    }
                });
            });
            
        } catch (error) {
            console.error('Camera error:', error);
            $('#permission-message').removeClass('d-none');
            showError('Camera access denied or unavailable');
        }
    }

    // Handle scanned QR code
    function handleScannedCode(code) {
        if (!isScanning) return;
        
        // Stop scanning temporarily
        Quagga.stop();
        isScanning = false;
        
        // Visual feedback
        showScanSuccess();
        
        // Process the code (in real app, this would be an API call)
        setTimeout(() => {
            processQRCode(code);
        }, 1000);
    }

    // Process QR code (simulated)
    function processQRCode(code) {
        // Show loading state
        showLoading('Processing QR code...');
        
        // Simulate API call
        setTimeout(() => {
            // Determine if checkout or return based on code pattern
            const isCheckout = code.startsWith('CHK');
            const isReturn = code.startsWith('RET');
            
            if (isCheckout) {
                showSuccess('Checkout successful! Equipment borrowed.');
            } else if (isReturn) {
                showSuccess('Return successful! Thank you.');
            } else {
                showError('Invalid QR code. Please try again.');
                // Resume scanning
                Quagga.start();
                isScanning = true;
            }
        }, 1500);
    }

    // Manual entry handling
    $('#manual-entry-btn').click(function() {
        $('#manualEntryModal').modal('show');
    });

    $('#submitManualCode').click(function() {
        const code = $('#manualCode').val().trim();
        if (code.length === 6) {
            $('#manualEntryModal').modal('hide');
            handleScannedCode(code);
        } else {
            alert('Please enter a valid 6-digit code');
        }
    });

    // Visual feedback functions
    function showScanSuccess() {
        $('.scanner-laser').addClass('scan-success');
        setTimeout(() => {
            $('.scanner-laser').removeClass('scan-success');
        }, 1000);
    }

    function showLoading(message) {
        // Would show a loading spinner in real implementation
        console.log('Loading:', message);
    }

    function showSuccess(message) {
        alert('✅ ' + message);
        // Resume scanning after success
        setTimeout(() => {
            Quagga.start();
            isScanning = true;
        }, 2000);
    }

    function showError(message) {
        alert('❌ ' + message);
        // Resume scanning after error
        Quagga.start();
        isScanning = true;
    }

    // Initialize scanner when page loads
    initScanner();

    // Cleanup when leaving page
    $(window).on('beforeunload', function() {
        if (scanner) {
            Quagga.stop();
        }
        if (video.srcObject) {
            video.srcObject.getTracks().forEach(track => track.stop());
        }
    });
});
</script>

<style>
/* Scanner overlay styles */
.scanner-overlay {
    pointer-events: none;
}

.scanner-frame {
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    border: 2px solid #00ff00;
    border-radius: 10px;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 0 4000px rgba(0, 0, 0, 0.3);
}

.scanner-laser {
    top: 50%;
    left: 50%;
    width: 200px;
    height: 2px;
    background: #00ff00;
    transform: translate(-50%, -50%);
    animation: scanLaser 2s infinite;
}

.scanner-laser.scan-success {
    background: #00ff00;
    animation: scanSuccess 1s;
}

@keyframes scanLaser {
    0% { top: 30%; }
    50% { top: 70%; }
    100% { top: 30%; }
}

@keyframes scanSuccess {
    0% { opacity: 1; height: 2px; }
    50% { opacity: 0.5; height: 100px; }
    100% { opacity: 0; height: 2px; }
}

/* Mobile optimizations */
@media (max-width: 576px) {
    .scanner-frame {
        width: 150px;
        height: 150px;
    }
    
    #qr-video {
        height: 250px;
    }
}
</style>