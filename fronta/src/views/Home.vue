<template>
    <div class="home">
        <h1 class="text-2xl font-semibold pl-6 pb-4">Ton calendrier</h1>

        <div v-for="event in events" :key="event.id"
            class="shadow-lg border-solid border-l-8 border-green-700 h-full flex-col bg-white p-4 mx-6 rounded-2xl my-4" 
        >
            <div class="text-sm font-medium text-black-900">{{ event.event_name }}</div>
            <div class="text-sm text-black-900">{{ event.adress }}</div>
            <div class="text-sm text-black-900">{{ event.date }}</div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Home",

    data() {
        return {
            events: [],
        };
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/events`)
            .then((response) => {
                // JSON responses are automatically parsed.
                this.events = response.data;
            })
            .catch((e) => {
                this.errors.push(e);
            });
    },
};
</script>
