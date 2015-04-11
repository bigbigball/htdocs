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

    var circle = $(".circle-percent");
    var left = circle.find('.left');
    var right = circle.find('.right');
    //综合分数
    function circlePercent(circle, percent) {
      var circle = circle || $(".circle-percent");
      var percent = percent || 0;
      
      if (circle !== null) {
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
    //星星显示并计算综合分数
    var t = null;
    function calScores(){
      var stararea=$(".stars .star_bg");
      var num = 0;
      var comscore = 0;
      var percent = 0;
      clearInterval(t);
      stararea.each(function(index) {
        num = $(this).find('.checked').index()+1;
        $(this).find('#star').val(num);
        comscore += num * 0.5;
      });
      circle.attr("data", comscore);
      $(".circle #score").val(comscore);
      
      if (circle !== null) {
        t = setInterval(function() {
          if (percent > comscore*10) {
            clearInterval(t);
          } else {
            circlePercent(circle, percent);
            percent++;
          }
        }, 15);
      }
    }
    if($(".stars .star_bg").length){calScores();}
    //星星评价
    $(".star").click(function() {
      $(this).addClass('checked').siblings().removeClass('checked');
      calScores();
    });


    //个人中心页面--根据星星的data数值(data数值代表四个评价的对应得分)计算综合分数并显示
    function calScores2(){
      clearInterval(t);
      var grade=$(".stars .grade");
      var singlescore= 0;
      var comscore = 0;
      var percent = 0;
      /*获取各个评价的数值，并显示*/
      grade.each(function() {
        singlescore= $(this).attr("data");
        $(this).find('.num').width(singlescore*40+"%");
        comscore += parseFloat(singlescore);
      });
      circle.attr("data", comscore);
      
      if (circle !== null) {
        t = setInterval(function() {
          if (percent > comscore*10) {
            clearInterval(t);
          } else {
            circlePercent(circle, percent);
            percent++;
          }
        }, 15);
      }
    }
    if($(".stars .grade").length){ calScores2();}

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