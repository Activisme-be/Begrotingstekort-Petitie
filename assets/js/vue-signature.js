new Vue({
    el: '#signature',

    data: {
        signature: {
            name    :  '',
            email   : '',
            finding :  ''
        },

        submitted: false
    },

    computed: {
        errors: function() {
            for (var key in this.signature) {
                if ( ! this.signature[key]) return true;
            }

            return false;
        }
    }
});