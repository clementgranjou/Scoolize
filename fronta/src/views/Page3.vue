<template>
    <div>
        <div class="buddy p-5 block place-items-center">
            <div
                class="avatar rounded-lg flex"
                style="
                    display: flex;
                    background-image: url(https://www.presse-citron.net/app/uploads/2019/09/epitech-digital.jpg);
                "
            ></div>
        </div>
        <div class="buddy p-5 place-items-center">
            <div
                class="avatar rounded-lg"
                style="
                    display: block;
                    background-image: url(https://upload.wikimedia.org/wikipedia/commons/c/c0/Facult%C3%A9_de_Droit_et_Science_Politique_de_Bordeaux.jpg);
                "
            ></div>
        </div>

        <div class=" flex justify-around">
            <div class="border-green-800 ml-3 mt-6 inline-flex rounded-md shadow">
                <a
                    href="#"
                    class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md text-green-800 bg-white"
                >
                    Pas intéréssé
                </a>
            </div>
            <div class="border-green-800 ml-3 mt-6 rounded-md shadow">
                <a
                    href="#"
                    class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md text-green-800 bg-white "
                >
                    Intéréssé
                </a>
            </div>
        </div>
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

$(document).ready(function () {
    $(".buddy").on("swiperight", function () {
        $(this).addClass("rotate-left").delay(700).fadeOut(1);
        $(".buddy").find(".status").remove();

        $(this).append('<div class="status like">Intérésé!</div>');
        if ($(this).is(":last-child")) {
            $(".buddy:nth-child(1)").removeClass("rotate-left rotate-right").fadeIn(300);
        } else {
            $(this).next().removeClass("rotate-left rotate-right").fadeIn(400);
        }
    });

    $(".buddy").on("swipeleft", function () {
        $(this).addClass("rotate-right").delay(700).fadeOut(1);
        $(".buddy").find(".status").remove();
        $(this).append('<div class="status dislike">Pas intéréssé!</div>');

        if ($(this).is(":last-child")) {
            $(".buddy:nth-child(1)").removeClass("rotate-left rotate-right").fadeIn(300);
            alert("OUPS");
        } else {
            $(this).next().removeClass("rotate-left rotate-right").fadeIn(400);
        }
    });
});
</script>

<style>
.buddy {
    display: none;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color: #fff;
    width: 360px;
    height: auto;
    cursor: hand;
}
.rotate-left {
    transform: rotate(30deg) scale(0.8);
    transition: 1s;
    margin-left: 400px;
    cursor: e-resize;
    opacity: 0;
    z-index: 10;
}
.rotate-right {
    transform: rotate(-30deg) scale(0.8);
    transition: 1s;
    opacity: 0;
    margin-left: -400px;
    cursor: w-resize;
    z-index: 10;
}
.avatar {
    width: auto;
    height: 250px;
    display: block;
    background-size: auto 100% !important;
    background-position: center;
}
.like {
    border-radius: 5px;
    padding: 5px 10px;
    border: 2px solid green;
    color: green;
    text-transform: uppercase;
    font-size: 15px;
    position: absolute;
    top: 50px;
    right: 40px;
    text-shadow: none;
}
.dislike {
    border-radius: 5px;
    padding: 5px 10px;
    border: 2px solid red;
    color: red;
    text-transform: uppercase;
    font-size: 15px;
    position: absolute;
    top: 40px;
    left: 40px;
    text-shadow: none;
}
</style>
