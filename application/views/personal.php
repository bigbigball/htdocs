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
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="<?php if(isset($info['photo'])) echo $info['photo'];?>" />
        </p>
        <h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></h2>
        <p><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
        <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>分</p>
        <a href="/opinion/edit" class="edit"></a>
      </div>
      <div class="show">
        <p>发表你对产品的观点吧，下一位意见领袖就是你！</p>
        <ul class="prolist">
          <li>
            <div class="p1">
              <p class="ab">
                <a href="">了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯指纹锁</h3>
          </li>
          <li>
            <div class="p2">
              <p class="ab">
               <?php if(isset($published) && $published){?>
                <a href="/opinion/myop"><span>您已发表观点</span></a>
                <span class="chat">追问（<?php if(isset($count)) echo $count;?>条）</span>
                <?php } else {?>
                <a href="/opinion/myopmf">写写看></a>
                <span>您尚未发表观点</span>
                <?php }?>
              </p>
            </div>
            <h3>丁盯门磁</h3>
          </li>
          <li>
            <div class="p3">
              <p class="ab">
                <a href="">了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯密码锁</h3>
          </li>
        </ul>
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
        <a href="javascript:;">
          服务邮箱：
          <span>service@dding.net</span>
        </a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
  <script type="text/javascript" src="/static/script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="/static/script/script.js"></script>
</body>
</html>