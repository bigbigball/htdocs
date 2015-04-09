<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <link href="/static/style/style.css" rel="stylesheet" charset="utf-8" />
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="logo">
        <img src="/static/images/logo.png" />
      </div>
      <a href="/opinion/personal" class="btn">
        <img src="<?php if(isset($info['photo'])) echo $info['photo'];?>" />
      </a>
      <ul class="navbar">
       <li>
          <a href="/" >首 页</a>
        </li>
        <li>
          <a href="/guide" >咨询中心</a>
        </li>
        <li class="active">
          <a href="/opinion" >观 点</a>
        </li>
        <li>
          <a href="/about" >关于我们</a>
        </li>
        <li>
          <a href="/download" >APP下载</a>
        </li>
        <li>
          <a href="/news" >口碑</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="location">
      <span>当前位置—个人中心</span>
    </div>
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="<?php if(isset($info['photo'])) echo $info['photo'];?>" />
        </p>
		<h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></h2>
        <p><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
        <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>分</p>
      </div>
      <div class="pro-eval">
        <div class="pic">
          <div class="upload">
            <h3> <em>*</em>
              上传图片
            </h3>
            <div class="cur">
              <img src="/static/images/temp/img_1.png" />
            </div>
            <div class="hint">
              <p>图片尺寸：500X500像素</p>
            <?php echo form_open_multipart('opinion/upload_prodpic');?> 
			<input type="file" name="userfile" size="20" />
			<input type="submit" value="点击上传图片" style="width: 100%;display: block;padding: 12px 0;font-size: 20px;color: #333;background-color: #38c8a4;"/>
			</form>
            </div>
          </div>
          <ul class="imglist">
            <li>
              <img src="<?php if(isset($pictures[0])) echo $pictures[0];?>" style="width: 60px;height: 60px;"/>
              <a href="" class="del"></a>
            </li>
            <li>
              <img src="<?php if(isset($pictures[1])) echo $pictures[1];?>" style="width: 60px;height: 60px;"/>
              <a href="" class="del"></a>
            </li>
            <li>
              <img src="<?php if(isset($pictures[2])) echo $pictures[2];?>" style="width: 60px;height: 60px;"/>
              <a href="" class="del"></a>
            </li>
            <li>
              <img src="<?php if(isset($pictures[3])) echo $pictures[3];?>" style="width: 60px;height: 60px;"/>
              <a href="" class="del"></a>
            </li>
            <li>
              <img src="<?php if(isset($pictures[4])) echo $pictures[4];?>" style="width: 60px;height: 60px;"/>
              <a href="" class="del"></a>
            </li>
          </ul>
        </div>
        <form action="/opinion/do_modify" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="pro-grade">
          <div class="stars">
            <h3> <em>*</em>
              产品打分
            </h3>
            <div class="row">
              <div class="col_l">外观</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1"></label>
                  <label  class="star star_2"></label>
                  <label  class="star star_3"></label>
                  <label  class="star star_4"></label>
                  <label  class="star star_5"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">稳定性</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1"></label>
                  <label  class="star star_2"></label>
                  <label  class="star star_3"></label>
                  <label  class="star star_4"></label>
                  <label  class="star star_5"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">智能</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1"></label>
                  <label  class="star star_2"></label>
                  <label  class="star star_3"></label>
                  <label  class="star star_4"></label>
                  <label  class="star star_5"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">功耗</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1"></label>
                  <label  class="star star_2"></label>
                  <label  class="star star_3"></label>
                  <label  class="star star_4"></label>
                  <label  class="star star_5"></label>
                </div>
              </div>
            </div>
          </div>
          <div class="circle">
            <p>综合评分</p>
            <div class="circle-percent" data="0">
                <div class="left"><img src="/static/images/circle_r.png" /></div>
                <div class="cover"></div>
                <div class="right"><img src="/static/images/circle_l.png" /></div>
              </div>
          </div>
        </div>
      </div>
      <div class="pro-view">
        <h3> <em>*</em>
          产品观点
        </h3>
        <div class="inputbox">
        <textarea name="web_description" id="web_description" style="height:250px;">
        <?php if(isset($opinion['view'])) echo $opinion['view'];?>
        </textarea>
        </div>
      </div>
      <div class="finish">
        <input type="submit" value="完&nbsp;&nbsp;成" style="font-size: 22px;padding: 16px 118px;background: #3cd5af;color: #fff;border-radius: 6px;display: inline-block;">
      </div>
      </form>
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <p>
        <a href="" class="btn">
          <img src="/static/images/f_down.png" />
        </a>
        <a href="" class="btn">
          <img src="/static/images/f_qq.png" />
        </a>
        <a href="" class="btn">
          <img src="/static/images/f_wx.png" />
        </a>
        <a href="" class="btn">
          <img src="/static/images/f_wb.png" />
        </a>
      </p>
      <p class="link">
        <a href="javascript:;">咨询中心</a>
        |
        <a href="javascript:;">售后服务</a>
        |
        <a href="javascript:;">联系我们</a>
        |
        <a href="javascript:;">
          服务邮箱：
          <span>service@dding.net</span>
        </a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
  <script type="text/javascript" src="/static/script/jquery-1.7.min.js"></script>
   <script type="text/javascript" src="/static/script/jquery.rotate.min.js"></script>
  <script type="text/javascript" src="/static/script/script.js"></script>
    <script src="/static/script/keditor/kindeditor-min.js"></script>
    <script src="/static/script/keditor/lang/zh_CN.js"></script>
	<script>
	$(document).ready(function(){
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('#web_description', {
				resizeType : 1,
				allowPreviewEmoticons : false,
				allowImageUpload : true,
				width : '100%',
				afterBlur: function(){this.sync('#web_description');},
			});
		});	
	});
	function from_submit(){
		$("#local_form").submit();	
	}
	</script>
</body>
</html>