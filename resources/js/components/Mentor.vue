<template>
    <div class="container text-center">
        <h1>Hello Jacob!</h1>
        <br>
        <div class="row mb-5">
            <div class="col-lg-12 mx-auto">
                <div class="bg-white p-5 rounded shadow">
                    <!-- Default search bars with input group -->
                    <form action="">
                        <div class="input-group mb-4">
                            <input type="search" placeholder="Search for startups" aria-describedby="button-addon5" class="form-control">
                            <div class="input-group-append">
                                <button id="button-addon5" type="submit" class="btn btn-primary"><img src="https://img.icons8.com/material-outlined/24/000000/search.png"></button>
                            </div>
                        </div>
                    </form>
                    <!-- End -->
                    <h5>Filters</h5>
                    <select multiple="true" name="domain" class="form-control" >
                        <option value="">None</option>
                        <option>
                            Computer & Web Support
                        </option>
                        <option value="">Administration</option>
                        <option value="">Mentoring</option>
                        <option value="">Facilitator</option>
                        <option value="">Fundraising</option>
                        <option value="">Leadership</option>
                        <option value="">Marketing</option>
                        <option value="">Volunteer Development & Training</option>
                        <option value="">Other</option>
                    </select>
                    <br>
                    <button class="btn btn-outline-primary" @click="change">Submit</button>
                </div>
                <br><br>
                <div class=" text-left" v-if="val">
                    <div class="bg-white p-5 rounded shadow">
                        <div class="container">
                            <h2><a style="color: black" href="/startups/test">Frival</a></h2>
                            <br>
                            <p class="text-muted">Computer and Web Support</p>
                            <div class="row">
                                <div class="col-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                                </div>
                                <div class="col-6">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-gfM9XWwDvum-flfnc6EMtVCOxeTlmaNL13IA38kQLVKmFhwnMg&s" alt="" width="70%" height="90%">
                                </div>
                            </div>

                            <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                        </div>
                    </div><br><br>
                    <div class="bg-white p-5 rounded shadow">
                        <div class="container">
                            <h2>Salley</h2>
                            <br>
                            <p class="text-muted">Banking and financial services</p>
                            <div class="row">
                                <div class="col-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                                </div>
                                <div class="col-6">
                                    <img src="https://digitalsynopsis.com/wp-content/uploads/2018/04/creative-typographic-logos-of-words-2.jpg" alt="" width="100%">
                                </div>
                            </div>
                            <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                        </div>
                    </div><br><br>
                    <div class="bg-white p-5 rounded shadow">
                        <div class="container">
                            <h2>Socing</h2>
                            <br>
                            <p class="text-muted">Environment services</p>
                            <div class="row">
                                <div class="col-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                                </div>
                                <div class="col-6">
                                    <img src="https://www.frenchpaper.com/media/contentmanager/content/FP_LOGO_P.png" alt="" width="100%">
                                </div>
                            </div>
                            <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                        </div>
                    </div><br><br>
                    <div class="bg-white p-5 rounded shadow">
                        <div class="container">
                            <h2>Racean</h2>
                            <br>
                            <p class="text-muted">Consultancy</p>
                            <div class="row">
                                <div class="col-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                                </div>
                                <div class="col-6">
                                    <img class="pl-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg9wZvz3LUmadvsxkSxluIx3aZGAarZNPmEIegBOyj_LVVCwVbeQ&s" alt="" width="70%" height="70%">
                                </div>
                            </div>
                            <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                        </div>
                    </div><br><br>
                    <div class="bg-white p-5 rounded shadow">
                        <div class="container">
                            <h2>Trian</h2>
                            <br>
                            <p class="text-muted">Computer and Web Support</p>
                            <div class="row">
                                <div class="col-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                                </div>
                                <div class="col-6">
                                    <img src="http://www.logosimaging.com/images/funnels_support.png" alt="" width="100%">
                                </div>
                            </div>
                            <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Mentor",
        data()
        {
            return {
                val: false
            }
        },
        methods:{
            change()
            {this.val = true}
        }
    }
</script>

<style scoped>

</style>
