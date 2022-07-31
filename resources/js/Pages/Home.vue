<template>
  <div id="app">
      <flash-messages />
    <section>
      <h1>Lorem Ipsum Dolor Sit Amet</h1>
      <div class="formcontainer">
        <hr />
      <div class="container">
          <form @submit.prevent="submit">
        <label for="uname">
          <strong>Full Name</strong>
        </label>
        <input v-model="form.fullname" required type="text" placeholder="John doe" name="uname" />
        <label for="email">
          <strong>Email Address</strong>
        </label>
        <input v-model="form.email" required type="text" placeholder="customer@email.com" name="email" />
        <label for="amount">
          <strong>Amount</strong>
            <input v-model="form.amount" type="text" name="amount" />
        </label>
        <label for="phone_number">
          <strong>phone_number</strong>
            <input v-model="form.phone_number" type="text" name="phone_number" />
        </label>
        <label for="marital_status">
          <strong>marital_status</strong>
            <input v-model="form.marital_status" type="text" name="marital_status" />
        </label>
        <label for="gender">
          <strong>gender</strong>
            <input v-model="form.gender" type="text" name="gender" />
        </label>
        <label for="location">
          <strong>location</strong>
            <input v-model="form.location" type="text" name="location" />
        </label>
        <label for="spouse_name">
          <strong>spouse_name</strong>
            <input v-model="form.spouse_name" type="text" name="spouse_name" />
        </label>
        <label for="programme_awareness">
          <strong>programme_awareness</strong>
            <input v-model="form.programme_awareness" type="text" name="programme_awareness" />
        </label>
        <label for="other_awareness">
          <strong>other_awareness</strong>
            <input v-model="form.other_awareness" type="text" name="other_awareness" />
        </label>
        <label for="attendance_choice">
          <strong>attendance_choice</strong>
            <input v-model="form.attendance_choice" type="text" name="attendance_choice" />
        </label>
        <label for="expectation">
          <strong>expectation</strong>
            <input v-model="form.expectation" type="text" name="expectation" />
        </label>
        <label for="question">
          <strong>question</strong>
            <input v-model="form.question" type="text" name="question" />
        </label>
            <input type="hidden" v-model="form.payment_method" />
            <input type="hidden" v-model="form.description" />
            <input type="hidden" v-model="form.country" />
            <input type="hidden" v-model="form.currency" />
            <input type="hidden" v-model="form.paymentcode">
            <input type="hidden" v-model="form.reference" />
            <input type="hidden" v-model="form.logo" />
            <input type="hidden" v-model="form.title" />
        <input type="submit" name="Submit" />
    </form>
        </div>
      </div>
    </section>
    <!-- <img style="max-width:200px;" alt="Vue logo" src="./assets/pstk.png" /> -->
  </div>
</template>

<script>

    import FlashMessages from '../Shared/FlashMessages'

    export default {
        components : {
            FlashMessages
        },
        computed: {
            reference() {
                let text = "";
                let possible =
                    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                for (let i = 0; i < 10; i++)
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                return text;
            }
        },
        mounted() {
            this.form.reference = this.reference
            console.log('component mounted')
            console.log(this.reference)
        },

        props: {
            user: Object
        },

        data() {
            return {
                form : {
                    fullname : '',
                    email: '',
                    amount: 0,
                    marital_status: '',
                    gender: '',
                    location: '',
                    spouse_name: '',
                    programme_awareness: '',
                    other_awareness: '',
                    attendance_choice: '',
                    expectation: '',
                    question: '',
                    payment_method: 'both',
                    description: 'Subscription',
                    country: 'NG',
                    currency: 'NGN',
                    phone_number: '',
                    paymentcode: 'CONCL_PYMT',
                    reference: this.reference,
                    logo: 'https://twitter.com/nassa_funaab/photo',
                    title: 'Ansarudeen'
                }
            }
        },

        methods: {

            submit() {
                this.$inertia.post(route('pay'), this.form);
            }
        }
    }
</script>
