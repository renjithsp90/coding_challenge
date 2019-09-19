<!DOCTYPE html>
<html>
  <body>
    <p>The Kaprekar Numbers are : </p>
    <p id="result"></p>
      <script>
          function isKaprekar(start, end) {
              var kaprekarArray = [];
                for(number=start; number<end; number++)
                {
                  numberOfDigits=number.toString().length;
                  squareOfNumber = Math.pow(number,2);
                  rightString = squareOfNumber.toString().slice(-numberOfDigits);
                  leftString = squareOfNumber.toString().slice(0,-numberOfDigits);
                  sumOfString = parseInt(rightString)+parseInt(leftString);
                    if(sumOfString === number)
                    {
                      kaprekarArray.push(number);
                    }
                }
              return kaprekarArray;
          }
      document.getElementById("result").innerHTML = isKaprekar(250, 5000);

      </script>
  </body>
</html>
