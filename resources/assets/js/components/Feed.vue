<template>
  <div v-infinite-scroll="atualizaFeed" infinite-scroll-disabled="busy" infinite-scroll-distance="limit">
    <div v-for="post in posts" style="margin-bottom: 1em;">
      <div class="ui card" style="width: 100%">
      	<div class="content">
      		<i class="user circle icon"></i> nickname
      		<div class="right floated icon"><i class="ellipsis horizontal icon"></i></div>
      		<br />
      	</div>
    		<div class="image">
    			<img :src="'/storage/post' + post.id + '.jpg'">
    		</div>
      	<br />
  		
  		<div class="content">
  			{{ post.descricao }} <br/>
  			<div class="content">
  				<i class="heart outline icon"></i>
  				<i class="comment outline icon"></i>
  				<b>curtido por 14 pessoas</b>
  				<div class="right floated meta">14h</div>
  			</div>
  			
  		</div>
        
      </div>
    </div>
  </div>
</template>

<script>
	export default {
		data: function() {
			return {
				posts: [],
				limit: 10,
				busy: false
			}
		},

		methods: {
		    atualizaFeed() {
		      console.log("Adicionando +10 posts...");
		      this.busy = true;
		      axios.get('/list').then(response => {
		        const append = response.data.slice(
		          this.posts.length,
		          this.posts.length + this.limit
		        );
		        this.posts = this.posts.concat(append);
		        this.busy = false;
		      });
		    }
		  },
		  gerar() {
		    this.atualizaFeed();
		  }
	}
</script>