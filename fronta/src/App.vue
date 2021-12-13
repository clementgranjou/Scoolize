<template>
    <div class="header">
        <router-link :to="{ name: 'About' }">
            <img :src="require('../src/assets/notification.png')" class="img_class" alt="image de vidéo" />
        </router-link>
        <h1 v-if="dateDisplay" class="font-semibold place-self-center">{{ dateDisplay }}</h1>
        <router-link :to="{ name: 'About' }">
            <img :src="require('../src/assets/profil.png')" class="img_class" alt="image de vidéo"
        /></router-link>
    </div>

    <router-view />

    <NavBar />
</template>

<script>

import NavBar from "./components/NavBar.vue";
export default {
    components: {
        NavBar,
    },
    name: "dateComponent",

    data() {
        return {
            dateDisplay: null,
        };
    },

    created() {
        this.updateDate();
        setInterval(this.updateDate(), 1000);
    },

    methods: {
        updateDate: function () {
            let maintenant = new Date();
            let jour = maintenant.getDate();
            let mois = maintenant.getMonth() + 1;
            let an = maintenant.getFullYear();
            this.dateDisplay = jour + "/" + mois + "/" + an;
        },
    },
};
</script>

<style>
body {
    background-color: #f8f8f8;
}
.text-black {
    display: flex;
    justify-content: center;
}
.header {
    display: flex;
    justify-content: space-around;
    padding: 10px;
}
.img_class {
    width: 100px;
    height: 100px;
}
</style>
