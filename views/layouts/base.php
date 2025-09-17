<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Sports Center Management System</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Custom Campus Theme -->
    <link href="../../assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation will be included here -->
    <?php include_once '../partials/navbar.php'; ?>
    
    <main class="container-fluid py-4">
        <?php echo $content; ?>
    </main>

    <!-- Footer will be included here -->
    <?php include_once '../partials/footer.php'; ?>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="/assets/js/main.js"></script>
</body>
</html>