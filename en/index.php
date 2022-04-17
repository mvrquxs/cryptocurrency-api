<?php include '../api/api-home.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpixTo | Crypto API</title>
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/5c85e7a360.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="../assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <header class="spix-nav">
        <div class="navbar">
            <div onclick="window.location.reload();" class="nav-logo">
                <span>Spix<a>To</a></span>
                <span class="api-text-l">API</span>
            </div>
            <div class="nav-useful">
                <div class="language">
                    <i class="fa-solid fa-globe"></i>
                    <span>EN</span>
                    <a class="lang-switch" href="../pt"><i class="fa-solid fa-shuffle"></i></a>
                </div>
                <div class="docs-button">
                    <button onclick="window.location.href='docs'">Docs</button>
                </div>
            </div>
        </div>
    </header>
    <hr class="line">
    <section class="spix-main">
        <div class="s-title">
            <h2>Use our best Cryptocurrency API</h2>
        </div>
        <div class="s-desc">
            <p>Get true results with multiples parameters in real time without limitations. We provide services without authentication</p>
        </div>
        <div class="s-started">
           <button onclick="window.location.href='docs'">Get Started</button>
        </div>
    </section>
    
    <footer class="spix-market">
        <div class="card">
            <div class="top-side">
                <div class="top-left-s">
                    <img src="../assets/images/bitcoin-ic 2.png" alt="Bitcoin logo">
                    <span>BTC</span>
                    <div class="coin-name"><span>Bitcoin</span></div>
                </div>
                <div class="top-right-s">
                    <div class="arround">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                    </div>
                </div>
            </div>
            <hr class="line-02">
            <div class="bottom-side">
                <div class="left-side-b">
                    <span id="price-btc">$<?php print_r($var_last_price_btc); ?></span>
                    <span id="variation-btc"><?php print_r($var_price_percent_btc); ?></span>
                </div>
                <div  class="right-side-b">
                    <?php echo "$btc_img"; ?>
                </div>
            </div>           
        </div>
        <div class="card">
            <div class="top-side">
                <div class="top-left-s">
                    <img src="../assets/images/eth-coin.png" alt="Bitcoin logo">
                    <span>ETH</span>
                    <div id="eth" class="coin-name"><span>Ethereum</span></div>
                </div>
                <div class="top-right-s">
                    <div class="arround">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                    </div>
                </div>
            </div>
            <hr class="line-02">
            <div class="bottom-side">
                <div class="left-side-b">
                    <span id="price-eth">$<?php print_r($var_last_price_eth); ?></span>
                    <span id="variation-eth"><?php print_r($var_price_percent_eth); ?></span>
                </div>
                <div class="right-side-b">
                    <?php echo "$eth_img"; ?>
                </div>
            </div>           
        </div>
        <div class="card">
            <div class="top-side">
                <div class="top-left-s">
                    <img src="../assets/images/bnb-coin.png" alt="BNB logo">
                    <span>BNB</span>
                    <div class="coin-name"><span>Binance Coin</span></div>
                </div>
                <div class="top-right-s">
                    <div class="arround">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                    </div>
                </div>
            </div>
            <hr class="line-02">
            <div class="bottom-side">
                <div class="left-side-b">
                    <span id="price-bnb">$<?php print_r($var_last_price_bnb); ?></span>
                    <span id="variation-bnb"><?php print_r($var_price_percent_bnb); ?></span>
                </div>
                <div class="right-side-b">
                    <?php echo "$bnb_img"; ?>
                </div>
            </div>           
        </div>
    </footer>
</body>
</html>