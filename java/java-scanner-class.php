<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Scanner Class User Input | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,user,input,scanner,class,methods">

    <meta name="Description" content="Ways to take inputs in java are-Scanner class,BufferedReader, DataInputStream.create Scanner Class Object and then by calling the methods of this class we can take user input,Scanner class is located inside java.util.; package,ex- Scanner sc = new Scanner(System.in);">

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
                <h4>User Inputs in Java</h4>
                <p>Taking inputs from users is very important function of any java program.</p>
                <br>
                <p>Ways to take inputs in java are:</p>
                <ul class="bullets">
                    <li><span class="coral">Scanner</span> class</li>
                    <li><span class="coral">BufferedReader</span> class</li>
                    <li><span class="coral">DataInputStream</span> class</li>
                </ul>
                <h1><span class="coral">Scanner</span> Class:</h1>
                <br>
                <p>Taking input using Scanner Class is the easiest method. We just need to create Scanner Class Object and then by calling the methods of this class we can take user input.</p>
                <p>Scanner class is located inside <span class="coral">java.util.Scanner</span> package.</p>
                <br>
                <h4>Constructors:</h4>
                <pre class="output">
 Scanner sc = new Scanner(System.in);     </pre>

                <p>Here, <span class="coral">System.in</span> is the reference of the input source (keyborad).</p>
                <br><br>

                <h4>Methods:</h4>
                <p>Scanner provides several methods which are used to take user inputs.</p>
                <br>
                <p>Some of the useful methods are:</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>hasNext()</td>
                            <td>Returns true if has another input token</td>
                        </tr>
                        <tr>
                            <td>hasNextBoolean()</td>
                            <td>Returns true if next Boolean token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextByte()</td>
                            <td>Returns true if next Byte token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextShort()</td>
                            <td>Returns true if next Short token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextInt()</td>
                            <td>Returns true if next int token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextLong()</td>
                            <td>Returns true if next long token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextFloat()</td>
                            <td>Returns true if next float token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextDouble()</td>
                            <td>Returns true if next double token exists</td>
                        </tr>
                        <tr>
                            <td>hasNextLine()</td>
                            <td>Returns true if next line exists</td>
                        </tr>
                        <tr>
                            <td>next()</td>
                            <td>Used to get next complete token</td>
                        </tr>
                        <tr>
                            <td>nextBoolean()</td>
                            <td>Returns next boolean token value</td>
                        </tr>
                        <tr>
                            <td>nextByte()</td>
                            <td>Returns next Byte token value</td>
                        </tr>
                        <tr>
                            <td>nextShort()</td>
                            <td>Returns next short token value</td>
                        </tr>
                        <tr>
                            <td>nextInt()</td>
                            <td>Returns next integer token value</td>
                        </tr>
                        <tr>
                            <td>nextLong()</td>
                            <td>Returns next long token value</td>
                        </tr>
                        <tr>
                            <td>nextFloat()</td>
                            <td>Returns next float token value</td>
                        </tr>
                        <tr>
                            <td>nextDouble()</td>
                            <td>Returns next double token value</td>
                        </tr>
                        <tr>
                            <td>nextLine()</td>
                            <td>Returns the next line of input string</td>
                        </tr>
                        <tr>
                            <td>reset()</td>
                            <td>Resets the scanner object</td>
                        </tr>
                        <tr>
                            <td>close()</td>
                            <td>Closes the scanner object</td>
                        </tr>

                    </table>
                </div>
                <br>
                <h4>Ex. Program:</h4>
                <p>Now, we do an example program where we take user input name, place &amp; age , store them and then display them to the console.</p>
                <br>
                <pre class="code prettyprint linenums=1">
import java.util.*;
class Test{
  public static void main(String args[]){
      Scanner sc = new Scanner(System.in);
      System.out.print("Name: ");
      String name = sc.next();
      System.out.print("Place: ");
      String place = sc.next();
      System.out.print("Age: ");
      int age = sc.nextInt();
      System.out.println(name+" from "+place+" Aged "+age);
    }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
   Name: Ronnie
   Place: NY
   Age: 24
   Ronnie from NY Aged 24 </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-enumerated-type.php" class="f-left">prev</a>
                    <a href="./java-buffered-reader.php" class="f-right">next</a>
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
