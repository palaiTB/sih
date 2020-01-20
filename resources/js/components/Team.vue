<template>
    <div class="container">
        <h2>Add New</h2>
        <br>
        <form @submit.prevent="submitUser" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input v-model="form.name" type="text" name="name"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="name">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input v-model="form.email" type="text" name="email"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" id="email">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
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
                    <div class="form-group">
                        <label>About Yourself</label>
                        <input v-model="form.des" type="text" name="des"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('des') }" id="des">
                        <has-error :form="form" field="des"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Work Experience (Years)</label>
                        <input v-model="form.work" type="text" name="work"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('work') }" id="work">
                        <has-error :form="form" field="work"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input v-model="form.address" type="text" name="address"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
                        <has-error :form="form" field="address"></has-error>
                        <br>
                    </div>
                </div>
            </div>
        </form>
        <button @click="upload" class="btn btn-outline-dark">Upload Resume <img src="https://img.icons8.com/android/25/000000/upload.png"></button>
        <div class="text-center">
            <button @click="submitUser" class="btn btn-outline-dark">Submit</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Team",
        data()
        {
            return{
                genders:[
                    { id: 1, label: 'Male' },
                    { id: 2, label: 'Female' },
                ],
                form: new Form({
                    name:'',
                    sex: '',
                    des:'',
                    address:'',
                    work:0,
                    email:''
                }),
                path:'',
            }
        },
        methods:{
            submitUser()
            {
                axios.post('/user/add',{
                    path: this.path,
                    name: this.form['name'],
                    sex: this.form['sex'],
                    address: this.form['address'],
                    work: this.form.work,
                    email: this.form.email
                })
                    .then(({data})=>{
                        console.log(data)
                        Swal.fire(
                            'Done!',
                            'Added Successfully',
                            'success'
                        );
                        Fire.$emit('event')
                    })
                    .catch(()=>{
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Kindly fill up all the details correctly!',
                            footer: '<a href>Why do I have this issue?</a>'
                        })
                    })
            },
            upload()
            {
                var myWidget = cloudinary.createUploadWidget({
                        cloudName: 'drjjm6vjl',
                        uploadPreset: 'y5tuy99e',
                        sources: [
                            "local",
                            "url",
                            "image_search"
                        ],
                        showAdvancedOptions: true,
                        defaultSource: "local",
                        styles: {
                            palette: {
                                window: "#000000",
                                sourceBg: "#000000",
                                windowBorder: "#8E9FBF",
                                tabIcon: "#FFFFFF",
                                inactiveTabIcon: "#8E9FBF",
                                menuIcons: "#2AD9FF",
                                link: "#08C0FF",
                                action: "#336BFF",
                                inProgress: "#00BFFF",
                                complete: "#33ff00",
                                error: "#EA2727",
                                textDark: "#000000",
                                textLight: "#FFFFFF"
                            },
                        }
                    }, (error, result) => {
                        if (!error && result && result.event === "success") {
                            // console.log('Done! Here is the image info: ', result.info)
                            this.path = result.info.secure_url;
                            // this.size = result.info.bytes;
                            console.log(this.size);
                            console.log(this.path)
                        }
                    }
                );
                myWidget.open()
            }
        },

        mounted() {
            Fire.$on('event', () =>{
                this.form.reset();
                console.log('cleared')
            })
        }
    }
</script>

<style scoped>

</style>
