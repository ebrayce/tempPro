import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);
const store = new Vuex.Store(
    {
        state: {
            count: 0,
            users:[
                {
                    id:3,
                    age:54,
                    name:"Ernest"
                },
                {
                    id:5,
                    age:78,
                    name:"Ernest"
                }
            ]
        },
        mutations: {
            increment(state,by) {
                state.count += by
            },
            pushUser(state, payload){
                state.users.push(payload.newUser);
            },
        },
        getters:{
            getUser: (state) => (userId) => {
                for (let i = 0; i < state.users.length; i++) {
                    console.log(userId);
                    if (userId === state.users[i].id){
                        console.log("In : "+state.users[i]);
                        return state.users[i];
                    }
                    console.log("Out: " + userId === state.users[i].id);
                }


                let newUser = {
                    id:userId,
                    name:"Ghana Card",
                    age:40,
                }
                store.commit({
                    type:'pushUser',
                    newUser:newUser
                });
                // state.users.push(newUser);
                return newUser;
            },
            getAllUsers:(state)=>{
                return state.users;
            }
        }
    }

);

export default store;

