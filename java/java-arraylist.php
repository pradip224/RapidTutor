<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java ArrayList Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,arraylist,constructor,methods,add,addAll,set,size,trimToSize,ensureCapacity,get,contains,subList,toArray,indexOf,lastIndexOf,remove,removeAll,removeRange,isEmpty,clear">

    <meta name="Description" content="ArrayList is basically a dynamic array where we can grow and shrink the size of the array at run time as per requirement,When elements are added to the list the size of arraylist is enlarged and removing them shrinks down the size, ArrayList() - Creates an ArrayList with no elements.">

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
                <h1>ArrayList Class in Java</h1>
                <p>ArrayList is basically a dynamic array where we can grow and shrink the size of the array at run time as per requirement.</p>
                <br>
                <p>Where in case of array we need to specify the size of the array initially and which is of fixed size but sometimes the size of the array is not known until runtime in that case arraylist is best suited. </p>
                <p>When elements are added to the list the size of arraylist is enlarged and removing them shrinks down the size.</p>
                <br>
                <h3>Constructors of ArrayLlist</h3>
                <ul class="bullets">
                    <li>ArrayList() - <small>Creates an ArrayList with no elements.</small></li>

                    <li>ArrayList(int size) - <small>ArrayList with initial specified size</small></li>
                    <li>ArrayList(Collection obj) - <small>ArrayList initialized with collection object.</small></li>
                </ul>
                <br>
                <h3>Methods in ArrayList</h3>
                <p>Frequently used methods in ArrayList are-</p>
                <br>
                <div class="wall">
                    <h4>boolean add(Element e)</h4>
                    <p>Used to add Element e at the end of the list.</p>
                    <pre class="output">     al.add("java");</pre>
                </div>
                <br>

                <div class="wall">
                    <h4>void add(int index, Element e)</h4>
                    <p>adds Element e at specified index.</p>
                    <pre class="output">    al.add(2,"java");</pre>
                </div>

                <br>
                <div class="wall">
                    <h4 class="wall">boolean addAll(Collection c)</h4>
                    <p>adds all the elements of Collection c at the end of the List.</p>
                    <pre class="output">  al.addAll(obj);</pre>
                </div>
                <br>
                <div class="wall">
                    <h4>boolean addAll(int index, Collection c)</h4>
                    <p>appends elements of collection c after specified index in the list.</p>
                    <pre class="output">  al.addAll(3,obj);</pre>
                </div>

                <br>

                <div class="wall">
                    <h4> set(int index, Element e)</h4>
                    <p>Replaces element at index position with the given Element e.</p>
                    <pre class="output"> al.set(5,"fresh");</pre>
                </div>

                <br>

                <div class="wall">
                    <h4>int size()</h4>
                    <p>Returns the size or number of elements present in the ArrayList.</p>
                    <pre class="output"> al.size();</pre>
                </div>

                <br>

                <div class="wall">
                    <h4>trimToSize()</h4>
                    <p>Trims down ArrayList capacity to current size of the list.</p>
                    <pre class="output"> al.trimToSize();</pre>
                </div>

                <br>

                <div class="wall">
                    <h4>void ensureCapacity(int cap)</h4>
                    <p>Manually increases capacity of ArrayList with specified cap.</p>
                    <pre class="output"> al.ensureCapacity(10);</pre>
                </div>
                <br>

                <div class="wall">
                    <h4>get(int index)</h4>
                    <p>Returns the element at index position of the ArrayList.</p>
                    <pre class="output"> al.get(3);<span class="comment">// returns element at index 3</span></pre>
                </div>
                <br>

                <div class="wall">
                    <h4>boolean contains(Element e)</h4>
                    <p>Returns true if specified element is present in the ArrayList.</p>
                    <pre class="output">  al.contains("java");</pre>
                </div>

                <br>

                <div class="wall">
                    <h4>List subList(int from, int to)</h4>
                    <p>Returns a sublist containing the elements in between the index positions <span class="coral">from</span> and <span class="coral">to</span>.</p>
                    <pre class="output">al.subList(2,5);<span class="comment">//returns sublist from 2 to 5</span></pre>
                </div>

                <br>
                <div class="wall">
                    <h4>array[] toArray()</h4>
                    <p>Returns <span class="coral">array[]</span> containing all elements of the ArrayList.</p>
                    <pre class="output">  al.toArray();</pre>
                </div>
                <br>
                <div class="wall">
                    <h4>int indexOf(Element e)</h4>
                    <p>Returns the index position of Element e where it is first located in the ArrayList. If not present returns -1.</p>
                    <pre class="output">a.indexOf("java");<span class="comment">//returns position of "java"</span></pre>
                </div>
                <br>
                <div class="wall">
                    <h4>int lastIndexOf(Element e)</h4>
                    <p>Returns the index position of the specified element where it is last located in the ArrayList. If not present returns -1.</p>
                    <pre class="output">al.lastIndexOf("java");<span class="comment">//returns lastIndexOf "java"</span></pre>
                </div>
                <br>
                <div class="wall">
                    <h4>remove(int index)</h4>
                    <p>Removes the element from the index position specified.</p>
                    <pre class="output">al.remove(2);<span class="comment">//removes element from index 2</span></pre>
                </div>
                <br>
                <div class="wall">
                    <h4> remove(Element e)</h4>
                    <p>Removes Element e where it is first located in the ArrayList.</p>
                    <pre class="output">al.remove("java"); <span class="comment">//removes "java" first occurence </span></pre>
                </div>
                <br>
                <div class="wall">
                    <h4> removeAll(Collection c)</h4>
                    <p>Removes all the elements that are in Collection c , from the ArrayList.</p>
                    <pre class="output"> al.removeAll(al1);</pre>
                </div>
                <br>
                <div class="wall">
                    <h4>removeRange(int from, int to)</h4>
                    <p>Removes all the elements in between the index ranges.</p>
                    <pre class="output">  al.removeRange(2,5);</pre>
                </div>
                <br>
                <div class="wall">
                    <h4>boolean isEmpty()</h4>
                    <p>Returns true if the ArrayList is empty else returns false.</p>
                    <pre class="output">  al.isEmpty();</pre>
                </div>
                <br>
                <div class="wall">
                    <h4>void clear()</h4>
                    <p>Used to remove all the elements from the ArrayList.</p>
                    <pre class="output"> al.clear();</pre>
                </div>
                <br>
                <br><br>

                <div class="next-prev">

                    <a href="./java-array-length.php" class="f-left">prev</a>
                    <a href="./java-vectors.php" class="f-right">next</a>
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
