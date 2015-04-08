// JavaScript Document
$(document).ready(function() {

    function resetloc() {
      $(".banner > .item:eq(" + $(".banner .switch .hover").attr("data") + ")").css("left", "0px").show();
      $(".banner .temp").css("left", "260px");
    }

    function tooglebanner(o) {
      var obj;
      if (o == null) {
        var n = ($(".banner .switch .hover").attr("data") * 1) < ($(".banner .switch li").size() * 1 - 1) ? $(".banner .switch .hover").attr("data") : -1;
        obj = $(".banner .switch li:eq(" + (n * 1 + 1) + ")");
      } else {
        obj = o;
      }
      $(".banner .switch li").removeClass("hover");
      obj.addClass("hover");
      obj.parent(".switch").parent(".banner").children(".item").animate({
        left: "-260px"
      }, 3000);
      $(".banner .temp").html(obj.parent(".switch").parent(".banner").children(".item:eq(" + obj.attr("data") + ")").html()).animate({
        left: "0px"
      }, 3000, resetloc);
    }
    $(".banner .switch li").click(function() {
      tooglebanner($(this));
    });

    var changebanner = setInterval(tooglebanner, 5000);
    $(".banner").mouseover(function() {
      clearInterval(changebanner);
    });
    $(".banner").mouseout(function() {
      changebanner = setInterval(tooglebanner, 5000);
    });


    //综合分数
    function circlePercent(circle, percent) {
      var circle = circle || $(".circle-percent");
      var percent = percent || 0;
      var left = null,
        right = null;

      if (circle !== null) {
        left = circle.find('.left');
        right = circle.find('.right');
        //circle.attr("percent", percent);
        if (percent <= 50 && percent >= 0) {
          right.css("display", "block");
          right.rotate({
            angle: percent * 3.6
          });
        } else if (percent > 50) {
          percent = percent > 100 ? 100 : percent;
          right.css("display", "block");
          left.css("display", "block");
          left.rotate({
            angle: (percent - 50) * 3.6
          });
          right.rotate({
            angle: 180
          });
        }
      }
    }
    var circle = $(".circle-percent");
    var t = null;
    var percent = 0;
    var score = circle.attr('data') > 0 ? circle.attr('data') * 10 : 0;
    if (circle !== null) {
      t = setInterval(function() {
        if (percent > score) {
          clearInterval(t);
        } else {
          percent++;
          circlePercent(circle, percent);
          //  circle.attr("percent", percent);
        }
      }, 17);
    }

    //星星评价
    $(".star").click(function() {
      $(this).addClass('checked').siblings().removeClass('checked');

    });

    //照片墙
    $(".photoWall li").each(function(index) {
      if (index == 4 || index == 5 || index == 10 || index == 11) {
        $(this).addClass('right');
      }
    });
    $(".photoWall li img").hover(function() {
      $(this).next('.photo_info').show().animate({
        "opacity": "0.8"
      }, 1000);
    }, function() {
      $(this).next('.photo_info').hide().animate({
        "opacity": "0"
      }, 1000);
    });
  })
  // JavaScript Document