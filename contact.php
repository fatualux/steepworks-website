<?php
require_once 'includes/config.php';
$page_title = 'Contact Us - Steep Works Construction';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')) : '';
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8')) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8')) : '';
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // In a real application, you would send an email here
        // For now, we'll just set a success message
        $success = true;
        
        // You would typically have something like this:
        /*
        $to = SITE_EMAIL;
        $subject = "New Contact Form Submission from $name";
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Phone: $phone\n\n";
        $email_message .= "Message:\n$message";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        if (mail($to, $subject, $email_message, $headers)) {
            $success = true;
        } else {
            $error = 'There was a problem sending your message. Please try again later.';
        }
        */
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="contact-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-4">Get In Touch</h1>
                    <p class="lead mb-5">Have questions about our services or want to discuss your next project? We'd love to hear from you.</p>
                    
                    <?php if ($success): ?>
                        <div class="alert alert-success">
                            Thank you for your message! We'll get back to you soon.
                        </div>
                    <?php elseif ($error): ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>
                    
                    <form id="contactForm" method="POST" action="contact.php" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                
                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                    <div class="contact-info">
                        <h2 class="h4 mb-4">Contact Information</h2>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h3 class="h6">Address</h3>
                                <p class="mb-0">Christchurch, New Zealand, 8022</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h3 class="h6">Email</h3>
                                <p class="mb-0">projects@steepworks.co.nz</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fas fa-phone fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h3 class="h6">Phone</h3>
                                <p class="mb-0">+64 3 123 4567</p>
                            </div>
                        </div>
                        
                        <div class="social-links mt-5">
                            <h3 class="h6 mb-3">Follow Us</h3>
                            <a href="https://www.facebook.com/SteepWorks" target="_blank" class="me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="me-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1445.3993850722726!2d172.6361566580459!3d-43.5309828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318f9b6f4d1e0d%3A0x2a5f311d2a1e9f3d!2sChristchurch%2C%20New%20Zealand!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation
        (function () {
            'use strict'
            
            var forms = document.querySelectorAll('.needs-validation')
            
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
