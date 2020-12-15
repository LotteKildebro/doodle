new Vue({
    el: '#app2',
    data: {
        errors: [],
        email: null,
        password: null,
    },
    methods: {
        checkForm: function (event) {
            this.errors = [];

            if (!this.username) {
                this.errors.push("Userame required.");
            }

            if (!this.password) {
                this.errors.push("password required.");
            }

            if (!this.errors.length) {
                return true;
            }

            event.preventDefault();
        },

    }
})