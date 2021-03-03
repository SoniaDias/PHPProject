<?php 
//for each POST I will get the value of name
//array(5) { ["name"]=> string(2) "sd" ["email"]=> string(2) "as" ["reason"]=> string(8) "question" ["message"]=> string(2) "as" ["submit"]=> string(6) "Submit" }
//meaning, in name I am getting the value which is sd
foreach($_POST as $name => $value){
    if('submit' != $name){
    //ucfirst -> first letter as uppercase
    echo "<p><b>".ucfirst($name)."</b> is $value.</p>";
    }
}
?>


<h2>Contact</h2>
   
   <form name="contact" method="POST" >
       <div>
           <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" />
       </div>
       <div>
           <label for="name">Email:</label> <input type="text" name="email" placeholder="Your Email" />
       </div>
       <div>
           <p>Reason for Contact:</p>
           <input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
           <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
           <input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
       </div>
       <div>
           <label for="message">What's your message?</label>
           <textarea name="message"></textarea>
       </div>
       <div><input type="submit" name="submit" value="Submit" /></div>
   </form>
