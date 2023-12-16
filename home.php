<?php
if ($_SESSION["loggedin"] != true)
{
    header("Location: index.php");
}
if(isset($_COOKIE["has_shopped_with_us"]))
{
    echo '<script>alert("Welcome back!, shopper")</script>';
}
?>

<?=shop_header("Home")?>

<div class="recentlyadded content-wrapper">
    <h1>About Shopping 4 Pets</h2>
    <div class="products">
        <h3>Project: Final Submission</h3>
        <p><b>Purpose:</b> Phase I assignment is to study, understand, and use css,
            html5 elements, responsive design, form, table designs, php, mysql database, security features
            to create a well designed website.</p>
        <h4>Assignment Deliverables:</h4>
        <ol>
            <li>at least 10 HTML pages with adequate contents</li>
            <li>should use css, layout, forms, tables, menus, animation, transition</li>
            <li>the html pages must use responsive CSS design layout (if the screen size is changed, the html elements will rearrange based on the screen space).</li>
                <ul>
                    <li>lower resolution images for smaller screen size and higher resolution images for larger
                    screen size</li>
                    <li>use different css files based on the screen size. For example, the div elements, menu,
                    etc will rearrange to a different layout (by using different css files) based on the screen
                    size</li>
                </ul>
            <li>Create a MySQL table to demonstrate login feature</li>
                <ul>
                    <li>use php script + mysql + session data.</li>
                    <li>allow new user creation</li>
                    <li>validate user by checking their password saved in the database</li>
                </ul>
            <li>Content access control (by using php script + mysql + session data)</li>
                <ul>
                    <li>when the user is logged in then allow the user to access content (check recent
                orders, account information, show special member price)</li>
                </ul>
            <li>Create a MySQL table to demonstrate shopping cart feature (by using javascript + php + mysql + cookies).</li>
                <ul>
                    <li>Add/remove function, total cost calculation, tax calculation</li>
                </ul>
            <li>Create a MySQL table to demonstrate mock checkout</li>
                <ul>
                    <li>The user's credit card, items ordered, shipping address information needs to be
                    saved in the MySQL database (create tables in the MySQL as needed)</li>
                    <li>The user's order history should be saved in the database, so that the user can see it
                    after logging in<li>
                </ul>
            <li>For each form based input data entry</li>
                <ul>
                    <li>incorporate client side (javascript) and server side (php script) form input data
                    validation (if form input data is invalid, then the form would highlight the errors
                    in red and let the user correct the errors).</li>
                    <li>Use php features to prevent script injection attack.</li>
                </ul>
            <li>Bonus (optional): PayPal mock payment feature integration/implementation</li>
            <ul>
                <li><a href="https://demo.paypal.com/us/demo/home">https://demo.paypal.com/us/demo/home</a></li>
            </ul>
            <li>the submission will be a link to the GitHub page.</li>
                <ul>
                    <li>when working as a group, ensure that both of the two participants are included as
                    contributors in the GitHub page</li>
                    <li>we are going to verify the contribution of the each contributors on GitHub</li>
                    <li>In addition, submit both the server side and client side codes on Brightspace.</li>
                </ul>
            You do not need to create a report for this assignment. Rather, create a video and demonstrate
            the following in your video.
        </ol>
        <h4>Video Demo Requirements:</h4>
        <ol>
            <li>Describe an intro about the project</li>
            <li>Describe the project purpose and outline</li>
            <li>For each of the requirements listed in 4 to 8 do the following: (In case you have attempted
            9, then explain 9 as well.)</li>
            • Provide explanation and detailed demo to show that your implementation and
            program code completely fulfills the requirement
            <li>Explain in your video how you have handled the input validation (describe both client side
            and server side input validation). Lastly, describe in your video how your implemented code
            prevents SQL injection attack.</li>
        </ol>
        <p>
            Students are allowed to use either node.js or php to complete their server side
            programming. No other frameworks are allowed. If a framework, library or module is used to
            bypass some of the requirements of this project then the student is going to receive no points
            in that deliverable. In addition, there will be considerable deductions as listed in the rubrics.
            When you are satisfied with your page designs, layout, css designs, javascript code, php script,
            MySQL database, and the demo video, you can submit them on the Brightspace course website.
            The deadline to submit the lab would be December 11 @11:59pm. Thanks.
            Please note, there is no late submission option for this assignment. Please consult the rubrics
            carefully, in order to prepare your submission.
        </p>
        <p>
            Lab problem description has been created by Dr Kafi Rahman. If you have any corrections,
            please contact the author by email. His email address is: kafi@truman.edu
        </p>
    </div>
</div>

<?=shop_footer()?>