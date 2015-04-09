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
    <div class="container clearfix">
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
    <div class="content pcedit">
        <h4>修改个人信息</h4>
        <div class="left">
          <p class="avatar">
            <img src="<?php if(isset($info['photo'])) echo $info['photo'];?>" />        
          </p>
			<?php echo form_open_multipart('opinion/do_upload');?> 
			<input type="file" name="userfile" size="20" />
			<input type="submit" value="上传头像" style="margin-top:15px;color:#3cd5af;font-size:16px"/>
			</form>
        </div>
        <div class="right">
        <form action="/opinion/do_edit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <div class="base">
            <p>姓名</p>
            <input name="name" type="text" value="<?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?>"/>
            <p for="">个人描述</p>
            <textarea name="brief" cols="30" rows="10"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></textarea>
          </div>
          <input type="submit" value="确认" style="margin-left: 34px;margin-top: 30px;width: 290px;border: none;background: #3cd5af;color: #fff;font-size: 20px;padding: 6px 12px;border-radius: 6px;">
        </form>
        </div>
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
        <a href="javascript:;">服务邮箱：<span>service@dding.net</span></a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
  <script type="text/javascript" src="/static/script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="/static/script/script.js"></script>
</body>
</html>