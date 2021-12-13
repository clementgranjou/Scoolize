<template>
    <div class="container">
        <h1>Page du tinder swippe</h1>
        <font-awesome-icon icon="fa-solid fa-user-secret" />

        <!-- <div v-for="formation in formations" :key="formation.id" class="container-fluid">
            <p>{{ formation.formation_name }}</p>
            <br />
        </div> -->

        <!-- <div class="tinder">
            <div class="tinder--status">
                <i class="fa fa-remove"></i>
                <i class="fa fa-heart"></i>
            </div>

            <div class="tinder--cards">
                <div class="tinder--card">
                    <img src="https://placeimg.com/600/300/people" />
                    <h3>Demo card 1</h3>
                    <p>This is a demo for Tinder like swipe cards</p>
                </div>
            </div>

            <div class="tinder--buttons">
                <button id="nope"><i class="fa fa-remove"></i></button>
                <button id="love"><i class="fa fa-heart"></i></button>
            </div>
        </div> -->
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            formations: [],
        };
    },
    created() {
        axios
            .get("http://127.0.0.1:8000/formations")
            .then((response) => {
                // JSON responses are automatically parsed.
                this.formations = response.data;
            })
            .catch((e) => {
                this.errors.push(e);
            });
    },
};

</script>


