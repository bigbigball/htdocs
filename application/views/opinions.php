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

      <a href="/user/login" class="btn">登录</a>
      <a href="/user/logout" class="btn">退出</a>

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
      <span>
      <a href="/opinion">观点</a>
       <i></i>丁盯门磁
      </span>
    </div>
    <div class="points content ">
      <div class="title">
        <h4>丁盯门磁</h4>
      </div>
      <ul  class="photoWall">
      <?php for($i=0;$i<12;$i++){?>
        <li>
          <img src="<?php if(isset($allopinion[$i]) && isset($allopinion[$i]['photo'])) echo $allopinion[$i]['photo'];?>" >
          <div class="photo_info">
            <h1><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['user_name']) && $allopinion[$i]['user_name']) {echo $allopinion[$i]['user_name'];} else if(isset($allopinion[$i])) {echo $allopinion[$i]['mobile'];}?></h1>
            <p>积分：<?php if(isset($allopinion[$i]) && isset($allopinion[$i]['integral'])) {echo $allopinion[$i]['integral'];} else echo '0';?>分</p>
            <p><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['brief'])) {echo $allopinion[$i]['brief'];}?></p>
          </div>
        </li>
        <?php }?>
      </ul>
      <div class="title">
        <h4>产品观点</h4>
      </div>
      <ul class="listview">
      <?php foreach($allopinion as $opinion){?>
        <li class="li-thumb">
          <img src="<?php if(isset($opinion['photo'])) echo $opinion['photo'];?>" />
          <h3>
          <?php if(isset($opinion['user_name']) && $opinion['user_name']) {echo $opinion['user_name'];} else {echo $opinion['mobile'];}?>
            <span>积分<?php if(isset($opinion['integral'])) {echo $opinion['integral'];} else echo '0';?>分</span>
          </h3>
          <div class="pro-point">
            <div class="info">
              <a href="/opinion/op?id=<?php if(isset($opinion['user_id'])) echo $opinion['user_id'];?>">
              <?php if(isset($opinion['view'])) echo $opinion['view'];?>
              </a>
            </div>
            
            <div class="aq">追问（共<?php if(isset($opinion['count'])) echo $opinion['count'];?>条）</div>
          </div>
        </li>
        <?php }?>
      </ul>
    </div>
    <div class="side content">
      <div class="box">
        <h3>关注丁盯智能</h3>
        <p>扫描二维码关注丁盯智能微信公众账号</p>
        <img class="td-code" src="/static/images/td_code.png" />
      </div>
      <div class="title">
        <a href="">
          <h3>丁盯动态</h3>
        </a>
      </div>
      <div class="box">
        <ul class="news">
          <li>
            <a href="">智能硬件如何寻找自己的生存空间</a>
          </li>
          <li>
            <a href="">智能硬件如何寻找自己的生存空间</a>
          </li>
          <li>
            <a href="">智能硬件如何寻找自己的生存空间</a>
          </li>
          <li>
            <a href="">智能硬件如何寻找自己的生存空间</a>
          </li>
        </ul>
      </div>
      <div class="title">
        <a href="">
          <h3>常见问题</h3>
        </a>
      </div>
      <div class="box">
        <input type="text" placeholder="查找问题">
        <ul class="qst">
          <li>
            <a href="">1.产品支持哪些移动客户端？</a>
          </li>
          <li>
            <a href="">2.充电一次能用多久？</a>
          </li>
          <li>
            <a href="">3.如何安装？</a>
          </li>
          <li>
            <a href="">4.丁盯的电话提醒真的是免费的吗？能保证多久？</a>
          </li>
          <li>
            <a href="">5.产品支持哪些移动客户端？</a>
          </li>
          <li>
            <a href="">6.充电一次能用多久？</a>
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
