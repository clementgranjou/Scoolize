<template>
    <div class="navigation">
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
.navigation {
    display: flex;
    justify-content: space-around;
    background-color: #ffff;
    border-radius: 20px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    /* mettre en bas */
    bottom: 10px;
    position: absolute;
    right: 10px;
    left: 10px;
}
img {
    padding: 20px;
}

.footer_test {
    position: fixed;
    bottom: 0;
}
</style>
