<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Strings in Java | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,string,class,object,stringbuffer,stringbuilder,types">

    <meta name="Description" content="String is a data type which represents a sequence of characters together.String class is located in java.lang package,String is immutable meaning once String is created we cannot make changes to it,Java provides a set of methods which makes it easier for string manipulation.">

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
                <h1>Strings in Java</h1>
                <p>In java, String is a data type which represents a sequence of characters together.</p>
                <p>Every String in java is an Object of type String unlike char array in C.</p>
                <br>
                <p>The <span class="coral">String</span> class is located in java.lang package which is imported by default.</p>
                <p>Java provides a set of methods which makes it easier for string manipulation.</p>
                <br>
                <p>In Java, String is <span class="coral">immutable</span> meaning once String is created we cannot make changes to it.</p>
                <br>
                <p>Although, Strings are immutable but there are classes which let us modify the created Strings, Like:</p>

                <ul class="bullets">
                    <li>StringBuffer Class</li>
                    <li>StringBuilder Class</li>
                </ul>
                <br>
                <h3>Creating a String:</h3>
                <p>String can be declared and initialized at once or at a later time.</p>
                <pre class="output ">
  String myString = "Welcome to java";
               or
  String myString;
  myString = "Welcome to java";  </pre>
                <br>
                <h3>String from <span class="coral">char[]</span> Array</h3>
                <pre class="output">
  char ch[]={'j','a','v','a'};
  String myString = new String(ch); </pre>

                <br><br>

                <h3>Constructors:</h3>
                <p>We can create a string using one of the constructors of String class using the new keyword.</p>
                <br>
                <div class="table">
                    <table>
                        <tr>
                            <th>Constructor</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>String()</td>
                            <td>Default constructor</td>
                        </tr>
                        <tr>
                            <td>String(byte asci[])</td>
                            <td>ascii byte[] to String</td>
                        </tr>
                        <tr>
                            <td>String(byte asci[],int start,int count)</td>
                            <td>String from byte[] with start index and element count</td>
                        </tr>
                        <tr>
                            <td>String(char [])</td>
                            <td>Char[] to String</td>
                        </tr>
                        <tr>
                            <td>String(char[],int start,int count)</td>
                            <td>String from char[] with start index and element count</td>
                        </tr>
                        <tr>
                            <td>String(String obj)</td>
                            <td>String from another String Object</td>
                        </tr>
                    </table>
                </div>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      String myString= new String("Java is Wonderful");
      System.out.println(myString);
  }
}                </pre>
                <h4>Output:</h4>
                <pre class="output">  Java is Wonderful</pre>
                <br><br>










                <div class="next-prev">

                    <a href="./java-vectors.php" class="f-left">prev</a>
                    <a href="./java-String-Buffer.php" class="f-right">next</a>
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
