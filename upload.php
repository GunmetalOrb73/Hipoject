<!DOCTYPE HTML>
<head>
<?php
include 'config.php';
?>
<title><?php echo "".$websitename.""?>&nbsp;-Powered By hehaoyuan1997</title>
<meta name="keywords" content="Hipoject,hehaoyuan1997">
<meta name="descrption" content="Hipoject��һ��ͼ������hehaoyuan1997��д">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="author"
content="hehaoyuan1997">
<!---copyright (c) 2013-2013 hehaoyuan1997 All Rights Reserved--->
<!---Powered By hehaoyuan1997--->
<!---author website:http://www.ddpool.com/--->
<!---hehaoyuan1997��ʼ��2013��8��18��23:19:57��д--->
<style type="text/css">  
.align-center{  
    margin:0 auto;      /* ���� ����Ǳ���ģ������������ԷǱ��� */  
    width:1024;        /* ������� ��������������߾Ϳ���������Ч���� */  
    text-align:left;  /* ���ֵ����ݾ��� */  
}  
body {
text-align: center;  /* ҳ��Ԫ�ؾ��� */
} 
.txtcss1 {
text-align: center;  /* ���������Ҷ��� */
}  
.txtcss2 {
text-align:right;  /* ���������Ҷ��� */
}  
.txtcss3 {
text-align:left;  /* ���������Ҷ��� */
}  
.form0{
background-color:rgb(210,210,210);
padding:10px
}
wrap {text-align:left;}
</style>
</head>

<body bgcolor=#E2E2E2><div class="align-center">
  <h1><?php echo "".$websitename."&nbsp".$version."" ?></h1>
     </br>
     <div class="txtcss1"><a href="<?php echo "$websiteurl" ?>">��ҳ</a>
     <a href="<?php echo "".$websiteurl."about.php" ?>">����</a>
     <a href="<?php echo "".$websiteurl."help.php" ?>">����</a>
     </br></br></div>



<?php   
 /*****************************************   
   Title :�ļ��ϴ����   
   Author:leehui1983(���ϴ�)   
   Finish Date  :2006-12-28   
   Edit Date  :2014-06-24
   Edit By  :hehaoyuan1997
  *****************************************/   
   $uploaddir = "./".$imagefile."";//�����ļ�����Ŀ¼ ע�����/       
   $type=array("jpg","gif","bmp","jpeg","png");//���������ϴ��ļ�������    
   $patch="".$websiteurl."";//��������·��   

   //��ȡ�ļ���׺������   
      function fileext($filename)   
    {   
        return substr(strrchr($filename, '.'), 1);   
    }   
   //��������ļ�������       
    function random($length)   
    {   
        $hash = 'CR-';   
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';   
        $max = strlen($chars) - 1;   
        mt_srand((double)microtime() * 1000000);   
            for($i = 0; $i < $length; $i++)   
            {   
                $hash .= $chars[mt_rand(0, $max)];   
            }   
        return $hash;   
    }   
   //��ά�����ϴ�ͼƬѭ�����ֿ�ʼ
    $counts=count(@$_FILES['file']['name']);        //ͳ���ϴ��ļ�����
	$num=0;                                        //��������
    while ($num < $counts) {
	  

   
     $a=strtolower(fileext($_FILES['file']['name'][$num]));   
     //�ж��ļ�����   
     if(!in_array(strtolower(fileext($_FILES['file']['name'][$num])),$type))   
       {   
          $text=implode(",",$type);   
          echo "��ֻ���ϴ����������ļ�: ",$text,"<br>";   
       }   
     //����Ŀ���ļ����ļ���       
     else{   
      $filename=explode(".",$_FILES['file']['name'][$num]);   
          do   
          {   
              $filename[0]=random(10); //�������������   
              $name=implode(".",$filename);   
              //$name1=$name.".Mcncc";   
              $uploadfile=$uploaddir.$name;   
          }   
     while(file_exists($uploadfile));   
          if (move_uploaded_file($_FILES['file']['tmp_name'][$num],$uploadfile)){   

              if(is_uploaded_file($_FILES['file']['tmp_name'][$num])){   
                  //���ͼƬԤ��   
                  echo "<center>�����ļ��Ѿ��ϴ���� �ϴ�ͼƬԤ��: </center><br><center><img src='$uploadfile'></center>";   
                  echo"<br><center><a href='javascript:history.go(-1)'>�����ϴ�</a></center>";   
				  echo "       <table border=\"0\" align=\"center\">";
				  echo "        <form name=\"form1\" action=\"".$websiteurl."login.php\" method=\"post\">";
				  echo "           <caption>ͼƬ����</caption>";
				  echo "           <tr><th>��̳����(BBCode)��</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"[IMG]".$websiteurl."".$imagefile."".$name."[/IMG]\"></br></td>";
				  echo "           </tr>";
				  echo "           <tr><th>HTML���룺</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"&lt;a href=&quot;".$websiteurl."&quot;&gt;&lt;img src=&quot;".$websiteurl."".$imagefile."".$name."&quot;&nbsp;title=&quot;��ͼƬʹ�õ�ͼ��Ϊ".$websitename."&quot;&nbsp;/&gt;&lt;/a&gt;\"></br></td>";
				  echo "           </tr>";
				  echo "           <tr><th>ԭͼ���ӣ�</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"".$websiteurl."".$imagefile."".$name."\"></br></td>";
				  echo "           </tr>";
				  echo "        </table>";
                }   
                else{   
                  //���ͼƬԤ��   
                  echo "<center>�����ļ��Ѿ��ϴ���� �ϴ�ͼƬԤ��: </center><br><center><img src='$uploadfile'></center>";   
                  echo"<br><center><a href='javascript:history.go(-1)'>�����ϴ�</a></center>";   
				  echo "       <table border=\"0\" align=\"center\">";
				  echo "        <form name=\"form1\" action=\"".$websiteurl."login.php\" method=\"post\">";
				  echo "           <caption>ͼƬ����</caption>";
				  echo "           <tr><th>��̳����(BBCode)��</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"[IMG]".$websiteurl."".$imagefile."".$name."[/IMG]\"></br></td>";
				  echo "           </tr>";
				  echo "           <tr><th>HTML���룺</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"&lt;a href=&quot;".$websiteurl."&quot;&gt;&lt;img src=&quot;".$websiteurl."".$imagefile."".$name."&quot;&nbsp;title=&quot;��ͼƬʹ�õ�ͼ��Ϊ".$websitename."&quot;&nbsp;/&gt;&lt;/a&gt;\"></br></td>";
				  echo "           </tr>";
				  echo "           <tr><th>ԭͼ���ӣ�</th>";
				  echo "           <td><input type=\"text\" name=\"username\" readonly size=\"100\"value=\"".$websiteurl."".$imagefile."".$name."\"></br></td>";
				  echo "           </tr>";
				  echo "        </table>";
                }   
          }   
     }    
	$num++;
	}
?> 



<!---�������ɲ���--->
<!---old version 0.5
       <table border="0" align="center">
        <form name="form1" action="<?php //echo "".$websiteurl."login.php" ?>" method="post">
           <caption>ͼƬ����</caption>
           <tr><th>��̳����(BBCode)��</th>
           <td><input type="text" name="username" readonly size="100"value="<?php //echo "[IMG]".$websiteurl."".$imagefile."".$name."[/IMG]" ?>"></br></td>
           </tr>
           <tr><th>HTML���룺</th>
           <td><input type="text" name="username" readonly size="100"value="<?php //echo "&lt;a href=&quot;".$websiteurl."&quot;&gt;&lt;img src=&quot;".$websiteurl."".$imagefile."".$name."&quot;&nbsp;title=&quot;��ͼƬʹ�õ�ͼ��Ϊ".$websitename."&quot;&nbsp;/&gt;&lt;/a&gt;" ?>"></br></td>
           </tr>
           <tr><th>ԭͼ���ӣ�</th>
           <td><input type="text" name="username" readonly size="100"value="<?php //echo "".$websiteurl."".$imagefile."".$name."" ?>"></br></td>
           </tr>
        </table>
--->







  <!---ʱ����ʾ����--->
  </br></br></br></br>
  <?php
    echo date("������Y��m��d��Hʱi��s��(��ʱ��ʱ��ΪeP)");
    echo "</br>";
  ?>
  <span style="float:left">Powered By <a href="http://www.ddpool.com" >hehaoyuan1997</a></span>
  <span style="float:right"><?php echo "$copyright" ?></span></div>
</body>