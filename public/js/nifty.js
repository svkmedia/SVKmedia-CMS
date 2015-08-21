/*
 * NIFTY ADMIN TEMPLATE JAVASCRIPT
 * ======================================================================
 * NOTE : All JavaScript plugins require jQuery to be included
 * http://jquery.com/
 *
 */



/* REQUIRED PLUGINS
/* ========================================================================
/*! nanoScrollerJS - v0.8.4 - (c) 2014 James Florentino; Licensed MIT */
!function(a,b,c){"use strict";var d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H;z={paneClass:"nano-pane",sliderClass:"nano-slider",contentClass:"nano-content",iOSNativeScrolling:!1,preventPageScrolling:!1,disableResize:!1,alwaysVisible:!1,flashDelay:1500,sliderMinHeight:20,sliderMaxHeight:null,documentContext:null,windowContext:null},u="scrollbar",t="scroll",l="mousedown",m="mouseenter",n="mousemove",p="mousewheel",o="mouseup",s="resize",h="drag",i="enter",w="up",r="panedown",f="DOMMouseScroll",g="down",x="wheel",j="keydown",k="keyup",v="touchmove",d="Microsoft Internet Explorer"===b.navigator.appName&&/msie 7./i.test(b.navigator.appVersion)&&b.ActiveXObject,e=null,D=b.requestAnimationFrame,y=b.cancelAnimationFrame,F=c.createElement("div").style,H=function(){var a,b,c,d,e,f;for(d=["t","webkitT","MozT","msT","OT"],a=e=0,f=d.length;f>e;a=++e)if(c=d[a],b=d[a]+"ransform",b in F)return d[a].substr(0,d[a].length-1);return!1}(),G=function(a){return H===!1?!1:""===H?a:H+a.charAt(0).toUpperCase()+a.substr(1)},E=G("transform"),B=E!==!1,A=function(){var a,b,d;return a=c.createElement("div"),b=a.style,b.position="absolute",b.width="100px",b.height="100px",b.overflow=t,b.top="-9999px",c.body.appendChild(a),d=a.offsetWidth-a.clientWidth,c.body.removeChild(a),d},C=function(){var a,c,d;return c=b.navigator.userAgent,(a=/(?=.+Mac OS X)(?=.+Firefox)/.test(c))?(d=/Firefox\/\d{2}\./.exec(c),d&&(d=d[0].replace(/\D+/g,"")),a&&+d>23):!1},q=function(){function j(d,f){this.el=d,this.options=f,e||(e=A()),this.$el=a(this.el),this.doc=a(this.options.documentContext||c),this.win=a(this.options.windowContext||b),this.body=this.doc.find("body"),this.$content=this.$el.children("."+f.contentClass),this.$content.attr("tabindex",this.options.tabIndex||0),this.content=this.$content[0],this.previousPosition=0,this.options.iOSNativeScrolling&&null!=this.el.style.WebkitOverflowScrolling?this.nativeScrolling():this.generate(),this.createEvents(),this.addEvents(),this.reset()}return j.prototype.preventScrolling=function(a,b){if(this.isActive)if(a.type===f)(b===g&&a.originalEvent.detail>0||b===w&&a.originalEvent.detail<0)&&a.preventDefault();else if(a.type===p){if(!a.originalEvent||!a.originalEvent.wheelDelta)return;(b===g&&a.originalEvent.wheelDelta<0||b===w&&a.originalEvent.wheelDelta>0)&&a.preventDefault()}},j.prototype.nativeScrolling=function(){this.$content.css({WebkitOverflowScrolling:"touch"}),this.iOSNativeScrolling=!0,this.isActive=!0},j.prototype.updateScrollValues=function(){var a,b;a=this.content,this.maxScrollTop=a.scrollHeight-a.clientHeight,this.prevScrollTop=this.contentScrollTop||0,this.contentScrollTop=a.scrollTop,b=this.contentScrollTop>this.previousPosition?"down":this.contentScrollTop<this.previousPosition?"up":"same",this.previousPosition=this.contentScrollTop,"same"!==b&&this.$el.trigger("update",{position:this.contentScrollTop,maximum:this.maxScrollTop,direction:b}),this.iOSNativeScrolling||(this.maxSliderTop=this.paneHeight-this.sliderHeight,this.sliderTop=0===this.maxScrollTop?0:this.contentScrollTop*this.maxSliderTop/this.maxScrollTop)},j.prototype.setOnScrollStyles=function(){var a;B?(a={},a[E]="translate(0, "+this.sliderTop+"px)"):a={top:this.sliderTop},D?(y&&this.scrollRAF&&y(this.scrollRAF),this.scrollRAF=D(function(b){return function(){return b.scrollRAF=null,b.slider.css(a)}}(this))):this.slider.css(a)},j.prototype.createEvents=function(){this.events={down:function(a){return function(b){return a.isBeingDragged=!0,a.offsetY=b.pageY-a.slider.offset().top,a.slider.is(b.target)||(a.offsetY=0),a.pane.addClass("active"),a.doc.bind(n,a.events[h]).bind(o,a.events[w]),a.body.bind(m,a.events[i]),!1}}(this),drag:function(a){return function(b){return a.sliderY=b.pageY-a.$el.offset().top-a.paneTop-(a.offsetY||.5*a.sliderHeight),a.scroll(),a.contentScrollTop>=a.maxScrollTop&&a.prevScrollTop!==a.maxScrollTop?a.$el.trigger("scrollend"):0===a.contentScrollTop&&0!==a.prevScrollTop&&a.$el.trigger("scrolltop"),!1}}(this),up:function(a){return function(){return a.isBeingDragged=!1,a.pane.removeClass("active"),a.doc.unbind(n,a.events[h]).unbind(o,a.events[w]),a.body.unbind(m,a.events[i]),!1}}(this),resize:function(a){return function(){a.reset()}}(this),panedown:function(a){return function(b){return a.sliderY=(b.offsetY||b.originalEvent.layerY)-.5*a.sliderHeight,a.scroll(),a.events.down(b),!1}}(this),scroll:function(a){return function(b){a.updateScrollValues(),a.isBeingDragged||(a.iOSNativeScrolling||(a.sliderY=a.sliderTop,a.setOnScrollStyles()),null!=b&&(a.contentScrollTop>=a.maxScrollTop?(a.options.preventPageScrolling&&a.preventScrolling(b,g),a.prevScrollTop!==a.maxScrollTop&&a.$el.trigger("scrollend")):0===a.contentScrollTop&&(a.options.preventPageScrolling&&a.preventScrolling(b,w),0!==a.prevScrollTop&&a.$el.trigger("scrolltop"))))}}(this),wheel:function(a){return function(b){var c;if(null!=b)return c=b.delta||b.wheelDelta||b.originalEvent&&b.originalEvent.wheelDelta||-b.detail||b.originalEvent&&-b.originalEvent.detail,c&&(a.sliderY+=-c/3),a.scroll(),!1}}(this),enter:function(a){return function(b){var c;if(a.isBeingDragged)return 1!==(b.buttons||b.which)?(c=a.events)[w].apply(c,arguments):void 0}}(this)}},j.prototype.addEvents=function(){var a;this.removeEvents(),a=this.events,this.options.disableResize||this.win.bind(s,a[s]),this.iOSNativeScrolling||(this.slider.bind(l,a[g]),this.pane.bind(l,a[r]).bind(""+p+" "+f,a[x])),this.$content.bind(""+t+" "+p+" "+f+" "+v,a[t])},j.prototype.removeEvents=function(){var a;a=this.events,this.win.unbind(s,a[s]),this.iOSNativeScrolling||(this.slider.unbind(),this.pane.unbind()),this.$content.unbind(""+t+" "+p+" "+f+" "+v,a[t])},j.prototype.generate=function(){var a,c,d,f,g,h,i;return f=this.options,h=f.paneClass,i=f.sliderClass,a=f.contentClass,(g=this.$el.children("."+h)).length||g.children("."+i).length||this.$el.append('<div class="'+h+'"><div class="'+i+'" /></div>'),this.pane=this.$el.children("."+h),this.slider=this.pane.find("."+i),0===e&&C()?(d=b.getComputedStyle(this.content,null).getPropertyValue("padding-right").replace(/[^0-9.]+/g,""),c={right:-14,paddingRight:+d+14}):e&&(c={right:-e},this.$el.addClass("has-scrollbar")),null!=c&&this.$content.css(c),this},j.prototype.restore=function(){this.stopped=!1,this.iOSNativeScrolling||this.pane.show(),this.addEvents()},j.prototype.reset=function(){var a,b,c,f,g,h,i,j,k,l,m,n;return this.iOSNativeScrolling?void(this.contentHeight=this.content.scrollHeight):(this.$el.find("."+this.options.paneClass).length||this.generate().stop(),this.stopped&&this.restore(),a=this.content,f=a.style,g=f.overflowY,d&&this.$content.css({height:this.$content.height()}),b=a.scrollHeight+e,l=parseInt(this.$el.css("max-height"),10),l>0&&(this.$el.height(""),this.$el.height(a.scrollHeight>l?l:a.scrollHeight)),i=this.pane.outerHeight(!1),k=parseInt(this.pane.css("top"),10),h=parseInt(this.pane.css("bottom"),10),j=i+k+h,n=Math.round(j/b*j),n<this.options.sliderMinHeight?n=this.options.sliderMinHeight:null!=this.options.sliderMaxHeight&&n>this.options.sliderMaxHeight&&(n=this.options.sliderMaxHeight),g===t&&f.overflowX!==t&&(n+=e),this.maxSliderTop=j-n,this.contentHeight=b,this.paneHeight=i,this.paneOuterHeight=j,this.sliderHeight=n,this.paneTop=k,this.slider.height(n),this.events.scroll(),this.pane.show(),this.isActive=!0,a.scrollHeight===a.clientHeight||this.pane.outerHeight(!0)>=a.scrollHeight&&g!==t?(this.pane.hide(),this.isActive=!1):this.el.clientHeight===a.scrollHeight&&g===t?this.slider.hide():this.slider.show(),this.pane.css({opacity:this.options.alwaysVisible?1:"",visibility:this.options.alwaysVisible?"visible":""}),c=this.$content.css("position"),("static"===c||"relative"===c)&&(m=parseInt(this.$content.css("right"),10),m&&this.$content.css({right:"",marginRight:m})),this)},j.prototype.scroll=function(){return this.isActive?(this.sliderY=Math.max(0,this.sliderY),this.sliderY=Math.min(this.maxSliderTop,this.sliderY),this.$content.scrollTop(this.maxScrollTop*this.sliderY/this.maxSliderTop),this.iOSNativeScrolling||(this.updateScrollValues(),this.setOnScrollStyles()),this):void 0},j.prototype.scrollBottom=function(a){return this.isActive?(this.$content.scrollTop(this.contentHeight-this.$content.height()-a).trigger(p),this.stop().restore(),this):void 0},j.prototype.scrollTop=function(a){return this.isActive?(this.$content.scrollTop(+a).trigger(p),this.stop().restore(),this):void 0},j.prototype.scrollTo=function(a){return this.isActive?(this.scrollTop(this.$el.find(a).get(0).offsetTop),this):void 0},j.prototype.stop=function(){return y&&this.scrollRAF&&(y(this.scrollRAF),this.scrollRAF=null),this.stopped=!0,this.removeEvents(),this.iOSNativeScrolling||this.pane.hide(),this},j.prototype.destroy=function(){return this.stopped||this.stop(),!this.iOSNativeScrolling&&this.pane.length&&this.pane.remove(),d&&this.$content.height(""),this.$content.removeAttr("tabindex"),this.$el.hasClass("has-scrollbar")&&(this.$el.removeClass("has-scrollbar"),this.$content.css({right:""})),this},j.prototype.flash=function(){return!this.iOSNativeScrolling&&this.isActive?(this.reset(),this.pane.addClass("flashed"),setTimeout(function(a){return function(){a.pane.removeClass("flashed")}}(this),this.options.flashDelay),this):void 0},j}(),a.fn.nanoScroller=function(b){return this.each(function(){var c,d;if((d=this.nanoscroller)||(c=a.extend({},z,b),this.nanoscroller=d=new q(this,c)),b&&"object"==typeof b){if(a.extend(d.options,b),null!=b.scrollBottom)return d.scrollBottom(b.scrollBottom);if(null!=b.scrollTop)return d.scrollTop(b.scrollTop);if(b.scrollTo)return d.scrollTo(b.scrollTo);if("bottom"===b.scroll)return d.scrollBottom(0);if("top"===b.scroll)return d.scrollTop(0);if(b.scroll&&b.scroll instanceof a)return d.scrollTo(b.scroll);if(b.stop)return d.stop();if(b.destroy)return d.destroy();if(b.flash)return d.flash()}return d.reset()})},a.fn.nanoScroller.Constructor=q}(jQuery,window,document);


/* REQUIRED PLUGINS
/* ========================================================================
 * metismenu - v1.1.3 - Easy menu jQuery plugin for Twitter Bootstrap 3
 * https://github.com/onokumus/metisMenu
 *
 * Made by Osman Nuri Okumus
 * Under MIT License */
!function(a,b,c){function d(b,c){this.element=a(b),this.settings=a.extend({},f,c),this._defaults=f,this._name=e,this.init()}var e="metisMenu",f={toggle:!0,doubleTapToGo:!1};d.prototype={init:function(){var b=this.element,d=this.settings.toggle,f=this;this.isIE()<=9?(b.find("li.active").has("ul").children("ul").collapse("show"),b.find("li").not(".active").has("ul").children("ul").collapse("hide")):(b.find("li.active").has("ul").children("ul").addClass("collapse in"),b.find("li").not(".active").has("ul").children("ul").addClass("collapse")),f.settings.doubleTapToGo&&b.find("li.active").has("ul").children("a").addClass("doubleTapToGo"),b.find("li").has("ul").children("a").on("click."+e,function(b){return b.preventDefault(),f.settings.doubleTapToGo&&f.doubleTapToGo(a(this))&&"#"!==a(this).attr("href")&&""!==a(this).attr("href")?(b.stopPropagation(),void(c.location=a(this).attr("href"))):(a(this).parent("li").toggleClass("active").children("ul").collapse("toggle"),void(d&&a(this).parent("li").siblings().removeClass("active").children("ul.in").collapse("hide")))})},isIE:function(){for(var a,b=3,d=c.createElement("div"),e=d.getElementsByTagName("i");d.innerHTML="<!--[if gt IE "+ ++b+"]><i></i><![endif]-->",e[0];)return b>4?b:a},doubleTapToGo:function(a){var b=this.element;return a.hasClass("doubleTapToGo")?(a.removeClass("doubleTapToGo"),!0):a.parent().children("ul").length?(b.find(".doubleTapToGo").removeClass("doubleTapToGo"),a.addClass("doubleTapToGo"),!1):void 0},remove:function(){this.element.off("."+e),this.element.removeData(e)}},a.fn[e]=function(b){return this.each(function(){var c=a(this);c.data(e)&&c.data(e).remove(),c.data(e,new d(this,b))}),this}}(jQuery,window,document);






/* ========================================================================
 * SELECTOR CACHE v.1.0
 * -------------------------------------------------------------------------
 * - themeOn.net -
 * ========================================================================*/
/*
To improve performance and load time, you don't need to create a new variable to get main selector,
for the main selector has been cached and used in all of plugins, just need to call the variables.

Example:
To get selector "#container" maybe you can use

var $container = $ ('# container');
$container.addClass('effect');


For more efficient, simply called "nifty.container".


nifty.container.addClass('effect');


Both of the above methods will produce the same results.

*/

!function ($) {
	"use strict";

	window.nifty = {
		'container'         : $('#container'),
		'contentContainer'  : $('#content-container'),
		'navbar'            : $('#navbar'),
		'mainNav'           : $('#mainnav-container'),
		'aside'             : $('#aside-container'),
		'footer'            : $('#footer'),
		'scrollTop'         : $('#scroll-top'),

		'window'            : $(window),
		'body'              : $('body'),
		'bodyHtml'          : $('body, html'),
		'document'          : $(document),
		'screenSize'        : '', // return value xs, sm, md, lg
		'isMobile'          : function(){
				return ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
		}(),
		'randomInt'         : function(min,max){
			return Math.floor(Math.random()*(max-min+1)+min);
		},
		'transition'          : function(){
			var thisBody = document.body || document.documentElement,
			thisStyle = thisBody.style,
			support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined;
			return support
		}()
	};

	nifty.window.on('load', function(){
		//Activate the Bootstrap tooltips
		var tooltip = $('.add-tooltip');
		if (tooltip.length)tooltip.tooltip();

		var popover = $('.add-popover');
		if (popover.length)popover.popover();


		// STYLEABLE SCROLLBARS
		// =================================================================
		// Require nanoScroller
		// http://jamesflorentino.github.io/nanoScrollerJS/
		// =================================================================
		var nano = $('.nano');
		if(nano.length) nano.nanoScroller({
			preventPageScrolling: true
		});

		// Update nancoscroller
		$('#navbar-container .navbar-top-links').on('shown.bs.dropdown', '.dropdown', function () {
			$(this).find('.nano').nanoScroller({preventPageScrolling: true});
		});


		nifty.body.addClass('nifty-ready');
	});


}(jQuery);



/* ========================================================================
 * MEGA DROPDOWN v1.0.1
 * -------------------------------------------------------------------------
 * By ThemeOn.net
 * ========================================================================*/
!function ($) {
	"use strict";

	var megadropdown = null,
	mega = function(el){
		var megaBtn = el.find('.mega-dropdown-toggle'), megaMenu = el.find('.mega-dropdown-menu');

		megaBtn.on('click', function(e){
			e.preventDefault();
			el.toggleClass('open');
		});
	},
	methods = {
		toggle : function(){
			this.toggleClass('open');
			return null;
		},
		show : function(){
			this.addClass('open');
			return null;
		},
		hide : function(){
			this.removeClass('open');
			return null;
		}
	};

	$.fn.niftyMega = function(method){
		var chk = false;
		this.each(function(){
			if(methods[method]){
				chk = methods[method].apply($(this).find('input'),Array.prototype.slice.call(arguments, 1));
			}else if (typeof method === 'object' || !method) {
				mega($(this));
			};
		});
		return chk;
	};

	nifty.window.on('load', function() {
		megadropdown = $('.mega-dropdown');
		if(megadropdown.length) megadropdown.niftyMega();

		$('html').on('click', function (e) {
			if(megadropdown.length){
				if (!$(e.target).closest('.mega-dropdown').length) {
					megadropdown.removeClass('open');
				}
			}
		});
	});

}(jQuery);





/* ========================================================================
 * PANEL REMOVAL v1.0
 * -------------------------------------------------------------------------
 * Optional Font Icon : By Font Awesome
 * http://fortawesome.github.io/Font-Awesome/
 * ========================================================================*/
!function ($) {
	"use strict";

	nifty.window.on('load', function() {
		var closebtn = $('[data-dismiss="panel"]');

		if (closebtn.length) {
			closebtn.one('click', function(e){
				e.preventDefault();
				var el = $(this).parents('.panel');

				el.addClass('remove').on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e){
					if (e.originalEvent.propertyName == "opacity") {
						el.remove();
					}
				});
			});
		}
	});

}(jQuery);





 /* ========================================================================
 * SCROLL TO TOP BUTTON v1.0
 * -------------------------------------------------------------------------
 * Optional Font Icon : By Font Awesome
 * http://fortawesome.github.io/Font-Awesome/
 * ========================================================================*/
!function ($) {
	"use strict";

	nifty.window.one('load', function(){
		if (nifty.scrollTop.length && !nifty.isMobile) {
			var isVisible = true;
			var offsetTop = 250;

			nifty.window.scroll(function(){
				if (nifty.window.scrollTop() > offsetTop && !isVisible) {
					nifty.navbar.addClass('shadow');
					nifty.scrollTop.addClass('in');
					isVisible = true;
				}else if (nifty.window.scrollTop() < offsetTop && isVisible) {
					nifty.navbar.removeClass('shadow');
					nifty.scrollTop.removeClass('in');
					isVisible = false;
				}
			});

			nifty.scrollTop.on('click', function(e){
				e.preventDefault();

				nifty.bodyHtml.animate({
					scrollTop : 0
				}, 500);
			});

		}
	});



}(jQuery)






/* ========================================================================
 * NIFTY OVERLAY v1.0
 * -------------------------------------------------------------------------
 * Optional Font Icon : By Font Awesome
 * http://fortawesome.github.io/Font-Awesome/
 * ========================================================================*/
!function ($) {
	"use strict";

	var defaults = {
		'displayIcon'	: true,
		// DESC	 		: Should we display the icon or not.
		// VALUE	 	: true or false
		// TYPE 	 	: Boolean


		'iconColor'		: 'text-dark',
		// DESC	 		: The color of the icon..
		// VALUE	 	: text-light || text-primary || text-info || text-success || text-warning || text-danger || text-mint || text-purple || text-pink || text-dark
		// TYPE 	 	: String

		'iconClass'		: 'fa fa-refresh fa-spin fa-2x',
		// DESC  		: Class name of the font awesome icons", Currently we use font-awesome for default value.
		// VALUE 		: (Icon Class Name)
		// TYPE			: String


		'title'			: '',
		// DESC			: Overlay title
		// TYPE			: String

		'desc'			: ''
		// DESC			: Descrition
		// TYPE			: String


	},
	uID = function() {
		return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
	},
	methods = {
		'show' : function(el){
			var target = $(el.attr('data-target')),
			ovId = 'nifty-overlay-' + uID() + uID()+"-" + uID(),
			panelOv = $('<div id="'+ ovId +'" class="panel-overlay"></div>');

			el.prop('disabled', true).data('niftyOverlay',ovId);
			target.addClass('panel-overlay-wrap');
			panelOv.appendTo(target).html(el.data('overlayTemplate'));
			return null;
		},
		'hide': function(el){
			var target = $(el.attr('data-target'));
			var boxLoad = $('#'+ el.data('niftyOverlay'));

			if (boxLoad.length) {
				el.prop('disabled', false);
				target.removeClass('panel-overlay-wrap');
				boxLoad.hide().remove();
			}
			return null;
		}
	},
	loadBox = function(el,options){
		if (el.data('overlayTemplate')) {
			return null;
		}
		var opt = $.extend({},defaults,options),
		icon = (opt.displayIcon)?'<span class="panel-overlay-icon '+opt.iconColor+'"><i class="'+opt.iconClass+'"></i></span>':'';
		el.data('overlayTemplate', '<div class="panel-overlay-content pad-all unselectable">'+icon+'<h4 class="panel-overlay-title">'+opt.title+'</h4><p>'+opt.desc+'</p></div>');
		return null;
	};

	$.fn.niftyOverlay = function(method){
		if (methods[method]){
			return methods[method](this);
		}else if (typeof method === 'object' || !method) {
			return this.each(function () {
				loadBox($(this), method);
			});
		}
		return null;
	};

}(jQuery);






/* ========================================================================
 * NIFTY NOTIFICATION v1.1
 * -------------------------------------------------------------------------
 * By ThemeOn.net
 * ========================================================================*/
!function ($) {
	"use strict";

	var pageHolder, floatContainer = {}, notyContainer, addNew = false;
	$.niftyNoty = function(options){
		var defaults = {
			type        : 'primary',
			// DESC     : Specify style for the alerts.
			// VALUE    : primary || info || success || warning || danger || mint || purple || pink ||  dark
			// TYPE     : String


			icon        : '',
			// DESC     : Icon class names
			// VALUE    : (Icon Class Name)
			// TYPE     : String


			title       : '',
			// VALUE    : (The title of the alert)
			// TYPE     : String

			message     : '',
			// VALUE    : (Message of the alert.)
			// TYPE     : String


			closeBtn    : true,
			// VALUE    : Show or hide the close button.
			// TYPE     : Boolean



			container   : 'page',
			// DESC     : This option is particularly useful in that it allows you to position the notification.
			// VALUE    : page || floating ||  "specified target name"
			// TYPE     : STRING


			floating    : {
				position    : 'top-right',
				// Floating position.
				// Currently only supports "top-right". We will make further development for the next version.


				animationIn : 'jellyIn',
				// Please use the animated class name from animate.css

				animationOut: 'fadeOut'
				// Please use the animated class name from animate.css

			},

			html        : null,
			// Insert HTML into the notification.  If false, jQuery's text method will be used to insert content into the DOM.


			focus       : true,
			//Scroll to the notification


			timer       : 0
			// DESC     : To enable the "auto close" alerts, please specify the time to show the alert before it closed.
			// VALUE    : Value is in milliseconds. (0 to disable the autoclose.)
			// TYPE     : Number

		},
		opt = $.extend({},defaults, options ), el = $('<div class="alert-wrap"></div>'),
		iconTemplate = function(){
			var icon = '';
			if (options && options.icon) {
				icon = '<div class="media-left"><span class="icon-wrap icon-wrap-xs icon-circle alert-icon"><i class="'+ opt.icon +'"></i></span></div>';
			}
			return icon;
		},
		alertTimer,
		template = function(){
			var clsBtn = opt.closeBtn ? '<button class="close" type="button"><i class="fa fa-times-circle"></i></button>' : '';
			var defTemplate = '<div class="alert alert-'+ opt.type + '" role="alert">'+ clsBtn + '<div class="media">';
			if (!opt.html) {
				return defTemplate + iconTemplate() + '<div class="media-body"><h4 class="alert-title">'+ opt.title +'</h4><p class="alert-message">'+ opt.message +'</p></div></div>';
			}
			return defTemplate + opt.html +'</div></div>';
		}(),
		closeAlert = function(e){
			if (opt.container === 'floating' && opt.floating.animationOut) {
				el.removeClass(opt.floating.animationIn).addClass(opt.floating.animationOut);
				if (!nifty.transition) {
					el.remove();
				}
			}

			el.removeClass('in').on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e){
				if (e.originalEvent.propertyName == "max-height") {
					el.remove();
				}
			});
			clearInterval(alertTimer);
			return null;
		},
		focusElement = function(pos){
			nifty.bodyHtml.animate({scrollTop: pos}, 300, function(){
				el.addClass('in');
			});
		},
		init = function(){
			if (opt.container === 'page') {
				if (!pageHolder) {
					pageHolder = $('<div id="page-alert"></div>');
					nifty.contentContainer.prepend(pageHolder);
				};

				notyContainer = pageHolder;
				if (opt.focus) focusElement(0);

			}else if (opt.container === 'floating') {
				if (!floatContainer[opt.floating.position]) {
					floatContainer[opt.floating.position] = $('<div id="floating-' + opt.floating.position + '" class="floating-container"></div>');
					nifty.container.append(floatContainer[opt.floating.position]);
				}

				notyContainer = floatContainer[opt.floating.position];

				if (opt.floating.animationIn) el.addClass('in animated ' + opt.floating.animationIn );
				opt.focus = false;
			}else {
				var $ct =  $(opt.container);
				var $panelct = $ct.children('.panel-alert');
				var $panelhd = $ct.children('.panel-heading');

				if (!$ct.length) {
					addNew = false;
					return false;
				}


				if(!$panelct.length){
					notyContainer = $('<div class="panel-alert"></div>');
					if($panelhd.length){
						$panelhd.after(notyContainer);
					}else{
						$ct.prepend(notyContainer)
					}
				}else{
					notyContainer = $panelct;
				}

				if (opt.focus) focusElement($ct.offset().top - 30);

			}
			addNew = true;
			return false;
		}();

		if (addNew) {
			notyContainer.append(el.html(template));
			el.find('[data-dismiss="noty"]').one('click', closeAlert);
			if(opt.closeBtn) el.find('.close').one('click', closeAlert);
			if (opt.timer > 0)alertTimer = setInterval(closeAlert, opt.timer);
			if (!opt.focus) var addIn = setInterval(function(){el.addClass('in');clearInterval(addIn);},200);
		}
	};

}(jQuery);



/* ========================================================================
 * NIFTY CHECK v1.1
 * -------------------------------------------------------------------------
 * - ThemeOn.net -
 * ========================================================================*/
!function ($) {
	"use strict";

	var allFormEl,
	formElement = function(el){
		if (el.data('nifty-check')){
			return;
		}else{
			el.data('nifty-check', true);
			if (el.text().trim().length){
				el.addClass("form-text");
			}else{
				el.removeClass("form-text");
			}
		}


		var input 	= el.find('input')[0],
		groupName 	= input.name,
		$groupInput	= function(){
			if (input.type == 'radio' && groupName) {
				return $('.form-radio').not(el).find('input').filter('input[name='+groupName+']').parent();
			}else{
				return false;
			}
		}(),
		changed = function(){
			if(input.type == 'radio' && $groupInput.length) {
				$groupInput.each(function(){
					var $gi = $(this);
					if ($gi.hasClass('active')) $gi.trigger('nifty.ch.unchecked');
					$gi.removeClass('active');
				});
			}


			if (input.checked) {
				el.addClass('active').trigger('nifty.ch.checked');
			}else{
				el.removeClass('active').trigger('nifty.ch.unchecked');
			}
		};

		if (input.checked) {
			el.addClass('active');
		}else{
			el.removeClass('active');
		}

		$(input).on('change', changed);
	},
	methods = {
		isChecked : function(){
			return this[0].checked;
		},
		toggle : function(){
			this[0].checked = !this[0].checked;
			this.trigger('change');
			return null;
		},
		toggleOn : function(){
			if(!this[0].checked){
				this[0].checked = true;
				this.trigger('change');
			}
			return null;
		},
		toggleOff : function(){
			if(this[0].checked && this[0].type == 'checkbox'){
				this[0].checked = false;
				this.trigger('change');
			}
			return null;
		}
	};

	$.fn.niftyCheck = function(method){
		var chk = false;
		this.each(function(){
			if(methods[method]){
				chk = methods[method].apply($(this).find('input'),Array.prototype.slice.call(arguments, 1));
			}else if (typeof method === 'object' || !method) {
				formElement($(this));
			};
		});
		return chk;
	};

	nifty.document.ready(function() {
		allFormEl = $('.form-checkbox, .form-radio');
		if(allFormEl.length) allFormEl.niftyCheck();
	});

	nifty.document.on('change', '.btn-file :file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, ''),
		size = function(){
			try{
				return input[0].files[0].size;
			}catch(err){
				return 'Nan';
			}
		}(),
		fileSize = function(){
			if (size == 'Nan' ) {
				return "Unknown";
			}
			var rSize = Math.floor( Math.log(size) / Math.log(1024) );
			return ( size / Math.pow(1024, rSize) ).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][rSize];
		}();



		input.trigger('fileselect', [numFiles, label, fileSize]);
	});
}(jQuery);



// NAVIGATION SHORTCUT BUTTONS
// =================================================================
// Require Bootstrap Popover
// http://getbootstrap.com/javascript/#popovers
// =================================================================
!function ($) {
	nifty.window.on('load', function() {
		var shortcutBtn = $('#mainnav-shortcut');

		if (shortcutBtn.length) {
			shortcutBtn.find('li').each(function () {
				var $el = $(this);
				$el.popover({
					animation:false,
					trigger: 'hover focus',
					placement: 'bottom',
					container: '#mainnav-container',
					template: '<div class="popover mainnav-shortcut"><div class="arrow"></div><div class="popover-content"></div>'
				});
			});
		}
	});
}(jQuery);




 /* ========================================================================
 * NIFTY NAVIGATION v1.2.1
 * -------------------------------------------------------------------------
 *
 * Require Bootstrap Popover
 * http://getbootstrap.com/javascript/#popovers
 *
 * Require jQuery Resize End
 * https://github.com/nielse63/jQuery-ResizeEnd
 *
 * ========================================================================*/

/*! jQuery resizeEnd Event v1.0.1 - Copyright (c) 2013 Giuseppe Gurgone - License http://git.io/iRQs3g */
!function($,e){var t={};t.eventName="resizeEnd",t.delay=250,t.poll=function(){var n=$(this),a=n.data(t.eventName);a.timeoutId&&e.clearTimeout(a.timeoutId),a.timeoutId=e.setTimeout(function(){n.trigger(t.eventName)},t.delay)},$.event.special[t.eventName]={setup:function(){var e=$(this);e.data(t.eventName,{}),e.on("resize",t.poll)},teardown:function(){var n=$(this),a=n.data(t.eventName);a.timeoutId&&e.clearTimeout(a.timeoutId),n.removeData(t.eventName),n.off("resize",t.poll)}},$.fn[t.eventName]=function(e,n){return arguments.length>0?this.on(t.eventName,null,e,n):this.trigger(t.eventName)}}(jQuery,this);

!function ($) {
	"use strict";


	var $menulink           = $('#mainnav-menu > li > a, #mainnav-menu-wrap .mainnav-widget a[data-toggle="menu-widget"]'),
	mainNavHeight           = $('#mainnav').height(),
	scrollbar				= null,
	updateMethod            = false,
	isSmallNav              = false,
	screenCat               = null,
	defaultSize             = null,


	// Determine and bind hover or "touch" event
	// ===============================================
	bindSmallNav = function(){
		var hidePopover;

		$menulink.each(function(){
			var $el             = $(this),
			$listTitle          = $el.children('.menu-title'),
			$listSub            = $el.siblings('.collapse'),
			$listWidget         = $($el.attr('data-target')),
			$listWidgetParent   = ($listWidget.length)?$listWidget.parent():null,
			$popover            = null,
			$poptitle			= null,
			$popcontent         = null,
			$popoverSub         = null,
			popoverPosBottom    = 0,
			popoverCssBottom    = 0,
			elPadding           = $el.outerHeight() - $el.height()/4,
			listSubScroll       = false,
			elHasSub            = function(){
				if ($listWidget.length){
					$el.on('click', function(e){e.preventDefault()});
				}
				if ($listSub.length){
					//$listSub.removeClass('in').removeAttr('style');
					$el.on('click', function(e){e.preventDefault()}).parent('li').removeClass('active');
					return true;
				}else{
					return false;
				}
			}(),
			updateScrollInterval = null,
			updateScrollBar		 = function(el){
				clearInterval(updateScrollInterval);
				updateScrollInterval = setInterval(function(){
					el.nanoScroller({
						preventPageScrolling : true,
						alwaysVisible: true
					});
					clearInterval(updateScrollInterval);
				},700);
			};

			$(document).click(function(event) {
				if(!$(event.target).closest('#mainnav-container').length) {
					$el.removeClass('hover').popover('hide');
				}
			});

			$('#mainnav-menu-wrap > .nano').on("update", function(event, values){
				$el.removeClass('hover').popover('hide');
			});


			$el.popover({
				animation       : false,
				trigger         : 'manual',
				container       : '#mainnav',
				viewport		: $el,
				html            : true,
				title           : function(){
					if (elHasSub) return $listTitle.html();
					return null
				},
				content         : function(){
					var $content;
					if (elHasSub){
						$content = $('<div class="sub-menu"></div>');
						$listSub.addClass('pop-in').wrap('<div class="nano-content"></div>').parent().appendTo($content);
					}else if($listWidget.length){
						$content = $('<div class="sidebar-widget-popover"></div>');
						$listWidget.wrap('<div class="nano-content"></div>').parent().appendTo($content);
					}else{
						$content = '<span class="single-content">' + $listTitle.html() + '</span>';
					}
					return $content;
				},
				template: '<div class="popover menu-popover"><h4 class="popover-title"></h4><div class="popover-content"></div></div>'
			}).on('show.bs.popover', function () {
				if(!$popover){
					$popover = $el.data('bs.popover').tip();
					$poptitle = $popover.find('.popover-title');
					$popcontent = $popover.children('.popover-content');

					if (!elHasSub && $listWidget.length == 0)return;
					$popoverSub = $popcontent.children('.sub-menu');
				}
				if (!elHasSub && $listWidget.length == 0)return;
			}).
			on('shown.bs.popover', function () {
				if (!elHasSub && $listWidget.length == 0){
					var margintop = 0 - (0.5 * $el.outerHeight());
					$popcontent.css({'margin-top': margintop + 'px', 'width' : 'auto'});
					return;
				}


				var offsetTop 		= parseInt($popover.css('top')),
				elHeight		= $el.outerHeight(),
				offsetBottom 	= function(){
					if(nifty.container.hasClass('mainnav-fixed')){
						return $(window).outerHeight() - offsetTop - elHeight;
					}else{
						return $(document).height() - offsetTop - elHeight;
					}
				}(),
				popoverHeight	= $popcontent.find('.nano-content').children().css('height','auto').outerHeight();
				$popcontent.find('.nano-content').children().css('height','');



				if( offsetTop > offsetBottom){
					if($poptitle.length && !$poptitle.is(':visible')) elHeight = Math.round(0 - (0.5 * elHeight));
					offsetTop -= 5;
					$popcontent.css({'top': '','bottom': elHeight+'px', 'height': offsetTop}).children().addClass('nano').css({'width':'100%'}).nanoScroller({
						preventPageScrolling : true
					});
					updateScrollBar($popcontent.find('.nano'));
				}else{
					if(!nifty.container.hasClass('navbar-fixed') && nifty.mainNav.hasClass('affix-top')) offsetBottom -= 50;
					if(popoverHeight > offsetBottom){
						if(nifty.container.hasClass('navbar-fixed') || nifty.mainNav.hasClass('affix-top')) offsetBottom -= (elHeight + 5);

						offsetBottom -= 5;
						$popcontent.css({'top':elHeight+'px', 'bottom':'', 'height': offsetBottom}).children().addClass('nano').css({'width':'100%'}).nanoScroller({
							preventPageScrolling : true
						});

						updateScrollBar($popcontent.find('.nano'));
					}else{
						if($poptitle.length && !$poptitle.is(':visible')) elHeight = Math.round(0 - (0.5 * elHeight));
						$popcontent.css({'top':elHeight+'px', 'bottom':'', 'height': 'auto'});
					}
				}
				if($poptitle.length) $poptitle.css('height',$el.outerHeight());
				$popcontent.on('click', function(){
					$popcontent.find('.nano-pane').hide();
					updateScrollBar($popcontent.find('.nano'));
				});
			})
			.on('hidden.bs.popover', function () {
				// detach from popover, fire event then clean up data
				$el.removeClass('hover');
				if (elHasSub) {
					$listSub.removeAttr('style').appendTo($el.parent());
				}else if($listWidget.length){
					$listWidget.appendTo($listWidgetParent);
				}
				clearInterval(hidePopover);
			})
			.on('click', function(){
				if(!nifty.container.hasClass('mainnav-sm')) return;
				$menulink.popover('hide');
				$el.addClass('hover').popover('show');
			})
			.hover(
				function(){
					$menulink.popover('hide');
					$el.addClass('hover').popover('show');
				},
				function(){
					clearInterval(hidePopover);
					hidePopover = setInterval(function(){
						if ($popover) {
							$popover.one('mouseleave', function(){
								$el.removeClass('hover').popover('hide');
							});
							if(!$popover.is(":hover")){
								$el.removeClass('hover').popover('hide');
							}
						};
						clearInterval(hidePopover);
					}, 500);
				}
			);
		});
		isSmallNav = true;
	},
	unbindSmallNav = function(){
		var colapsed = $('#mainnav-menu').find('.collapse');
		if(colapsed.length){
			colapsed.each(function(){
				var cl = $(this);
				if (cl.hasClass('in')){
					cl.parent('li').addClass('active');
				}else{
					cl.parent('li').removeClass('active');
				}
			});
		}
		if(scrollbar != null && scrollbar.length){
			scrollbar.nanoScroller({stop : true});
		}

		$menulink.popover('destroy').unbind('mouseenter mouseleave');
		isSmallNav = false;
	},
	updateSize = function(){
		//if(!defaultSize) return;

		var sw = nifty.container.width(), currentScreen;


		if (sw <= 740) {
			currentScreen = 'xs';
		}else if (sw > 740 && sw < 992) {
			currentScreen = 'sm';
		}else if (sw >= 992 && sw <= 1200 ) {
			currentScreen = 'md';
		}else{
			currentScreen = 'lg';
		}

		if (screenCat != currentScreen){
			screenCat = currentScreen;
			nifty.screenSize = currentScreen;

			if(nifty.screenSize == 'sm' && nifty.container.hasClass('mainnav-lg')){
				$.niftyNav('collapse');
			}
		}
	},
	updateNav = function(e){
		nifty.mainNav.niftyAffix('update');

		unbindSmallNav();
		updateSize();

		if (updateMethod == 'collapse' || nifty.container.hasClass('mainnav-sm') ) {
			nifty.container.removeClass('mainnav-in mainnav-out mainnav-lg');
			bindSmallNav();
		}

		mainNavHeight = $('#mainnav').height();
		updateMethod = false;
		return null;
	},
	init = function(){
		if (!defaultSize) {
			defaultSize = {
				xs : 'mainnav-out',
				sm : nifty.mainNav.data('sm') || nifty.mainNav.data('all'),
				md : nifty.mainNav.data('md') || nifty.mainNav.data('all'),
				lg : nifty.mainNav.data('lg') || nifty.mainNav.data('all')
			}

			var hasData = false;
			for (var item in defaultSize) {
				if (defaultSize[item]) {
					hasData = true;
					break;
				}
			}

			if (!hasData) defaultSize = null;
			updateSize();
		}
	},
	methods = {
		'revealToggle' : function(){
			if (!nifty.container.hasClass('reveal')) nifty.container.addClass('reveal');
			nifty.container.toggleClass('mainnav-in mainnav-out').removeClass('mainnav-lg mainnav-sm')
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'revealIn' : function(){
			if (!nifty.container.hasClass('reveal')) nifty.container.addClass('reveal');
			nifty.container.addClass('mainnav-in').removeClass('mainnav-out mainnav-lg mainnav-sm');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'revealOut' : function(){
			if (!nifty.container.hasClass('reveal')) nifty.container.addClass('reveal');
			nifty.container.removeClass('mainnav-in mainnav-lg mainnav-sm').addClass('mainnav-out');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'slideToggle' : function(){
			if (!nifty.container.hasClass('slide')) nifty.container.addClass('slide');
			nifty.container.toggleClass('mainnav-in mainnav-out').removeClass('mainnav-lg mainnav-sm')
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'slideIn' : function(){
			if (!nifty.container.hasClass('slide')) nifty.container.addClass('slide');
			nifty.container.addClass('mainnav-in').removeClass('mainnav-out mainnav-lg mainnav-sm');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'slideOut' : function(){
			if (!nifty.container.hasClass('slide')) nifty.container.addClass('slide');
			nifty.container.removeClass('mainnav-in mainnav-lg mainnav-sm').addClass('mainnav-out');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'pushToggle' : function(){
			nifty.container.toggleClass('mainnav-in mainnav-out').removeClass('mainnav-lg mainnav-sm');
			if (nifty.container.hasClass('mainnav-in mainnav-out')) nifty.container.removeClass('mainnav-in');
			//if (nifty.container.hasClass('mainnav-in')) //nifty.container.removeClass('aside-in');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'pushIn' : function(){
			nifty.container.addClass('mainnav-in').removeClass('mainnav-out mainnav-lg mainnav-sm');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'pushOut' : function(){
			nifty.container.removeClass('mainnav-in mainnav-lg mainnav-sm').addClass('mainnav-out');
			if(isSmallNav) unbindSmallNav();
			return;
		},
		'colExpToggle' : function(){
			if (nifty.container.hasClass('mainnav-lg mainnav-sm')) nifty.container.removeClass('mainnav-lg');
			nifty.container.toggleClass('mainnav-lg mainnav-sm').removeClass('mainnav-in mainnav-out');
			return nifty.window.trigger('resize');
		},
		'collapse' : function(){
			nifty.container.addClass('mainnav-sm').removeClass('mainnav-lg mainnav-in mainnav-out');
			updateMethod = 'collapse';
			return nifty.window.trigger('resize');
		},
		'expand' : function(){
			nifty.container.removeClass('mainnav-sm mainnav-in mainnav-out').addClass('mainnav-lg');
			return nifty.window.trigger('resize');
		},
		'togglePosition' : function(){
			nifty.container.toggleClass('mainnav-fixed');
			nifty.mainNav.niftyAffix('update');
		},
		'fixedPosition' : function(){
			nifty.container.addClass('mainnav-fixed');
			nifty.mainNav.niftyAffix('update');
		},
		'staticPosition' : function(){
			nifty.container.removeClass('mainnav-fixed');
			nifty.mainNav.niftyAffix('update');
		},
		'update' : updateNav,
		'forceUpdate':updateSize,
		'getScreenSize' : function(){
			return screenCat
		}
	};


	$.niftyNav = function(method,complete){
		if (methods[method]){
			if(method == 'colExpToggle' || method == 'expand' || method == 'collapse'){
				if(nifty.screenSize == 'xs' && method == 'collapse'){
					method = 'pushOut';
				}else if((nifty.screenSize == 'xs' || nifty.screenSize == 'sm') && (method=='colExpToggle' || method == 'expand') && nifty.container.hasClass('mainnav-sm')){
					method = 'pushIn';
				}
			}
			var val = methods[method].apply(this,Array.prototype.slice.call(arguments, 1));
			if(complete) return complete();
			else if (val) return val;
		}
		return null;
	};



	$.fn.isOnScreen = function(){
		var viewport = {
			top : nifty.window.scrollTop(),
			left : nifty.window.scrollLeft()
		};
		viewport.right = viewport.left + nifty.window.width();
		viewport.bottom = viewport.top + nifty.window.height();

		var bounds = this.offset();
		bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight();

		return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.bottom || viewport.top > bounds.top));

	};

	nifty.window.on('resizeEnd',updateNav).trigger('resize');


	nifty.window.on('load', function() {
		var toggleBtn = $('.mainnav-toggle');
		if(toggleBtn.length){
			toggleBtn.on('click', function(e){
				e.preventDefault();

				if(toggleBtn.hasClass('push')){
				 	 $.niftyNav('pushToggle');
				}else if(toggleBtn.hasClass('slide')){
					$.niftyNav('slideToggle');
				}else if(toggleBtn.hasClass('reveal')){
					$.niftyNav('revealToggle');
				}else{
					$.niftyNav('colExpToggle');
				}
			}
		)}

		var menu = $('#mainnav-menu');
		if (menu.length) {
			// COLLAPSIBLE MENU LIST
			// =================================================================
			// Require MetisMenu
			// http://demo.onokumus.com/metisMenu/
			// =================================================================
			$('#mainnav-menu').metisMenu({
				toggle: true
			});

			// STYLEABLE SCROLLBARS
			// =================================================================
			// Require nanoScroller
			// http://jamesflorentino.github.io/nanoScrollerJS/
			// =================================================================
			scrollbar = nifty.mainNav.find('.nano');
			if(scrollbar.length){
				scrollbar.nanoScroller({
					preventPageScrolling : true
				});
			}

		}

	});
 }(jQuery);






/* ========================================================================
 * NIFTY ASIDE v1.0.1
 * -------------------------------------------------------------------------
 * - ThemeOn.net -
 * ========================================================================*/

!function ($) {
	"use strict";

	var asideMethods = {
		'toggleHideShow' : function(){
			nifty.container.toggleClass('aside-in');
			nifty.window.trigger('resize');
			if(nifty.container.hasClass('aside-in')){
				toggleNav();
			}
		},
		'show' : function(){
			nifty.container.addClass('aside-in');
			nifty.window.trigger('resize');
			toggleNav();
		},
		'hide' : function(){
			nifty.container.removeClass('aside-in');
			nifty.window.trigger('resize');
		},
		'toggleAlign' : function(){
			nifty.container.toggleClass('aside-left');
			nifty.aside.niftyAffix('update');
		},
		'alignLeft' : function(){
			nifty.container.addClass('aside-left');
			nifty.aside.niftyAffix('update');
		},
		'alignRight' : function(){
			nifty.container.removeClass('aside-left');
			nifty.aside.niftyAffix('update');
		},
		'togglePosition' : function(){
			nifty.container.toggleClass('aside-fixed');
			nifty.aside.niftyAffix('update');
		},
		'fixedPosition' : function(){
			nifty.container.addClass('aside-fixed');
			nifty.aside.niftyAffix('update');
		},
		'staticPosition' : function(){
			nifty.container.removeClass('aside-fixed');
			nifty.aside.niftyAffix('update');
		},
		'toggleTheme' : function(){
			nifty.container.toggleClass('aside-bright');
		},
		'brightTheme' : function(){
			nifty.container.addClass('aside-bright');
		},
		'darkTheme' : function(){
			nifty.container.removeClass('aside-bright');
		}
	},
	toggleNav = function(){
		if(nifty.container.hasClass('mainnav-in') && nifty.screenSize != 'xs'){
			if(nifty.screenSize == 'sm'){
				$.niftyNav('collapse');
			}else{
				nifty.container.removeClass('mainnav-in mainnav-lg mainnav-sm').addClass('mainnav-out');
			}
		}
	};



	$.niftyAside = function(method,complete){
		if (asideMethods[method]){
			asideMethods[method].apply(this,Array.prototype.slice.call(arguments, 1));
			if(complete) return complete();
		}
		return null;
	}

	nifty.window.on('load', function() {
		if(nifty.aside.length){
			// STYLEABLE SCROLLBARS
			// =================================================================
			// Require nanoScroller
			// http://jamesflorentino.github.io/nanoScrollerJS/
			// =================================================================
			nifty.aside.find('.nano').nanoScroller({
				preventPageScrolling : true,
				alwaysVisible: false
			});

			var toggleBtn = $('.aside-toggle');
			if(toggleBtn.length){
				toggleBtn.on('click', function(e){
					$.niftyAside('toggleHideShow');
				}
			)}
		}
	});

}(jQuery);



/* ========================================================================
* NIFTY LANGUAGE SELECTOR v1.0
* -------------------------------------------------------------------------
* Require Bootstrap Dropdowns
* http://getbootstrap.com/components/#dropdowns
* ========================================================================*/

!function ($) {
	"use strict";

	var defaults = {
		'dynamicMode'       : true,
		'selectedOn'        : null,
		'onChange'          : null
	},

	langSelector = function(el, opt){
		var options = $.extend({},defaults, opt );
		var $el = el.find('.lang-selected'),
		$langMenu = $el.parent('.lang-selector').siblings('.dropdown-menu'),
		$langBtn = $langMenu.find('a'),
		selectedID = $langBtn.filter('.active').find('.lang-id').text(),
		selectedName = $langBtn.filter('.active').find('.lang-name').text();

		var changeTo = function(te){
			$langBtn.removeClass('active');
			te.addClass('active');
			$el.html(te.html());

			selectedID = te.find('.lang-id').text();
			selectedName = te.find('.lang-name').text();
			el.trigger('onChange', [{id:selectedID, name : selectedName}]);



			if(typeof options.onChange == 'function'){
				options.onChange.call(this, {id:selectedID, name : selectedName});
			}
		};


		$langBtn.on('click', function(e){
			if (options.dynamicMode) {
				e.preventDefault();
				e.stopPropagation();
			};

			el.dropdown('toggle');
			changeTo($(this));
		});


		if (options.selectedOn) changeTo( $(options.selectedOn) );

	},
	methods = {
		'getSelectedID' : function(){
			return $(this).find('.lang-id').text();
		},
		'getSelectedName' : function(){
			return $(this).find('.lang-name').text();
		},
		'getSelected' :function(){
			var el = $(this);
			return {id:el.find('.lang-id').text() ,name:el.find('.lang-name').text()};
		},
		'setDisable' : function(){
			$(this).addClass('disabled');
			return null;
		},
		'setEnable' : function(el){
			$(this).removeClass('disabled');
			return null;
		}
	};

	$.fn.niftyLanguage = function(method){
		var chk = false;
		this.each(function(){
			if(methods[method]){
				chk = methods[method].apply(this,Array.prototype.slice.call(arguments, 1));
			}else if (typeof method === 'object' || !method) {
				langSelector($(this), method);
			};
		});
		return chk;
	}
}(jQuery);





/* ========================================================================
* NIFTY AFFIX v1.0
* -------------------------------------------------------------------------
* Require Bootstrap Affix
* http://getbootstrap.com/javascript/#affix
* ========================================================================*/

!function ($) {
	"use strict";

	$.fn.niftyAffix = function(method){
		return this.each(function(){
			var el = $(this), className;

			if (typeof method === 'object' || !method){
				className = method.className;
				el.data('nifty.af.class', method.className);
			}else if (method == 'update') {
				className = el.data('nifty.af.class');
			}

			if (nifty.container.hasClass(className) && !nifty.container.hasClass('navbar-fixed') ) {
				el.affix({
					offset:{
					top:$('#navbar').outerHeight()
					}
				});
			}else if (!nifty.container.hasClass(className) || nifty.container.hasClass('navbar-fixed')) {
				nifty.window.off(el.attr('id') +'.affix');
				el.removeClass('affix affix-top affix-bottom').removeData('bs.affix');
			}
		});
	}


	nifty.window.on('load', function(){
		if (nifty.mainNav.length) {
			nifty.mainNav.niftyAffix({className : 'mainnav-fixed'});
		}

		if (nifty.aside.length) {
			nifty.aside.niftyAffix({className : 'aside-fixed'});
		}
	});

}(jQuery);

var defaultDiacriticsRemovalMap = [
    {'base':'A', 'letters':/[\u0041\u24B6\uFF21\u00C0\u00C1\u00C2\u1EA6\u1EA4\u1EAA\u1EA8\u00C3\u0100\u0102\u1EB0\u1EAE\u1EB4\u1EB2\u0226\u01E0\u00C4\u01DE\u1EA2\u00C5\u01FA\u01CD\u0200\u0202\u1EA0\u1EAC\u1EB6\u1E00\u0104\u023A\u2C6F]/g},
    {'base':'AA','letters':/[\uA732]/g},
    {'base':'AE','letters':/[\u00C6\u01FC\u01E2]/g},
    {'base':'AO','letters':/[\uA734]/g},
    {'base':'AU','letters':/[\uA736]/g},
    {'base':'AV','letters':/[\uA738\uA73A]/g},
    {'base':'AY','letters':/[\uA73C]/g},
    {'base':'B', 'letters':/[\u0042\u24B7\uFF22\u1E02\u1E04\u1E06\u0243\u0182\u0181]/g},
    {'base':'C', 'letters':/[\u0043\u24B8\uFF23\u0106\u0108\u010A\u010C\u00C7\u1E08\u0187\u023B\uA73E]/g},
    {'base':'D', 'letters':/[\u0044\u24B9\uFF24\u1E0A\u010E\u1E0C\u1E10\u1E12\u1E0E\u0110\u018B\u018A\u0189\uA779]/g},
    {'base':'DZ','letters':/[\u01F1\u01C4]/g},
    {'base':'Dz','letters':/[\u01F2\u01C5]/g},
    {'base':'E', 'letters':/[\u0045\u24BA\uFF25\u00C8\u00C9\u00CA\u1EC0\u1EBE\u1EC4\u1EC2\u1EBC\u0112\u1E14\u1E16\u0114\u0116\u00CB\u1EBA\u011A\u0204\u0206\u1EB8\u1EC6\u0228\u1E1C\u0118\u1E18\u1E1A\u0190\u018E]/g},
    {'base':'F', 'letters':/[\u0046\u24BB\uFF26\u1E1E\u0191\uA77B]/g},
    {'base':'G', 'letters':/[\u0047\u24BC\uFF27\u01F4\u011C\u1E20\u011E\u0120\u01E6\u0122\u01E4\u0193\uA7A0\uA77D\uA77E]/g},
    {'base':'H', 'letters':/[\u0048\u24BD\uFF28\u0124\u1E22\u1E26\u021E\u1E24\u1E28\u1E2A\u0126\u2C67\u2C75\uA78D]/g},
    {'base':'I', 'letters':/[\u0049\u24BE\uFF29\u00CC\u00CD\u00CE\u0128\u012A\u012C\u0130\u00CF\u1E2E\u1EC8\u01CF\u0208\u020A\u1ECA\u012E\u1E2C\u0197]/g},
    {'base':'J', 'letters':/[\u004A\u24BF\uFF2A\u0134\u0248]/g},
    {'base':'K', 'letters':/[\u004B\u24C0\uFF2B\u1E30\u01E8\u1E32\u0136\u1E34\u0198\u2C69\uA740\uA742\uA744\uA7A2]/g},
    {'base':'L', 'letters':/[\u004C\u24C1\uFF2C\u013F\u0139\u013D\u1E36\u1E38\u013B\u1E3C\u1E3A\u0141\u023D\u2C62\u2C60\uA748\uA746\uA780]/g},
    {'base':'LJ','letters':/[\u01C7]/g},
    {'base':'Lj','letters':/[\u01C8]/g},
    {'base':'M', 'letters':/[\u004D\u24C2\uFF2D\u1E3E\u1E40\u1E42\u2C6E\u019C]/g},
    {'base':'N', 'letters':/[\u004E\u24C3\uFF2E\u01F8\u0143\u00D1\u1E44\u0147\u1E46\u0145\u1E4A\u1E48\u0220\u019D\uA790\uA7A4]/g},
    {'base':'NJ','letters':/[\u01CA]/g},
    {'base':'Nj','letters':/[\u01CB]/g},
    {'base':'O', 'letters':/[\u004F\u24C4\uFF2F\u00D2\u00D3\u00D4\u1ED2\u1ED0\u1ED6\u1ED4\u00D5\u1E4C\u022C\u1E4E\u014C\u1E50\u1E52\u014E\u022E\u0230\u00D6\u022A\u1ECE\u0150\u01D1\u020C\u020E\u01A0\u1EDC\u1EDA\u1EE0\u1EDE\u1EE2\u1ECC\u1ED8\u01EA\u01EC\u00D8\u01FE\u0186\u019F\uA74A\uA74C]/g},
    {'base':'OI','letters':/[\u01A2]/g},
    {'base':'OO','letters':/[\uA74E]/g},
    {'base':'OU','letters':/[\u0222]/g},
    {'base':'P', 'letters':/[\u0050\u24C5\uFF30\u1E54\u1E56\u01A4\u2C63\uA750\uA752\uA754]/g},
    {'base':'Q', 'letters':/[\u0051\u24C6\uFF31\uA756\uA758\u024A]/g},
    {'base':'R', 'letters':/[\u0052\u24C7\uFF32\u0154\u1E58\u0158\u0210\u0212\u1E5A\u1E5C\u0156\u1E5E\u024C\u2C64\uA75A\uA7A6\uA782]/g},
    {'base':'S', 'letters':/[\u0053\u24C8\uFF33\u1E9E\u015A\u1E64\u015C\u1E60\u0160\u1E66\u1E62\u1E68\u0218\u015E\u2C7E\uA7A8\uA784]/g},
    {'base':'T', 'letters':/[\u0054\u24C9\uFF34\u1E6A\u0164\u1E6C\u021A\u0162\u1E70\u1E6E\u0166\u01AC\u01AE\u023E\uA786]/g},
    {'base':'TZ','letters':/[\uA728]/g},
    {'base':'U', 'letters':/[\u0055\u24CA\uFF35\u00D9\u00DA\u00DB\u0168\u1E78\u016A\u1E7A\u016C\u00DC\u01DB\u01D7\u01D5\u01D9\u1EE6\u016E\u0170\u01D3\u0214\u0216\u01AF\u1EEA\u1EE8\u1EEE\u1EEC\u1EF0\u1EE4\u1E72\u0172\u1E76\u1E74\u0244]/g},
    {'base':'V', 'letters':/[\u0056\u24CB\uFF36\u1E7C\u1E7E\u01B2\uA75E\u0245]/g},
    {'base':'VY','letters':/[\uA760]/g},
    {'base':'W', 'letters':/[\u0057\u24CC\uFF37\u1E80\u1E82\u0174\u1E86\u1E84\u1E88\u2C72]/g},
    {'base':'X', 'letters':/[\u0058\u24CD\uFF38\u1E8A\u1E8C]/g},
    {'base':'Y', 'letters':/[\u0059\u24CE\uFF39\u1EF2\u00DD\u0176\u1EF8\u0232\u1E8E\u0178\u1EF6\u1EF4\u01B3\u024E\u1EFE]/g},
    {'base':'Z', 'letters':/[\u005A\u24CF\uFF3A\u0179\u1E90\u017B\u017D\u1E92\u1E94\u01B5\u0224\u2C7F\u2C6B\uA762]/g},
    {'base':'a', 'letters':/[\u0061\u24D0\uFF41\u1E9A\u00E0\u00E1\u00E2\u1EA7\u1EA5\u1EAB\u1EA9\u00E3\u0101\u0103\u1EB1\u1EAF\u1EB5\u1EB3\u0227\u01E1\u00E4\u01DF\u1EA3\u00E5\u01FB\u01CE\u0201\u0203\u1EA1\u1EAD\u1EB7\u1E01\u0105\u2C65\u0250]/g},
    {'base':'aa','letters':/[\uA733]/g},
    {'base':'ae','letters':/[\u00E6\u01FD\u01E3]/g},
    {'base':'ao','letters':/[\uA735]/g},
    {'base':'au','letters':/[\uA737]/g},
    {'base':'av','letters':/[\uA739\uA73B]/g},
    {'base':'ay','letters':/[\uA73D]/g},
    {'base':'b', 'letters':/[\u0062\u24D1\uFF42\u1E03\u1E05\u1E07\u0180\u0183\u0253]/g},
    {'base':'c', 'letters':/[\u0063\u24D2\uFF43\u0107\u0109\u010B\u010D\u00E7\u1E09\u0188\u023C\uA73F\u2184]/g},
    {'base':'d', 'letters':/[\u0064\u24D3\uFF44\u1E0B\u010F\u1E0D\u1E11\u1E13\u1E0F\u0111\u018C\u0256\u0257\uA77A]/g},
    {'base':'dz','letters':/[\u01F3\u01C6]/g},
    {'base':'e', 'letters':/[\u0065\u24D4\uFF45\u00E8\u00E9\u00EA\u1EC1\u1EBF\u1EC5\u1EC3\u1EBD\u0113\u1E15\u1E17\u0115\u0117\u00EB\u1EBB\u011B\u0205\u0207\u1EB9\u1EC7\u0229\u1E1D\u0119\u1E19\u1E1B\u0247\u025B\u01DD]/g},
    {'base':'f', 'letters':/[\u0066\u24D5\uFF46\u1E1F\u0192\uA77C]/g},
    {'base':'g', 'letters':/[\u0067\u24D6\uFF47\u01F5\u011D\u1E21\u011F\u0121\u01E7\u0123\u01E5\u0260\uA7A1\u1D79\uA77F]/g},
    {'base':'h', 'letters':/[\u0068\u24D7\uFF48\u0125\u1E23\u1E27\u021F\u1E25\u1E29\u1E2B\u1E96\u0127\u2C68\u2C76\u0265]/g},
    {'base':'hv','letters':/[\u0195]/g},
    {'base':'i', 'letters':/[\u0069\u24D8\uFF49\u00EC\u00ED\u00EE\u0129\u012B\u012D\u00EF\u1E2F\u1EC9\u01D0\u0209\u020B\u1ECB\u012F\u1E2D\u0268\u0131]/g},
    {'base':'j', 'letters':/[\u006A\u24D9\uFF4A\u0135\u01F0\u0249]/g},
    {'base':'k', 'letters':/[\u006B\u24DA\uFF4B\u1E31\u01E9\u1E33\u0137\u1E35\u0199\u2C6A\uA741\uA743\uA745\uA7A3]/g},
    {'base':'l', 'letters':/[\u006C\u24DB\uFF4C\u0140\u013A\u013E\u1E37\u1E39\u013C\u1E3D\u1E3B\u017F\u0142\u019A\u026B\u2C61\uA749\uA781\uA747]/g},
    {'base':'lj','letters':/[\u01C9]/g},
    {'base':'m', 'letters':/[\u006D\u24DC\uFF4D\u1E3F\u1E41\u1E43\u0271\u026F]/g},
    {'base':'n', 'letters':/[\u006E\u24DD\uFF4E\u01F9\u0144\u00F1\u1E45\u0148\u1E47\u0146\u1E4B\u1E49\u019E\u0272\u0149\uA791\uA7A5]/g},
    {'base':'nj','letters':/[\u01CC]/g},
    {'base':'o', 'letters':/[\u006F\u24DE\uFF4F\u00F2\u00F3\u00F4\u1ED3\u1ED1\u1ED7\u1ED5\u00F5\u1E4D\u022D\u1E4F\u014D\u1E51\u1E53\u014F\u022F\u0231\u00F6\u022B\u1ECF\u0151\u01D2\u020D\u020F\u01A1\u1EDD\u1EDB\u1EE1\u1EDF\u1EE3\u1ECD\u1ED9\u01EB\u01ED\u00F8\u01FF\u0254\uA74B\uA74D\u0275]/g},
    {'base':'oi','letters':/[\u01A3]/g},
    {'base':'ou','letters':/[\u0223]/g},
    {'base':'oo','letters':/[\uA74F]/g},
    {'base':'p','letters':/[\u0070\u24DF\uFF50\u1E55\u1E57\u01A5\u1D7D\uA751\uA753\uA755]/g},
    {'base':'q','letters':/[\u0071\u24E0\uFF51\u024B\uA757\uA759]/g},
    {'base':'r','letters':/[\u0072\u24E1\uFF52\u0155\u1E59\u0159\u0211\u0213\u1E5B\u1E5D\u0157\u1E5F\u024D\u027D\uA75B\uA7A7\uA783]/g},
    {'base':'s','letters':/[\u0073\u24E2\uFF53\u00DF\u015B\u1E65\u015D\u1E61\u0161\u1E67\u1E63\u1E69\u0219\u015F\u023F\uA7A9\uA785\u1E9B]/g},
    {'base':'t','letters':/[\u0074\u24E3\uFF54\u1E6B\u1E97\u0165\u1E6D\u021B\u0163\u1E71\u1E6F\u0167\u01AD\u0288\u2C66\uA787]/g},
    {'base':'tz','letters':/[\uA729]/g},
    {'base':'u','letters':/[\u0075\u24E4\uFF55\u00F9\u00FA\u00FB\u0169\u1E79\u016B\u1E7B\u016D\u00FC\u01DC\u01D8\u01D6\u01DA\u1EE7\u016F\u0171\u01D4\u0215\u0217\u01B0\u1EEB\u1EE9\u1EEF\u1EED\u1EF1\u1EE5\u1E73\u0173\u1E77\u1E75\u0289]/g},
    {'base':'v','letters':/[\u0076\u24E5\uFF56\u1E7D\u1E7F\u028B\uA75F\u028C]/g},
    {'base':'vy','letters':/[\uA761]/g},
    {'base':'w','letters':/[\u0077\u24E6\uFF57\u1E81\u1E83\u0175\u1E87\u1E85\u1E98\u1E89\u2C73]/g},
    {'base':'x','letters':/[\u0078\u24E7\uFF58\u1E8B\u1E8D]/g},
    {'base':'y','letters':/[\u0079\u24E8\uFF59\u1EF3\u00FD\u0177\u1EF9\u0233\u1E8F\u00FF\u1EF7\u1E99\u1EF5\u01B4\u024F\u1EFF]/g},
    {'base':'z','letters':/[\u007A\u24E9\uFF5A\u017A\u1E91\u017C\u017E\u1E93\u1E95\u01B6\u0225\u0240\u2C6C\uA763]/g}
];

var changes;
function removeDiacritics (str) {
if(!changes) {
    changes = defaultDiacriticsRemovalMap;
}
for(var i=0; i<changes.length; i++) {
    str = str.replace(changes[i].letters, changes[i].base);
}

var str_clean = str.replace(/[`~!@#$%^ˆ±§&*()_|+\=?;:'",.<>\{\}\[\]\\\/]/gi, '');
    clean = str_clean.replace(/\s/g, '-');
    clean = clean.toLowerCase();

return clean;
}


