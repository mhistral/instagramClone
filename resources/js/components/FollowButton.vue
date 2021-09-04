<template>
    <div class="container">
        <button @click="followUser" v-text="buttonText" class="text-sm  bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded ml-3">
                Follow
        </button>
    </div>
</template>

<script>
    export default {
        props: [
            'userId',
            'follows'
        ],
        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
                status: this.follows,
            }
        },
        methods: {
            followUser () {
                axios.post('/follow/'+this.userId)
                    .then(response =>  {
                        this.status = ! this.status //toggle
                        console.log(response.data);
                    })
                    .catch(errors => {
                        if (errors.response.status = 401){
                            window.location ='/login';
                        }
                    });
            }
        },
        computed: {
            buttonText() {
                return(this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
