new Vue({
    el: '#app3',
    data: {
        errors: [],
        username: null,
        email: null,
        tlf: null,
        message: null
    },
    methods: {
        checkForm: function (event) {
            this.errors = [];


            if (!this.username) {
                this.errors.push("Userame required.");
            }
            if (!this.email) {
                this.errors.push('Email required.');
            } else if (!this.validEmail(this.email)) {
                this.errors.push('Valid email required.');
            }
            if (!this.tlf) {
                this.errors.push("phone number required.");
            }
            if (!this.message) {
                this.errors.push("message required.");
            }

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