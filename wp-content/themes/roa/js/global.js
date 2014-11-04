require.config({
	"baseUrl": "wp-content/themes/roa/js",
	"paths": {
		"jquery": "vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
