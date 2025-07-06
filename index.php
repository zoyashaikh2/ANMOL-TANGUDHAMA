<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Right content -->
        <div class="twelve wide column centered-content">
            <h2 class="animated-header">ANMOL TANGUDHAMA</h2>
            <h3 class="animated-subheader">Child Care & Development Foundation</h3>
            <p><strong>CCDF</strong> is a non-profit, non-government and voluntary organization committed to the care & development and voluntary organization committed to the care and development of the underprivileged children.</p>
            <p><strong>CCDF is a group</strong> of qualified, hardworking, dedicated, like-minded people trying to make a difference in the life of the underrepresented, disadvantaged and marginalized sections of the society. It has been established to work as a platform to channelize and make optimum use of the resources and infrastructure available and people's desire to give back to society a bit of what they owe to it.</p>
            <p><strong>It is our effort</strong> at CCDF to guide and motivate people to use their resources constructively in changing the lives of these street children.</p>
            <p><strong>We are working</strong> in the field of education and overall development of the destitute children by providing them with an opportunity to realize their full potentials and lead a dignified and respectable life.</p>

            <div class="ui medium center images image-gallery">
                <img class="ui medium rounded image animated-image" src="./img/children-1.jpg">
                <img class="ui medium rounded image animated-image" src="./img/children-2.jpg">
                <img class="ui medium rounded image animated-image" src="./img/children-4.jpg">
            </div>

            <span class="p-20"></span>
        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<!-- Embedded CSS -->
<style>
    body {
        font-size: 1.2em; /* Increased font size */
        font-weight: bold; /* Make all text bold */
        background-image: url("img/orphan3.jpg");
        background-size: cover; /* Ensure the background covers the entire screen */
        background-position: center; /* Center the background image */
        background-attachment: fixed; /* Keep the background fixed during scrolling */
        background-repeat: no-repeat; /* Avoid repeating the background image */
        margin: 0;
        padding: 0;
        text-align: center;
        color: black; /* Text color remains black */
    }

    .ui.container {
        text-align: center;
    }

    .centered-content {
        text-align: center;
        margin-left: 10%;
    }

    .animated-header {
        animation: fadeIn 1.5s ease-in-out;
        text-align: center;
        font-size: 2.5em; /* Increased font size */
        margin-left: 10%; /* Shift the header slightly to the right */
        color: black; /* Heading color remains black */
    }

    .animated-subheader {
        animation: slideInLeft 1.5s ease-in-out;
        text-align: center;
        font-size: 2em; /* Increased font size */
        margin-left: 10%; /* Shift the subheader slightly to the right */
        color: black; /* Subheading color remains black */
    }

    .image-gallery {
        display: flex;
        justify-content: center;
        gap: 25px;
        padding: 20px 0;
        margin-left: 25%; /* Shift the images slightly to the right */
    }

    .animated-image {
        width: 410px;
        height: 180px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .animated-image:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    p {
        line-height: 1.4;
        font-size: 1.4rem; /* Increased font size */
        color: black; /* Text color remains black */
        text-align: left; /* Slightly align text to the left */
        margin-left: 20%; /* Slightly offset to the right */
    }

    h2, h3 {
        color: black; /* Heading color remains black */
        margin-bottom: 10px;
    }
</style>
