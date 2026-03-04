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

$(document).ready(function() {
    
	$("tr:even").not(".clean").css("background-color", "#F7F7F7");
	
    $(".folio-box .inner").hover( 
      function () {
        $(this).parent().find(".proj-label").slideUp("fast");
      }, 
      function () {
        $(this).parent().find(".proj-label").slideDown();
      }
    );

	if ($("#slides-dock").length > 0) {
	
			$('#slides-dock').cycle({
				fx: "fade",
				slideExpr: "img",
				
				before: function() {
					$("#slide-label").fadeOut();
				},
				after: function() {
					$("#slide-label").fadeIn().html(this.alt);
				}
			});
		
	};

	if ($("a.jfancy").length > 0) {
	
		$("a.jfancy").fancybox({
			overlayOpacity: 0.6
		});
			
	};
	
})

}
/*
     FILE ARCHIVED ON 19:16:05 Feb 06, 2020 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:51:53 Nov 11, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.909
  exclusion.robots: 0.041
  exclusion.robots.policy: 0.025
  esindex: 0.013
  cdx.remote: 11.48
  LoadShardBlock: 104.315 (3)
  PetaboxLoader3.datanode: 156.141 (5)
  load_resource: 2494.409 (2)
  PetaboxLoader3.resolve: 2367.265 (2)
*/