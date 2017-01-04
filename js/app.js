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
            this.test();
        }
        
        /**
         * AJAX items pagination.
         */
        this.test = function(page, th_name, th_sort){
            
            alert('test');
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