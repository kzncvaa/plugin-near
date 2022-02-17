<?php wp_enqueue_script('near-api-js');
get_header(); ?>
    <main class="wrap">
        <head>
            <title></title>
            <script type="text/javascript"
                    src="https://cdn.jsdelivr.net/npm/near-api-js@0.41.0/dist/near-api-js.min.js"></script>
        </head>
        <script>
            let wallet = {}
            const init = async () => {
                const config = {
                    networkId: "testnet",
                    keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
                    nodeUrl: "https://rpc.testnet.near.org",
                    walletUrl: "https://wallet.testnet.near.org",
                    helperUrl: "https://helper.testnet.near.org",
                    explorerUrl: "https://explorer.testnet.near.org",
                };

                const near = await nearApi.connect(config);
                wallet = new nearApi.WalletConnection(near);
            }
            init()

            const signIn = () => {
                console.log("sfadsf")
                wallet.requestSignIn(
                    "example-contract.testnet", // contract requesting access
                    "Example App", // optional
                    "http://mysite.ru/near-production/", // optional
                    "https://github.com/ozmitelll/app-test-near-2/blob/master/src/App.js" // optional
                );
            };
        </script>

        <body>

        <form method="post">
<!--            <input type="text" placeholder="Account ID *" id="account_id">-->
<!--            <input type="text">-->
            <button onclick="{signIn()}">Login</button>
        </form>

        </body>
    </main>
<?php get_footer(); ?>