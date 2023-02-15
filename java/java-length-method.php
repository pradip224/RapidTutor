<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java String length() Method | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,length,method,string">

    <meta name="Description" content="length() is a method in java which is used to find the current length of the invoking String Object.The method is associated with every string Object in java. Ex- myString.length();-It returns the length of the myString Object.">

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
                <h1>String <span class="coral">length()</span> method in Java</h1>
                <br>
                <p>length() is a method in java which is used to find the current length of the invoking String Object.</p>
                <p>The method is associated with every string Object in java.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">  int len = myString.length();</pre>
                <p>It returns the length of the myString Object which is stored in the integer variable len.</p>
                <br>
                <h4>Program:</h4><br>

                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      String str1 = "This is demo String";
      String str2 = "Demo-2 String";
      System.out.println("str1 length: "+str1.length());
      System.out.println("str2 length: "+str2.length());
  }
}                </pre>
                <h4>Output:</h4>
                <pre class="output">
    str1 length: 19
    str2 length: 13               </pre>

                <br>
                <p>This program creates two strings and printed their corresponding length using the length() method.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-string-builder.php" class="f-left">prev</a>
                    <a href="./java-string-handling-methods.php" class="f-right">next</a>
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
