<template>
    <form class="checkout" action="/subscribe" method="post" v-on:submit="pay">
        <div class="form-group">
            <label for="plan">Plan:</label>
            <select class="form-control" name="plan" v-model="plan" id="plan">
                <option v-for="plan in plans" :value="plan.id">{{plan.name}} - ${{ plan.price / 100 }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="card-element">Payment Details:</label>
            <div id="card-element"></div>
            <div class="error" v-show="error">{{error}}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </div>
    </form>
</template>

<script>

    export default {
        props: ['selectedPlan', 'plans'],

        data() {
            return {
                plan: 1,
                error: false,
                stripe: {},
                card: {}
            }
        },

        created() {
            if (this.selectedPlan) {
                this.plan = this.selectedPlan.id;
            }
        },

        mounted() {

            this.stripe = Stripe(Timian.stripeKey);
            const elements = this.stripe.elements();

            this.card = elements.create('card');
            this.card.mount('#card-element');

            this.card.addEventListener('change', this.showError);

        },

        methods: {
            pay(e) {
                e.preventDefault();

                this.stripe.createToken(this.card).then(result => {
                    console.log(result)
                });

                console.log('paying');
            },

            showError({error}) {
                if (error) {
                    this.error = error.message;
                }
            },

            findPlanById(id) {
                return this.plans.find(plan => plan.id == id);
            }
        }
    }
</script>
