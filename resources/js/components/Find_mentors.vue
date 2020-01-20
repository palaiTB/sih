<template>
    <div class="container">
        <div class="h1">Find Mentors</div>
        <br><br>
        <div class="bg-white p-5 rounded shadow">
            <!-- Default search bars with input group -->
            <form action="">
                <div class="input-group mb-4">
                    <input type="search" placeholder="Search for Mentors" aria-describedby="button-addon5" class="form-control">
                    <div class="input-group-append">
                        <button id="button-addon5" type="submit" class="btn btn-primary"><img src="https://img.icons8.com/material-outlined/24/000000/search.png"></button>
                    </div>
                </div>
            </form>
            <!-- End -->
            <h5>Filters</h5>
            <br>
            <div class="row">
                <div class="col-4">
                    <h6>Field </h6>
                    <select multiple="true" name="domain" class="form-control" >
                        <option value="">None</option>
                        <option>
                            Computer & Web Support
                        </option>
                        <option value="">Business finance & Internal Communication</option>
                        <option value="">Business Operations</option>
                        <option value="">Business Strategy & Planning</option>
                        <option value="">Government & Regulations</option>
                        <option value="">Human Resources & Internal Communications</option>
                        <option value="">Legal Services</option>
                        <option value="">Sales, Marketing & Public Relations</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <div class="col-4">
                    <h6>Age</h6>
                    <select name="domain" class="form-control" >
                        <option value="">None</option>
                        <option value="">20-30</option>
                        <option value="">30-40</option>
                        <option value="">40-50</option>
                        <option value="">50-60</option>
                    </select>
                </div>
                <div class="col-4">
                    <h6>Work Ex (In Years)</h6>
                    <select name="domain" class="form-control" >
                        <option value="">None</option>
                        <option value="">0-3</option>
                        <option value="">3-8</option>
                        <option value="">8-15</option>
                        <option value="">20+</option>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-outline-primary" @click="change">Submit</button>
            <hr>
            <h6 ><a style="color: #cf9d4e" href="#">Check out our recommendation <img src="https://img.icons8.com/ios-glyphs/30/000000/hint.png"></a></h6>
        </div>
        <br>
        <div class=" text-left" v-if="val">
            <div class="bg-white p-5 rounded shadow">
                <div class="container">
                    <h2><a style="color: black" href="/startups/test">Abbie Northman</a></h2>
                    <br>
                    <p class="text-muted">Business Operations</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 border-right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                        </div>
                        <div class="col-6">
                            <img src="data:image/png;base64,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" alt="" >
                        </div>
                    </div>

                    <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                </div>
            </div><br><br>
            <div class="bg-white p-5 rounded shadow">
                <div class="container">
                    <h2>Alice Newlin</h2>
                    <br>
                    <p class="text-muted">Business Strategy & Planning, Sales, Marketing & Public Relations</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 border-right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                        </div>
                        <div class="col-6">
                            <img src="data:image/png;base64,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" alt="" width="70%">
                        </div>
                    </div>
                    <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                </div>
            </div><br><br>
            <div class="bg-white p-5 rounded shadow">
                <div class="container">
                    <h2>Annabelle Nelson</h2>
                    <br>
                    <p class="text-muted">Government & Regulations</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 border-right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                        </div>
                        <div class="col-6">
                            <img src="data:image/png;base64,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" alt=""width="70%">                        </div>
                    </div>
                    <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                </div>
            </div><br><br>
            <div class="bg-white p-5 rounded shadow">
                <div class="container">
                    <h2>Altrouge Norman</h2>
                    <br>
                    <p class="text-muted">Human Resources & Internal Communications</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 border-right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                        </div>
                        <div class="col-6">
                            <img src="data:image/png;base64,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" alt="" >
                        </div>
                    </div>
                    <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                </div>
            </div><br><br>
            <div class="bg-white p-5 rounded shadow">
                <div class="container">
                    <h2>Anatole Naquin</h2>
                    <br>
                    <p class="text-muted">Sales, Marketing & Public Relations</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 border-right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna. Magna etiam tempor orci eu lobortis elementum. Tortor at risus viverra adipiscing at. Nibh nisl condimentum id venenatis a.
                        </div>
                        <div class="col-6">
                            <img src="data:image/png;base64,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" alt="" >
                        </div>
                    </div>
                    <p><img class="pl-2 pr-2" src="https://img.icons8.com/android/24/000000/contact-card.png"> <img src="https://img.icons8.com/material-rounded/24/000000/new-message.png"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Find_mentors",
        data()
        {
            return{
                val: false
            }
        },
        methods:{
            change()
            {
                this.val = true
            }
        }
    }
</script>

<style scoped>

</style>
