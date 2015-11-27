
function ws_basic(c,a,b){var d=$(this);this.go=function(e){b.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(e?-e+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},c.duration,"easeInOutExpo",function(){d.trigger("effectEnd")})}};// -----------------------------------------------------------------------------------

jQuery("#wowslider-container1").wowSlider({effect:"basic",prev:"",next:"",duration:20*100,delay:32*100,
width:1024,height:768,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:1,
caption:false,captionEffect:"parallax",controls:false,responsive:2,fullScreen:false,
gestures:2,onBeforeStep:function(i,c){return (i+1 + Math.floor((c-1)*Math.random()))},images:0});