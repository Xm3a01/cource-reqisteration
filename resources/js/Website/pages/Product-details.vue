<template>
<app-layout  :count ="count" >
    <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img :src="preview ? preview : product.images[0]" alt="">
							</div>

							<!-- <div class="product-preview" >
								<img :src="item.attributes.image" alt="">
							</div> -->

							<!-- <div class="product-preview">
								<img :src="item.associatedModel" alt="">
							</div> -->

							<div class="product-preview">
								<img src="#" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						 <div id="product-imgs">
							<div class="product-preview" v-for="(image , index) in product.images" :key="index">
								<img :src="image" alt="" @click.prevent="change(image)">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{product.name}}</h2>
							<div>
								
							</div>
							<div>
								<h3 class="product-price">{{Math.abs(product.price)}} <del class="product-old-price">{{product.disCount == 0 ? 0 : product.price}}</del></h3>
								<span class="product-available">{{ product.productAmount ? 'Avialable' : 'In Stock'}}</span>
							</div>
							<!-- <p>{{product.description}}</p> -->

							<div class="product-options">
								<label>
									<!-- Size
									<select class="input-select">
										<option value="0">X</option>
									</select> -->
								</label>
								<label class="row">
                                    <div class="col-md-6">
									  Color:
                                    </div>
                                    <div class="col-md-6">
                                     <div :style="`height:50px; width:50px; border-radius:50%; background:`+product.color"></div>
                                    </div>
									<!-- <input type="color" class="input-select" :value="product.color" /> -->
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									<!-- Qty -->
									<!-- <div class="input-number">
										<input type="number" v-model="quantity">
										<span @click="quantity++" class="qty-up">+</span>
										<span @click="quantity--" class="qty-down">-</span>
									</div> -->
								</div>
								<button @click="cartAdd(product.id)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
							</ul>

							<ul class="product-links">
								<!-- <li>Category:</li> -->
								
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{product.description}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>discreption</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
 </app-layout>
</template>

<script>
import App from  '../layouts/App'
export default {
    components:{
        'app-layout': App,
    },
    props:['product'],
    data() {
        return {
            count:'',
            preview: '',
        }
	},
	mounted() {
		console.log()
	},
    methods: {
        //  updateCart(id){
        //      if(this.count != 0) {
        //       axios.get('/cart-update/?id='+id+'&quantity='+this.quantity).then((res)=>{
        //         this.count = res.data.count;
		// 		this.quantity = this.item.quantity
        //         this.$emit('countChange' , this.count);
        //     }).catch((err)=>{
        //         console.log(err)
        //     })
        //      } else {
                 
        //         axios.get('/cart/'+id).then((res)=>{
        //             this.item = res.data.item;
        //             this.count = res.data.count;
        //         }).catch((err)=>{
        //          console.log(err)
        //     })
        //      }

        // },

       cartAdd(id){
            axios.get('/cart/'+id).then((res)=>{
                // this.cartItem = res.data.item;
                this.count = res.data.count;
                // this.total = res.data.total;
                this.$emit('countChange' , [this.count , this.cartItem]);
            }).catch((err)=>{
                console.log(err)
            })
        },

        change(image) {
            this.preview = image
        }
    }
}
</script>