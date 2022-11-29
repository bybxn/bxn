<!DOCTYPE html>
<html>
  <head>
    <title>哈喽，你好(ㅇㅅㅇ❀)
    </title>
  </head>
  <body id="bj" bgcolor="ffefec">
  
  
  
  
   
    <img src="https://i.328888.xyz/img/2022/11/26/yCob.jpeg" alt="logo" width="400px" height="400px">
    <button type="button" onclick="alert('3456184508')">作者qq</button>
    <h1></h1>
    
   
	
    
    
    
    <font color="#87CEFA" size="6">小白教程(php变量)</font>
    <hr>
    
    
    
    <font color="#87CEFA">今天给大家带来的是php相关变量，格式与输出<br>
    总共分为String(字符串)，Integer(整型)，Float(浮点型)，
    Boolean(布尔型)，Array(数组)，Object(对象)，NULL(空值)，
    Resource(资源类型)
      <br>大概按格式摆放，一一对应就对了╰(*´︶`*)╯
    </font>
    
    
    
    <br>
    <ins style="color:#5D99FF;font-size:11px;">由于代码看不见，所以以下我们都使用"var_dump"获取数据类型</ins>
    <h1></h1>
    
    
    <font color="#87cefa">以下是String(字符串)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=你好</td>
    <td>b=nh</td>
    <td>c=。。</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = "你好"; var_dump($x); ?>
    <br>
    <?php $x = "nh"; var_dump($x); ?>
    <br>
    <?php $x = "。。"; var_dump($x); ?>
    </p>
    <p style="color:#5d99ff;font-size:7px;">
    by–括号里是字节的意思，中文字符都为3个单位，英文则是1个单位
    </p>
    
    
    <font color="#87cefa">以下是Integer(整型)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=666</td>
    <td>b=11413</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = 666; var_dump($x); ?>
    <br>
    <?php $x = 11413; var_dump($x); ?>
    </p>    
  



    <font color="#87cefa">以下是Float(符点型)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=3.14</td>
    <td>b=1.414</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = 3.14; var_dump($x); ?>
    <br>
    <?php $x = 1.414; var_dump($x); ?>
    </p>    
    
    
    <font color="#87cefa">以下是Boolean(布尔型)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=true</td>
    <td>b=false</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = true; var_dump($x); ?>
    <br>
    <?php $x = false; var_dump($x); ?>
    </p>
    <p style="color:#5d99ff;font-size:7px;">
    by–只有开启关闭两种状态，可以被直接判断
    </p>
    
    
    <font color="#87cefa">以下是Array(数组)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=array("Volvo","BMW","Toyota")</td>
    <td>b=array()</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = array("Volvo","BMW","Toyota"); var_dump($x); ?>
    <br>
    <?php $x = array(); var_dump($x); ?>
    </p>
    <p style="color:#5d99ff;font-size:7px;">
    by–中括号是对应参数的下标，小括号里的是字节数
    </p>
 
    
    <font color="#87cefa">以下是NULL(空值)类型</font>
    <br>
    <table border="1" style="color:#5d99ff;font-size:30px;">
    <tr>
    <td>a=null</td>
    <td>无赋值变量b</td>
    </tr>
    </table>
    <font style="color:#8646FF;font-size:10px;">判断结果为分别为</font>
    <br>
    <p style="color:#8646FF;font-size:10px;">
    <?php $x = null; var_dump($x); ?>
    <br>
    <?php var_dump($x); ?>
    </p>    
    <p style="color:#5d99ff;font-size:7px;">
    by–删除数据就是赋予null
    </p>
    
    
    

  </body>
</html>
