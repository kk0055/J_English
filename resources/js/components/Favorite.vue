<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(language)">
         <i class="fas fa-heart heart" style="color:red;"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(language)">
             <i class="far fa-heart heart "></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['language', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(language) {
                axios.post('/favorite/'+language)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(language) {
                axios.post('/unfavorite/'+language)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>

