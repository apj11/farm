/**
* Theme: Xadmino Template
* Author: Themesdesign
* Main Js
*/


/* constants and common elements - for caching */
var XADMINO_VARS = {
    BODY: $("body"),
    WRAPPER: $("#wrapper"),
    LEFT_ITEMS: $(".left ul")
};

!function($) {
    "use strict";

    var Sidemenu = function() {
        this.$body = XADMINO_VARS.BODY,
        this.$openLeftBtn = $(".open-left"),
        this.$menuItem = $("#sidebar-menu a"),
        this.$subDropItem = $(".subdrop"),
        this.$leftMenuToggle = $(".open-left"),
        this.$firstMenuChild = $("#sidebar-menu ul li.has_sub a.active")
    };
    Sidemenu.prototype.openLeftBar = function() {
        XADMINO_VARS.WRAPPER.toggleClass("enlarged");
        XADMINO_VARS.WRAPPER.addClass("forced");

        if (XADMINO_VARS.WRAPPER.hasClass("enlarged") && XADMINO_VARS.BODY.hasClass("fixed-left")) {
            XADMINO_VARS.BODY.removeClass("fixed-left").addClass("fixed-left-void");
        } else if (!XADMINO_VARS.WRAPPER.hasClass("enlarged") && XADMINO_VARS.BODY.hasClass("fixed-left-void")) {
            XADMINO_VARS.BODY.removeClass("fixed-left-void").addClass("fixed-left");
        }

        if (XADMINO_VARS.WRAPPER.hasClass("enlarged")) {
            XADMINO_VARS.LEFT_ITEMS.removeAttr("style");
        } else {
            this.$subDropItem.siblings("ul:first").show();
        }

        toggle_slimscroll(".slimscrollleft");
        XADMINO_VARS.BODY.trigger("resize");
    },
    //menu item click
    Sidemenu.prototype.menuItemClick = function(e) {
        var $this = this;
        if (!XADMINO_VARS.WRAPPER.hasClass("enlarged")) {
            if ($(this).parent().hasClass("has_sub")) {
                e.preventDefault();
            }
            if (!$(this).hasClass("subdrop")) {
                // hide any open menus and remove all other classes
                $("ul", $(this).parents("ul:first")).slideUp(350);
                $("a", $(this).parents("ul:first")).removeClass("subdrop");
                $("#sidebar-menu .pull-right i").removeClass("mdi-minus").addClass("mdi-plus");

                // open our new menu and add the open class
                $(this).next("ul").slideDown(350);
                $(this).addClass("subdrop");
                $(".pull-right i", $(this).parents(".has_sub:last")).removeClass("mdi-plus").addClass("mdi-minus");
                $(".pull-right i", $(this).siblings("ul")).removeClass("mdi-minus").addClass("mdi-plus");
            } else if ($(this).hasClass("subdrop")) {
                $(this).removeClass("subdrop");
                $(this).next("ul").slideUp(350);
                $(".pull-right i", $(this).parent()).removeClass("mdi-minus").addClass("mdi-plus");
            }
        }
    },

    //init sidemenu
    Sidemenu.prototype.init = function() {
        var $this = this;
        //bind on click
        $this.$leftMenuToggle.on('click', function (e) {
            e.stopPropagation();
            $this.openLeftBar();
        });

        // LEFT SIDE MAIN NAVIGATION
        $this.$menuItem.on('click', $this.menuItemClick);

        // NAVIGATION HIGHLIGHT & OPEN PARENT
        $this.$firstMenuChild.parents("li:last").children("a:first").addClass("active").trigger("click");

        // activating menu item based on url
        $this.$menuItem.each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().trigger('click'); // click the item to make it drop
            }
        });
    },

    //init Sidemenu
    $.Sidemenu = new Sidemenu, $.Sidemenu.Constructor = Sidemenu

}(window.jQuery),


function($) {
    "use strict";

    var FullScreen = function() {
        this.$body = XADMINO_VARS.BODY,
        this.$fullscreenBtn = $("#btn-fullscreen")
    };

    //turn on full screen
    // Thanks to http://davidwalsh.name/fullscreen
    FullScreen.prototype.launchFullscreen  = function(element) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
    },
    FullScreen.prototype.exitFullscreen = function() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    },
    //toggle screen
    FullScreen.prototype.toggle_fullscreen  = function() {
        var $this = this;
        var fullscreenEnabled = document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled;
        if (fullscreenEnabled) {
            if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
                $this.launchFullscreen(document.documentElement);
            } else {
                $this.exitFullscreen();
            }
        }
    },
    //init sidemenu
    FullScreen.prototype.init = function() {
        var $this = this;
        //bind
        $this.$fullscreenBtn.on('click', function () {
            $this.toggle_fullscreen();
        });
    },
     //init FullScreen
    $.FullScreen = new FullScreen, $.FullScreen.Constructor = FullScreen

}(window.jQuery),


//main app module
 function($) {
    "use strict";

    var Xadmino = function() {
        this.VERSION = "1.0.0",
        this.AUTHOR = "ThemesDesign",
        this.SUPPORT = "#",
        this.pageScrollElement = "html, body",
        this.$body = XADMINO_VARS.BODY
    };

    //initializing tooltip
    Xadmino.prototype.initTooltipPlugin = function() {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
    },

    //initializing popover
    Xadmino.prototype.initPopoverPlugin = function() {
        $.fn.popover && $('[data-toggle="popover"]').popover()
    },

    //initializing nicescroll
    Xadmino.prototype.initNiceScrollPlugin = function() {
        //You can change the color of scroll bar here
        $.fn.niceScroll &&  $(".nicescroll").niceScroll({ cursorcolor: '#9d9ea5', cursorborderradius: '0px'});
    },

     //on doc load
    Xadmino.prototype.onDocReady = function(e) {
        FastClick.attach(document.body);
        Menufunction.push("initscrolls");
        Menufunction.push("changeptype");

        $('.animate-number').each(function () {
            $(this).animateNumbers($(this).attr("data-value"), true, parseInt($(this).attr("data-duration")));
        });

        //RUN RESIZE ITEMS
        $(window).resize(debounce(resizeitems, 100));
        XADMINO_VARS.BODY.trigger("resize");

        // Wow - for animation effect
        var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 50, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
        );
        wow.init();
    },

    //init
    Xadmino.prototype.init = function() {
        var $this = this;
        this.initTooltipPlugin();
        this.initPopoverPlugin();
        this.initNiceScrollPlugin();

        //document load initialization
        $(document).on('ready', $this.onDocReady);
        //init side bar - left
        $.Sidemenu.init();
        //init fullscreen
        $.FullScreen.init();
    },

    $.Xadmino = new Xadmino, $.Xadmino.Constructor = Xadmino

}(window.jQuery),

//initializing main application module
function($) {
    "use strict";
    $.Xadmino.init();
}(window.jQuery);



/* ------------ some utility functions ----------------------- */

var w,h,dw,dh;
var changeptype = function(){
    w = $(window).width();
    h = $(window).height();
    dw = $(document).width();
    dh = $(document).height();

    if (jQuery.browser.mobile === true) {
        XADMINO_VARS.BODY.addClass("mobile").removeClass("fixed-left");
    }

    if (!XADMINO_VARS.WRAPPER.hasClass("forced")) {
        if (w > 1024) {
            XADMINO_VARS.BODY.removeClass("smallscreen").addClass("widescreen");
            XADMINO_VARS.WRAPPER.removeClass("enlarged");
        } else {
            XADMINO_VARS.BODY.removeClass("widescreen").addClass("smallscreen");
            XADMINO_VARS.WRAPPER.addClass("enlarged");
            XADMINO_VARS.LEFT_ITEMS.removeAttr("style");
        }
        if (XADMINO_VARS.WRAPPER.hasClass("enlarged") && XADMINO_VARS.BODY.hasClass("fixed-left")) {
            XADMINO_VARS.BODY.removeClass("fixed-left").addClass("fixed-left-void");
        } else if (!XADMINO_VARS.WRAPPER.hasClass("enlarged") && XADMINO_VARS.BODY.hasClass("fixed-left-void")) {
            XADMINO_VARS.BODY.removeClass("fixed-left-void").addClass("fixed-left");
        }

  }
  toggle_slimscroll(".slimscrollleft");
}


var debounce = function(func, wait, immediate) {
  var timeout, result;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) result = func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) result = func.apply(context, args);
    return result;
  };
}

function resizeitems(){
  if($.isArray(Menufunction)){
    for (i = 0; i < Menufunction.length; i++) {
        window[Menufunction[i]]();
    }
  }
}

function initscrolls(){
    if(jQuery.browser.mobile !== true){
      //SLIM SCROLL
      $('.slimscroller').slimscroll({
        height: 'auto',
        size: "5px"
      });

      $('.slimscrollleft').slimScroll({
          height: 'auto',
          position: 'right',
          size: "5px",
          color: '#7A868F',
          wheelStep: 5
      });
  }
}
function toggle_slimscroll(item){
    if(XADMINO_VARS.WRAPPER.hasClass("enlarged")){
      $(item).css("overflow","inherit").parent().css("overflow","inherit");
      $(item). siblings(".slimScrollBar").css("visibility","hidden");
    }else{
      $(item).css("overflow","hidden").parent().css("overflow","hidden");
      $(item). siblings(".slimScrollBar").css("visibility","visible");
    }
}



// for lazy function execution
var Menufunction = [];





$(function(){function c(){p();var e=h();var r=0;var u=false;l.empty();while(!u){if(s[r]==e[0].weekday){u=true}else{l.append('<div class="blank"></div>');r++}}for(var c=0;c<42-r;c++){if(c>=e.length){l.append('<div class="blank"></div>')}else{var v=e[c].day;var m=g(new Date(t,n-1,v))?'<div class="today">':"<div>";l.append(m+""+v+"</div>")}}var y=o[n-1];a.css("background-color",y).find("h1").text(i[n-1]+" "+t);f.find("div").css("color",y);l.find(".today").css("background-color",y);d()}function h(){var e=[];for(var r=1;r<v(t,n)+1;r++){e.push({day:r,weekday:s[m(t,n,r)]})}return e}function p(){f.empty();for(var e=0;e<7;e++){f.append("<div>"+s[e].substring(0,3)+"</div>")}}function d(){var t;var n=$("#calendar").css("width",e+"px");n.find(t="#calendar_weekdays, #calendar_content").css("width",e+"px").find("div").css({width:e/7+"px",height:e/7+"px","line-height":e/7+"px"});n.find("#calendar_header").css({height:e*(1/7)+"px"}).find('i[class^="icon-chevron"]').css("line-height",e*(1/7)+"px")}function v(e,t){return(new Date(e,t,0)).getDate()}function m(e,t,n){return(new Date(e,t-1,n)).getDay()}function g(e){return y(new Date)==y(e)}function y(e){return e.getFullYear()+"/"+(e.getMonth()+1)+"/"+e.getDate()}function b(){var e=new Date;t=e.getFullYear();n=e.getMonth()+1}var e=480;var t=2013;var n=9;var r=[];var i=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var o=["#16a085","#1abc9c","#c0392b","#27ae60","#FF6860","#f39c12","#f1c40f","#e67e22","#2ecc71","#e74c3c","#d35400","#2c3e50"];var u=$("#calendar");var a=u.find("#calendar_header");var f=u.find("#calendar_weekdays");var l=u.find("#calendar_content");b();c();a.find('i[class^="icon-chevron"]').on("click",function(){var e=$(this);var r=function(e){n=e=="next"?n+1:n-1;if(n<1){n=12;t--}else if(n>12){n=1;t++}c()};if(e.attr("class").indexOf("left")!=-1){r("previous")}else{r("next")}})})





function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});

/*...............appended function............*/

$(document).ready(function(){


    var fieldHTML = '<div class="col-md-6"><div class="field_mar"><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="assets/images/remove-icon.png"/></a></div></div>'; //New input field html 

    
    //Once add button is clicked
     $(document).on('click','.add_button',function(){    //Check maximum number of input fields
        var addBtn = $(this),
            parentPanel = addBtn.closest('.panel_pad')
            $(parentPanel).append(fieldHTML); //Add field html
     
    });
    
    //Once remove button is clicked
    $(document).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        
    });


    // Panel clone js

    $(document).on('click','.add-panel',function(){
    var cloneButton = $(this),
        panelElem = cloneButton.attr('data-panel'),
        outputWrap = cloneButton.attr('data-output-panel'),
        panelHtml = $('#'+panelElem).html(),
        outputErap = $('#'+outputWrap)
            
    ;        
        outputErap.append(panelHtml);
    });

    $(document).on('click','.remove_panel',function(){
        var removeBtn = $(this),
            removePanel = removeBtn.closest('.panel_pad')
            ;
        removePanel.remove();
    });


});




















/*$(document).ready(function(){
    var maxField = 100; //Input fields increment limitation



    var addButton = $('.add_button1'); //Add button selector
    var addButton123 = $('.add_button123'); //Add button selector
    var wrapper = $('.field_wrapper1'); //Input field wrapper
    var wrapper123 = $('.field_wrapper123'); //Input field wrapper
    var fieldHTML = '<div class="field_mar"> <div class="row"><div class="col-md-3"><div class="form-group flex_form"><label class="control-label">Medicine</label><div class="col-sm-10"><select class="form-control"><option>Cow</option><option>Bufallow</option><option>Sheep</option><option>Horse</option><option>pig</option></select></div></div></div><div class="col-md-3"><div class="form-group flex_form"><label class="control-label">Feeding Duration</label><div class="col-md-10"><input type="text" class="form-control" placeholder="122323"></div></div></div><div class="col-md-3"><div class="form-group flex_form"><label class="control-label">To</label><div class="col-md-10"><input type="text" class="form-control" placeholder="122323"></div></div></div><div class="col-md-3 time_appended"><div class="form-group flex_form"><label class="control-label">Time</label><input type="text" name="field_name[]" value="" class="form-control"/><a href="javascript:void(0);" class="add_button123" id="add_button123" title="Add field"><img src="assets/images/add-icon.png"/></a><div class="form-group flex_form"></div></div></div></div><div class="field_wrapper123"></div><div class="field_wrapper"></div><a href="javascript:void(0);" class="remove_button"><img src="assets/images/remove-icon.png"/></a></div>' 
     var fieldHTML123 = '<div class="field_mar"><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="assets/images/remove-icon.png"/></a></div>';
    var x = 1; //Initial field counter is 1

    var y = 1;
    
    //Once add button is clicked
    $(addButton).click(function(){  

        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }

       
    });
    
    $(addButton123).click(function(){
        alert("test test");
        //Check maximum number of input fields
        if(y < maxField){ 
            y++; //Increment field counter
            $(wrapper123).append(fieldHTML123); //Add field html
        }
    });


    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


*/


















