const axios = require("axios");

function ax_post() {
    axios({
        method: 'post',
        url: 'https://rest.nearapi.org/sign_url',
        data: {
            account_id: "zavodil.testnet",
            receiver_id: "inotel.pool.f863973.m0",
            method: "ping",
            params: {},
            deposit: 0,
            gas: 30000000000000,
            meta: "",
            callback_url: "",
            network: "testnet"
        }
    })
        .then((response) => {
            console.log(response);
        }, (error) => {
            console.log(error);
        });
}