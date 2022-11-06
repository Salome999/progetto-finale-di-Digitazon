
 <template>
    <div class="container" >
      <div class="card"> <br>  <h2 class="card-title">{{ ricepe.name }}</h2>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-3">
                <img class="card-img-top"  :src="'images/ricepes' + ricepe.image">
              </div>
              <div class="col-md-8">
                <div class="card-body"><br>
                    <!-- <h2 class="card-title">{{ ricepe.name }}</h2> -->
                    <h2 class="card-text">{{ ricepe.description }}</h2> <br>
                    <h5 class="card-title" >{{ ricepe.category_id }}</h5> <br>
                    <h3 class="card-title">Tempo:{{ ricepe.time }}</h3>
                </div>
              </div>
            </div>
          </div>
          <h5 class="card-title"><h1>Preparazione</h1> {{ ricepe.preparation }}</h5>
          
      </div >
      <p  class="ing card-text "><h1>Ingredients: </h1><h3 >{{ ricepe.ingredients }}</h3></p>
      
     </div>

 </template>
 <script>

     export default {
    mounted() {
        console.log(window.location.href.split("/").pop());
        let id = window.location.href.split("/").pop();
        axios.get("/api/ricepes/" + id).then(response => {
            this.ricepe = response.data;
            console.log(response.data);
        });
        console.log("Component mounted.");
        axios.get("/api/categories").then(response => {
            this.categories = response.data;
            
        });
        
    },
    

    data() {
        return {

            
            ricepe: {
                name: "",
                description: "",
                category_id: "",
                time: "",
                preparation: "",
                image: null,
                categories: "",
                category_name: "",
            },
        };
    },
    
}
 </script> 
 <style>
.ing {
    
    border-radius: 30px;
    width: 260px;
    
}
</style>