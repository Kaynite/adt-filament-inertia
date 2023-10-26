<script setup lang="ts">
import PageLayout from "@/Layouts/PageLayout.vue";
import TeamMember from "@/Components/TeamMember.vue";
import RequestQuotation from "@/Components/RequestQuotation.vue";

defineProps<{
    members: TeamMember[]
}>()

</script>


<template>
    <Head title="Team" />
    <PageLayout title="Team">
        <!--About-Team-Header Section-->
        <section class="about-team-header pt-40 pb-80 position-relative">
            <img src="@images/Vector5.svg" class="position-absolute branch-circles" alt="" />
            <div class="container">
                <div class="page-locat mb-24">
                    <a href="index.html" class="colored">Home</a>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>About</span>
                    <span><img src="@images/Icons-Outlined.svg" alt="" /></span>
                    <span>Team</span>
                </div>
                <div class="section-header text-center mb-40">
                    <h4>Meet Our Team</h4>
                    <h2>Board of <span class="colored">Trustees</span></h2>
                </div>
                <div class="aboutm-pg about-tm-members">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-40">
                            <div class="card">
                                <img src="images/Kamal.svg" class="card-img-top" alt="..." />
                                <div class="card-body text-center">
                                    <h5 class="card-title colored mb-8">Kamal Elhaddad</h5>
                                    <p class="card-text text-gray">Chief Executive Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-40">
                            <div class="card">
                                <img src="images/Waleed.svg" class="card-img-top" alt="..." />
                                <div class="card-body text-center">
                                    <h5 class="card-title colored mb-8">Waleed Abdellatif</h5>
                                    <p class="card-text text-gray">Chief Delivery Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-40">
                            <div class="card">
                                <img src="images/Hussein.svg" class="card-img-top" alt="..." />
                                <div class="card-body text-center">
                                    <h5 class="card-title colored mb-8">Hussien ElShahawy</h5>
                                    <p class="card-text text-gray">Service Delivery Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--About-Team-->
        <section class="about-team py-80 bg-sec">
            <div class="container">
                <div class="section-title mb-40">
                    <h4>Our Team</h4>
                    <h2><span class="colored">ArabDT</span> Innovators</h2>
                </div>
                <div class="row aboutm-pg">
                    <TeamMember :member="member" v-for="member in members" />
                </div>
            </div>
        </section>

        <RequestQuotation />
    </PageLayout>
</template>