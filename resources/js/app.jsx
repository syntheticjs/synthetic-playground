import './bootstrap';

/**
 * Vue
 */
import { createApp, h } from 'vue'
import VueApp from './VueApp.vue'

let el = document.querySelector('#vue-root')

el && createApp(VueApp).mount(el)

/**
 * React
 */
import React from 'react'

import { render } from 'react-dom';

el = document.querySelector('#react-root')

import { ReactApp } from './ReactApp.jsx'

el && render(<ReactApp />, el);
