<template>
    <app-layout :count ="count"  :target="target">

        <!-- Category section -->
        <Category :products = "lastcategories"/>
        
       <!-- Home Section -->
        <Home :products = "lastproducts"  @countChange="countChange($event)"/>

    </app-layout>
</template>
<script>
import App from '../layouts/App'
import Home from './Home'
import Category from './LastCategory'

export default {
    components:{
        'app-layout' : App,
        Home,
        Category,
    },
    data() {
        return {
            categories:[],
            lastproducts:[],
            count:0,
            lastcategories:[],
            search: '',
            oneCategory: '',
            products: [],
            target: 'Home',
            cartIndc:''
        }
    },
    mounted(){ 
        // this.getProduct();
        this.lastProducts();
        this.lastCategories();
           
       },
    //    computed :{
    //        searchProducts() {
    //         if (this.search) {
    //             return this.categories.products.filter(item => {
    //                 return (item.name.toLowerCase().match(this.search.toLowerCase()) && item.category_id == this.search)
    //             });
    //         // } else {
    //         //     return this.items
    //         }
    //     }
    //    },
        methods:{
            getProduct() {
                axios.get('/website-products').then(res =>{
                    this.products = res.data.products
                    // console.log(res.data)
                })
            },
            getCategory() {
                axios.get('/website-categories').then(res =>{
                    this.categories = res.data.categories
                    // console.log(res.data.categories)
                })
            },

    //         getItems() {
    //             axios.get('/get-cartItems').then((res)=>{
    //                 this.items =  res.data.item
    //                 this.cartIndc = res.data.count
    //             });
    //   },
            
            countChange(count) {
                this.count = count[0] 
                this.cartItem = count[1]
            },
            lastProducts() {
                axios.get('/last-products') .then(res =>{
                    this.lastproducts = res.data.products
                    this.target = 'Home'
                    // console.log(res.data.products)
                }) .catch(err => {
                    console.log(err)
                })
            },
            lastCategories() {
                axios.get('/last-categories') .then(res =>{
                    this.lastcategories = res.data.categories
                }) .catch(err => {
                    console.log(err)
                })
            }
        }
    }
</script>