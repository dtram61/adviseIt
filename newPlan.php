        <!DOCTYPE html>
        <html>

        <body>

        <div>

            <form name="class" action="generatePlan.php" method="post">
                <h1>Test Area  Works! The fall/winter/spring/summer does not work</h1>
                <p>
                    Classes: <input type="text" name="classes"/>
                </p>
                <p>
                    Notes:
                    <textarea id="notes" name="notes" row="4"
                              cols="50">

                    </textarea>
                </p>

                <p>
                    <input type="submit" name="submit" value="Generate Test Class Schedule"/>
                </p>
            </form>



                <form name="class" action="generatePlan.php" method="post">
           <h1>Fall Quarter</h1>
            <p>
                Classes: <input type="text" name="fallQuarter"/>
            </p>
                <p>
                    Notes:
                    <textarea id="notes" name="notesForFall" row="4"
                                     cols="50">

                    </textarea>
                </p>


                <h1>Winter Quarter</h1>
                <p>
                    Classes: <input type="text" name="winterQuarter"/>
                </p>
                <p>
                    Notes: <textarea id="notes"name="notesForWinter"  row="4"
                                     cols="50">

                    </textarea>
                </p>

                <h1>Spring Quarter</h1>
                <p>
                    Classes: <input type="text" name="springQuarter"/>
                </p>
                <p>
                    Notes: <textarea id="notes" name="notesForSpring" row="4"
                                     cols="50">

                    </textarea>
                </p>

                <h1>Summer Quarter</h1>
                <p>
                    Classes: <input type="text" name="summerQuarter"/>
                </p>
                <p>
                    <textarea id="notes" name="notesForSummer" row="4"
                              cols="50">

                    </textarea>
                </p>

                <p>
                    <input type="submit" name="submit" value="Generate Class Schedule"/>
                </p>

            </form>

        </div>
        </body>
        </html>
