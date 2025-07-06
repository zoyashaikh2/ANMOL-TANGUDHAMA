<?php

// Staff details array
$staff_members = [
    [
        "name" => "ANKITA PATIL",
        "position" => "Program Coordinator",
        "program" => "AAKAR - the first step",
        "description" => "A **Program Coordinator** manages and oversees the execution of various initiatives in an orphanage to ensure effective support and development for children.",
        "image" => "1.jpg"
    ],
    [
        "name" => "JANE SMITH",
        "position" => "Food Distribution Manager",
        "program" => "AHAR APURTI",
        "description" => "To distribute food to the underprivileged, downtrodden, and marginalized people especially children from the weaker sections of society.",
        "image" => "2.jpg"
    ],
    [
        "name" => "SHRUTI KAMAT",
        "position" => "Education Counselor",
        "program" => "AVSAR - a chance",
        "description" => "This program has been designed to assist the meritorious children of the underprivileged class in getting admission in reputed public schools for quality education under EWS quota.",
        "image" => "3.jpg"
    ],
    [
        "name" => "RAGHAV JUYAL",
        "position" => "Coaching Instructor",
        "program" => "Lakshya",
        "description" => "To provide coaching classes for 6-12 class students of the economically weaker sections by dedicated and qualified staff. It has been designed keeping in mind the requirement of talented students who failed to afford expensive coaching being given at private coaching centers and therefore tag behind and remain unable to fulfill their dream of higher education in prestigious institutions.",
        "image" => "4.jpg"
    ],
    [
        "name" => "MAHESH MISHRA",
        "position" => "Change Motivator",
        "program" => "PARIVARAN - change of direction",
        "description" => "The program is meant to bring about positive changes in the life of street children by convincing and motivating them and their parents for the education of their children and helping them in their school admission and other financial assistance if required.",
        "image" => "5.jpg"
    ],
    [
        "name" => "AMIT SHARMA",
        "position" => "Project Manager",
        "program" => "UPHAAR - gift a smile",
        "description" => "This project aims to bridge the gap between underprivileged street children and their counterparts. This provides you with an opportunity to put to good use the clothes or toys your child has outgrown.",
        "image" => "6.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center; /* Center the heading */
            margin-bottom: 20px;
        }

        .staff-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .staff-member {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }

        .staff-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .name {
            font-size: 1.1em;
            font-weight: bold;
            margin-top: 10px;
        }

        .program-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }

        .position {
            color: #555;
            margin-bottom: 10px;
        }

        .description {
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Staff Details and Programs</h1>
    <div class="staff-container">
        <?php foreach ($staff_members as $staff) : ?>
            <div class="staff-member">
                <img src="images/<?php echo $staff['image']; ?>" alt="<?php echo $staff['name']; ?>">
                <div class="name"><?php echo $staff['name']; ?></div>
                <div class="program-title"><?php echo $staff['program']; ?></div>
                <div class="position"><?php echo $staff['position']; ?></div>
                <div class="description"><?php echo $staff['description']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
