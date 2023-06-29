import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";

import ThemeToggle from "./components/ThemeToggle.vue";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

import "feather-icons/dist/feather";
import { replace } from "feather-icons"
replace();

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
.use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        "progress_bar": true
    })
    .component('theme-toggle', ThemeToggle)
    .mount(el);
