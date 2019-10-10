var infiniteScroll =  require('vue-infinite-scroll');

import Vue from 'vue';

import CriarPost from './components/Form.vue';
import Feed from './components/Feed.vue';

window.Vue = require('vue');

Vue.component('criarpost', CriarPost);
Vue.component('feed', Feed);

Vue.use(infiniteScroll);

const app = new Vue({
	el: '#app',
	data: {
		feed: true,
		pages: {
			feed: true,
			newPost: false
		}
	},

	methods: {
		novoPost: function() {
			console.log('Função chamada');
			$('#feed').transition('scale');
			setTimeout(this.wait, 500);
			
		},
		wait: function() {
			this.pages.feed = false;
			this.pages.newPost = true;
			$('novoPost').css('display', 'none');
			$('novoPost').transition('scale');
		}
	}
});