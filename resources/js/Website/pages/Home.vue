<template>
<div>
<div class="section">
			<!-- container -->
        <div class="container">
            <!-- row -->
            <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                    
                    </div>
                </div>
                <!-- /section title -->
              <div class="row">
                  <div class="col-md-3" v-for="product in products" :key="product.id">
                    <div class="product">
                        <a :href="`/products/`+product.id">
                        <div class="product-img">
                            <img :src="product.image" alt="">
                            <div class="product-label">
                                <span class="sale">{{product.disCount == 0 ? '': '%'+Math.floor((product.disCount / product.price) * 100)}}</span>
                                <span class="new">NEW</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{product.name}}</p>
                            <h3 class="product-name"><a href="#">{{product.description}}</a></h3>
                            <h4 class="product-price">{{product.price - product.disCount}}<del class="product-old-price">{{product.disCount == 0 ? 0: product.price}}</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-btns">
                      </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn" @click.prevent="cartAdd(product.id)"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                        </a>
                    </div>
                    <!-- col -->
                    </div>
                 <!-- /row -->
                </div>
         </div>
       </div>
       <div class="section" style="min-height:400px; background:#ccc">
          <div class="container">
              <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Ads Area</h3>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-2">
                        <img src="/images/laptop.jpg" alt="" height="250">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h4>Hash<span style="color:red">zo</span> </h4>
                        <p>We sell you everything that makes your environment better and we have a group of partners
                            Outside and inside the country, a team is equipped for installation and maintenance.
                            Order now everything you need and we will fulfill your request immediately</p>
                    </div>
                </div>
          </div>
       </div>
        <div class="section">
			<!-- container -->
          <div class="container">
                 <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">More Selled Products</h3>
                    
                    </div>
                </div>
                <!-- /section title -->
              <div class="row">
                  <div class="col-md-3" v-for="order in orders" :key="order.id">
                    <div class="product">
                        <a :href="`/products/`+order.product.id">
                        <div class="product-img">
                            <img :src="order.product.image" alt="">
                            <div class="product-label">
                                <span class="sale">{{order.product.disCount == 0 ? '': '%'+Math.floor((order.product.disCount / order.product.price) * 100)}}</span>
                                <span class="new">Best</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{order.product.name}}</p>
                            <h3 class="product-name"><a href="#">{{order.product.description}}</a></h3>
                            <h4 class="product-price">{{order.product.price - order.product.disCount}}<del class="product-old-price">{{order.product.disCount == 0 ? 0: order.product.price}}</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-btns">
                      </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn" @click.prevent="cartAdd(order.product.id)"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                        </a>
                    </div>
                    <!-- col -->
                    </div>
                 <!-- /row -->
                </div>
        </div>
        <!-- /container -->
    </div>
</div>
</template>

<script>

export default {
    
    props:['products'],
    data() {
        return {
            cartItems :'',
            count :'',
            total :'',
            orders: []
        }
    },
    mounted(){
        // console.log(this.products)
        this.moreseled()
    },
    methods:{
        cartAdd(id){
            axios.get('cart/'+id).then((res)=>{
                this.cartItem = res.data.item;
                this.count = res.data.count;
                this.total = res.data.total;
                this.$emit('countChange' , [this.count , this.cartItem]);
            }).catch((err)=>{
                console.log(err)
            })
        },

        moreseled(){
            axios.get('more-sels').then((res)=>{
                this.orders = res.data
            })
        }
    }
}
</script>

<style>
</style>