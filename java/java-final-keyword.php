<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Final Keyword, final variable,final method and final class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,final,keyword,variable,method,class">

    <meta name="Description" content="final is a keyword in java which can be used with-variables,methods,classes.A final variable is essentially a constant, it's value cannot be modified later,A final method cannot be overridden by the sub class,A final class cannot be Inherited or extended by other classes.">

    <?php include '../modules/head-links.php'; ?>



</head>

<body>

    <!--    SIDE-NAV   -->
    <?php include './j-module/side-nav.php'; ?>


    <!--    OPAQUE  -->
    <?php include '../modules/opaque.php'; ?>


    <!--    TOP-NAV-FIXED-->
    <?php include '../modules/top-nav.php'; ?>



    <!--MAIN-WRAPPER-->
    <div class="main-wrapper">


        <!--        BRAND-TOP         -->
        <?php include '../modules/brand-top.php'; ?>




        <!--WRAPPER-->
        <div class="wrapper">


            <!--MAIN-->

            <div class="main">
                <br>
                <h1><span class="coral">final</span> keyword in Java</h1>
                <br>
                <p><span class="coral">final</span> is a keyword in java which can be used with</p>
                <ul class="bullets">
                    <li>variables</li>
                    <li>methods</li>
                    <li>classes</li>
                </ul>

                <br>
                <div class="wall">
                    <h2>final with variable:</h2>
                    <p>A final variable is essentially a <b>constant</b>, it's value cannot be modified later.</p>
                    <p>It can be initialized </p>
                    <ul class="bullets">
                        <li>At the time of declaration</li>
                        <li>using Instance Initialization Block</li>
                        <li>using constructors</li>
                    </ul>
                    <p>final variables are often denoted with all UPPERCASE letters.</p>
                    <br>
                    <h4>Syntax:</h4>
                    <pre class="output">
  final double PI =3.14;      </pre>
                </div>

                <br>
                <br>

                <div class="wall">
                    <h2>final with Method:</h2>
                    <p>A final method cannot be <b>overridden</b> by the sub class.</p>
                    <p>Any attempt to override will give error.</p>
                    <br>
                    <h4>Syntax:</h4>
                    <pre class="output">
  final returnType methodName(){...}    </pre>
                </div>

                <br>
                <br>
                <br>
                <br>

                <div class="wall">
                    <h2>final with Class:</h2>
                    <p>A final class cannot be <b>Inherited</b> or <b>extended</b> by other classes.</p>
                    <p>Any attempt of extension will give error.</p>
                    <br>

                    <h4>Syntax:</h4>
                    <pre class="output">
  final class A{...}   </pre>
                </div>

                <br>
                <br>

                <h4>Program:</h4>
                <p>This program explains the use of final with variable, method &amp; classes.</p>
                <pre class="code prettyprint linenums=1">
final class A{     //final class

  final double PI = 3.14;   //final variable

  final void methodFinal(){  //final method
      System.out.println("Value of PI: "+PI);
  }
  public static void main(String[] args) {
      A obj = new A();
      obj.methodFinal();
  }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
  Value of PI: 3.14        </pre>

                <br>
                <br>
                <br>








                <div class="next-prev">

                    <a href="./java-method-overriding.php" class="f-left">prev</a>
                    <a href="./java-abstract-method-classes.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!--RIGHT-SIDE-->
            <div class="right-side">Right Side</div>
        </div>


        <!--        FOOTER-->
        <?php include '../modules/footer.php'; ?>



    </div>



</body>

</html>
