/**
 * App Class
 *
 * @author      Carl Victor Fontanos
 * @author_url  www.carlofontanos.com
 *
 */

/**
 * Setup a App namespace to prevent JS conflicts.
 */
var app = {
        

    Global: function() {
        
        /**
         * This method contains the list of functions that needs to be loaded
         * when the "Global" object is instantiated.
         *
         */
        this.init = function() {
            this.nav_bar();
        }
        
        /**
         * Handle responsive navigation
         */
        this.nav_bar = function(){
			$('body').on('click', '.menu-bar-responsive', function () {
				$('header nav ul').slideToggle('fast');
			});
			
			$(window).resize(function() {
				if($(window).width() > 768 ){
					$('header nav ul').slideDown('fast');
				}
			});
        }
    }
}

/**
 * When the document has been loaded...
 *
 */
jQuery(document).ready( function () {
    
    global = new app.Global(); /* Instantiate the Global Class */
    global.init(); /* Load Global class methods */
    
});