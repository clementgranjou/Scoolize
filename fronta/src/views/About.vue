<template>
    <div class="about">
        <div class="text-2xl font-semibold pl-6 pb-4">Renseigner vous !</div>
        
        <div v-for="video in videos" :key="video.id" class="bg-white shadow-md rounded-lg p-8 m-4">
            
               <a :href="video.link" ><img class="p-0 w-full rounded-xl" :src="require(`../assets/miniature${video.id}.jpg`)" alt="image" /></a> 
                <p class="text-gray-900 font-bold text-xl my-3">{{ video.video_name }}</p>
                <p class="text-gray-700 text-base my-2">{{ video.bigdescription }}</p>           
        </div>

        <!-- <div
            v-for="video in videos"
            :key="video.id"
            class="shadow-lg h-full flex-col bg-white p-4 mx-6 rounded-2xl my-4"
        >
            <img class="bg-fixed max-w-4" :src="require('../assets/miniature1.jpg')" alt="" />
            <div>
                <div class="text-lg font-medium text-black-900">{{ video.video_name }}</div>
                <div class="text-base text-ellipsis">{{ video.bigdescription }}</div>
                <div class="text-sm">{{ video.link }}</div>
            </div>
        </div> -->
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            videos: [],
        };
    },
    created() {
        axios
            .get("http://127.0.0.1:8000/videos")
            .then((response) => {
                // JSON responses are automatically parsed.
                this.videos = response.data;
            })
            .catch((e) => {
                this.errors.push(e);
            });
    },
};
</script>
