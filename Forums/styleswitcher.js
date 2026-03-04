var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  //let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");


function fontsizeup(event)
{
	// Skip tabs; 9 being the ASCII code for a tab
	if (event && getKeyCode(event) == 9)
	{
		return true;
	}

	var active = getActiveStyleSheet();

	switch (active)
	{
		case 'A--':
			setActiveStyleSheet('A-');
		break;

		case 'A-':
			setActiveStyleSheet('A');
		break;

		case 'A':
			setActiveStyleSheet('A+');
		break;

		case 'A+':
			setActiveStyleSheet('A++');
		break;

		case 'A++':
			setActiveStyleSheet('A');
		break;

		default:
			setActiveStyleSheet('A');
		break;
	}

	return false;
}

function fontsizedown(event)
{
	// Skip tabs
	if (event && getKeyCode(event) == 9)
	{
		return true;
	}

	var active = getActiveStyleSheet();

	switch (active)
	{
		case 'A++' : 
			setActiveStyleSheet('A+');
		break;

		case 'A+' : 
			setActiveStyleSheet('A');
		break;

		case 'A' : 
			setActiveStyleSheet('A-');
		break;

		case 'A-' : 
			setActiveStyleSheet('A--');
		break;

		case 'A--' : 
		break;

		default :
			setActiveStyleSheet('A--');
		break;
	}

	return false;
}

function getKeyCode(event)
{
	// IE doesn't fire the onkeypress event for tabs
	// Reference: http://www.quirksmode.org/js/keys.html

	var code = (event.keyCode) ? event.keyCode : 0;

	// Probably using FF
	if (!code && event.charCode)
	{
		code = event.charCode;
	}

	return code;
}

function setActiveStyleSheet(title)
{
	var i, a, main;

	for (i = 0; (a = document.getElementsByTagName('link')[i]); i++)
	{
		if (a.getAttribute('rel').indexOf('style') != -1 && a.getAttribute('title'))
		{
			a.disabled = true;
			if (a.getAttribute('title') == title)
			{
				a.disabled = false;
			}
		}
	}
}

function getActiveStyleSheet()
{
	var i, a;

	for (i = 0; (a = document.getElementsByTagName('link')[i]); i++)
	{
		if (a.getAttribute('rel').indexOf('style') != -1 && a.getAttribute('title') && !a.disabled)
		{
			return a.getAttribute('title');
		}
	}

	return null;
}

function getPreferredStyleSheet()
{
	return ('A-');
}

function createCookie(name, value, days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime() + (days*24*60*60*1000));
		var expires = '; expires=' + date.toGMTString();
	}
	else
	{
		expires = '';
	}

	document.cookie = name + '=' + value + expires + style_cookie_settings;
}

function readCookie(name)
{
	var nameEQ = name + '=';
	var ca = document.cookie.split(';');

	for (var i = 0; i < ca.length; i++)
	{
		var c = ca[i];

		while (c.charAt(0) == ' ')
		{
			c = c.substring(1, c.length);
		}

		if (c.indexOf(nameEQ) == 0)
		{
			return c.substring(nameEQ.length, c.length);
		}
	}

	return null;
}

function load_cookie()
{
	var cookie = readCookie('style_cookie');
	var title = cookie ? cookie : getPreferredStyleSheet();
	setActiveStyleSheet(title);
}

function unload_cookie()
{
	var title = getActiveStyleSheet();
	createCookie('style_cookie', title, 365);
}

onload_functions.push('load_cookie()');
onunload_functions.push('unload_cookie()');

/*
var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);
*/


}
/*
     FILE ARCHIVED ON 13:09:16 May 25, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:59:20 Nov 11, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.446
  exclusion.robots: 0.018
  exclusion.robots.policy: 0.01
  esindex: 0.009
  cdx.remote: 15.278
  LoadShardBlock: 260.858 (3)
  PetaboxLoader3.datanode: 105.921 (4)
  PetaboxLoader3.resolve: 165.597 (2)
  load_resource: 165.816
*/