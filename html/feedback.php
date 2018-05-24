<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" href = "../css/main.css"/>
  <script src = "../scripts/HTMLIncluder.js"></script>
  <title>SPX Robotics</title>
</head>

<body background = "../res/tb3_img.jpg">

  <h1>SPX Robotics</h1>
  <div w3-include-html = "../html/masterTemplate.html"></div>

  <script type = "text/javascript">
    includeHTML();
  </script>


  <h3>Last 20 Feedback Comments</h3>
  <p>

    <?php include('../php/fb.php'); ?>

  </p>
  <form action="feedbackdone.php" method="post" name="FeedBackForm" id="FeedBackForm">
    <h3>Leave Your Feedback Here:</h3>
    <table class = "entry" width = "50%">
      <tbody>
        <tr>
          <td>Name: </td>
          <td>
            <input name="fbName" type="text" id="fbName" size="50" maxlength="100" required="required">
          </td>
        </tr>
        <tr>
          <td>Email: </td>
          <td>
            <input name="fbEmail" type="text" id="fbName" size="50" maxlength="100" required="required">
          </td>
        </tr>
        <tr>
          <td>Comment: </td>
          <td>
            <textarea style="width: 360px; height: 120px;" name="fbComment" rows="8" maxlength="200" id="fbComment"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            <input type="reset" name="reset" id="reset" value="Reset" </td>
            <td>
              <input type="submit" name="submit" id="submit" value="Submit" </td>
            </tr>
          </tbody>
        </table>
      </form>


</body>
</html>