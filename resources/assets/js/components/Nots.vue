<template>
    <div>

    </div>
</template>

<script>
    import Noty from 'noty';

    export default {
        props: {
            message: {
                type: String,
                required: true
            }
        },
        mounted() {
//            this.listen();
            new Noty({
                type: 'success',
                layout: 'top',
                theme: 'mint',
                text: this.message,
                timeout: 5000,
            }).show();
        },
        methods: {
//            listen() {

//            }
        }
    }
</script>