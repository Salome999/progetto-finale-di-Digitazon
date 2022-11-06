<template>
<label for="categories">Choose category:</label>

<select name="categories" id="categories" v-model="selectedCategory">
    <option value="">All</option>
  <option v-for="category in categories" :value="category.id">{{category.category_name}}</option>
</select>

<div class="container" >
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" v-for="ricepe in ricepes">
                <div class="card" v-if="ricepe.category_id == selectedCategory || selectedCategory == '' " style="width: 18rem;">
                    <img class="card-img-top"  :src="'images/ricepes/' + ricepe.image">
                    <h5 class="card-title">{{ ricepe.name }}</h5>
                    <p class="card-text">{{ ricepe.description }}</p>
                    <p class="card-text">{{ ricepe.category.category_name }}</p>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
</svg> : {{ ricepe.time }}</p>
                    <p><favorite  :user="user" :ricepe="ricepe"></favorite></p>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

import ShowComponent from './ShowComponent.vue';


    export default {
props: ["user"],

        
    components() {
        ShowComponent;
    },
    mounted() {
        axios.get("/api/categories").then(response => {
            this.categories = response.data;
        });
        axios.get("/api/ricepes").then(response => {
            this.ricepes = response.data;
            console.log(response.data);
        });
        console.log("Component mounted.");
    },
    methods: {
        show() {
          
        }
      
    },
    data() {
        return {
            id: "",
            ricepes: undefined,
            categories: "",
            category_name: "",
            selectedCategory: "",
        };
    },
    
}       
</script>

<style>

.card-img-top {
    height: 18em;
    
}   
</style>




