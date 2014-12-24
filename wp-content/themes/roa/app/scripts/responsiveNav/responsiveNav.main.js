define(['jquery', 'backbone'], function(){
'use strict'

	function init () {

		var ResponsiveNav = Backbone.View.extend({
			// Init 
			initialize : function () {
				
				$(window).resize(function() {
					if( $(this).width() <= 800 ){
						$(this.nav).show();
					}
				});
			},
			
			nav : $('nav'),

			// Events
			events : {
				'click #hidden-menu-icon' : 'menuToggle'
			},

			menuToggle : function (e) {
				var $menuBtn = $( e.currentTarget );

				if( $( this.nav ).hasClass('open') ){
				
					// remove open class, hide nav
					$( this.nav ).removeClass('open');
					
					// default menu icon
					$menuBtn.removeClass('open');
				
				}else{	
				
					// add open class, show nav
					$( this.nav ).addClass('open');
					
					// default menu icon
					$menuBtn.addClass('open');					
				
				}

			}
		});

		var responsiveNav = new ResponsiveNav({ el: '.header-inner'});

	}; // end init

	return {
		init : init
	}

}); // end