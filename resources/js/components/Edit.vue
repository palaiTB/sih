<template>
    <div class="container">
        <h2>Edit/Add Details</h2>
        <br>
        <form @submit.prevent="check" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Description</label>
                        <input v-model="form.description" type="text" name="description"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('description') }" id="description">
                        <has-error :form="form" field="description"></has-error>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Domain</label>
                        <select multiple="true" v-model="form.domain" name="domain" class="form-control" :class="{ 'is-invalid': form.errors.has('domain') }">
                            <option value="">None</option>
                            <option v-for="s in data" :value="s.label">
                                {{ s.label }}
                            </option>
                        </select>
                        <has-error :form="form" field="sem"></has-error>
                    </div>
                </div>

            </div>
        </form>
        <button class="btn btn-outline-primary" @click="check">Submit</button>
    </div>
</template>

<script>


    export default {
        name: "Edit",
        data()
        {
            return{
                form: new Form({
                    description:'',
                    domain:[]
                }),
                data:[
                    { id: 1, label: 'Machine Learning' },
                    { id: 2, label: 'Artificial Intelligence' },
                    { id: 3, label: 'Servers & Computation' },
                    { id: 4, label: 'Packaging and Transport' },
                    { id: 5, label: 'Food Services' },
                    { id: 6, label: 'Blockchain and Cryptocurrency' },
                    { id: 7, label: 'Cloud Engineering' },
                ],
            }
        },
        methods:{
            check()
            {
                axios.post('/edit',{
                    description: this.form.description,
                    domain: this.form.domain
                })
                    .then(({data})=>{
                        console.log(data);
                        Swal.fire(
                            'Done!',
                            'Paper Uploaded Successfully',
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
            }
        }
    }
</script>

<style scoped>

</style>
