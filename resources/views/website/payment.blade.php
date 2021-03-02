@extends('website.layouts.app')

@section('content')

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Login</h2>
        </div>
    </div>

    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">
            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                    </div>


                    <div class="col-lg-4 mt-5 mt-lg-0">

                        <form action="https://syberpay.test.sybertechnology.com/syberpay/getUrl " method="post">
                            <h1>Online Payment</h1>


                            <p><label>Welcome to Comboni family: </label><input type="text" placeholder="Student name..."
                                    oninput="this.className = ''" name="Stdname"></p>
                            <p> <label>Fees for </label><input type="date" oninput="this.className = ''" name="dateFees">
                            </p>
                            <p> <label>Registration Fees SDG </label><input type="text" placeholder="Registeration fees..."
                                    oninput="this.className = ''" name="RegFees"></p>
                            <p> <label>Tuition fees per month: </label><input type="text" placeholder="Tuition Fees..."
                                    oninput="this.className = ''" name="Tuition"></p>
                            <p> <label>Course Name </label><input type="text" placeholder="Course name..."
                                    oninput="this.className = ''" name="CourseName"></p>

                            <p>
                                Fees are updated on monthly bases according to the USD equivalent (5, 10 and 15 USD).

                                These fees are valid from day 1 till the last day of the month.

                                Payment is available for all banks except(faisal,khartoum,baraka,salam)bank.
                            </p>

                            <table style="width:100%">
                                <tr>
                                    <td style="size: 10px;">
                                        <input type="checkbox" size="40" name="agree" value="agree" />
                                    </td>
                                    <td></td>
                                    <td>
                                        <label for="agree"> I agree</label><br>

                                    </td>
                                </tr>
                            </table>

   <!-- This can be set in PayPal profile -->

                <!-- <input type="hidden" name="notify_url" value="http://10.10.10.10/payment-listner.php"> -->

                <!-- <input type="hidden" name="cancel_return" value="http://10.10.10.10/payment-fail.php"> -->

                            <button class="col-lg-6 mt-5 mt-lg-0" type="button" name="login">Pay</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>

        </div>

        </div>

        </div>
    </section>

@endsection
