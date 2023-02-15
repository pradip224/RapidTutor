<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Input Using BufferedReader Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,BufferedReader,input,read,readLine,ready,skip,reset,close">

    <meta name="Description" content="Buffered Reader class used to read text from an Input Stream, Unlike Scanner Class it buffers the characters with 8KB buffer size and lot faster than Scanner-Buffered Reader located in java.io package, Example- BufferedReader br = new BufferedReader(new InputStreamReader(System.in))">

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
                <h1>BufferedReader in Java</h1>
                <p>Buffered Reader class used to read text from an Input Stream. Unlike Scanner Class it buffers the characters with 8KB buffer size and lot faster than Scanner.</p>
                <p>Buffered Reader located in <span class="coral">java.io</span> package.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));</pre>

                <p>Buffered Reader has several methods to perform input operations.</p>
                <br>
                <p>Some of the methods are:</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>read()</td>
                            <td>reads single char &amp; returns ascii value of it as int</td>
                        </tr>
                        <tr>
                            <td>readLine()</td>
                            <td>Reads a line &amp; returns string</td>
                        </tr>
                        <tr>
                            <td>ready()</td>
                            <td>checks if input stream ready to read or not</td>
                        </tr>
                        <tr>
                            <td>skip(n)</td>
                            <td>Used to skip n characters</td>
                        </tr>
                        <tr>
                            <td>reset()</td>
                            <td>Resets the input stream</td>
                        </tr>
                        <tr>
                            <td>close()</td>
                            <td>Closes input stream &amp; releases system resources</td>
                        </tr>
                    </table>
                </div>
                <br>
                <h4>Program:</h4>
                <p>Let's do one example program to take user input and display the same.</p>
                <pre class="code prettyprint linenums=1">
import java.io.*;
class Test{
  public static void main(String args[])throws IOException{
      BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
      System.out.print("Enter the Line: ");
      String str = br.readLine();
      System.out.println("Your Line: "+str);
  }
}     </pre>

                <h4>Output:</h4>
                <pre class="output">
Enter the Line: This is Java Tutorial
Your Line: This is Java Tutorial               </pre>

                <p>Here, we've created the object of <b>BufferedReader</b> class &amp; then using the object called the method <b>readLine()</b> to take one line of user input.</p>
                <p>Which is stored into the String variable <b>str</b>.</p>
                <p>Then, the value of str is printed back to the user.</p>









                <div class="next-prev">

                    <a href="./java-scanner-class.php" class="f-left">prev</a>
                    <a href="./java-data-input-stream.php" class="f-right">next</a>
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
