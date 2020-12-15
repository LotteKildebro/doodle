//vores applikation new Vue
new Vue({
    //#app definere id'et på vores form
    el: '#app',
    data: {
        //Data fra v-model
        //v-for og v-if
        errors: [],
        username: null,
        email: null,
        password: null,
        img: null
    },
    methods: {
        checkForm: function (event) {
            //erros array
            this.errors = [];
            //hvis ikke username er udfyldt i formen, push string i array errors
            if (!this.username) {
                this.errors.push("Userame required.");
            }
            if (!this.email) {
                this.errors.push('Email required.');
            } else if (!this.validEmail(this.email)) {
                this.errors.push('Valid email required.');
            }
            if (!this.img) {
                this.errors.push("Profile image required.");
            }
            if (!this.password) {
                this.errors.push("password required.");
            }
            //Hvis ikke errors har værdier skal den returnere true og vi kan nu submitte
            if (!this.errors.length) {
                return true;
            }

            event.preventDefault();
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    }
})