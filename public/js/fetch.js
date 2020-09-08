let owner = document.getElementById("delete-button");

let sendHttpRequest = (method, url, data) => {
    return fetch(url, {
        method: method,
        body: JSON.stringify(data),
        headers: data ? { 'Content-Type': 'application/json' } : {},
    }).then(response => {
        return response.json();
    }).catch(() => {
        return null;
    });
};

let deleteData = () => {
    sendHttpRequest('DELETE', 'http://homestead.test/api' + window.location.pathname)
        .then(responseData => {
            window.location.href = "http://homestead.test/owners"
        });
};

let sendData = () => {
    sendHttpRequest('POST', 'http://homestead.test/api/owners/')
}

if (owner) {
    owner.addEventListener("click", deleteData)
};
// owner.addEventListener("click", sendData);