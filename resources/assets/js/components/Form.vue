<template>
	
		<form id="form" class="ui form">
			<div class="ui segments">
				<div class="ui segment">
					<h2>
						<i class="ui camera icon"></i>&nbsp;Novo post
					</h2>
				</div>
				<div class="ui segment">

					<div class="field">
			    		<input id="img" type="file" name="img" accept=".jpg, .jpeg, .png" />
			    	</div>

			    	<div class="field">
			    		<textarea class="ui input" name="descricao" placeholder="Descrição" maxlength="255" v-model="post.descricao"></textarea>
			    	</div>
			    	<div class="field">
			    		<input type="text" class="ui input" name="tags" placeholder="Tags" v-model="post.tags">
			    	</div>
			        <div v-if="error" class="ui negative message">
			        	{{ error }}
			        </div>
			    </div>
			    <div class="ui right aligned segment">
			        <div class="action">
			        	<div class="ui basic button" onclick="location.reload()">Cancelar</div>
			        	<div class="ui positive button" v-on:click="validate">
			        		Publicar
			        		<div class="ui dimmable">
			        			<div class="content">
									<div class="ui loader"></div>
								</div>
							</div>
			        	</div>
			        </div>
			    </div>
	        </div>
	    </form>
	    
	

</template>

<script>
	export default {
		data: function() {
			return {
				error: false,
				post: {
					descricao: null,
					tags: null,
				}
			}
		},

		methods: {
			submit: function() {

				var conteudo = new FormData();
				var img = document.querySelector('#img');
				conteudo.append("img", img.files[0]);

				conteudo.append("descricao", this.post.descricao);
				conteudo.append("tags", this.post.tags);

				axios.post('/store', conteudo, {
				    headers: {
				      'Content-Type': 'multipart/form-data'
				    }
				}).then(function(response) {
					if (response.data == 'success') {
						location.reload();
					}
				});
			},

			validate: function() {
				this.error = false;
				var img = document.querySelector('#img');
				
				if (img.files[0] == null) {
					this.error = "Nenhuma imagem foi inserida.";
					$('.ui.segment').transition('shake');
				} else {
					this.submit();
				}
			}
		}
	}
</script>