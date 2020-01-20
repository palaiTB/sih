<template>
    <div class="container text-left" style="margin-left: 25%">
        <br>
        <form @submit.prevent="submitUser" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Name</label>
                        <input v-model="form.name" type="text" name="name"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="name">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Email</label>
                        <input v-model="form.email" type="text" name="email"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" id="email">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Gender</label>
                        <select v-model="form.sex" name="sex" class="form-control" :class="{ 'is-invalid': form.errors.has('sex') }">
                            <option value="">None</option>
                            <option v-for="s in genders" :value="s.label">
                                {{ s.label }}
                            </option>
                        </select>
                        <has-error :form="form" field="sem"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>About Yourself</label>
                        <input v-model="form.des" type="text" name="des"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('des') }" id="des">
                        <has-error :form="form" field="des"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Work Experience (Years)</label>
                        <input v-model="form.work" type="text" name="work"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('work') }" id="work">
                        <has-error :form="form" field="work"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Address</label>
                        <input v-model="form.address" type="text" name="address"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
                        <has-error :form="form" field="address"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Phone Number</label>
                        <input v-model="form.ph" type="text" name="ph"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('ph') }">
                        <has-error :form="form" field="ph"></has-error>
                        <br>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <label>Mentoring skills</label>
                        <select multiple="true" v-model="form.domain" name="domain" class="form-control" :class="{ 'is-invalid': form.errors.has('domain') }">
                            <option value="">None</option>
                            <option>
                                Business finance & Internal Communication
                            </option>
                            <option value="">Business Operations</option>
                            <option value="">Business Strategy & Planning</option>
                            <option value="">Government & Regulations</option>
                            <option value="">Human Resources & Internal Communications</option>
                            <option value="">Legal Services</option>
                            <option value="">Sales, Marketing & Public Relations</option>
                            <option value="">Non-Profit</option>
                            <option value="">Intellectual Property</option>
                        </select>
                        <has-error :form="form" field="sem"></has-error>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <br>
                        <label>Areas of Interest</label>
                        <select multiple="true" v-model="form.domain" name="domain" class="form-control" :class="{ 'is-invalid': form.errors.has('domain') }">
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
                        <has-error :form="form" field="sem"></has-error>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <div class="form-group" style="width: 50%">
                        <br>
                        <label>Industry Experience</label>
                        <select multiple="true" v-model="form.domain" name="domain" class="form-control" :class="{ 'is-invalid': form.errors.has('domain') }">
                            <option value="">None</option>
                            <option>
                                Computer & Web Support
                            </option>
                            <option value="">Agriculture and Farming</option>
                            <option value="">Arts and Entertainment</option>
                            <option value="">Banking, financial services and Insurance</option>
                            <option value="">Car Repair and Maintenance</option>
                            <option value="">Construction, Industrials and Utilities</option>
                            <option value="">Consulting, Research and Business Services</option>
                            <option value="">Educational Services</option>
                            <option value="">Environmental Services</option>
                        </select>
                        <has-error :form="form" field="sem"></has-error>
                    </div>
                </div>

            </div>


        </form>
        <a href="/mentor/home" class="btn btn-outline-dark">Submit</a>

    </div>
</template>

<script>
    export default {
        name: "Registration",
        data()
        {
            return{
                form: new Form({
                    name:'',
                    sex: '',
                    des:'',
                    address:'',
                    work:0,
                    email:'',
                    ph:''
                }),
                genders:[
                    { id: 1, label: 'Male' },
                    { id: 2, label: 'Female' },
                ],
            }
        }
    }
</script>

<style scoped>

</style>
