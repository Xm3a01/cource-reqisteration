<template>
<div>
<!-- Header section -->
    <Header  :count ="count" />

    <!-- navbar section -->
    <Navbar :target ="target" />

    <slot></slot>

    <!-- Footer section -->
    <Footer />
     
</div>
</template>

<script>

import Header from '../Include/Header'
import Footer from '../Include/Footer'
import Navbar from '../Include/Navbar'

export default {
    components:{Header , Navbar , Footer},
    props:['count'  , 'target'],
    data(){
        return {
            cartItem: [],
        }
    },
    ready() {
        this.handle = setInterval(()=> {

        }, 1000)
    },

    destroyed(){
        clearInterval(this.handle)
    }

      
}
</script>