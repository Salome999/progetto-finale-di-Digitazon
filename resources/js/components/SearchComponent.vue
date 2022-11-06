<template>
    <div>
        <input type="text" v-model="q" class="form-control mb-3" placeholder="Cerca la ricetta...">
        <div class="alert alert-secondary" v-if="this.q && getFilteredRicepes.length >= 1">
            {{ getFilteredRicepes.length }}
        </div>
        <div class="alert alert-secondary" v-if="this.q && getFilteredRicepes.length === 0">
            
        </div>
        <div class="loader" v-if="this.loading"></div>
        <div v-for="ricepe in getFilteredRicepes" v-bind:key="ricepe.id">
            <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-3">
                <img class="card-img-top"  :src="'images/ricepes/' + ricepe.image">
              </div>
              <div class="col-md-8">
                <div class="card-body"><br>
                    <h2 class="card-title">{{ ricepe.name }}</h2>
                    <h2 class="card-text">{{ ricepe.description }}</h2> <br>
                    <h5 class="card-title" >{{ ricepe.category_id }}</h5> <br>
                    <h3 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
</svg> : {{ ricepe.time }}</h3>
                    
                    <!-- <h5 class="card-title"><h1>Preparazione</h1> {{ ricepe.preparation }}</h5> -->
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ricepes: [],
                q: '',
                loading: true
            }
        },
        methods: {
            fetchRicepes() {
                axios.get('/api/ricepes')
                .then(response => {
                    this.ricepes = response.data;
                    this.loading = false;
                })
                // .catch(errors => console.log(errors))
            }
        },
        computed: {
            getFilteredRicepes() {
                return this.ricepes.filter(
                   ricepe => {
                       return ricepe.name.toLowerCase().includes(this.q.toLowerCase());
                   }
                );
            }
        },
        mounted() {
            this.fetchRicepes();
        }
    }
</script>
