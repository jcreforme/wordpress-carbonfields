<div class="homepage">
<?php
    //get images from PHP controller
    //echo $getImages;
?>
    <div id="app">  
        @{{template}}             
    </div>
</div>
<script>

new Vue({
    el: '#app',
    template: `<div><!--<h1>Image Gallery</h1>-->
        <div class="image" v-for="post in posts">
            <img v-bind:src="post.source_url" v-bind:title="post.title.rendered" width="120" height="120" class="img-responsive" />
        </div>
        </div>`,
    data: {
        posts: []
    },
    mounted: function(){
        console.log('mounted');
        this.fetchPosts();
            setInterval(function () {
                this.fetchPosts();
        }.bind(this), 5000);
    },
    methods:{
        fetchPosts: function(){
        var url = '/wordpress/wp-json/wp/v2/media?per_page=5';
        fetch(url).then((response)=>{
            return response.json()
            }).then((data)=>{
            this.posts = data;
            console.log(this.posts);
            });
        }
    },
});
</script>