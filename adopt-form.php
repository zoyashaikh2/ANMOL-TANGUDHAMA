<?php
include './components/header.php';

// Check if a valid child ID is provided
if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    
    // Fetch child details from the database using the child ID
    $sql = "SELECT * FROM children WHERE cid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cid);
    $stmt->execute();
    $result = $stmt->get_result();
    $child = $result->fetch_assoc();
    
    if (!$child) {
        echo "<p>Child not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adopter_name = $_POST['adopter_name'];
    $adopter_email = $_POST['adopter_email'];
    $adopter_phone = $_POST['adopter_phone'];
    $adopter_address = $_POST['adopter_address'];
    
    // Insert adoption request into the database (assuming an 'adoptions' table exists)
    $sql = "INSERT INTO adoptions (cid, adopter_name, adopter_email, adopter_phone, adopter_address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $cid, $adopter_name, $adopter_email, $adopter_phone, $adopter_address);
    
    if ($stmt->execute()) {
        echo "<p>Thank you, $adopter_name! Your adoption request for " . $child['cname'] . " has been submitted successfully.</p>";
    } else {
        echo "<p>There was an error processing your request. Please try again.</p>";
    }
    
    exit;
}
?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php' ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
   
        
        <!-- right content -->
        <div class="twelve wide column">
            <h1>Adopt <?php echo htmlspecialchars($child['cname']); ?></h1>

            <form class="ui form" method="POST" action="">
                <div class="field">
                    <label>Child Name</label>
                    <input type="text" value="<?php echo htmlspecialchars($child['cname']); ?>" disabled>
                </div>
                
                <div class="field">
                    <label>Your Name</label>
                    <input type="text" name="adopter_name" required>
                </div>
                
                <div class="field">
                    <label>Your Email</label>
                    <input type="email" name="adopter_email" required>
                </div>
                
                <div class="field">
                    <label>Your Phone Number</label>
                    <input type="text" name="adopter_phone" required>
                </div>
                
                <div class="field">
                    <label>Your Address</label>
                    <textarea name="adopter_address" required></textarea>
                </div>

                <button class="ui primary button" type="submit">Submit Adoption Request</button>
            </form>
        </div>
    </div>
</div>

<?php include './components/footer.php'; ?>

