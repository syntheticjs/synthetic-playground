<script setup>
import { synthetic } from '../../vendor/syntheticjs/synthetic/js/index';

let counter = synthetic(window.rawCounter)
</script>

<template>
    <div class="counter">
        <span id="count">{{ counter.count }}</span>

        <button id="increment" @click="counter.increment()">+</button>
    </div>
</template>
