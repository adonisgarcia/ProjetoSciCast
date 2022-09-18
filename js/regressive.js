/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var primary_font_code = 'Sintony:400,700:latin,latin-ext';
			var secondary_font_code = 'Bree+Serif::latin,latin-ext';
			var web_fonts = [primary_font_code];
			if(secondary_font_code != ''){
			    web_fonts.push(secondary_font_code);
			}
			
			WebFontConfig = {
			    google: { families: web_fonts }
			};
			(function() {
			    var wf = document.createElement('script');
			    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			    wf.type = 'text/javascript';
			    wf.async = 'true';
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(wf, s);
			})();