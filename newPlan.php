        <?php
            echo "six-character identifier token ";
            echo substr(md5(rand()),6,6);
        ?>

        <!DOCTYPE html>
        <html>

        <body>

        <div>
            <form name="class" action="generatePlan.php" method="post">
           <h1>Fall Quarter</h1>
            <p>
                Classes: <input type="text" name="fallQuarter"/>
            </p>
                <p>
                    Notes: <input type="text" name="notesForFall"
                </p>


                <h1>Winter Quarter</h1>
                <p>
                    Classes: <input type="text" name="winterQuarter"/>
                </p>
                <p>
                    Notes: <input type="text" name="notesForWinter"
                </p>

                <h1>Spring Quarter</h1>
                <p>
                    Classes: <input type="text" name="springQuarter"/>
                </p>
                <p>
                    Notes: <input type="text" name="notesForSpring"
                </p>

                <h1>Summer Quarter</h1>
                <p>
                    Classes: <input type="text" name="summerQuarter"/>
                </p>
                <p>
                    Notes: <input type="text" name="notesForSummer"
                </p>

                <p>
                    <input type="submit" name="submit" value="Generate Class Schedule"/>
                </p>

            </form>

        </div>
        </body>
        </html>
