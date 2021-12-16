<template>
    <div class="shadow-2xl bg-white rounded-2xl fixed bottom-2  justify-around w-full flex">
        <router-link :to="{ name: 'Home' }"
            ><img :src="require('../assets/calendar.png')" alt="image de calendrier"
        /></router-link>
        <router-link :to="{ name: 'Page3' }"
            ><img :src="require('../assets/chapeauetudiant.png')" alt="image de chapeau d'étudiant universitaire"
        /></router-link>
        <router-link :to="{ name: 'About' }"
            ><img :src="require('../assets/videos.png')" alt="image de vidéo"
        /></router-link>
    </div>
</template>

<script>
export default {
    name: "Navbar",
};
</script>

<style>
/* .navigation {
    display: flex;
    justify-content: space-around; 
    */
    /* mettre en bas */
    /* bottom: 10px;
    position: sticky;
    right: 10px;
    left: 10px;
} */
img {
    padding: 20px;
}

.footer_test {
    position: fixed;
    bottom: 0;
}
</style>
