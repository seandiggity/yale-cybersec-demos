<!DOCTYPE html>
<html>
<head>
  <title>THE INTERNATIONALISTS | CONTACT</title>
</head>
<body style="text-align: center;margin: 0;overflow-x: hidden;">
  <div style="text-align: center;float: center;">
    <a href="index.html"><img src="img/theinternationalists-header.png" style="float: center;border: none;"></a>
    <div style="width: 100%;height: 378px;background-image: url('img/theinternationalists-photo.png'); padding: 16px;text-align: center;margin-bottom: 22px;">
      <h3 style="font-size: 24px;font-family: sans-serif;font-weight: 300;color: #111;">CONTACT THE AUTHORS</h3>
      <form action="">
        <label></label>
        <div id="buggy-app" style="margin: 25px;font-family: sans;">
          <label><?= $_GET['sometext'] ?>
          </label>
        </div><label><input placeholder="Your Name" style="width: 300px;font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;" type="text"><br>
        <input placeholder="Your Email" style="width: 300px;font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;" type="text"><br>
        <textarea name="sometext" placeholder="Enter Your Message" style="height: 80px;width: 300px;font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;">&nbsp;</textarea><br>
        <button style="font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;background-color: #fff;"><label>SUBMIT</label></button></label>
      </form>
      <script>
       window.addEventListener('load', function () {
         new Vue({
           el: '#buggy-app',
           data: {
             counter: 0
           },
           methods: {
             inc: function () {
               ++this.counter;
             },

             dec: function () {
               --this.counter;
             }
           }
         });
       });
      </script> 
      <script src="js/vue.js">
      </script>
    </div>
    <div style="width: 100%;height: 320px;text-align: center;"><img src="img/theinternationalists-footer.png"></div>
    <div style="background-color: #999;width: 100%; height: 80px;"></div>
  </div>
</body>
</html>
