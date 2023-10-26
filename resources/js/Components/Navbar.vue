<script setup lang="ts">
import MenuItem from '@/Components/MenuItem.vue';
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <Link class="navbar-brand" :href="route('home')">
            <img src="@images/Layer1.svg" alt="logo">
            </Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav gap-16 ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('home')" :class="{ 'active': $page.component === 'Home' }">
                            Home
                        </Link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" :class="{'active': ['Team/Index', 'Pages/History', 'Clients/Index'].includes($page.component)}">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <Link class="dropdown-item" :href="route('pages.history')">
                                <img src="@images/arab-history-icon-nav.svg" alt="" class="m-2">
                                ArabDT History
                                </Link>
                            </li>

                            <li>
                                <Link class="dropdown-item" :href="route('team.index')">
                                <img src="@images/arab-team-icon-nav.svg" alt="" class="m-2">
                                Team
                                </Link>
                            </li>
                            <li>
                                <Link class="dropdown-item" :href="route('clients.index')">
                                <img src="@images/arab-clients-icon-nav.svg" alt="" class="m-2">
                                Clients
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"> <img src="@images/arab-prof-icon-nav.svg" alt=""
                                        class="m-2">
                                    Professional Services</a></li>
                            <li><a class="dropdown-item" href="#"><img src="@images/arab-prod-icon-nav.svg" alt=""
                                        class="m-2">Products</a></li>
                            <li><a class="dropdown-item" href="#"><img src="@images/arab-cons-icon-nav.svg" alt=""
                                        class="m-2">Consultation</a></li>
                            <li><a class="dropdown-item" href="#"><img src="@images/arab-out-icon-nav.svg" alt=""
                                        class="m-2">Outsourcing</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <Link class="nav-link" :href="route('portfolio.index')" :class="{ 'active': $page.component === 'Portfolio/Index' }">
                            Portfolio
                        </Link>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Life At ArabDT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <Link class="dropdown-item" :href="route('events.index')">
                                    <img src="@images/arab-news-icon-nav.svg" class="m-2">
                                    News & Events
                                </Link>
                            </li>
                            <li>
                                <Link class="dropdown-item" :href="route('pages.gallery')">
                                    <img src="@images/arab-gallery-icon-nav.svg" alt="" class="m-2">
                                    Gallery
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('blog.index')" :class="{ 'active': $page.component === 'Blog/Index' }">
                            Blog
                        </Link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Careers
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="career-openings.html"><img
                                        src="@images/arab-career-icon-nav.svg" alt="" class="m-2">Career Openings</a>
                            </li>
                            <li><a class="dropdown-item" href="Internship-openings.html"><img
                                        src="@images/arab-intern-icon-nav.svg" alt="" class="m-2">Internship
                                    Opennings</a></li>
                            <li>
                                <Link class="dropdown-item" :href="route('pages.talent')">
                                    <img src="@images/arab-apply-icon-nav.svg" alt="" class="m-2">
                                    Apply As Talent
                                </Link>
                            </li>
                            <li>
                                <Link class="dropdown-item" :href="route('job-fairs.index')">
                                    <img src="@images/arab-job-icon-nav.svg" alt="" class="m-2">
                                    Job Fairs
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('pages.contact')" :class="{ 'active': $page.component === 'Pages/ContactUs' }">
                            Contact Us
                        </Link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn light main-btn" href="#quotation-req">
                            Request Quotation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>