
<template>
    <div class="container" >
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" v-for="category in categories">
                <div class="card" style="width: ;">
                    <img class="card-img-top"  :src="category.image">
                    <h3 class="card-title">{{ category.category_name }}</h3>
                    <h5>Ricetti migliori</h5>
                    <a :href="`http://localhost:8000/list`" class="btn btn-success">More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
</svg></a>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get("/api/categories").then(response=>{
                this.categories = response.data
                console.log(response.data);
            })
            console.log('Component mounted.')
        },
        data() {
            return {
                
                category:"",
                categories: undefined,
            }
        }
    }
</script>
<style>
   .card {
    text-align: center;
    margin-top: 70px;
    background-color: rgb(216, 210, 212);
}
body {
    background-color: rgb(228, 226, 226)}
    .container1 {
        text-align: center;
        color: rgb(19, 18, 18);
        margin-top: 80px;
    }
    .link {
        text-decoration: none;
        color: black;
    }
   
</style>

