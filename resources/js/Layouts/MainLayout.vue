<template>
    <slot />
    <!--Footer -->
    <footer class="position-relative">
        <a href="#hero-sec" class="top-arrow position-absolute">
            <span>Back To Top</span>
            <img src="../../images/top-arrow.svg" />
        </a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mb-3">
                    <img src="../../images/Footer-Logo.svg" class="img-fluid footer-logo" />
                    <div class="socials gap-16 mt-40 d-flex align-items-center">
                        <a href="https://www.facebook.com/arabdtco">
                            <img src="../../images/Facebook2.svg" /></a>
                        <a href="https://www.linkedin.com/company/arabdt/mycompany/">
                            <img src="../../images/white-linked-in.svg" /></a>
                        <a href="#">
                            <img src="../../images/Instagram1.svg" /></a>
                        <a href="#">
                            <img src="../../images/Twitter1.svg" /></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="lin-title">Quick Links</div>
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="aboutHistory.html">ArabDT History</a></li>
                                <li><a href="aboutTeam.html">Team</a></li>
                                <li><a href="aboutClients.html">Clients</a></li>
                                <li><a href="Portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-6">
                            <ul>
                                <li><a href="news-events-list.html">News & Events</a></li>
                                <li><a href="career-openings.html">Career Openings</a></li>
                                <li><a href="Internship-openings.html">Intership Openings</a></li>
                                <li><a href="Apply-As-Talent.html">Apply As Talent</a></li>
                                <li><a href="Job Fairs-list.html">Job Fairs</a></li>
                                <li><a href="contact us.html">Contact Us</a></li>
                                <li><a href="#quotation-req">Request A Quote</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <div class="lin-title">Services</div>
                    <ul>
                        <li><a href="#">Professional Services</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Consulting</a></li>
                        <li><a href="#">Outsourcing</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="lin-title">Get In Touch</div>
                    <ul>
                        <li>
                            <img src="../../images/Location.svg" />
                            <span>Egypt-5th District, New Cairo, Cairo, Egypt</span>
                        </li>
                        <li>
                            <img src="../../images/Mail.svg" />
                            <span>Info@arabdt.com</span>
                        </li>
                        <li>
                            <img src="../../images/Phone.svg" />
                            <span>(+20)2563 5967</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <div class="copy-right text-center">
            ArabDT &copy; 2023, All Rights Reserved
        </div>
        <div class="img-container-footer position-absolute">
            <img src="../../images/footer-circles.svg" class="img-fluid d-none d-lg-block" />
        </div>
    </footer>
</template>
