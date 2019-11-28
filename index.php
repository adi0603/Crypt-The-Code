<?php
  $crypted_code = array('0'=>'--------','1'=>'bag agra luck low oak own new','2'=>'kill ill the eat','3'=>'and has sand dew','4'=>'bit your teen eve','5'=>'jug along vertical after');
  $hint = array('0'=>'--------','1'=>'A flexible bag that can be inflated with a gas.','2'=>'A frame covered with cloth or plastic and joined to a long string, that you fly in the air','3'=>'To use your teeth to cut into something or someone','4'=>'A unit of digital information that most commonly consists of eight bits','5'=>'A programming language that produces software for multiple platforms');
  $answer = array('0'=>'--------','1'=>'balloon','2'=>'kite','3'=>'bite','4'=>'byte','5'=>'java');
  $randomnumber=0;
  if(isset($_POST['submit']))
  {
    $randomnumber=rand(1,5);
  }
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="image/logo.png"/>
    <title>Crypt The Code</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://kit.fontawesome.com/ab99e84824.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header class="page-header">
        <nav>
          <h2 class="logo">Crypt The Code</h2>
          <ul>
            <li>
              <a href="index.php"></a>
            </li>
            <li>
              <a href="#">A4ALGO &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; ABACUS</a>
            </li>
          </ul>
        </nav>
      </header>
      <style type="text/css">
        .code input[type="submit"]{
  background: #3498DB;
  border-radius: 20px;
  padding: 8px 30px;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  letter-spacing: 0.1px;
  transition: all 0.25s linear;
}

.code input[type="submit"]:hover{
  color: #3498DB;
  background: #fff !important;
}
.code input[type="submit"]:focus {
  outline: none;
}

      </style>

      <script type="text/javascript">
                    function stop()
                    {
                      swal({
                                  title: "STOP",
                                  text: "Your time is over.\nCrypted Code :<?php echo $crypted_code[$randomnumber];?>\nHint : <?php echo $hint[$randomnumber];?>\n Answer : <?php echo $answer[$randomnumber];?>",
                                  imageUrl: 'image/stop.png'
                                });
                      
                    }
                    function sleep(ms) 
                    {
                      return new Promise(resolve => setTimeout(resolve, ms));
                    }
                    async function time()
                    {
                      for(var i=0;i>=0;i--)
                      {
                        for(var j=20;j>=0;j--)
                        {
                          var m="",s="";
                          if(i<10)
                          {
                            m="0";
                          }
                          if(j<10)
                          {
                            s="0";
                          }
                          var st="   "+m+i+" : "+s+j;
                          document.getElementById('timer').value=st;
                          await sleep(1000);
                        }
                        if(i==0)
                        {
                          stop();
                          document.getElementById('timer').value="Timer";
                        }
                      }
                    }
    
                    function sure()
                    {
                      var result=confirm("Press OK to start.")
                      if (result)
                      {
                        time();
                      }
                    }
      </script>


      <main class="page-main">
        <div class="container">

          <form action="" method="POST">
          <table>
            <caption>QUINTESSENCE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; TECH EMPORIUM</caption>
            <tbody>
              <tr id="myRow">
                <td colspan="2">Crypted Code</td>
                <td colspan="4"><?php echo $crypted_code[$randomnumber]; ?></td>
              </tr>
              <tr>
                <td colspan="2">Hint</td>
                <td colspan="4"><?php echo $hint[$randomnumber]; ?></td>
              </tr>
              <tr>
                <td colspan="2">Rules:</td>
                <td colspan="1"></td>
                <td colspan="3" style="text-align: left;">
                                1. It can be first character of each word.<br>
                                2. It can be last character of each word.<br>
                                3. It can be first character incremented/decrepted with a key.<br>
                                4. It can be last character incremented/decrepted with a key.<br>
                                5. It can be second character of each word.
                </td>
              </tr>
              <tr>
                <td colspan="6" >
                  <div class="code">
                    <input type="submit" name="submit" value="Generate Crypted Code">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <center>
          <div class="month">
            <div class="textbox">
              <input type="text" name="enteryear" placeholder="Timer" class='nice' id="timer" disabled>
            </div>
          </div>
          <div class="code">
            <input type="submit" name="click" onClick="sure();" value="START">
          </div>
        
        </center>
        </div>
      </main>
      <footer class="page-footer">
        <small>&copy; Copyright 2019. All rights reserved.</small>
        <ul>
          <li>
            <a href="https://www.instagram.com/_simplethoughts._/?igshid=k93qpcqslcgk" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/aditya-pandey-1375a818a/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li>
            <a href="https://github.com/adi0603" target="_blank"><i class="fab fa-github"></i></i></a>
          </li>
          <li>
            <a href="https://www.hackerrank.com/adi_pandey" target="_blank"><i class="fab fa-hackerrank"></i></a>
          </li>
        </ul>
      </footer>
    </div>
    <div class="loader"></div>
  </body>
</html>
