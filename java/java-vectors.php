<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Vector Class in Java | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,vectors,constructor,">

    <meta name="Description" content="Vectors are dynamic arrays which can contain any number of elements of different types but the elements has to be objects.Vectors are same as ArrayList where we can grow and shrink the size dynamically.vector class located inside java.util package">

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
                <h1>Vectors in Java</h1>
                <p>Vectors are dynamic arrays which can contain any number of elements of different types but the elements has to be objects.</p>
                <p>Vectors are same as ArrayList where we can grow and shrink the size dynamically.</p>
                <p>This class contained inside the <span class="coral">java.util</span> package.</p>
                <br>

                <h4>Constructors:</h4>
                <div class="table">
                    <table>
                        <tr>
                            <th>Constructor</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>Vector()</td>
                            <td>creates default vector with size 10</td>
                        </tr>
                        <tr>
                            <td>Vector(int n)</td>
                            <td>Vector with specified size n</td>
                        </tr>
                        <tr>
                            <td>Vector(int n,int i)</td>
                            <td>Vector with size n and increment step i</td>
                        </tr>
                        <tr>
                            <td>Vector(Collection c)</td>
                            <td>Vector with Collection c elements</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h4>Declaration of Vector:</h4>
                <pre class="output">
Vector v = new Vector();    <span class="comment">//default constructor</span>
Vector v2 = new Vector(20); <span class="comment">//vector with init size</span>
Vector v3 = new Vector(10,5);<span class="comment">//with size &amp; increment</span>
Vector v4 = new Vector(c);<span class="comment"> //with collection c</span></pre>

                <br><br>

                <p>Some Important methods to work on Vectors are-</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>void addElement(Object e)</td>
                            <td>Adds object e to the vector</td>
                        </tr>
                        <tr>
                            <td>void insertElementAt(Object e,int i)</td>
                            <td>Inserts element e at index i</td>
                        </tr>
                        <tr>
                            <td>int capacity( )</td>
                            <td>Returns capacity of vector</td>
                        </tr>
                        <tr>
                            <td>int size( )</td>
                            <td>Returns size of the Vector</td>
                        </tr>
                        <tr>
                            <td>boolean contains(Object e)</td>
                            <td>Checks if object contained inside vector</td>
                        </tr>
                        <tr>
                            <td>void setSize(int n)</td>
                            <td>Sets Vector size to n</td>
                        </tr>
                        <tr>
                            <td>void copyInto(Object array[ ])</td>
                            <td>Copies vector elements into array</td>
                        </tr>
                        <tr>
                            <td>Object elementAt(int i)</td>
                            <td>Returns element at index i</td>
                        </tr>
                        <tr>
                            <td>int indexOf(Object e)</td>
                            <td>Returns index of object e</td>
                        </tr>

                        <tr>
                            <td>boolean isEmpty( )</td>
                            <td>Returns true if vector is empty</td>
                        </tr>

                        <tr>
                            <td>void removeElementAt(int i)</td>
                            <td>Removes element at index i</td>
                        </tr>
                        <tr>
                            <td>boolean removeElement(Object e)</td>
                            <td>Removes object e from vector</td>
                        </tr>
                        <tr>
                            <td>void removeAllElements( )</td>
                            <td>Removes all vector elements</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h4>Ex. Program:</h4>
                <p>In this program, we'll create a <b>Vector</b> &amp; add elements to it.</p>
                <br>
                <pre class="code prettyprint linenums=1">
import java.util.*;
class Test{
 public static void main(String args[]){
    Vector v = new Vector();
    int size=v.size();
    System.out.println("Initial size of vector: "+size);
    v.addElement("Java");
    v.addElement("C++");
    v.addElement("Python");
    v.addElement("c#");
    size=v.size();
    System.out.println("Increased vector size: "+size);
    System.out.println("Vector elements are: ");
    String myArray[]= new String[size];
    v.copyInto(myArray);
    for(int i=0;i&lt;size;i++)
       System.out.println(myArray[i]);              
 }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
 Initial size of vector: 0
 Increased vector size: 4
 Vector elements are: 
 Java
 C++
 Python
 C#                 </pre>

                <br>

                <p>Here, we've created a Vector and added four elements to it with <span class="coral">addElement</span> method.</p>
                <p>Then copied the Vector into Array using <span class="coral">copyInto()</span> method, then printed the array elements.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-arraylist.php" class="f-left">prev</a>
                    <a href="./java-strings.php" class="f-right">next</a>
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
