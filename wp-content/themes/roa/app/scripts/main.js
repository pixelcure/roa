'use strict';

require([
    'backbone',
    'jquery',
    'responsiveNav/responsiveNav.main',
    'dynamicSideBar/dynamicSideBar.main'
], function (Backbone, $, responsiveNav, dynamicSideBar) {
	
	// Responsive Navigation
	responsiveNav.init();

	// Inner Page Dynamic SideBar
    dynamicSideBar.init();

});
