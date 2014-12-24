define(['jquery', 'backbone'], function(){
'use strict'

	function init () {

		var DynamicSideBar = Backbone.View.extend({
			
			nav : $('nav .menu ul'),
			sideBar : $('.inner-content aside.sidebar'),
			
			// Init 
			initialize : function () {
				
				var nav = $(this.nav).clone();

				$(this.sideBar).append(nav).addClass('sidebar-nav');

			}
		});

		var dynamicSideBar = new DynamicSideBar({ el: '.header-inner'});

	}; // end init

	return {
		init : init
	}

}); // end