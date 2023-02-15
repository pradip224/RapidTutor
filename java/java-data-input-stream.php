<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java DataInputStream Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,datainputstream">

    <meta name="Description" content="DataInputStream Class used to read primitive data from the input stream,This class located inside java.io package,Ex- DataInputStream d = new DataInputStream(System.in),Here, System.in is the reference of the input source (keyborad).">


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
                <h1>DataInputStream in Java</h1>
                <p>DataInputStream Class used to read primitive data from the input stream.</p>
                <p>This class located inside <span class="coral">java.io</span> package.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">DataInputStream d = new DataInputStream(System.in);</pre>

                <p>Here, <span class="coral">System.in</span> is the reference of the input source (keyborad).</p>
                <br>
                <br>
                <h4>Methods:</h4>
                <p>Some of the methods of DataInputStream Class are:</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>readBoolean()</td>
                            <td>Reads one byte &amp; returns boolean true or false</td>
                        </tr>
                        <tr>
                            <td>readChar()</td>
                            <td>Reads 2 input bytes &amp; returns char value</td>
                        </tr>
                        <tr>
                            <td>readByte()</td>
                            <td>Read &amp; returns one input byte</td>
                        </tr>
                        <tr>
                            <td>readInt()</td>
                            <td>Reads input bytes &amp; return int value</td>
                        </tr>
                        <tr>
                            <td>readDouble()</td>
                            <td>Reads 8 input bytes &amp; returns double value</td>
                        </tr>

                        <tr>
                            <td>skipBytes(n)</td>
                            <td>Skips n bytes of input stream data</td>
                        </tr>
                        <tr>
                            <td>readUTF()</td>
                            <td>Used to read UTF-8 format</td>
                        </tr>
                        <tr>
                            <td>readFully(b)</td>
                            <td>Reads input stream bytes &amp; store them into buffer array</td>
                        </tr>
                        <tr>
                            <td>readFully(b,0,len)</td>
                            <td>Reads len bytes from input stream</td>
                        </tr>

                    </table>
                </div>
                <br>
                <br>
                <h4>Program:</h4>
                <p>Now, let's do an example program to take user input using the DataInputStream Class &amp; it's methods.</p>
                <br>
                <pre class="code prettyprint linenums=1">
import java.io.DataInputStream;
import java.io.IOException;

class Test{
  public static void main(String[] args) throws IOException {
      DataInputStream d = new DataInputStream(System.in);
      System.out.print("Enter Your Age: ");
      String s = d.readLine();
      System.out.println("Your Age: "+s);
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
    Enter Your Age: 23
    Your Age: 23           </pre>

                <br>
                <br>
                <br>








                <div class="next-prev">

                    <a href="./java-buffered-reader.php" class="f-left">prev</a>
                    <a href="./java-what-is-class.php" class="f-right">next</a>
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
