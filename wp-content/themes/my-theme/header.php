<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php bloginfo('template_directory') ?>img/favicon.ico" rel="icon">

    <!-- Google Fonts -->

    <!-- Template Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/near-api-js@0.41.0/dist/near-api-js.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <h5>Balance: <p id="balance_acc"></p></h5>
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
</body>
<script>


    const config = {
        networkId: "testnet",
        keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
        nodeUrl: "https://rpc.testnet.near.org",
        walletUrl: "https://wallet.testnet.near.org",
        helperUrl: "https://helper.testnet.near.org",
        explorerUrl: "https://explorer.testnet.near.org",
    };
    const init = async () => {
        const near = await nearApi.connect(config);
        let wallet = new nearApi.WalletConnection(near);

        var account_in_URL = new URL(window.location.href).searchParams.get("account_id");
        if (account_in_URL != null) {
            localStorage.setItem('account_near', account_in_URL);
            console.log(account_in_URL);
            const account = (await near.account(account_in_URL));


            let balance = await account.getAccountBalance();
            document.getElementById("balance_acc").innerHTML = Number(balance.total / 1000000000000000000000000).toFixed(5) + " NEAR";

            if (wallet.isSignedIn()) {
                console.log('walletSign')
            }
        }
        else{
            const account = (await near.account(localStorage.getItem("account_near")));


            let balance = await account.getAccountBalance();
            document.getElementById("balance_acc").innerHTML = Number(balance.total / 1000000000000000000000000).toFixed(5) + " NEAR";
        }
    }
    init()

    function sendTokens() {
        const start = async () => {
            const config1 = {
                networkId: "testnet",
                keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
                nodeUrl: "https://rpc.testnet.near.org",
                walletUrl: "https://wallet.testnet.near.org",
                helperUrl: "https://helper.testnet.near.org",
                explorerUrl: "https://explorer.testnet.near.org",
            };
            const near = await nearApi.connect(config1);
            const account = await near.account(localStorage.getItem('account_near'))
            console.log(await account.getAccountBalance());
            await account.sendMoney(
                "zavodil.testnet", // receiver account
                "10000000000" // amount in yoctoNEAR
            );
        }
        start()
    }







        //
        // const config2 = {
        //     networkId: "testnet",
        //     keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
        //     nodeUrl: "https://rpc.testnet.near.org",
        //     walletUrl: "https://wallet.testnet.near.org",
        //     helperUrl: "https://helper.testnet.near.org",
        //     explorerUrl: "https://explorer.testnet.near.org",
        // };
        // const near = await nearApi.connect(config2);
        // const account = await near.account(localStorage.getItem('account_near'))
        // const response = await account.deployContract(window.open("file:///E:/Programming/OpenServer/domains/mysite.ru/nft_simple.wasm"));
        // console.log(response);

</script>



