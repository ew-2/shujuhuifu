<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- 设置视口属性，确保页面自适应设备屏幕大小，并禁止用户缩放 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>搞机大师数据恢复</title>
  <style>
    /* CSS样式开始 */

    /* 设置整个页面的基本样式，使用Flexbox布局使其子元素垂直并居中 */
    body {
      margin: 0; /* 移除页面的默认外边距 */
      padding: 0; /* 移除页面的默认内边距 */
      display: flex; /* 使用Flexbox布局 */
      flex-direction: column; /* 子元素垂直排列 */
      justify-content: center; /* 子元素在主轴方向上居中 */
      align-items: center; /* 子元素在交叉轴方向上居中 */
      height: 85vh; /* 页面高度设置为视口高度的70% */
      background-color: #FFFFFF; /* 设置页面背景颜色为白色 */
    }

    /* 设置按钮容器的样式，添加边框和内边距，使其内容居中 */
    .button-container {
      border: 2px solid #007bff; /* 添加2像素宽的蓝色边框 */
      padding: 20px; /* 容器内边距为20像素 */
      display: flex; /* 使用Flexbox布局 */
      flex-direction: column; /* 子元素垂直排列 */
      align-items: center; /* 子元素在交叉轴方向上居中 */
      width: 75%; /* 容器宽度设置为页面宽度的75% */
      max-width: 600px; /* 最大宽度限制为600像素 */
      margin: auto; /* 水平居中显示 */
      border-radius: 10px; /* 边框圆角为10像素 */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
    }

    /* 设置单个按钮的样式，包括内边距、字体大小、颜色等 */
    .button {
      padding: 6px 5px; /* 设置按钮的内边距为6像素 */
      font-size: 20px; /* 设置字体大小为20像素 */
      text-align: center; /* 文字居中 */
      line-height: 50px; /* 设置行高，以便文字垂直居中 */
      display: inline-flex; /* 使用Flexbox布局 */
      justify-content: left; /* 子元素在主轴方向上左对齐 */
      align-items: center; /* 子元素在交叉轴方向上居中 */
      cursor: pointer; /* 鼠标悬停时显示为指针形状 */
      outline: none; /* 移除焦点时的轮廓线 */
      color: #fff; /* 设置文字颜色为白色 */
      background-color: #FFFFFF; /* 设置背景颜色为白色 */
      border: 1px solid #A9A9A9; /* 添加1像素宽的灰色边框 */
      border-radius: 6px; /* 设置圆角为6像素 */
      box-shadow: 0 0.5px #007bff; /* 设置阴影效果 */
      margin-bottom: 15px; /* 设置按钮之间的间距为15像素 */
      width: 300px; /* 设置按钮的宽度为300像素 */
      height: 35px; /* 设置按钮的高度为35像素 */
      text-decoration: none; /* 移除下划线 */
    }

    /* 设置鼠标悬停在按钮上时的样式，改变背景和文字颜色 */
    .button:hover {
      background-color: #007bff; /* 鼠标悬停时按钮的背景颜色变为蓝色 */
      color: #FFFFFF; /* 鼠标悬停时文字颜色变为白色 */
    }

    /* 设置按钮被点击时的样式，改变背景颜色和阴影效果 */
    .button:active {
      background-color: #FFFFFF; /* 按钮被点击时的背景颜色变为白色 */
      box-shadow: 0 8px #666; /* 设置阴影效果 */
      transform: translateY(2px); /* 按钮被点击时向上移动，制造按下效果 */
    }

    /* 设置按钮中的Logo样式，包括大小和圆角 */
    .logo {
      width: 36px; /* Logo宽度设置为36像素 */
      height: 36px; /* Logo高度设置为36像素 */
      margin-right: 10px; /* 与文本的间距为10像素 */
      border-radius: 20%; /* 设置logo圆角 */
    }

    /* 设置按钮中的文本样式，包括大小和颜色 */
    .button-text {
      font-size: 18px; /* 设置数字文本的大小为18像素 */
      color: #000; /* 设置数字文本的颜色为黑色 */
      display: inline-block; /* 使数字文本在按钮内靠右显示 */
      vertical-align: middle; /* 垂直居中 */
    }

    /* 设置最后一个按钮不需要底部间距 */
    .button:last-child {
      margin-bottom: 0;
    }

    /* 滚动通知栏样式，设置宽度、背景颜色、文字颜色等 */
    .notification-bar {
      width: 100%; /* 通知栏宽度设置为100% */
      background-color: #007bff; /* 设置通知栏背景颜色为深蓝色 */
      color: #FFFFFF; /* 设置文字颜色为白色 */
      font-size: 15px; /* 设置字体大小为15像素 */
      padding: 10px; /* 设置内边距为10像素 */
      text-align: center; /* 文字居中 */
      position: fixed; /* 固定位置 */
      top: 0; /* 顶部对齐 */
      overflow: hidden; /* 隐藏溢出的内容 */
      height: 20px; /* 设置通知栏高度为20像素 */
    }

    .notification-content {
      display: inline-block; /* 使用行内块级元素 */
      white-space: nowrap; /* 不换行 */
      animation: scroll-notification 15s linear infinite; /* 应用滚动动画 */
    }

    /* 定义滚动动画，从当前位置滚动到-100%的位置 */
    @keyframes scroll-notification {
      from { transform: translateX(20%); } /* 动画开始位置 */
      to { transform: translateX(-100%); } /* 动画结束位置 */
    }

    /* 设置版权信息的样式 */
    .copyright {
      text-align: center; /* 文字居中 */
      font-size: 14px; /* 默认字体大小 */
      color: #333; /* 默认字体颜色 */
      margin-top: 10px; /* 与上一个元素的间距 */
    }

    /* CSS样式结束 */
  </style>
</head>
<body>
  <!-- 滚动通知栏开始，显示一些通知信息 -->
  <div class="notification-bar">
    <span class="notification-content">
      搞机大师，十年经验，专注手机数据恢复，平台24小时自动发货，在下方选择自己需要的工具下单即可，下单后可立即安装工具，若付款后未显示下载链接，重新识别二维码即可显示下载链接！
    </span>
  </div>
  <!-- 滚动通知栏结束 -->

  <!-- 按钮容器开始，包含所有按钮 -->
  <div class="button-container">
    <!-- 按钮1开始，链接到安卓手机照片恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/137.html" class="button"> 
      <img src="/logo/1.png" alt="Logo" class="logo"> 
      <span class="button-text">安卓手机照片恢复</span>
    </a>
    <!-- 按钮1结束 -->

    <!-- 按钮2开始，链接到安卓手机视频恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/138.html" class="button">
      <img src="/logo/2.png" alt="Logo" class="logo">
      <span class="button-text">安卓手机视频恢复</span>
    </a>
    <!-- 按钮2结束 -->

    <!-- 按钮3开始，链接到安卓手机聊天记录恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/139.html" class="button">
      <img src="/logo/3.png" alt="Logo" class="logo">
      <span class="button-text">安卓手机聊天记录恢复</span>
    </a>
    <!-- 按钮3结束 -->

    <!-- 按钮4开始，链接到苹果手机照片恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/140.html" class="button">
      <img src="/logo/4.png" alt="Logo" class="logo">
      <span class="button-text">苹果手机照片恢复</span>
    </a>
    <!-- 按钮4结束 -->

    <!-- 按钮5开始，链接到苹果手机视频恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/141.html" class="button">
      <img src="/logo/5.png" alt="Logo" class="logo">
      <span class="button-text">苹果手机视频恢复</span>
    </a>
    <!-- 按钮5结束 -->

    <!-- 按钮6开始，链接到苹果手机聊天记录恢复服务 -->
    <a href="http://99.haitangsheji.com/group.php/index/index/id/142.html" class="button">
      <img src="/logo/6.png" alt="Logo" class="logo">
      <span class="button-text">苹果手机聊天记录恢复</span>
    </a>
  <div class="copyright" id="copyright-text">
    数据恢复 © 2025 All Rights Reserved
  </div>
  <!-- 版权信息结束 -->
</body>
</html>