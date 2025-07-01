<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 指定字符编码为UTF-8 -->
    <meta charset="UTF-8">
    <!-- 视口设置，确保页面在移动设备上正确缩放 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 页面标题 -->
    <title>退款说明</title>
    <!-- 内联样式，定义页面的基本样式 -->
    <style>
        body {
            font-family: Arial, sans-serif; /* 使用Arial字体，备用字体为sans-serif */
            margin: 0; /* 移除页面边距 */
            padding: 0; /* 移除内边距 */
            display: flex; /* 使用Flexbox布局 */
            flex-direction: column; /* 子元素垂直排列 */
            align-items: center; /* 水平居中对齐 */
            justify-content: center; /* 垂直居中对齐 */
            height: 60vh; /* 高度设置为视口高度的60% */
            background-color: #f7f7f7; /* 设置页面背景颜色 */
        }
        .content {
            background-color: #fff; /* 设置内容区域背景颜色 */
            border: 1px solid #ddd; /* 设置边框颜色和样式 */
            padding: 20px; /* 设置内边距 */
            border-radius: 8px; /* 设置边框圆角 */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 设置阴影效果 */
            width: 80%; /* 设置宽度为视口宽度的80% */
            max-width: 600px; /* 设置最大宽度 */
            margin: auto; /* 上下外边距自动，实现垂直居中 */
            text-align: center; /* 文本居中对齐 */
        }
        .title {
            text-align: center; /* 文本居中对齐 */
            font-size: 20px; /* 字体大小 */
            margin-bottom: 20px; /* 与下文间距 */
            line-height: 1.4; /* 行距 */
        }
        .description {
            text-align: justify; /* 文本两端对齐 */
            font-size: 15px; /* 字体大小 */
            margin-bottom: 20px; /* 与下文间距 */
            line-height: 1.9; /* 行距 */
        }
        .button {
            display: block; /* 使按钮独占一行 */
            margin: 20px auto; /* 上下外边距为20px，左右自动，实现水平居中 */
            padding: 10px 20px; /* 按钮的内边距 */
            font-size: 16px; /* 字体大小 */
            cursor: pointer; /* 鼠标悬停时显示指针 */
            background-color: #4CAF50; /* 按钮背景颜色 */
            color: white; /* 文字颜色 */
            border: none; /* 移除边框 */
            border-radius: 5px; /* 边框圆角 */
        }
        .button:hover {
            background-color: #45a049; /* 鼠标悬停时的背景颜色 */
        }
    </style>
</head>
<body>
    <!-- 页面的主要内容区域 -->
    <div class="content">
        <!-- 页面标题 -->
        <h1 class="title">退款说明</h1>
        <!-- 退款说明的文字内容 -->
        <p class="description">如果您购买了软件，但是出现软件无法打开，软件闪退，软件崩溃，软件白屏等问题，请填写表格，提交退款申请后，费用24小时内会原路退回，遇周末或其他法定节假日延顺，软件为虚拟物品，下单前请务必仔细阅读下单须知！</p>
        <!-- 退款按钮 -->
        <button class="button" onclick="openRefundPage()">确定退款</button>
    </div>

    <!-- JavaScript脚本 -->
    <script>
        // 点击按钮时调用的函数
        function openRefundPage() {
            // 替换成实际的退款申请表格页面的URL
            var refundUrl = 'https://q11.wazql.cn/RsJf'; 
            // 在新标签页打开退款表格页面
            window.open(refundUrl, '_blank');
        }
    </script>
</body>
</html>