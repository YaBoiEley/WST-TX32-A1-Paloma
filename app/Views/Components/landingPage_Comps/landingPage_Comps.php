<style>

@font-face {
    font-family: 'Footlight MT Light';
    src: url('assets/fonts/FTLTLT.TTF') format('truetype');
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.navbar-brand {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color: #04E0D8;
}

.navbar-brand:hover {
    color: #aaf8ca;
}

.nav-link {
    font-family: 'Exo', sans-serif;
    font-weight: 400;
    color: #04E0D8;
}

.nav-link:hover {
    color: #aaf8ca;
}

.navbar-custom {
    background-color: #14142c;
}

p {
    text-align: justify;
    color: #ffffff;
}

body {
    font-family: sans-serif;
    font-size: 16px;
}

.cyan {
    color: #04E0D8;
}

.darkblue {
    background-color: #1c1c3c;
    color: white;
    font-family: 'Catamaran', sans-serif;
}

.center {
    text-align: center;
}

.hero-section {
    background-color: #dc143c;
    padding: 20px;
    margin-bottom: 20px;
}

.services-section {
    background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background to ensure text readability */
    padding: 20px;
    margin-bottom: 20px;
    color: white; /* Ensure text is readable on the background image */
    position: relative;
    overflow: hidden; /* Ensure the pseudo-element does not overflow */
}

/* Our Services */
.bg-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('assets/images/crewAndPilot.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: filter 0.3s ease; /* Smooth transition for the blur effect */
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}

.bg-image:hover::before {
    filter: blur(10px); /* Increase blur effect on hover */
}

/* Promotions */
.bg-image2::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('assets/images/emiratesPromotions.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: filter 0.3s ease; /* Smooth transition for the blur effect */
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}

.bg-image2:hover::before {
    filter: blur(10px); /* Increase blur effect on hover */
}

/* Customer Testimonials */
.bg-image3::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('assets/images/emiTestimonials.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: filter 0.3s ease; /* Smooth transition for the blur effect */
    z-index: -1; /* Ensure the pseudo-element is behind the content */
}

.bg-image3:hover::before {
    filter: blur(10px); /* Increase blur effect on hover */
}

.additional-info-section {
    background-color: #dc143c;
    padding: 20px;
    margin-bottom: 20px;
}

.footlight-font {
    font-family: 'Footlight MT Light', sans-serif;
}
</style>