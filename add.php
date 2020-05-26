<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>用于添加信息的表单</title>
        <style>
            #box{width: 500px;border:1px solid #e4e4e4;margin: 0 auto;text-align: center;}
        </style>
    </head>
    <body>
        <div id="box">
            <h2>请填写学生信息：</h2>
            <form action="insert.php" method="post">
                <p>
                    学号：<input type="text" name="sno">
                </p>
                <p>
                    姓名：<input type="text" name="sname">
                </p>
                <p>
                    性别：
                    <input type="radio" name="ssex" value="男" checked="">男
                    <input type="radio" name="ssex" value="女" >女
                </p>
                <p>
                    出生日期：<input type="date" name="sbirthday"><span>例如：2020-5-26</span>
                </p>
                <p>
                    电子邮箱：<input type="email" name="email">
                </p>
                <p>
                    电话：<input type="tel" name="tel">
                </p>
                <input type="submit" value="添加">
                <input type="reset" value="重置">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
