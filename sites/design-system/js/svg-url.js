// main path to all icons
var pathSVG =  'svg/icons-latest.svg';

// setup for EDIN specifically, this can be expanded if we need to
// have more sperate sprite sheets in the future
var pathOtherSVG =  'svg/icons-edin.svg'; 

// variable that sets the path to use for the setAttributeNS function
var currentPath = '';

//alert(pathSVG);

function getIconClass(className) {
 
    if (!className)
        return "";

    //  The purpose of this method is to extract one 'ihs-icon-' like class from list of classes.
    //  This text could be the first one or could be somewhere inside of text separated with spaces.
    //  For example:
    //      <span ewb-svg-use="dropdown-arrow ihs-icon-chevron rotate-180"></span>

    var m = className.match(/(^ihs-icon-\S+)|(\sihs-icon-\S+)/g);

    // setup for a second search of different naming convention, with different variable
    var ico = className.match(/(^ico_\S+)|(\sico_\S+)/g);

    if (m) {
        currentPath = pathSVG;
        return $.trim(m[0]);

    } else if (ico) {
        currentPath = pathOtherSVG;
        return $.trim(ico[0]);
    }

    return "";
}

function callSVG() {

    var svgs = document.getElementsByTagName('svg');

    //alert(svgs.length);

    if (typeof svgCustomPath !== 'undefined') {
        // the variable is defined
        currentPath = svgCustomPath;
    }

    for(var i=0; i < svgs.length; i++){
    	var className = svgs[i].getAttribute("class");

    	if (className && !hasClass(svgs[i], 'hasUse')){
    		var currentClass = getIconClass(className);
            //svgs[i].innerHTML = "<use xlink:href=" + pathSVG + "#" + className + "></use>";
            var useElement = document.createElementNS('http://www.w3.org/2000/svg', 'use');
            useElement.setAttributeNS(
                'http://www.w3.org/1999/xlink',
                'href',
                currentPath + '#' + currentClass
            );
            svgs[i].appendChild(useElement);
            addClass(svgs[i], 'hasUse');
    		//console.log(svgs[i]);
    	}

    }

    return true;
}

 /* function setUsesParams() {

 var uses = document.getElementsByTagName('use');
 var xlinkNS = "http://www.w3.org/1999/xlink";

	
	for(var i=0; i < uses.length; i++){
			var hashID;

			hashID = uses[i].getAttributeNS(xlinkNS, "href");


			uses[i].setAttributeNS(
		    xlinkNS, 
		    'xlink:href', 
		    pathSVG + hashID);
	}

}
*/



