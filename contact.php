<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1>Contact Us</h1>
    <p>If you have any questions, please don't hesitate to reach out to us.</p>
    <form action="process-contact.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
