<template>
    <div class="container">
        <div class="row ">

        VUE JS HERE

        </div>
    </div>
</template>

<script>

    export default {
        mounted() {
            axios.get('check/', this.user_id )
                .then((response)=>{
                    console.log(response);
                })

        },
        props: ['user_id'],

    }


</script>
