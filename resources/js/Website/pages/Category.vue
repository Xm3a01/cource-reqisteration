<template>
    <app-layout :count ="count" :target = "target">

       <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6" v-for="category in categories" :key="category.id">
						<div class="shop">
							<div class="shop-img">
								<img :src="category.image" alt="">
							</div>
							<div class="shop-body">
								<h3>{{category.name}}</h3>
								<a href="/products" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

    </app-layout>
</template>
<script>
import App from '../layouts/App'
import Home from './Home'
import Category from './Category'

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
            target: 'Category',
        }
    },
    mounted(){ 
        this.getProduct();
        this.getCategory();
           
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
      },
            
    }
</script>