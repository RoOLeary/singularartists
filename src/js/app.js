import Accordion from './classes/Accordion'; 
import Ronantest from './classes/Ronantest'
import ScrollLinks from './classes/ScrollLinks'
import Nav from './classes/Nav'

let Ro = new Ronantest(); 
let acc = new Accordion(); 
let scrolly = new ScrollLinks();
let nav = new Nav();

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles


document.addEventListener('DOMContentLoaded', (event) => {
    Ro.init();
    acc.init();
    scrolly.init(); 
    nav.init(); 
    AOS.init();
});