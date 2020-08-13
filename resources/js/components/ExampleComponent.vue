<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <input type="number" class="form-control " v-model.number="txtId" >
                    <button class="btn btn-primary" @click="getUser(txtId)">Send</button>
                    <button class="btn-primary btn " @click="start">Start</button>
                    <div>
                        <h1>ID: {{user.id}}</h1>
                        <h2>Name: {{user.name}}</h2>
                        <h5>Age: {{user.age}} </h5>
                    </div>

                    <div class="list-group">
                        <div class="list-group-item" v-for="user in users" :key="user.id">{{user}}</div>
                    </div>


                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            txtId:null,
            user:{
                name:"",
                age:2,
                id:22
            },


        }
    },
    methods: {
        increment() {
            // this.$store.commit('increment', 5);
            this.$store.commit('increment',5);

            console.log(this.$store.state.count);
        },
        getUser(id) {
            this.user = this.$store.getters.getUser(id);
        },
        start () {
            this.$Progress.start()
        }

    },
    computed:{
      users(){
          return this.$store.getters.getAllUsers;
      }
    },
    mounted() {
        this.$Progress.start();
        console.log('Component mounted.');
        this.increment();
    }
}
</script>
