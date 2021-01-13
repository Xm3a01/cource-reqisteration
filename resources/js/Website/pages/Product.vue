<template>
    <app-layout :count ="count"  :target = "target">

      <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
                                <div class="input-checkbox">
									<a href="" :class="categoryChecked == 0 ? `side-active` :''" @click.prevent="categoryChecked = 0">
                                        <span></span>
										All
                                    </a>
                                </div>
								<div class="input-checkbox" v-for="category in categories" :key="category.id">
									<a href="" :class="categoryChecked == category.id ? `side-active` :''" @click.prevent="categoryChecked = category.id">
										<span></span>
										{{category.name}}
									</a>
                                    <input type="hidden" v-model="categoryChecked">
								</div>
								
							</div>
						</div>

						<!-- aside Widget -->
						<div class="aside">	
							
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">

							<!-- product -->
							<div class="col-md-4 col-xs-6" v-for="product in searchProducts" :key="product.id">
								<div class="product">
									<div class="product-img">
										<img :src="product.image" alt="">
										<div class="product-label">
											<span class="sale"></span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{product.name}}</p>
										<h3 class="product-name"><a href="#">{{product.description}}</a></h3>
										<h4 class="product-price"><del class="product-old-price"></del>{{product.price}}</h4>
										
										<div class="product-btns">
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button @click="cartAdd(product.id)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							

							

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
							
							<!-- /product -->

							

							<div class="clearfix visible-sm visible-xs"></div>

						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<!-- <div class="store-filter clearfix">
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div> -->
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
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
            target: 'Product',
            categoryChecked:''
        }
    },
    mounted(){ 
        this.getProduct();
        // this.lastProducts();
        // this.lastCategories();
        this.getCategory();
           
       },
       computed :{
           searchProducts() {
            if (this.categoryChecked) {
                return this.products.filter(item => {
                    return item.category_id == this.categoryChecked
                });
            } else {
                return this.products
            }
        }
       },
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

        //     getItems() {
        //         axios.get('/get-cartItems').then((res)=>{
        //             this.items =  res.data.item
        //             this.cartIndc = res.data.count
        //         });
        //    },
            

             cartAdd(id){
                axios.get('cart/'+id).then((res)=>{
                    this.cartItem = res.data.item;
                    this.count = res.data.count;
                    this.total = res.data.total;
                }).catch((err)=>{
                    console.log(err)
                })
           },

           showProduct(id) {
                this.products = this.products.filter(item => {
                    return  item.category_id == id
                });

                console.log(this.products);
           }
        }
    }
</script>

<style>
 .side-active {
     border-bottom: 2px solid rgb(170, 33, 33);
     color: rgb(170, 33, 33);
 }
</style>