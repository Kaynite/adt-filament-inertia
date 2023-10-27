<template>
    <footer class="position-relative">
        <a href="#hero-sec" class="top-arrow position-absolute">
            <span>Back To Top</span>
            <img src="@images/top-arrow.svg" />
        </a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mb-3">
                    <img src="@images/Footer-Logo.svg" class="img-fluid footer-logo" />
                    <div class="socials gap-16 mt-40 d-flex align-items-center">
                        <a href="https://www.facebook.com/arabdtco">
                            <img src="@images/Facebook2.svg" /></a>
                        <a href="https://www.linkedin.com/company/arabdt/mycompany/">
                            <img src="@images/white-linked-in.svg" /></a>
                        <a href="#">
                            <img src="@images/Instagram1.svg" /></a>
                        <a href="#">
                            <img src="@images/Twitter1.svg" /></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="lin-title">Quick Links</div>
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <ul>
                                <li><Link :href="route('home')">Home</Link></li>
                                <li><Link :href="route('pages.history')">ArabDT History</Link></li>
                                <li><Link :href="route('team.index')">Team</Link></li>
                                <li><Link :href="route('clients.index')">Clients</Link></li>
                                <li><Link :href="route('portfolio.index')">Portfolio</Link></li>
                                <li><Link :href="route('blog.index')">Blog</Link></li>
                                <li><Link :href="route('pages.gallery')">Gallery</Link></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-6">
                            <ul>
                                <li><Link :href="route('events.index')">News & Events</Link></li>
                                <li><Link href="career-openings.html">Career Openings</Link></li>
                                <li><Link href="Internship-openings.html">Intership Openings</Link></li>
                                <li><Link :href="route('pages.talent')">Apply As Talent</Link></li>
                                <li><Link :href="route('job-fairs.index')">Job Fairs</Link></li>
                                <li><Link :href="route('pages.contact')">Contact Us</Link></li>
                                <li><Link href="#quotation-req">Request A Quote</Link></li>
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
                            <img src="@images/Location.svg" />
                            <span>Egypt-5th District, New Cairo, Cairo, Egypt</span>
                        </li>
                        <li>
                            <img src="@images/Mail.svg" />
                            <span>Info@arabdt.com</span>
                        </li>
                        <li>
                            <img src="@images/Phone.svg" />
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
            <img src="@images/footer-circles.svg" class="img-fluid d-none d-lg-block" />
        </div>
    </footer>
</template>
