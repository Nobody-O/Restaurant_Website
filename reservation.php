<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1>Make a Reservation</h1>
    <form action="process-reservation.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests</label>
            <input type="number" class="form-control" id="guests" name="guests" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Reservation</button>
    </form>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
