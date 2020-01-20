<template>
    <div class="container animated fadeIn delay-1s">
        <h1>{{name}}</h1>
        <br>
        <h5>Details:</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work Ex</th>
                </tr>
            </thead>
            <tbody>
                <tr  v-if="details.length===0">
                    <td><router-link style="color: red" to="/home/team">No Members Added!!</router-link></td>
                </tr>
                <tr v-else v-for="(data,index) in details" :key="index">
                    <td>{{index+1}}</td>
                    <td>{{data.name}}</td>
                    <td>{{data.work_ex}}</td>
                </tr>
            </tbody>
        </table>

        <br><br>
        <div class="row">
            <div class="col-4">
                <h6><a href="#">Projects <img src="https://img.icons8.com/material-rounded/24/000000/project.png"></a></h6>

            </div>
            <div class="col-4">
                <h6><a href="#">Growth <img src="https://img.icons8.com/pastel-glyph/22/000000/stocks-growth.png"></a></h6>
            </div>
            <div class="col-4">
                <h6><a href="">Analytics <img src="https://img.icons8.com/ios/22/000000/laptop-metrics--v2.png"></a></h6>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Startup",
        data()
        {
            return{
                name:'',
                details:[]
            }
        },
        created() {
            axios.get('/user')
                .then(({data})=>{
                    console.log(data);
                    this.name = data[0];
                    this.details = data[1];
                    // console.log(this.name)
                })
        }
    }
</script>

<style scoped>

</style>
