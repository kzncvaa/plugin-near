<?php get_header(); ?>
    <main class="wrap">
    <head>
        <title></title>
    </head>
        <script>
                function httpGet(theUrl)
                {
                    let xmlHttp = new XMLHttpRequest();
                    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
                    xmlHttp.send( null );
                    console.log(xmlHttp.responseText);
                }
                function httpPost(theUrl)
                {
                    if(document.getElementsByTagName("input")[0].value != null) {
                        localStorage.setItem('acc_id', document.getElementsByTagName("input")[0].value);
                    }
                    let xmlHttp = new XMLHttpRequest();
                    xmlHttp.open( "POST", theUrl, true ); // false for synchronous request
                    xmlHttp.setRequestHeader("Content-type", "application/json");

                    let data = JSON.stringify({
                        "account_id": localStorage.getItem('acc_id'),
                        "receiver_id": "inotel.pool.f863973.m0",
                        "method": "ping",
                        "params": {},
                        "deposit": 0,
                        "gas": 30000000000000,
                        "meta": "",
                        "callback_url": "http://mysite.ru/near-production/",
                        "network": "testnet"
                    });
                    xmlHttp.send(data);
                    xmlHttp.onload = function () {
                        console.log(xmlHttp.readyState + xmlHttp.response);
                        if(xmlHttp.readyState===4){
                            window.location.href = xmlHttp.response;
                        }
                    }
                    console.log('sending...');
                }

        </script>

        <body>

        <form method="post">
            <input type="text" placeholder="Account ID *" required id="account_id">
            <input type="text">
            <button type="submit" onclick="httpPost('https://rest.nearapi.org/sign_url')">Login</button>
        </form>
        </body>

    </main>
<?php get_footer(); ?>