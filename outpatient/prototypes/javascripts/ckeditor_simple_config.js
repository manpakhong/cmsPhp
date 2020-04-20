var defaultSpecChars = ['!', '&quot;', '#', '$', '%', '&amp;', "'", '(', ')', '*', '+', '-', '.', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':', ';', '&lt;', '=', '&gt;', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '{', '|', '}', '~', '&euro;', '&lsquo;', '&rsquo;', '&ldquo;', '&rdquo;', '&ndash;', '&mdash;', '&iexcl;', '&cent;', '&pound;', '&curren;', '&yen;', '&brvbar;', '&sect;', '&uml;', '&copy;', '&ordf;', '&laquo;', '&not;', '&reg;', '&macr;', '&deg;', '&sup2;', '&sup3;', '&acute;', '&micro;', '&para;', '&middot;', '&cedil;', '&sup1;', '&ordm;', '&raquo;', '&frac14;', '&frac12;', '&frac34;', '&iquest;', '&Agrave;', '&Aacute;', '&Acirc;', '&Atilde;', '&Auml;', '&Aring;', '&AElig;', '&Ccedil;', '&Egrave;', '&Eacute;', '&Ecirc;', '&Euml;', '&Igrave;', '&Iacute;', '&Icirc;', '&Iuml;', '&ETH;', '&Ntilde;', '&Ograve;', '&Oacute;', '&Ocirc;', '&Otilde;', '&Ouml;', '&times;', '&Oslash;', '&Ugrave;', '&Uacute;', '&Ucirc;', '&Uuml;', '&Yacute;', '&THORN;', '&szlig;', '&agrave;', '&aacute;', '&acirc;', '&atilde;', '&auml;', '&aring;', '&aelig;', '&ccedil;', '&egrave;', '&eacute;', '&ecirc;', '&euml;', '&igrave;', '&iacute;', '&icirc;', '&iuml;', '&eth;', '&ntilde;', '&ograve;', '&oacute;', '&ocirc;', '&otilde;', '&ouml;', '&divide;', '&oslash;', '&ugrave;', '&uacute;', '&ucirc;', '&uuml;', '&yacute;', '&thorn;', '&yuml;', '&OElig;', '&oelig;', '&#372;', '&#374', '&#373', '&#375;', '&sbquo;', '&#8219;', '&bdquo;', '&hellip;', '&trade;', '&#9658;', '&bull;', '&rarr;', '&rArr;', '&hArr;', '&diams;', '&asymp;'];
var baptishSpecChars = ['&#8451;','&#8592;','&#8593;','&#8594;','&#8595;','&#8596;','&#8597;','&#8598;','&#8599;']
var outputSpecCharsOptions = [];
outputSpecCharsOptions = outputSpecCharsOptions.concat(baptishSpecChars);
outputSpecCharsOptions = outputSpecCharsOptions.concat(defaultSpecChars);
CKEDITOR.editorConfig = function( config )
{
    config.toolbar = 'MyToolbar';
    config.language = 'en';
    config.uiColor = '#AADC6E';
    //config.extraPlugins = 'filebrowser';
	config.extraPlugins = 'specialchar';	
	config.specialChars = outputSpecCharsOptions;
	//config.specialChars = config.specialChars.concat( [ '&#8451;', [ '&rsquo;', 'Custom label' ] ] );	    
    config.removeDialogTabs = 'link:upload;image:Upload';
	config.toolbarCanCollapse = true;
  //   config.toolbar_MyToolbar =
  //   [
		// ['Source','-','Save','NewPage','Preview','-','Templates'],
		// ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
		// ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		// ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
		// '/',
		// ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		// ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
		// ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		// ['BidiLtr', 'BidiRtl'],
		// ['Link','Unlink','Anchor'],
		// ['Image','Flash','Table','HorizontalRule','Smiley','specialchar','SpecialChar','PageBreak','Iframe'],
		// '/',
		// ['Styles','Format','Font','FontSize'],
		// ['TextColor','BGColor'],
		// ['Maximize', 'ShowBlocks']

  //   ];


	
		    
};