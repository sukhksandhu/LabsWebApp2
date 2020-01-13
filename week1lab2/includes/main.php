<main>
    <!--this is my form of booking wedding venue -->
    <h2>Wedding Venue Booking</h2>
    <form id="weddingform" name="weddingform" action="includes/submitted.php" method="POST">

        <!-- here is the field where user enters first name -->
        <div>
            <label for="fname">
                <strong>Enter your first name:</strong>
            </label>
            <input type="text" id="fname" name="fname">
            <div id="msgfname"></div><!--empty div for holding error when user does not enter firstname-->
        </div>
        <!--last name field-->
        <div>
            <label for="lname">
                <strong>Enter your last name:</strong>
            </label>
            <input type="text" id="lname" name="lname">
            <div id="msglname"></div>
        </div>
        <!--email id field-->
        <div>
            <label for="email">
                <strong>Enter your email Id:</strong>
            </label>
            <input type="text" id="email" name="email">
            <div id="msgemail"></div>
        </div>
        <!--drop down list for choosing range about number of guests attending the ceremony-->
        <div>
            <label for="guestnumber">
            <strong>Number of guests attending:</strong>
            </label>
            <select name="guestsnumber" id="guestnumber">
                <option value="">---</option>
                <option  value="100-200">100-200</option>
                <option value="200-400">200-400</option>
                <option value="400-600">400-600</option>
                <option value="600-1000">600-1000</option>
            </select>
            <div id="msgselectguest"></div>

        </div>
        <!--radio buttons for choosing decoration theme-->
        <div>
            <label for="theme">
            <strong>Decoration theme </strong><br>
            </label>

            <input type="radio" name="theme" value="Garden Party"> Garden Party
            <input type="radio" name="theme" value="Rustic">Rustic
            <input type="radio" name="theme" value="Modern">Modern
        </div>
        <div id="msgtheme"></div>

        <!--my button to submit the form-->
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</main>
