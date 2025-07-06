<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
      
        
        <!-- right content -->
        <div class="twelve wide column">
            <h1>Adopt a Child</h1>

            <!-- Toddlers Section -->
            <h2>Toddlers (0-3 Years)</h2>
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Adoption Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT *, FLOOR(DATEDIFF(CURDATE(), cdob) / 365.25) AS cage FROM children";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $unformatted = $row['cdob'];
                                $formatteddate = date("d-m-Y", strtotime($unformatted));
                                $age = $row['cage'];

                                if ($age >= 0 && $age <= 3) {  // Toddlers 0-3 years
                    ?>

                    <tr>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $formatteddate; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $row['cgender']; ?></td>
                        <td>
                            <button class="ui red button" onclick="alert('Toddlers are not ready for adoption')">Not Ready for Adoption</button>
                        </td>
                    </tr>

                    <?php
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>

            <!-- Children Section -->
            <h2>Children (4-15 Years)</h2>
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Adoption Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Reset result set pointer
                        $result->data_seek(0);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $unformatted = $row['cdob'];
                                $formatteddate = date("d-m-Y", strtotime($unformatted));
                                $age = $row['cage'];

                                if ($age >= 4 && $age <= 15) {  // Children 4-15 years
                    ?>

                    <tr>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $formatteddate; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $row['cgender']; ?></td>
                        <td>
                            <a class="ui green button" href="adopt-form.php?cid=<?php echo $row['cid']; ?>">Adopt</a>
                        </td>
                    </tr>

                    <?php
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>

        </div>

    </div>

</div>

<?php include './components/footer.php'; ?>
