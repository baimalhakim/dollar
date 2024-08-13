<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="grade.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Curs Dollar - BosPanel</title>
    <link rel="icon" href="https://iconape.com/wp-content/files/rf/369356/svg/dollar-1-logo-icon-png-svg.png" type="image/png">
    <style>
   .inp,.result h1{text-align:center}.inp,body{display:flex}*{margin:0;padding:0;box-sizing:border-box;text-decoration:initial;font-family:monospace}body{justify-content:center;align-items:center;min-height:100vh;background:linear-gradient(297deg,rgba(255,0,0,.8),rgba(255,0,0,0) 90.71%),linear-gradient(150deg,rgba(0,255,0,.8),rgba(0,255,0,0) 90.71%),linear-gradient(236deg,rgba(0,0,255,.8),rgba(0,0,255,0) 90.71%)}.calculator-body{background:radial-gradient(rgba(255,255,255,.04),rgba(255,255,255,.9));width:45vw;height:70vh;border-radius:2px}.result{position:absolute;border-bottom-left-radius:20px;border-top-left-radius:20px;height:70vh;width:20vw;background:radial-gradient(rgba(0,0,0,.05),rgba(255,255,255,.5))}.result h1{font-size:35px;margin:20px 0}h2{font-size:25px;margin:14px}button,input{margin:15px;outline:0;font-size:20px}.show{margin-top:85px}.inp{justify-content:center;align-items:center;width:60vw;height:69vh}input{font-weight:600;border-radius:0;height:35px;padding:20px;border:1px solid #fde3e3;background:rgba(253,227,227,.1)}.main{margin-left:60px}button{height:40px;width:225px;font-weight:650;cursor:pointer;background:rgba(0,0,0,.05);border:1px solid #fde3e3}::placeholder{font-weight:600}
    
    /* CSS untuk radio button */
.show input[type="radio"] {
  display: none;
}

.show label {
  display: inline-block;
  margin: 0 10px 10px 0;
  padding: 8px 12px;
  font-size: 16px;
  color: #333;
  background-color: #fff;
  border: 2px solid #333;
  border-radius: 5px;
  cursor: pointer;
}

.show input[type="radio"]:checked + label {
  background-color: #333;
  color: #fff;
}
    </style>
</head>

<body>
    <div class="calculator-body">
        <form>
            <div class="result">
                <h1>Result</h1>
                <div class="show">
                    <input type="radio" id="toDollar" name="conversion" value="toDollar">
                    <label for="toDollar">Rupiah To Dollar (USD)</label>
                    <br>
                    <input type="radio" id="toRupiah" name="conversion" value="toRupiah" checked>
                    <label for="toRupiah">Dollar To Rupiah (IDR)</label>
                    <h2 id="result"></h2>
                </div>
            </div>
            <div class="inp">
                <div class="main">
                    <h1>$1 = Rp. 16.600</h1>
                    <div style="margin-bottom: 40px;"></div>
                    <h1>Jumlah nominal:</h1>
                    <input type="number" id="amount" name="amount" required oninput="convertCurrency()">
                </div>
            </div>
        </form>
    </div>

    <script>
        function convertCurrency() {
            const amount = parseFloat(document.getElementById("amount").value);
            const conversion = document.querySelector('input[name="conversion"]:checked').value;

            if (conversion === "toDollar") {
                const dollarAmount = amount / 16600;
                document.getElementById("result").textContent = `Hasil: $${dollarAmount.toFixed(2)}`;
            } else if (conversion === "toRupiah") {
                const rupiahAmount = amount * 16600;
                document.getElementById("result").textContent = `Hasil: Rp.${rupiahAmount.toFixed(0)}`;
            }
        }

        // Otomatis hitung saat halaman dimuat
        convertCurrency();
    </script>
</body>
</html>