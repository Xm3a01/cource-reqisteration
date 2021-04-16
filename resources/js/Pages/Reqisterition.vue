<template>
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">
          <section id="contact" class="contact">
            <div data-aos="fade-up" class="bg-white p-4 rounded-sm shadow-sm">
              <div class="container" data-aos="fade-up">
                <div class="row mt-5" id="app">
                  <div class="col-lg-2"></div>

                  <div class="col-lg-8 mt-5 mt-lg-0">
                    <table class="table" style="border-top: none">
                      <thead>
                        <tr>
                          <th>Course</th>
                          <th>Amount</th>
                          <th>Fees</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody style="color: #4b5092">
                        <tr>
                          <td>{{ course.name }}</td>
                          <td>{{ course.amount }} SDG</td>
                          <td>{{ course.feeses }} SDG</td>
                          <td>{{ course.feeses + course.amount }} SDG</td>
                        </tr>
                      </tbody>
                    </table>

                    <form role="form">
                      <!-- <input type="hidden" v-model="form.course_id" :value="course.id"> -->
                      <div class="form-group">
                        <strong>Personal INFO</strong>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label for="name" style="font-size: 12px"
                            >Full name</label
                          >
                          <input
                            type="text"
                            v-model="form.name"
                            class="form-control"
                            id="name"
                            placeholder="Your Name"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.name"
                              :key="'A' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="username" style="font-size: 12px"
                            >User name</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            v-model="form.username"
                            id="username"
                            placeholder="Username"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.username"
                              :key="'B' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="birthday" style="font-size: 12px"
                            >Birthday date</label
                          >
                          <input
                            type="date"
                            v-model="form.birthday"
                            class="form-control"
                            id="birthday"
                            placeholder="1/1/1995"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.gender"
                              :key="'C' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="gender" style="font-size: 12px"
                            >Gender</label
                          >
                          <select v-model="form.gender" class="form-control">
                            <option value="">Choose Gender</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                          </select>

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.gender"
                              :key="'D' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="password" style="font-size: 12px"
                            >Password</label
                          >

                          <input
                            type="password"
                            v-model="form.password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                          />

                          <ul
                            v-for="(message, index) in error.password"
                            :key="'E' + index"
                            class=""
                            style="color: red; font-size: 12px"
                          >
                            <li
                              v-for="(message, index) in error.password"
                              :key="'E' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label
                            for="password_confirmation"
                            style="font-size: 12px"
                            >Password Confirmation</label
                          >

                          <input
                            type="password"
                            v-model="form.password_confirmation"
                            class="form-control"
                            id="password_confirmation"
                            placeholder="re-password"
                          />
                        </div>
                      </div>

                      <hr />

                      <div class="form-group">
                        <strong>CONTACT INFO</strong>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label for="address" style="font-size: 12px"
                            >Address</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            v-model="form.address"
                            id="address"
                            placeholder="eg: block-1 , srt:0 , build:23"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.address"
                              :key="'F' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="email" style="font-size: 12px"
                            >E-mail</label
                          >
                          <input
                            type="email"
                            class="form-control"
                            v-model="form.email"
                            id="email"
                            placeholder="Your Email"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.email"
                              :key="'G' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="phone" style="font-size: 12px"
                            >Phone Number</label
                          >

                          <input
                            type="text"
                            v-model="form.phone"
                            class="form-control"
                            id="phone"
                            placeholder="Phone"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.phone"
                              :key="'H' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="whatsapp" style="font-size: 12px"
                            >Whats app number</label
                          >

                          <input
                            type="text"
                            v-model="form.whatsapp"
                            class="form-control"
                            id="whatsapp"
                            placeholder="whatsapp"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.whatsapp"
                              :key="'I' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                      </div>

                      <hr />

                      <div class="form-group">
                        <strong>Addition INFO</strong>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <label for="username" style="font-size: 12px"
                            >Level number was studied</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            v-model="form.level"
                            id="level"
                            placeholder="Level number was studied"
                          />

                          <ul
                            v-for="(message, index) in error.level"
                            :key="'J' + index"
                            class=""
                            style="color: red; font-size: 12px"
                          >
                            <li
                              v-for="(message, index) in error.level"
                              :key="'J' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="whenWasthat" style="font-size: 12px"
                            >The month when studied</label
                          >
                          <input
                            type="date"
                            class="form-control"
                            v-model="form.whenWasthat"
                            id="whenWasthat"
                            placeholder="Select Month when was that"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.whenWasthat"
                              :key="'K' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="job_title" style="font-size: 12px"
                            >Job title</label
                          >
                          <input
                            type="text"
                            v-model="form.job_title"
                            class="form-control"
                            id="job_title"
                            placeholder="Job title"
                          />

                          <ul class="" style="color: red; font-size: 12px">
                            <li
                              v-for="(message, index) in error.job_title"
                              :key="'L' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="coures_time" style="font-size: 12px"
                            >Course Time</label
                          >

                          <select
                            v-model="form.coures_time"
                            class="form-control"
                          >
                            <option value="">Select Time</option>
                            <option value="Morning">Morning</option>
                            <option value="Evening">Evening</option>
                          </select>

                          <ul
                            v-for="(message, index) in error.coures_time"
                            :key="'M' + index"
                            class=""
                            style="color: red; font-size: 12px"
                          >
                            <li
                              v-for="(message, index) in error.coures_time"
                              :key="'M' + index"
                            >
                              {{ message }}
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="row">
                        <div>
                          <p style="font-size: 14px">
                            Fees are updated on monthly bases according to the
                            USD equivalent (5, 10 and 15 USD). These fees are
                            valid from day 1 till the last day of the month.
                            Payment is available for all banks
                            except(faisal,khartoum,baraka,salam)bank.
                          </p>

                          <input
                            @change="agreeTerm"
                            type="checkbox"
                            size="40"
                            :checked = check
                            name="agree"
                            value="agree"
                            id="ag"
                          />
                          <label @click.prevent="agreeTerm" for="agree" style="color: blue"> I agree</label
                          ><br />
                        </div>
                      </div>
                      <div class="text-center">
                        <button
                          class="btn btn-success"
                          type="submit"
                          id="pay"
                          :disabled="flag"
                          @click.prevent="onsubmit"
                          style="padding: 3px 50px 3px 50px"
                        >
                          Pay
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
    </div>
  </section>
</template>

<script>
export default {
  props: ["course"],

  data() {
    return {
      form: {
        course_id: this.course.id,
      },
      error: {},
      datas: [],
      flag: true,
      check: false
    };
  },
  mounted() {
    // console.log(this.error)
  },

  methods: {
    onsubmit() {
      let config = {
        headers: {
          "Content-Type": "application/json",
          "Access-Control-Allow-Origin": "*",
        },
      };
      axios.post("/register/store", this.form, config).then((res) => {
        if (res.data.code == 422) {
          this.error = res.data.message;
          // console.log(this.error.message.name)
        } else {
          this.error = "";
          //   console.log(res)
          location = res.data.payment_url;
        }
      });
      // .catch(err => {
      //     console.log(err)
      // })
    },

    agreeTerm() {
      if (this.flag == false && this.check == true) {
        this.flag = true;
        this.check = false
      } else {
        this.flag = false;
        this.check = true
      }
    },
  },
};
</script>