<script setup lang="ts">
import PageLayout from "@/Layouts/PageLayout.vue";


import { reactive } from 'vue'
import { router, useForm } from '@inertiajs/vue3'
import { ref } from "vue";

const form = useForm({
    full_name: null,
    email: null,
    phone: null,
    message: '',
})

const isSent = ref(false)

function submit() {
    form.post(route('pages.contact'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            isSent.value = true;
        }
    })
}
</script>


<template>
    <Head title="Contact Us" />
    <PageLayout title="Contact Us">
        <!--Contactus Section-->
        <section class="ContactUs mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="card w-100 Contactus-container" :class="{'d-none': ! isSent, 'd-block': isSent}" id="ContactusAgain">
                            <div class="card-body">
                                <div class="p-40">
                                    <div class="section-header text-center">
                                        <h4>Get In Touch</h4>
                                        <h2><span class="colored">Contact Us</span></h2>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12  mb-40 text-center mt-5">
                                            <!-- <img src="@images/Tick.svg" class="img-fluid "> -->
                                        </div>
                                        <div class="col-12  mb-40">
                                            <p class="colored-text mb-40 mt-4">
                                                Thank you for contacting <span class="colored">ArabDT</span>
                                                Your message has been sent <span class="colored">successfully</span> to us,
                                                and
                                                we will get in
                                                touch with you soon!
                                            </p>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <button type="submit" @click="isSent = false"
                                                class="contactus-btn mx-auto">
                                                Contact Us Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card w-100 Contactus-container quotation" id="Contactus" v-if="! isSent">
                            <div>
                                <form class="p-40" @submit.prevent="submit">
                                    <div class="section-header text-center">
                                        <h4>Get In Touch</h4>
                                        <h2><span class="colored">Contact Us</span></h2>
                                        <p class="regular-parag mb-40 mt-2">
                                            Having any questions? contact us, and we will get in touch soon!
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12  mb-40">
                                            <label class="form-label title-color">Full Name<span>*</span></label>
                                            <input type="text" class="form-control user-input  text-gray radius-8"
                                                placeholder="Please enter your full name" v-model="form.full_name" />
                                            <small class="text-danger" v-if="form.errors.full_name">
                                                {{ form.errors.full_name }}
                                            </small>

                                        </div>
                                        <div class="col-12  mb-40">
                                            <label class="form-label title-color">Phone<span>*</span></label>
                                            <input type="text" class="form-control user-phone  text-gray radius-8"
                                                placeholder="Please enter your Phone" v-model="form.phone" />
                                            <small class="text-danger" v-if="form.errors.phone">
                                                {{ form.errors.phone }}
                                            </small>
                                        </div>
                                        <div class="col-12 mb-40">
                                            <label class="form-label title-color">Email Address<span>*</span></label>
                                            <input type="email" class="form-control user-mail  text-gray radius-8"
                                                placeholder="Please enter your email address" v-model="form.email" />
                                            <small class="text-danger" v-if="form.errors.email">
                                                {{ form.errors.email }}
                                            </small>
                                        </div>
                                        <div class="col-12 mb-40">
                                            <label class="form-label title-color">Message<span>*</span></label>
                                            <textarea class="form-control user-message text-gray radius-8"
                                                placeholder="Please enter your message" rows="3"
                                                v-model="form.message"></textarea>
                                            <small class="text-danger" v-if="form.errors.message">
                                                {{ form.errors.message }}
                                            </small>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" onclick="toggleContactForms()"
                                                :disabled="form.processing"
                                                class="contactus-btn mx-auto">
                                                Contact Us</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card w-100 ">
                            <div class="card-body info-cards">
                                <img class="mt-3 " src="@images/envelope.svg" />
                                <p class="mt-4">Info@arabdt.com</p>
                            </div>
                        </div>
                        <div class="card w-100 mt-3">
                            <div class="card-body info-cards">
                                <img class="mt-3" src="@images/Location-white.svg" />
                                <p class="mt-4">
                                    Egypt —5th District, New Cairo, Cairo, Egypt
                                </p>
                            </div>
                        </div>
                        <div class="card w-100 mt-3">
                            <div class="card-body info-cards">
                                <img class="mt-3" src="@images/lg-Phone.svg" />
                                <p class="mt-4">(+20) 2563 5967</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Map Section-->
        <section class="quotation py-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center">
                            <h4>Find Us</h4>
                            <h2><span class="colored">Our Location</span></h2>
                            <p class="regular-parag mb-40 mt-2">
                                We would like to meet you soon!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12  mb-40">
                                <div class="text-center mx-4">
                                    <div class="z-depth-1-half map-container ">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3454.8765135986787!2d31.432068075552518!3d30.011701974940063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDAwJzQyLjEiTiAzMcKwMjYnMDQuNyJF!5e0!3m2!1sen!2seg!4v1696238634800!5m2!1sen!2seg"
                                            width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>



        </section>
    </PageLayout>
</template>
