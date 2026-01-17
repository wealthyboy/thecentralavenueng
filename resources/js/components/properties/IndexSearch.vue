<template>
    <div class="container  d-flex justify-content-center  rounded ">

        <div class="row justify-content-center  index-search w-100">

            <div class="form-group   cursor-pointer search col-lg-3 col-md-5 bmd-form-group  mb-sm-2 mb-md-0 border">
                <date-range :check_in_date="1" placeholder="Check-in" @dateSelected="checkIn" />
            </div>


            <div
                class="form-group   cursor-pointer search col-lg-3 col-md-5 bmd-form-group  mb-sm-2 mb-md-0 border">
                <date-range :check_in_date="0" placeholder="Check-out" @dateSelected="checkOut" />
            </div>

            <div
              id="people-number"
              class="col-md-4 cursor-pointer px-sm-0 px-md-1 mb-sm-2 mb-md-0 border"
            >
              <guests />
            </div>

            <div
                class=" col-lg-2 col-md-5   mb-sm-2 mb-md-0 p-0 ">
                <button @click="checkAvailabity" class="w-100 p-4 cursor-pointer btn btn-primary w-auto btn-block m-auto w-xs-100 bold bg-transparent border check-availablility-button">Check Availablility</button>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions, mapGetters } from "vuex";
import booking from "../../mixins/booking";

import Pickr from "vue-flatpickr-component";
import Guests from "./Guests.vue";
import DateRange from "./Date.vue";

export default {
    props: ["reload","peak_period"],
    mixins: [booking],
    data() {
        return {
            guests: 0,
            btnText: 'Check availablity',
            isDisabled: false,
            form: {
                room_quantity: [],
                selectedRooms: [],
                children: 1,
                adults: 1,
                rooms: 1,
                check_in_checkout: null,
                checkin: null,
                checkout: null
            },
        };
    },
    components: {
        Pickr,
        Guests,
        DateRange,
    },
    computed: {
        ...mapGetters({
            locationSearch: "locationSearch",
        }),
    },
    mounted() {
        //this.build();
        // this.form.checkin = typeof this.checkForDate().checkin !== 'undefined' ? this.checkForDate().checkin : 'Check-in';
        // this.form.checkout = typeof this.checkForDate().checkout !== 'undefined' ? this.checkForDate().checkout : 'Check-out';
        // if (this.isCheckinEqualsToCheckout(this.form.checkin, this.form.checkout)) {
        //     localStorage.clear()
        // }
        // localStorage.clear()
    },
    methods: {
        ...mapActions({
            getProperties: "getProperties",
        }),
        checkAvailabity() {
           this.search() 
        },
    },
};
</script>
  