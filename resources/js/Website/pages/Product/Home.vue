<template>
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
                                <a :href="`products/`+product.id">
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
</template>