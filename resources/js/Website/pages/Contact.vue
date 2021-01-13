
<template>
    <app-layout :count ="count" :target = "target">
       
       	<div class="section">
			<!-- container -->
			<div class="container">
            <div v-if="status.success || status.error" class="alert alert-dismissible" role="alert" :class="status.success ? 'alert-success' : 'alert-danger' ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{{status.success ? 'Successfull' :  'Warning!'}}</strong>{{status.success ? status.success : status.error}}
            </div>
				<!-- row -->
                <form @submit.prevent="contact" method="post">
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Contact Us</h3>
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder=" Name"  v-model="form.name">
							</div>
							
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" v-model="form.email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="subject" placeholder="Subject" v-model="form.subject">
							</div>
							<div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter Message" v-model="form.message" Required></textarea>
                            </div>
							
						</div>
						
							
						</div>
						<!-- /Shiping Details -->
				    	</div>
                
						
					    	<button type="submit" class="primary-btn order-submit">Send</button>
                        </form>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
    </app-layout>
</template>
<script>
import App from '../layouts/App'

export default {
    components:{
        'app-layout' : App,
	},
    data() {
        return {
            count:0,
            search: '',
            target: 'Contact',
            form: {},
            status: {}
        }
    },
    mounted(){ 
        //  this.getItems();    
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
           
        // getItems() {
        //     axios.get('/get-cartItems').then((res)=>{
        //         this.items =  res.data.item
        //         this.cartIndc = res.data.count
        //     });
    //   },

      contact() {
          
          console.log(this.form.email)
          axios.post('/contacts' , this.form).then((res)=>{
              this.status = res.data;
              this.form = {};
            //   console.log(res.data)
          })
      }
            
    }
    }
</script>