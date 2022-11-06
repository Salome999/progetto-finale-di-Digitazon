<script>
    export default {
        data() {
            return {
                errors: [],
                name: "",
                lastname: "",
                address: "",
                question: "",
                sent: false,
            }
        },
        mounted() {
            console.log('Component mounted!.')
        }
    }
</script>

<template>
   
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Per proposte commerciali compila il form sottostante.</div>
                    <div class="card-body">
                        <form>
                            <input type="text" class="form-control" name="name" v-model="name" placeholder="name"><br>
                            <input class="form-control" type="text" name="lastname" v-model="lastname" placeholder="Lastname"><br>
                            <input class="form-control"  type="email" name="address" v-model="address" placeholder="Example@example.com"><br>
                            <textarea class="form-control" name="question" id="question" v-model="question" cols="41" rows="5" placeholder="Pleas enter your message"></textarea><br>
                            <button @click.prevent="sent = true" type="submit">Submit</button>
                        </form>
                        <div v-if="sent">
                            <p>Grazie ti contattiamo presto</p>
                        </div>
                    </div>
                </div>

            </div>

        
   </div>
</template>