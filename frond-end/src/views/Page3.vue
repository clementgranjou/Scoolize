<template>
    <div>
        <h1>Page3</h1>
        <h2 v-if="users">{{users}}</h2>
    </div>
</template>

<script>
export default {
    name:"Page3",
    data() {
        return {
            users:{}
        }
    },
    mounted(){
        axios.get('http://localhost:8001/users')
        .then((response)=>{
            this.users = response.data
        })
        .catch()
    }
}
</script>