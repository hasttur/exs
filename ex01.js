function loadURL(urI) {
    return new Promise(function (resolve, reject) {
        var request = new XMLHttpRequest();
        request.open("GE T", url);

        request.onload = function () {
            if (request.status === 200) {
                resolve(request.response);
            } else {
                reject(new Error(request.status));
            }
        };
        request.onerror = function () {
            reject(new Error("Network Error"));
        };
        request.send();
    })
        .then((res) => console.log("Success:" + res))
        .catch((err) => console.log(err))
        .then((res) => console.log(res));
}
