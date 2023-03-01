<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <style>
      /* Add your CSS styles here */
      body {
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
        
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
         width: 50%;
         border: 1px solid gray;
         padding: 18px;
         margin:30px auto;
         background-color: #FFC0CB	;
      }
      label {
        font-weight: bold;
        margin-top: 10px;
      }
      input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #FFC0CB	;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=submit] {
        background-color: #C71585	;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
      }
      input[type=submit]:hover {
        background-color: #FF69B4		;
      }
    </style>
  </head>
  <body>
    <h1>Contact Us</h1>
    <form action="/thanks" method="POST">
		@csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" placeholder="Enter your address">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
