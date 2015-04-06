define(["jquery","home/json2","home/listenResizeWin","home/twinShow","home/mutiPic","home/getRatioForView"],function(e,t,n,r,i,s){var o=function(){var o={},u={},a=function(){o.lastScrollTop=e(document).scrollTop(),o.bindUiEvent(),o.oTwin=r({leftImg:"",rightImg:"",elm:e("._twoView")[0]});var s=[{url:"/static/pc/images/home/product/small2_1.jpg",bigImg:"/static/pc/images/home/product/large2_1.jpg",width:1008,height:1200,bigWidth:1920,bigHeight:972,boxSize:"1*4"},{url:"/static/pc/images/home/product/small2_2.jpg",bigImg:"/static/pc/images/home/product/large2_2.jpg",width:800,height:406,bigWidth:1920,bigHeight:972,boxSize:"2*2"},{url:"/static/pc/images/home/product/small2_3.jpg",bigImg:"/static/pc/images/home/product/large2_3.jpg",width:643,height:1200,bigWidth:1920,bigHeight:972,boxSize:"1*4"},{url:"/static/pc/images/home/product/small2_4.jpg",bigImg:"/static/pc/images/home/product/large2_4.jpg",width:589,height:569,bigWidth:1920,bigHeight:972,boxSize:"1*2"},{url:"/static/pc/images/home/product/small2_5.jpg",bigImg:"/static/pc/images/home/product/large2_5.jpg",width:589,height:569,bigWidth:1920,bigHeight:972,boxSize:"1*2"}];t.forEach(s,function(e){e.url=e.url,e.bigImg=e.bigImg}),o.mutiPic=i(s,n.checkResize(),e("._detailView"),{w1:.25,w2:.5,w5:1,h1:.5,h2:.5,h3:.5,h4:1}),o.actScrollTips(),n.add(function(e){o.resizeViews(e)}),o.resizeViews(n.checkResize()),o.renderNav(),setTimeout(function(){e(".page").css("visibility","visible")}),o.monitorScrollShowGotoTop()};return o.monitorScrollShowGotoTop=function(){var t=setInterval(function(){try{o.lastScrollTop>400?e("._toTop").show():e("._toTop").hide()}catch(n){clearInterval(t)}},1e3)},o.hideScrollTips=function(){o.stopScrollTips=!0,e(".scroll-tips").hide()},o.actScrollTips=function(){if(o.stopScrollTips)return;var t=e(".scroll-tips span");o.scrollTipsAtTop?t.animate({bottom:0},500,"swing",function(){o.scrollTipsAtTop=!1,o.actScrollTips()}):t.animate({bottom:15},500,"swing",function(){o.scrollTipsAtTop=!0,o.actScrollTips()})},o.renderNav=function(){var t="";e("._view").each(function(e){t+='<li class="_navHandler"><span>'+(e+1)+"</span></li>"}),e("._viewNav ul").html(t)},o.bindUiEvent=function(){e(document).on("scroll",function(t){if(o.isDragScrlling)return;var n=e(document).scrollTop(),r=o.lastScrollTop>n?"up":"down";o.checkDirectionShouldScroll(r),o.lastScrollTop=n}).on("mousewheel",function(e){var t=e.originalEvent,n=t.wheelDelta||t.wheelDeltaY||-t.deltaY,r=n>0?"up":"down";o.checkDirectionShouldScroll(r)||e.preventDefault()}).on("mousedown","html",function(){o.isDragScrlling=!0}).on("mouseup","html",function(){o.isDragScrlling=!1}).on("click","._navHandler",function(){var t=+e(this).text();o.setNavIndex(t),o.actScrollToView(t)}).on("click","._toTop",function(t){e(document).scrollTop(0),e("html, body").scrollTop(0),t.preventDefault()})},o.checkDirectionShouldScroll=function(t){var n=e(document).scrollTop();o.iTotalView=e("._view").length;var r=o.getViewIndex(n),i=!1;if(r<1&&t==="up"||n<=e("._view").eq(0).offset().top&&t==="up"||r>o.iTotalView-1&&t==="down")i=!0;var s=r;return r===0?o.setNavIndex(1):r>=o.iTotalView&&o.setNavIndex(o.iTotalView),n>e("._specView").offset().top?!0:(t==="up"?Math.abs(n-e("._view").eq(r-1).offset().top)<10&&(s-=1):t==="down"&&(s+=1,o.hideScrollTips()),o.mutiPic.scroll(),o.actScrollToView(s),i)},o.getViewIndex=function(t){var n=0;return e("._view").each(function(r){e(this).offset().top<=t&&(n=r+1)}),n},o.actScrollToView=function(t){switch(t){case 1:case 2:case 3:o.actCaptionsIntoView(t)}if(o.viewAnimating)return;e("html, body").stop();if(!t||t>o.iTotalView||t<1)return;o.viewAnimating=t,e("html, body").animate({scrollTop:o.getViewScrollHeight(t)},500,"swing",function(){setTimeout(function(){o.viewAnimating=!1,o.setNavIndex(t)},200)}),o.setNavIndex(t)},o.setNavIndex=function(t){$navHandlerList=e("._navHandler"),$navHandlerList.removeClass("on"),$navHandlerList.eq(t-1).addClass("on")},o.actCaptionsIntoView=function(t){var n=e("._view").eq(t-1).find(".view-box");n[0].sign||(n[0].sign=1),n[0].sign++>1&&n.addClass("into-captions")},o.getViewScrollHeight=function(t){return e("._view").eq(t-1).offset().top},o.resizeViews=function(t){e("._view").height(t.height),e("._priceView").height(t.height-110),o.oTwin.resize(t),o.mutiPic.reSize(t),o.resizePriceView(t),o.resizePicView(t),o.resizeSpecView(t)},o.resizeSpecView=function(t){var n={width:1310,height:370},r=s(n,t).byOverallJust();o.centerPic(e("._specView img"),n,t,r)},o.resizePicView=function(n){var r={width:1920,height:973},i=s(r,n).byFull();t.forEach(["_designView","_saveView","_operateView"],function(t,s){var a=e("."+t+" img",u.dom);o.centerPic(a,r,n,i,!0);if(n.width<970)switch(t){case"_designView":a.css({left:"auto",marginLeft:0,marginRight:"-123px"});break;case"_saveView":a.css({left:"0",marginLeft:"-120px"});break;case"_operateView":a.css({left:"auto",marginLeft:0,marginRight:"-93px"})}})},o.centerPic=function(t,n,r,i,s){var o=e(t),u={},a={h:n.height*i,w:n.width*i};u.right=0,u.marginRight=0,i>=1?(u.left="50%",u.top="50%",u.marginLeft="-"+Math.floor(a.w/2)+"px",u.marginTop="-"+Math.floor(a.h/2)+"px"):(u.left=0,u.top=0,u.marginLeft="-"+Math.floor((a.w-r.width)/2)+"px",u.marginTop="0",!s&&a.h>r.height&&(u.marginTop=Math.floor((r.height-a.h)/2)+"px")),o.height(a.h).width(a.w),o.css(u)},o.resizeRoomView=function(t){var n=s({width:1920,height:968},t).byFull();e("._roomView img").css({left:-(n*1920-t.width)/2+"px",width:1920*n})},o.resizePriceView=function(t){var n={height:t.height-110,width:t.width},r,i;e("._priceView ._priceViewBg").attr("src","/static/pc/images/home/f1.jpg"),r=1920,i=884;var o=s({width:r,height:i},n).byFull(),u=r*o,a=i*o;e("._priceView ._priceViewBg").css({margin:-a/2+"px 0 0 "+ -u/2+"px",height:a+"px",width:u+"px"}),e("._priceView .buy").css({margin:114*o+"px 0 0 "+16*o+"px"}),e("._priceView .buy a").css({width:180*o+"px",height:40*o+"px"})},a.apply(u,arguments),u};return o});