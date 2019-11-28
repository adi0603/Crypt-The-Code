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
              <a href="game.html"></a>
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
        var crypted_code= new Array("bag agra luck low oak own new","kill ill the eat","and has sand dew","bit your teen eve","jug along vertical after");
        var hint=new Array("A flexible bag that can be inflated with a gas.","A frame covered with cloth or plastic and joined to a long string, that you fly in the air","To use your teeth to cut into something or someone","A unit of digital information that most commonly consists of eight bits", "A programming language that produces software for multiple platforms");
        var answer=new Array("balloon","kite","bite","byte","java");
        var random;
        function questions()
        {
          var min=1; 
          var max=2; 
          random = parseInt(Math.random() * (+max - +min) + +min);
        }

                    function output()
                    {
                      return random;
                    }
                    function stop()
                    {
                      swal({
                                  title: "STOP",
                                  text: "Your time is over.\nAnswer : "+answer[random-1],
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
                      var result=confirm("Are You ready to start.")
                      if(result)
                      {
                        questions();
                        display1();
                        display2();
                      }
                    }
                    function sure2()
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
          <table id="myTable">
            <caption>QUINTESSENCE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; TECH EMPORIUM</caption>
            <tbody>
              <tr id="myRow">
                <td colspan="2">Crypted Code</td>
                <td colspan="4">---------
                  <script type="text/javascript">
                    function display1()
                    {
                      var x = document.getElementById("myTable").rows[0].cells;
                        x[1].innerHTML = crypted_code[output()-1];
                    }                   
                  </script></td>
                <td colspan="1" rowspan="3">
                <div class="month">
                  <div class="textbox">
                    <input type="text" name="enteryear" placeholder="Timer" class='nice' id="timer" disabled>
                  </div>
                  </div>
                  
                </td>
              </tr>
              <tr>
                <td colspan="2">Hint</td>
                <td colspan="4">---------
                  <script type="text/javascript">
                    function display2()
                    {
                      var x = document.getElementById("myTable").rows[1].cells;
                        x[1].innerHTML = hint[output()-1];
                    }                  
                  </script></td>
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
                    <input type="submit" name="click" onClick="sure();" value="Generate Crypted Code">
                  </div>
                </td>
                <td colspan="1">
                  <div class="code">
                    <input type="submit" name="click" onClick="sure2();" value="START">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
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
